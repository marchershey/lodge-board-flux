<?php

use Illuminate\Support\Facades\Route;

Route::name('auth.')->middleware(['guest'])->group(function () {
    Route::name('login')->get('/login', App\Http\Pages\Auth\Login::class);
    Route::name('register')->get('/register', App\Http\Pages\Auth\Register::class);
});

// Route::get('/auth', function () {
//     return view('welcome');
// });
