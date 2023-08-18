<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Photo;


use Illuminate\Http\Request;

class UserController extends Controller
{

    // Get All User List For Admin 

    public function index(){
            if(Auth::user()->role!=='Admin'){
                abort(403);
            };
            return view('admin.all_user_list',[
            'users'=>User::orderBy('id')->get(),
        ]);
    }

    // Get Single User and User's Photos, Links
    public function show(User $user){
        $userId=$user->id;
        return view('admin.user',[
            'user'=>$user,'photos'=>Photo::where('user_id', $userId)->get()
        ]);
    }
}
