<?php

namespace App\Livewire\Auth;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Livewire\Component;

class ResetPasswordForm extends Component
{
    public $token, $email, $password, $password_confirmation;

    public function mount($token, $email)
    {
        $this->token = $token;
        $this->email = $email;
    }

    protected function rules()
    {
        return [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|confirmed',
        ];
    }

    protected function validationAttributes()
    {
        return [
            'email' => 'email'
        ];
    }

    public function resetPassword()
    {
        $this->validate();

        $password = $this->password;

        // Reset password
        $status = Password::reset(
            $this->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            $this->dispatch('showToast', [
                'message' => 'Password berhasil diubah',
                'success' => true,
                'redirect' => true,
                'redirectTo' => route('login'),
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
        return view('livewire.auth.reset-password-form');
    }
}
