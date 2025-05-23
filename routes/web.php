<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index')->middleware('auth');

require __DIR__ . '/auth/login.php';
require __DIR__ . '/auth/register.php';
require __DIR__ . '/account.php';

Route::middleware('auth')->group(function () {
    Route::get('logout', function () {
        Auth::logoutCurrentDevice();

        return redirect('/login');
    })->name('logout');
});
