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
    
    Route::get('/login', 'authController@login')->name('login');
    Route::post('/login', 'authController@loginAttempt');
    Route::get('/logout', 'authController@logout')->name('logout');

    //Authentication
        Route::middleware('userAuth')->group(function(){

            Route::get('/', 'dashboardController@index');
        });
