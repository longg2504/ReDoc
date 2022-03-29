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
    return view('client.index');
});
Route::get('/list-profile', function () {
    return view('client.list-profile');
});

Route::get('/setting', function () {
    return view('client.setting');
});
Route::get('/medical-check-up', function () {
    return view('client.medical-check-up');
});
