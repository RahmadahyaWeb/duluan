<div>
    <form wire:submit.prevent="login">
        <x-input-basic name="email" type="email" label="E-mail" placeholder="Masukkan email kamu" wire:model="email" />

        <x-input-basic name="password" type="password" label="Password" placeholder="Rahasia kamu aman di sini"
            wire:model="password" />

        <div class="form-links my-2">
            <div>
                <a href="{{ route('register') }}">Daftar Sekarang</a>
            </div>
            <div>
                <a href="{{ route('forgot-password.index') }}" class="text-muted">Lupa Password?</a>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block btn-lg">Log in</button>
    </form>
</div>
