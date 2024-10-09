<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/content', function () {
    return view('content');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');  // Route untuk halaman contact

Route::post('/contact/submit', function () {
    // Proses form submit
    // Di sini kamu bisa menyimpan data form ke database atau mengirimkan email
    return back()->with('success', 'Pesan berhasil dikirim!');
})->name('contact.submit');