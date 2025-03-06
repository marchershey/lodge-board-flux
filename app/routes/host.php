<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/host', '/host/dashboard');

Route::name('host.')->prefix('host')->middleware(['guest'])->group(function () {
    Route::name('dashboard')->get('/dashboard', App\Http\Pages\Host\Dashboard::class);
    Route::name('calendar')->get('/calendar', App\Http\Pages\Host\Calendar::class);
    Route::name('settings')->get('/settings', App\Http\Pages\Host\Settings::class);
});
