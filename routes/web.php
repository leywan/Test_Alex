<?php

Route::get('/', function(){
    return view('pages/welcome');
})->name('home');

Route::get('/about', function(){
    return view('pages/about');
})->name('about');