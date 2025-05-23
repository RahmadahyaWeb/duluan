<?php

use App\Http\Controllers\AccountController;

Route::middleware('auth')->group(function () {
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
});
