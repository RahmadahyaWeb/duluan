<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class NotificationBox extends Component
{
    public $idNotif;
    public $userName;
    public $userAvatar;
    public $timeAgo;
    public $title;
    public $message;

    public function mount()
    {
        $this->idNotif = 'notification-' . rand(1, 1000);
    }

    public $redirect = false;
    public $redirectTo = null;

    #[On('showNotification')]
    public function showNotification($data)
    {
        $this->userName = $data['userName'] ?? 'System';
        $this->timeAgo = $data['timeAgo'] ?? 'just now';
        $this->title = $data['title'] ?? 'Notification';
        $this->message = $data['message'] ?? '';
        $this->redirect = $data['redirect'] ?? false;
        $this->redirectTo = $data['redirectTo'] ?? null;

        $this->dispatch('notification-show', [
            'id' => $this->idNotif,
            'redirect' => $this->redirect,
            'redirectTo' => $this->redirectTo,
        ]);
    }

    public function render()
    {
        return view('livewire.notification-box');
    }
}
