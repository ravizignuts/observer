<?php

use App\Http\Controllers\FilestorageController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
Route::get('/delete',function(){
    Post::whereId(9)->first()->delete();
    dd('done');
});
Route::controller(FilestorageController::class)->group(function(){
    Route::get('index','index');
    Route::post('upload','upload');
    Route::get('delete/{path}','delete');
});
Route::get('/home', function () {
    return Storage::makeDirectory('images');
});
