<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\Middlewaredemo; 
use App\Http\Controllers\writingControllers; 

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

Route::get('/index', function () {
    return view('welcome');
});


// Example - Basic.
Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});


// Example - Methods.
Route::match(['get', 'options'], '/methods', function () {
    return '<p>Testing Methods.</p>';
});
 
// Redirect.
Route::redirect('/redirect', '/hello');


//Return in view.
Route::get('/index-demo', function () {
    return view('index', ['name' => 'Adnane']);
});


// Middleware auth check.
Route::middleware([Middlewaredemo::class])->group(function() {
    Route::get('demo', [Middlewaredemo::class,'demo']);
}); 


// CSRF token Protection.
Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
    $token = csrf_token();
    return csrf_token(); 
});


// ------ AUTH CSRF DEMO ------------
// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/dash', function () {
//     return view('dashboard');
// });
// ----------------------------------
// Route::get('/user/{id}', [writingControllers::class, 'show']);


Route::get('/controller', writingControllers::class);