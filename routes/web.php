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

Route::get('/forum', function(){
    return view('forum');
});
