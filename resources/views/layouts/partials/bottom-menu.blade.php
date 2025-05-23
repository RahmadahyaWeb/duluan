<div class="appBottomMenu app-container">
    <a href="/" class="item {{ Request::is('/') ? 'active' : '' }}">
        <div class="col">
            <ion-icon name="pie-chart-outline"></ion-icon>
            <strong>Overview</strong>
        </div>
    </a>

    <a href="{{ route('account.index') }}" class="item {{ Request::is('account*') ? 'active' : '' }}">
        <div class="col">
            <ion-icon name="person-outline"></ion-icon>
            <strong>Akun</strong>
        </div>
    </a>
</div>
