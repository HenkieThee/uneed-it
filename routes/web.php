<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/overons', function () {
    return view('overons');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/bezorgdiensten', function () {
    return view('bezorgdiensten');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::post('/register', [RegistrationController::class, 'login'])->name('registration.login');
Route::post('/logout', [RegistrationController::class, 'logout'])->name('registration.logout');
Route::post('/update-info', [RegistrationController::class, 'updateUserInfo'])->name('updateUserInfo');
