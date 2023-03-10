<?php

use App\Http\Controllers\dbdemo;
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

Route::get('/ping', function () {
    return view('welcome');
});

// index db Route.
Route::any("/index",[dbdemo::class,"index"]);

// first Row.
Route::any("/first-row",[dbdemo::class,"singleRow"]);

// By id.
Route::any("/id-who",[dbdemo::class,"findByid"]);