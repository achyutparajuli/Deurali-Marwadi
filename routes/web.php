<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ben', function () {
    return view('web.index');
});

Route::get('review-qr-link', function () {
    $url = env('REVIEW_URL');
    return Redirect::to($url);
});

Route::get('menu', function () {
    $pathToFile = public_path('Deurali Marwadi Menu.pdf');
    return response()->file($pathToFile);
});

Route::get('connect', function () {
    return view('connect');
});
