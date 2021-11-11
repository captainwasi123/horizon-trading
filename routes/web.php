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

            Route::get('/', 'dashboardController@index')->name('dashbord');

            //Properties
            Route::prefix('properties')->group(function(){

                Route::get('/', 'propertyController@index')->name('properties.all');

                Route::get('add', 'propertyController@add')->name('properties.add');
                Route::post('add', 'propertyController@addSubmit');

                Route::get('delete/{id}', 'propertyController@propertyDelete')->name('properties.delete');

                //Qoutation
                Route::prefix('qoutation')->group(function(){

                    Route::get('/{id}', 'propertyController@qoutation')->name('properties.qoutation');
                    Route::post('/add', 'propertyController@qoutationAdd')->name('properties.qoutation.add');

                    Route::get('delete/{id}', 'propertyController@qoutationDelete')->name('properties.qoutation.delete');
                });
            });


            //Settings
            Route::prefix('settings')->group(function(){

                //Phone
                Route::prefix('phone')->group(function(){

                    Route::get('/', 'settingsController@phone')->name('settings.phone');
                    Route::post('/add', 'settingsController@phoneInsert')->name('settings.phone.add');
                });

                //Areas
                Route::prefix('areas')->group(function(){

                    Route::get('/', 'settingsController@areas')->name('settings.areas');
                    Route::post('/add', 'settingsController@areaInsert')->name('settings.areas.add');
                });

                //Source
                Route::prefix('source')->group(function(){

                    Route::get('/', 'settingsController@source')->name('settings.source');
                    Route::post('/add', 'settingsController@sourceInsert')->name('settings.source.add');
                });
            });
        });
