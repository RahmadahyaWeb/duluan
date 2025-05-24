<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function index()
    {
        return view('pages.auth.forgot-password');
    }

    public function showResetForm($token, Request $request)
    {
        $email = $request->query('email');

        return view('pages.auth.reset-password', compact(
            'token',
            'email'
        ));
    }
}
