<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\checknameController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/check/{name}',[checknameController::class,'checkExist'])->name('index');
Route::get('/search/users',[checknameController::class,'searchU']);
Route::get('/list',[checknameController::class,'listUsers']);

Route::get('/delete/{delete}',[checknameController::class,'deleteUser']);
Route::get('/add/{add}',[checknameController::class,'addUser']);