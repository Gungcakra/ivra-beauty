<div class="d-flex flex-column flex-column-fluid">
    <x-slot:title>Ivira Beauty - Reservasi Hari Ini</x-slot:title>
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Reservasi Hari Ini</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Reservasi</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <div class="d-flex items-center">
                {{-- <input type="text" class="form-control form-control-solid" placeholder="Search Layanan Name" id="search" autocomplete="off" wire:model.live.dobonce.300ms="search" /> --}}
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Secondary button-->
                {{-- <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a> --}}
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <!-- <a class="btn btn-sm fw-bold btn-primary" href="{{ route('admin.layanan.create' ) }}">Tambah Layanan</a> -->
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="card p-5">
                <div class="row">
                    <!-- Left Column: Transaction Details -->
                    <div class="col-lg-7">
                        <h3 class="mb-4 fw-bold">Detail Transaksi</h3>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Pelanggan</label>
                            <p class="text-dark">{{ $nama }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nomor Telepon</label>
                            <p class="text-dark">{{ $no_telp }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Tanggal Reservasi</label>
                            <p class="text-dark">{{ \Carbon\Carbon::parse($reservasi->tanggal)->translatedFormat('d F Y') }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Jam Reservasi</label>
                            <p class="text-dark">{{ \Carbon\Carbon::parse($reservasi->waktu)->format('H:i') }}</p>
                        </div>


                    </div>

                    <!-- Right Column: Price & Payment -->
                    <div class="col-lg-5">
                        <div class="card p-4">
                            <h3 class="mb-4 fw-bold">Ringkasan Pembayaran</h3>

                            <div class="mb-3 d-flex justify-content-between flex-column">
                                @foreach($reservasi->layanans as $layanan)
                                <div class="mb-3 d-flex flex-wrap justify-content-between align-items-center border-bottom pb-3">
                                    <span class="fw-semibold text-gray-700">{{ $layanan->nama_layanan }}</span>
                                    <span class="fw-bold text-primary fs-6">Rp {{ number_format($layanan->harga ?? 0, 0, ',', '.') }}</span>
                                </div>
                                @endforeach
                            </div>

                            <hr class="my-3" />

                            <div class="mb-4 d-flex justify-content-between align-items-center">
                                <span class="fw-bold fs-5">Total Pembayaran</span>
                                <span class="fw-bold fs-5 text-primary">Rp {{ number_format($reservasi->harga ?? 0, 0, ',', '.') }}</span>
                            </div>

                            <div class="m-0">
                                <!--begin::Title-->
                                <h3 class="fw-bold text-gray-800 mb-5">Metode Pembayaran</h3>
                                <!--end::Title-->
                                <!--begin::Radio group-->
                                <div class="d-flex flex-equal gap-5 gap-xxl-9 px-0 mb-12" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                    <!--begin::Radio-->
                                    <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4 {{ $metode_bayar === 'cash' ? 'active' : '' }}" data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="method" wire:click="setMetodeBayar('cash')" value="cash" wire:model="metode_bayar" />
                                        <!--end::Input-->
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-dollar fs-2hx mb-2 pe-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="fs-7 fw-bold d-block">Cash</span>
                                        <!--end::Title-->
                                    </label>
                                    <!--end::Radio-->
                                    <!--begin::Radio-->
                                    <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4 {{ $metode_bayar === 'transfer' ? 'active' : '' }}" data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="method" wire:click="setMetodeBayar('transfer')" value="transfer" wire:model="metode_bayar" />
                                        <!--end::Input-->
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-credit-cart fs-2hx mb-2 pe-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="fs-7 fw-bold d-block">Transfer</span>
                                        <!--end::Title-->
                                    </label>
                                    <!--end::Radio-->

                                </div>

                                <button type="button" class="btn btn-primary w-100 fw-bold" wire:click="confirmTransaction">
                                    <i class="ki-duotone ki-check fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    Simpan Transaksi
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        $(function() {
            Livewire.on('show-modal', () => {
                var modalEl = document.getElementById('layananModal');
                var existingModal = bootstrap.Modal.getInstance(modalEl);
                if (!existingModal) {
                    var myModal = new bootstrap.Modal(modalEl, {});
                    myModal.show();
                } else {
                    existingModal.show();
                }
            });
            Livewire.on('hide-modal', () => {
                var modalEl = document.getElementById('layananModal');
                var modal = bootstrap.Modal.getInstance(modalEl);
                if (modal) {
                    modal.hide();
                    modal.dispose();
                }
                document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
                modalEl.style.display = 'none';
                modalEl.setAttribute('aria-hidden', 'true');
                modalEl.removeAttribute('aria-modal');
                modalEl.removeAttribute('role');
                document.body.classList.remove('modal-open');
                document.body.style.overflow = '';
                document.body.style.paddingRight = '';
            });
            Livewire.on('confirm-delete', (message) => {
                Swal.fire({
                    title: message,
                    showCancelButton: true,
                    cancelButtonText: "Iya",
                    cancelButtonText: "Tidak",
                    icon: "warning"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch('deleteLayanan');
                    } else {
                        Swal.fire("DiBatalkan", "Batal Menghapus.", "info");
                    }
                });
            });

            Livewire.on('confirm-transaction', (message) => {
                Swal.fire({
                    title: message,
                    showCancelButton: true,
                    cancelButtonText: "Iya",
                    cancelButtonText: "Tidak",
                    icon: "warning"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch('transaction');
                    } else {
                        Swal.fire("DiBatalkan", "Transaksi Dibatalkan.", "info");
                    }
                });
            });



        });
    </script>
    @endpush