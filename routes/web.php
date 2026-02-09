<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificatesController;

/** Main views routes */
Route::view('/', 'welcome')->name('welcome');
Route::view('privacy', 'policy');
Route::view('terms', 'terms');

Route::get('certificates', [CertificatesController::class, 'index']);
Route::post('certificates', [CertificatesController::class, 'show'])
    ->middleware('throttle:5,1')
    ->name('certificates');

/** Section re-routes */
Route::get('schedule', static function () {
    return redirect()->route('welcome')->withFragment('#schedule');
});
Route::get('curriculum', static function () {
    return redirect()->route('welcome')->withFragment('#curriculum');
});
Route::get('workflow', static function () {
    return redirect()->route('welcome')->withFragment('#workflow');
});
Route::get('enroll', static function () {
    return redirect()->route('welcome')->withFragment('#enroll');
});
Route::get('certification', static function () {
    return view('welcome');
});

/** Logged-in routes */
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
