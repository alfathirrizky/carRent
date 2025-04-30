<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cars', function () {
    return view('listCars');
});
Route::get('/location', function () {
    return view('location');
});
Route::get('/contact us', function () {
    return view('contactUs');
});
Route::get('/car detail', function () {
    return view('carDetail');
});
Route::get('/booking', function () {
    return view('bookingPage');
});
