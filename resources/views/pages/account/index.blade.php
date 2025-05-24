<x-layouts.app>
    @include('pages.account.logout-dialog')
    <livewire:pages.account.profile-modal />

    @section('header')
        <x-header :showProfile="false" title="Akun" />
    @endsection

    <div class="section mt-3 text-center">
        <div class="avatar-section">
            <a href="#" data-bs-toggle="modal" data-bs-target="#profile-modal">
                @if (auth()->user()->profile_photo)
                    <img src="{{ '/storage/' . auth()->user()->profile_photo }}" alt="avatar"
                        class="imaged w100 rounded">
                @else
                    <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w100 rounded">
                @endif
                <span class="button">
                    <ion-icon name="camera-outline"></ion-icon>
                </span>
            </a>
        </div>
    </div>

    <div class="listview-title mt-1">Tema</div>
    <ul class="listview image-listview text inset no-line">
        <li>
            <div class="item">
                <div class="in">
                    <div>
                        Mode Gelap
                    </div>
                    <div class="form-check form-switch  ms-2">
                        <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodeSwitch">
                        <label class="form-check-label" for="darkmodeSwitch"></label>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <div class="listview-title mt-1">Pengaturan Profil</div>
    <ul class="listview image-listview text inset">
        <li>
            <a href="#" class="item">
                <div class="in">
                    <div>Change Username</div>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="item">
                <div class="in">
                    <div>Update E-mail</div>
                </div>
            </a>
        </li>
    </ul>

    <div class="listview-title mt-1">Keamanan</div>
    <ul class="listview image-listview text mb-2 inset">
        <li>
            <a href="{{ route('forgot-password.index') }}" class="item">
                <div class="in">
                    <div>Ganti Password</div>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#logout-dialog">
                <div class="in">
                    <div>Log out</div>
                </div>
            </a>
        </li>
    </ul>

</x-layouts.app>
