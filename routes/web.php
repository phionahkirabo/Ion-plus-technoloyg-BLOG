<?php
use App\Http\Controllers\authController;
use App\Http\Controllers\postController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[authController::class,'index'])->name('dashboard');
Route::get('/home',function(){return redirect('dashboard');});
Route::get('allblogs',[postController::class,'index']);
Route::get('addpost',[postController::class,'addposts']);
Route::post('save-post',[postController::class,'savePost']);
Route::get('edit-post/{id}',[postController::class,'editPost']);
Route::post('update-post/{id}',[postController::class,'updatepost']);
Route::get('delete-post/{id}',[postController::class,'delete']);

