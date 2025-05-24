<?php

namespace App\Livewire\Pages\Account;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Laravel\Facades\Image;

class ProfileModal extends Component
{
    use WithFileUploads;

    public $photo;

    public function updateProfilePicture()
    {
        $this->validate([
            'photo' => 'required|image|max:2048',
        ]);

        $userId = Auth::id();

        $img = Image::read($this->photo);

        $size = min($img->width(), $img->height());

        $img->crop($size, $size, intval(($img->width() - $size) / 2), intval(($img->height() - $size) / 2));

        $filename = 'profile_' . $userId . '_' . time() . '.jpg';
        $path = 'profile/' . $filename;

        $img->save(storage_path('app/public/' . $path));

        if (auth()->user()->profile_picture && Storage::disk('public')->exists(auth()->user()->profile_picture)) {
            Storage::disk('public')->delete(auth()->user()->profile_picture);
        }

        auth()->user()->update([
            'profile_photo' => $path,
        ]);

        $this->redirectRoute('account.index');
    }

    public function render()
    {
        return view('livewire.pages.account.profile-modal');
    }
}
