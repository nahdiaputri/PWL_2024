<?php

use App\Http\Controllers\WelcomeComtroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
// Route::get('/hello', function() {
//     return 'Hello World';

// });

Route::get('/', function() {
    echo 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM: 2341720015 - Nama: Nahdia Putri Safira';

});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Pos ke-'. $postId." Komentar ke-: ".$commentId;
});
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

// Route::get('/user/profile', function (){
// });

Route::resource('photos', PhotoController::class);


Route::get('/hello', [WelcomeComtroller::class,'hello']);

Route::get('/greeting', [WelcomeComtroller::class,'greeting']);

  
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
//     return view('welcome');
// });