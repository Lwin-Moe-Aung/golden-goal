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

Route::get('/payment/success', function () {
  return view('payment_success');
});

Route::get('/payment/fail', function () {
  return view('payment_fail');
});

Route::get('/download/apk', function () {
    // $filePath = storage_path('app/GoldenGoal.apk');
    // return response()->download($filePath);
    $file = public_path().'/GoldenGoal.apk';
    $filename = "GoldenGoal.apk";
    $headers = [
        'Content-Type' => 'application/vnd.android.package-archive',
        'Content-Disposition' => 'attachment; filename="' . $filename . '"',
    ];
    return response()->download($file, 'GoldenGoal.apk', $headers);
});

