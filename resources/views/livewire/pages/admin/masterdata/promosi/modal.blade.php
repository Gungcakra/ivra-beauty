<div class="modal fade" tabindex="-1" id="promosiModal" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Gambar Promosi</h3>

                <!--begin::Close-->
                <div class="btn btn btn-sm btn-icon  btn btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">

                @if ($gambarPromosi)
                <div class="d-flex justify-content-center">
                    <img src="{{ Storage::url($gambarPromosi) }}" alt="Gambar Promosi" style="max-width: 100%; height: auto;">
                </div>
                @endif

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal">Tutup</button>

            </div>
        </div>
    </div>
</div>