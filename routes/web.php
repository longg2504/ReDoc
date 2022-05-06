<?php

use App\Http\Controllers\DarkModeController;
use App\Libs\RouteLib;
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

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
// Admin test route

Route::prefix('ad')->namespace('App\Http\Controllers\Admin')->group(function () {

    Route::prefix('auth')->namespace('Auth')->group(function () {
        Route::get('/login', 'AuthController@login')->name('admin.auth.login');
        Route::post('login', 'AuthController@postLogin')->name('admin.auth.postLogin');
        Route::get('/logout', 'AuthController@logout')->name('admin.auth.logout');
    });

    Route::middleware('admin')->group(function () {

        Route::get('/', 'DashboardController@index')->name('admin.dashboard.index');
        RouteLib::generateRoute('settings', 'SettingsController', 'settings');
        RouteLib::generateRoute('role', 'RoleController', 'role');
        RouteLib::generateRoute('users', 'UsersController', 'users');
        RouteLib::generateRoute('administrators', 'AdministratorsController', 'administrators');
        RouteLib::generateRoute('categories', 'CategoriesController', 'categories');
        RouteLib::generateRoute('drugstores', 'DrugstoresController', 'drugstores');
        RouteLib::generateRoute('medicines', 'MedicinesController', 'medicines');
        RouteLib::generateRoute('diseases', 'DiseasesController', 'diseases');
        RouteLib::generateRoute('symptoms', 'SymptomsController', 'symptoms');
        RouteLib::generateRoute('prescriptions', 'PrescriptionsController', 'prescriptions');
        RouteLib::generateRoute('posts', 'PostsController', 'posts');
        RouteLib::generateRoute('tags', 'TagsController', 'tags');
        RouteLib::generateRoute('post-tags', 'PostTagsController', 'post-tags');
        RouteLib::generateRoute('disease-symptoms', 'DiseaseSymptomsController', 'disease-symptoms');
    });
});

// Web
Route::namespace('App\Http\Controllers\Client')->group(function () {


    Route::get('/medical-check-up', 'MedicalCheckController@index')->name('client.medical-check-up');
    Route::get('/sign-up', 'AuthController@register')->name('client.register');
    Route::post('/sign-up', 'AuthController@postRegister')->name('client.postRegister');
    Route::get('/login', 'AuthController@login')->name('client.login');
    Route::post('/login', 'AuthController@postLogin')->name('client.postLogin');
    Route::get('/logout', 'AuthController@logout')->name('client.logout');
    Route::get('/', 'HomeController@index')->name('client.index');
    Route::get('/category/{category_id}', 'HomeController@getByCategory')->name('client.category');
    Route::get('/post/{post_id}', 'HomeController@getByPost')->name('client.post');

    Route::get('/diseases/{id}', 'MedicalCheckController@showDisease')->name('client.showDisease');

    Route::post('/matrix', 'MatrixController@index')->name('client.matrix');

    Route::get('/setting', 'AuthController@setting')->name('client.setting');
});


Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');
