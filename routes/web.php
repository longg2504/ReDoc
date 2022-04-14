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

Route::get('/setting/change-phone', function () {
    return view('client.setting.change-phone');
});

Route::get('/setting/change-password', function () {
    return view('client.setting.change-password');
});
Route::get('/medical-check-up', function () {
    return view('client.medical-check-up');
});
Route::get('/login', function () {
    return view('client.login');
});
Route::get('/sign-up', function () {
    return view('client.sign-up');
});
