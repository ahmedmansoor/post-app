<?php

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

// Route::get('/', "PostController@mansoorTwo")->name("mansoorTwo");
// Route::get('/{id}', "PostController@mansoor")->name("mansoor");
// Route::get('/{id}/{name}', "PostController@mansoorThree")->name("mansoorThree");

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', "PostController@index")->name("home");
Route::post('store', "PostController@store")->name("store");