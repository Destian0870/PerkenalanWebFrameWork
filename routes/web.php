<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [WelcomeController::class, 'home']);
Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
    return 'World';
});
Route::get('/Welcome', function () {
    return 'Selamat Datang';
});
Route::get('/about', [WelcomeController::class, 'about']);
Route::get('/user/{Destian}', function ($name) {
    return 'Nama saya '.$name;
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId.' Komentar ke-'.$commentId;
});
Route::get('/articles/{id}', [WelcomeController::class, 'article']);
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);

Route::get('/greeting', [WelcomeController::class,
'greeting']);


