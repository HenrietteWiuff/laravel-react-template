<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\OpretbrugerController;

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
    return view('app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/hallo', function () {
    return view('hallo');
});

// Route::get('/auth/nybruger', function () {
//     return view('/auth/nybruger');
// });
Route::get('opretbruger', [App\Http\Controllers\OpretbrugerController::class, 'opretbruger']);
Route::post('create', [App\Http\Controllers\OpretbrugerController::class, 'create'])->name('auth.create');

Route::post('opretbruger', [App\Http\Controllers\OpretbrugerController::class, 'post']);