<?php

Route::get('/', function(){
    return view('pages/welcome');
});

Route::get('/about', function(){
    return view('pages/about');
});