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

Route::get('/login_or_signup', function () {
    return view('login_or_signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/zakelijk', function () {
    return view('zakelijk');
});

Route::get('/bestellen', function () {
    return view('bestellen');
});

Route::get('/webshop', function () {
    return view('webshop');
});

Route::post('/register', [RegistrationController::class, 'register'])->name('registration.register');
Route::post('/login', [RegistrationController::class, 'login'])->name('registration.login');
Route::post('/logout', [RegistrationController::class, 'logout'])->name('registration.logout');
Route::post('/update-info', [RegistrationController::class, 'updateUserInfo'])->name('updateUserInfo');
Route::post('/submit-defect', [RegistrationController::class, 'submitDefectForm'])->name('submit.defect');

Route::get('/verzoeken', [RegistrationController::class, 'recieveDefects'])->name('recieve.defects');
