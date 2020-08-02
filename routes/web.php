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

route::get('/msg', function () {
    return "This is another page";
});

route::get('/mypage', function () {
    return "This is another second page";
});

route::get("/Home", "HomeController@Index");
route::get("/About", "HomeController@About");
route::get("/Contact", "HomeController@Contact");

