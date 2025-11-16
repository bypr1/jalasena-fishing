<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Additional SEO-friendly routes
Route::get('/home', function () {
    return redirect('/');
});

Route::get('/tentang', function () {
    return redirect('/#about');
});

Route::get('/hadiah', function () {
    return redirect('/#prizes');
});

Route::get('/daftar', function () {
    return redirect('/#register');
});

Route::get('/galeri', function () {
    return redirect('/#gallery');
});

Route::get('/kontak', function () {
    return redirect('/#contact');
});
