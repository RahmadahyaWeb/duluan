<?php

use App\Http\Controllers\Auth\ResetPasswordController;

Route::get('/forgot-password', [ResetPasswordController::class, 'index'])->name('forgot-password.index');
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
