<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Component;

class ForgotPasswordForm extends Component
{
    public $email;

    protected function rules()
    {
        return [
            'email' => 'required|email|exists:users,email',

        ];
    }

    protected function validationAttributes()
    {
        return [
            'email' => 'email'
        ];
    }

    public function sendResetLink()
    {
        $this->validate();

        $status = Password::sendResetLink(
            $this->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            $this->dispatch('showToast', [
                'message' => 'Link reset password berhasil dikirim ke email kamu',
                'success' => true
            ]);
        } else {
            $this->dispatch('showToast', [
                'message' => 'Ada gangguan nih, coba lagi nanti ya',
                'success' => false
            ]);
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password-form');
    }
}
