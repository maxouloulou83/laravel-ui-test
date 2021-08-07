<?php

use App\Http\Controllers\PostControllers;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostControllers::class, 'index']);


//Navbar
Route::get('/register', function (){
    return view('auth/register');
})->name('register');

Route::get('/login', function (){
    return view('auth/login');
})->name('login');

Route::get('/', function (){
    return view('home');
})->name('home');

//register
//Route::get('/register', 'RegisterController@create');
//Route::post('register', 'RegisterController@store');


