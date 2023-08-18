<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     if(auth()->user()->role!=='Admin'){
//         return view('dashboard');
//     }else{
//         return view('admin.dashboard');
//     }
// })->middleware('auth');

Route::get('/', [PhotoController::class,'index'])->middleware('auth');



Route::get('/dashboard', [PhotoController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/save-photo',[PhotoController::class,'storePhoto']);
Route::get('/all-users/{user}',[UserController::class,'show']);
Route::get('/photos/manage',[PhotoController::class,'manage']);


Route::middleware(['auth','sudhuadminallowed'])->group(function () {
    Route::get('/admin', [PhotoController::class,'index'])->name('admin');
    Route::get('/all-users', [UserController::class,'index'])->name('users');
});

require __DIR__.'/auth.php';
