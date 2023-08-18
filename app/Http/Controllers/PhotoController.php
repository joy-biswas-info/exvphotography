<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{

        // get Users Photos 
        public function index(){
            if(Auth::user()->role!=='Admin'){
                return view('dashboard',['photos' => auth()->user()->photos()->get()]);
            }else{
                return view('admin.dashboard',['photos' =>Photo::get()]);
            };
        }


        // Save photo 
        public function storePhoto(Request $request){
            $formField = $request->validate([
                'user_id'=>'required',
                'link'=>'string|nullable'
            ]);
            DB::beginTransaction();

            try {
                if ($request->hasFile('photo')) {
                    $photoPath = $request->file('photo')->store('photo', 'public');
                    $formField['photo'] = $photoPath;
                }
        
                Photo::create($formField);
        
                DB::commit();
                return redirect()->back()->with('message', 'Photo Uploaded successfully');
            } catch (\Exception $e) {
                DB::rollback();
                return redirect()->back()->with('error', 'An error occurred while uploading the photo.');
            }
        }


        // Show Photos for user
        public function manage(){
        return view('photos.manage',['photos' => auth()->user()->photos()->get()]);
        }


        public function show(User $user){
            $userId=$user->id;
            dd([
                'photos'=>Photo::where('user_id', $userId)->get()
            ]);
            return view('admin.user',[
                'photos'=>Photo::where('user_id', $userId)->get()
            ]);
        }

        // Delete Photo Or Link 
        public function distroy(Photo $photos){
            if($photos->link && Storage::disk('public')->exists($photos->photo)){
                Storage::disk('public')->delete($photos->photo);
            }    
            $photos->delete();
            return redirect('/')->with('message', 'Listing deleted successfully');
        }



}
