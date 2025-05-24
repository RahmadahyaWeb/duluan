<x-layouts.auth>

    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
        </div>
    </div>

    <div class="section mt-2 text-center">
        <h1>Yuk, bikin password baru</h1>
        <h4>
            Perhatiin Sekitar, jangan sampai orang lain tau!
        </h4>
    </div>

    <div class="section mb-5 p-2">
        <div class="card">
            <div class="card-body pb-1">

                <livewire:auth.reset-password-form :token="$token" :email="$email" />

            </div>
        </div>
    </div>

</x-layouts.auth>
