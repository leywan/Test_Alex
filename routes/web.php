<?php

Route::get('/', function(){
    return view('pages/welcome');
})->name('home');

Route::get('/permanence', [\App\Http\Controllers\PermController::class, 'create']);

Route::post('/permanence', [\App\Http\Controllers\PermController::class, 'store'])->name('permanence.Store');

Route::get('/permlist', [\App\Http\Controllers\PermController::class, 'show']);

Route::get('/site', [\App\Http\Controllers\SiteController::class, 'create']);

Route::post('/site', [\App\Http\Controllers\SiteController::class, 'store'])->name('site.Store');

Route::get('/sitelist', [\App\Http\Controllers\SiteController::class, 'show']);


Route::get('/about', function(){
    return view('pages/about');
})->name('about');
