<div>
    <div id="{{ $idNotif }}" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <strong>{{ $userName }}</strong>
                    <span>{{ $timeAgo }}</span>
                </div>
                <a href="#" class="close-button" wire:click.prevent="close">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">{{ $title }}</h3>
                    <div class="text">
                        {{ $message }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('notification-show', (event) => {
                const data = event[0];

                const notif = document.getElementById(data.id);

                if (!notif) return;

                notification(data.id, 3000)

                if (data.redirect && data.redirectTo) {
                    setTimeout(() => {
                        window.location.href = data.redirectTo;
                    }, 1500);
                }
            });
        });
    </script>

</div>
