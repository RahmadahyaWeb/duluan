<div>
    <!-- toast center iconed -->
    <div id="{{ $idToast }}" class="toast-box toast-center">
        <div class="in">
            <ion-icon name="checkmark-circle" class="text-success md hydrated"></ion-icon>
            <div class="text">
                {{ $message }}
            </div>
        </div>
        <button type="button" class="btn btn-sm btn-text-light close-button">CLOSE</button>
    </div>
    <!-- toast center iconed -->

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('toast-show', (event) => {
                const data = event[0];

                const toast = document.getElementById(data.id);

                if (!toast) return;

                toastbox(data.id, 3000)

                if (data.redirect && data.redirectTo) {
                    setTimeout(() => {
                        window.location.href = data.redirectTo;
                    }, 1500);
                }
            });
        });
    </script>
</div>
