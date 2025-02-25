<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/host', '/host/dashboard');

Route::name('host.')->prefix('host')->middleware(['guest'])->group(function () {
    Route::name('dashboard')->get('/dashboard', App\Http\Pages\Host\Dashboard::class);
    Route::name('register')->get('/register', App\Http\Pages\Auth\Register::class);
});
