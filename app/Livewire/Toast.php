<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Toast extends Component
{
    public $idToast;
    public $message;
    public $success = true;

    public function mount()
    {
        $this->idToast = 'toast-' . rand(1, 1000);
    }

    public $redirect = false;
    public $redirectTo = null;

    #[On('showToast')]
    public function showToast($data)
    {
        $this->message = $data['message'];
        $this->success = $data['success'];
        $this->redirect = $data['redirect'] ?? false;
        $this->redirectTo = $data['redirectTo'] ?? null;

        $this->dispatch('toast-show', [
            'id' => $this->idToast,
            'redirect' => $this->redirect,
            'redirectTo' => $this->redirectTo,
        ]);
    }

    public function render()
    {
        return view('livewire.toast');
    }
}
