<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index')->middleware('auth');

require __DIR__ . '/auth/login.php';
require __DIR__ . '/auth/register.php';
