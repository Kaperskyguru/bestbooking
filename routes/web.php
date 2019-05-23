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
    return view('index');
})->name('index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/flights', function () {
    return view('flights');
})->name('flight-page');

Route::get('/cars', function () {
    return view('cars');
})->name('car-page');

Route::get('/hotels', function () {
    return view('hotels');
})->name('hotel-page');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/reset', function () {
    return view('resetpassword');
})->name('reset-page');

Route::get('/details', function () {
    return view('details');
})->name('details-page');

Route::get('/car/payment', function () {
    return view('carpayment');
})->name('carpayment-page');

Route::get('/flight/payment', function () {
    return view('flightpayment');
})->name('flightpayment-page');

Route::get('/hotel/payment', function () {
    return view('hotelpayment');
})->name('hotelpayment-page');

Route::get('/user/profile', function () {
    return view('dashboard.user.profile');
})->name('profile-page');

Route::get('/admin', function () {
    return view('dashboard.admin.index');
})->name('admin-page');

Route::get('hoteldata', "HotelsController@getAllHotels");
