<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('insert',function(){
    $user = User::first();
    $post = Post::first();
    // dd($user);
    $user->post()->comment()->create([
        'comment_body'  => 'Java is truley OOP Lanaguage'
    ]);
});
Route::post('home',function(Request $request){
    // $file = $request->file;
    // $filename = 'Ravi.'.$file->extension();
    // Storage::makeDirectory('laravel');
    // Storage::putFileAs('laravel',$file,$filename);
    // Storage::copy('laravel/Ravi.png','public/uploads/Ravi.png');
    // Storage::move('laravel/Ravi.png','public/uploads/Ravi.png');
    // Storage::files('public');//return all files without sub directories
    // Storage::allFiles('public');//return all files  with sub directories
    // Storage::download('public/uploads/Ravi.png');//return all files  with sub directories
    // return Storage::deleteDirectory('public/uploads');//return all files  with sub directories





});
