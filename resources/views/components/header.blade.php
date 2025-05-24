@props([
    'title' => 'Judul',
    'showProfile' => true,
    'showTitle' => true,
    'goBack' => true,
])

<div class="appHeader bg-primary text-light app-container">
    <div class="left">
        @if ($goBack)
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        @else
            <a href="/" class="headerButton fs-5">
                <strong>Duluan</strong>
            </a>
        @endif
    </div>
    <div class="pageTitle">
        @if ($showTitle)
            {{ $title }}
        @endif
    </div>
    <div class="right">
        <a href="app-notifications.html" class="headerButton">
            <ion-icon class="icon" name="notifications-outline"></ion-icon>
            <span class="badge badge-danger">4</span>
        </a>

        @if ($showProfile)
            <a href="{{ route('account.index') }}" class="headerButton">
                <img src="/assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged w32">
            </a>
        @endif
    </div>
</div>
