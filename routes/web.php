<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/eview-qr-link', [HomeController::class, 'review']);

Route::get('menu', [HomeController::class, 'menu'])->name('menu');

Route::get('connect', [HomeController::class, 'connect'])->name('connect');


// send email
Route::post('/send-message', 'App\Http\Controllers\EmailController@send')->name('send-message');
