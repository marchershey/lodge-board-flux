<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/guest', '/guest/dashboard');

Route::name('guest.')->prefix('guest')->middleware(['guest'])->group(function () {
    Route::name('dashboard')->get('/dashboard', App\Http\Pages\Guest\Dashboard::class);
});
