<?php

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

Route::get('/', 'ShowHome');
Route::post('/', 'EncryptIt' );

Route::get('/confirm/{uuid}', 'ShowConfirm');
Route::post('/confirm/{uuid}', 'SendIt');
Route::get('/success/{uuid}', 'ShowSuccess');
Route::post('/delete/{uuid}', 'DeleteIt');

Route::get('/retrieve', 'ShowRetrieve')->name('retrieve');
Route::post('/retrieve', 'RetrieveIt');

Route::get('/about', 'ShowAbout' );
Route::get('/privacy', 'ShowPrivacy' );
Route::get('/terms', 'ShowTerms' );
