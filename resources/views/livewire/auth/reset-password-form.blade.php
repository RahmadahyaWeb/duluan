<div>
    <form wire:submit.prevent="resetPassword">
        <x-input-basic name="email" type="email" label="E-mail" placeholder="Masukkan email kamu" wire:model="email" disabled />

        <x-input-basic name="password" type="password" label="Password" placeholder="Rahasia kamu aman di sini"
            wire:model="password" />

        <x-input-basic name="password_confirmation" type="password" label="Konfirmasi Password"
            placeholder="Ulangi password kamu yang tadi" wire:model="password_confirmation" />

        <button type="submit" class="btn btn-primary btn-block btn-lg">Minta Link Reset</button>
    </form>
</div>
