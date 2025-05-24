<div>
    <form wire:submit.prevent="sendResetLink">
        <x-input-basic name="email" type="email" label="E-mail" placeholder="Masukkan email kamu" wire:model="email" />

        <button type="submit" class="btn btn-primary btn-block btn-lg">Minta Link Reset</button>
    </form>
</div>
