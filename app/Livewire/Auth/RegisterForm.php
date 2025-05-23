<?php

namespace App\Livewire\Auth;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RegisterForm extends Component
{
    public $name, $email, $password, $password_confirmation, $tenantName;

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'tenantName' => 'required'
        ];
    }

    protected function validationAttributes()
    {
        return [
            'tenantName' => 'nama toko',
            'name' => 'nama lengkap',
            'email' => 'email'
        ];
    }

    public function register()
    {
        $this->validate();

        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
            ]);

            Tenant::create([
                'user_id' => $user->id,
                'name' => $this->tenantName,
            ]);

            $user->assignRole('seller');

            Auth::login($user);

            DB::commit();

            $this->dispatch('showNotification', [
                'timeAgo' => 'just now',
                'title' => 'Registrasi Berhasil',
                'message' => 'Selamat datang, ' . $user->name . '! Akun kamu telah berhasil dibuat.',
                'redirect' => true,
                'redirectTo' => route('index'),
            ]);
        } catch (\Exception $e) {
            $this->dispatch('showNotification', [
                'userName' => $user->name,
                'timeAgo' => 'just now',
                'title' => 'Registrasi Gagal',
                'message' => $e->getMessage(),
            ]);

            DB::rollBack();

            throw $e;
        }
    }

    public function render()
    {
        return view('livewire.auth.register-form');
    }
}
