<div>
    <form wire:submit.prevent="register">
        <x-input-basic name="name" type="name" label="Nama Lengkap" placeholder="Kasih tahu kami nama lengkap kamu" wire:model="name" />

        <x-input-basic name="tenantName" type="tenantName" label="Nama Toko" placeholder="Nama toko kamu" wire:model="tenantName" />

        <x-input-basic name="email" type="email" label="E-mail" placeholder="Masukkan email kamu" wire:model="email" />

        <x-input-basic name="password" type="password" label="Password" placeholder="Rahasia kamu aman di sini"
            wire:model="password" />

        <x-input-basic name="password_confirmation" type="password" label="Konfirmasi Password"
            placeholder="Ulangi password kamu yang tadi" wire:model="password_confirmation" />

        <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
    </form>
</div>
