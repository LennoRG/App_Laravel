<?php


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('/portafolio', 'PortafolioController@index')->name('portafolio');

Route::post('contact', 'MessagesController@store');

