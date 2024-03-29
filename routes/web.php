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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/groups', [App\Http\Controllers\GroupController::class, 'showAll']);
Route::get('/group/create', [App\Http\Controllers\GroupController::class, 'create']);
Route::post('/group/create/check', [App\Http\Controllers\GroupController::class, 'create_check']);

