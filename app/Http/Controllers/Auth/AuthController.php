<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginPage()
    {
        return view('pages.auth.login');
    }

     public function showRegisterPage()
    {
        return view('pages.auth.register');
    }
}
