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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/msg', function () {
    return "This is another page";
});

Route::get('/mypage', function () {
    return "This is another second page";
});

Route::get("/Home", "HomeController@Index");
Route::get("/About", "HomeController@About");
Route::get("/Contact", "HomeController@Contact");

