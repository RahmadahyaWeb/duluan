<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{
    public $email, $password;

    protected function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    // protected function messages()
    // {
    //     return [];
    // }

    protected function validationAttributes()
    {
        return [
            'email' => 'email'
        ];
    }

    public function login()
    {
        $this->validate();

        if (Auth::attempt($this->only('email', 'password'))) {

            $this->dispatch('showNotification', [
                'timeAgo' => 'just now',
                'title' => 'Login Berhasil',
                'message' => 'Selamat datang, ' . Auth::user()->name . '!',
                'redirect' => true,
                'redirectTo' => route('index'),
            ]);
        } else {
            $this->addError('email', 'Email atau password salah.');
        }
    }

    public function render()
    {
        return view('livewire.auth.login-form');
    }
}
