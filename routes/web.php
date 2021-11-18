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

Auth::routes();

Route::get('/home', [App\Http\Controllers\MessagesController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\MessagesController::class, 'create'])->name('create');
Route::get('sent', [App\Http\Controllers\MessagesController::class, 'sent'])->name('sent-messages');
Route::post('send', [App\Http\Controllers\MessagesController::class, 'send'])->name('send');
Route::get('/read/{id}', [App\Http\Controllers\MessagesController::class, 'read'])->name('read');

