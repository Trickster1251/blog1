<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/soon', function () {
    return view('soon');
})->name('soon');

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');