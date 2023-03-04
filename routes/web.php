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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/terms-condition', function () {
    return view('terms_condition');
});

Route::get('/privacy-policy', function () {
    return view('privacy_policy');
});

Route::get('/download', function () {
    return view('download');
});
