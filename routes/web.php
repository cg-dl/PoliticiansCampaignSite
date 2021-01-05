<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [UserController::class, 'sign_in']);
Route::get('/sign_up_user', [UserController::class, 'sign_up_user']);
Route::get('/sign_up_candidate', [UserController::class, 'sign_up_candidate']);
Route::get('/home', [UserController::class, 'home']);
Route::get('/candidates', [UserController::class, 'candidates']);
Route::get('/candidates1', [UserController::class, 'candidates1']);
Route::get('/candidates2', [UserController::class, 'candidates2']);
Route::get('/candidates3', [UserController::class, 'candidates3']);
Route::get('/candidates4', [UserController::class, 'candidates4']);

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/vote', function () {
    return view('vote');
});

Route::get('/campaigns', function () {
    return view('campaigns');
});

Route::get('/forum/post/{id}', function () {
    return view('forum-post');
});

Route::get('/campaigns/{id}', function () {
    return view('campaigns-placeholder');
});
