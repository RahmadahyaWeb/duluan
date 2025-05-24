<div>
    <div wire:ignore.self class="modal fade action-sheet" id="profile-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <div class="iconbox mb-3">
                            @if ($photo)
                                <img src="{{ $photo->temporaryUrl() }}" alt="Preview"
                                    style="width: 100px; height: 100px; object-fit: cover; object-position: center;" class="rounded imaged">
                            @endif
                        </div>

                        <form wire:submit.prevent="updateProfilePicture">
                            <div class="mb-3">
                                <div class="custom-file-upload" id="fileUpload1">
                                    <input type="file" id="fileuploadInput" accept=".png, .jpg, .jpeg"
                                        wire:model="photo">
                                    <label for="fileuploadInput">
                                        <span>
                                            <strong>
                                                <ion-icon wire:ignore.self name="arrow-up-circle-outline"></ion-icon>
                                                <i>Upload a Photo</i>
                                            </strong>
                                        </span>
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
