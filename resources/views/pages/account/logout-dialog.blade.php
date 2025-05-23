<div class="modal fade dialogbox" id="logout-dialog" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keluar dari Akun?</h5>
            </div>
            <div class="modal-body">
                Kamu akan keluar dari akun ini. Apakah kamu yakin?
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">Batal</a>
                    <a href="{{ route('logout') }}" class="btn btn-text-primary">
                        Keluar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
