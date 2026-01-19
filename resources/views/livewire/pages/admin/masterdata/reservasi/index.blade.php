<div class="d-flex flex-column flex-column-fluid">
    <x-slot:title>Ivira Beauty - Masterdata Reservasi</x-slot:title>
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Masterdata Reservasi</h1>
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
                <div class="d-flex w-full gap-2">
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input
                            type="text"
                            data-kt-customer-table-filter="search"
                            class="form-control form-control-solid w-250px ps-12"
                            placeholder="Cari Reservasi"
                            wire:model.live.debounce.100ms="search" />
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                        <thead>
                            <tr class="fw-semibold fs-6 text-muted">
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>No Telp</th>
                                <th>Email</th>
                                <th>Nama Layanan</th>
                                <th>Harga</th>
                                <th>Tanggal & Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data) < 1) <tr>
                                <td colspan="6" class="text-center">Tidak ada data</td>
                                </tr>
                                @else

                                @foreach ( $data as $index => $reservasi)

                                <tr wire:key="reservasi-{{ $reservasi->id }}">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $reservasi->pelanggan?->nama }}</td>
                                    <td>{{ $reservasi->pelanggan?->no_telp }}</td>
                                    <td>{{ $reservasi->pelanggan?->email }}</td>
                                    <td>
                                        <ul class="list-unstyled mb-0">
                                            @foreach ($reservasi->layanans as $layanan)
                                            <li>{{ $layanan->nama_layanan }} - Rp {{ number_format($layanan->harga, 0, ',', '.') }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>Rp {{ number_format($reservasi->layanans->sum('harga'), 0, ',', '.') }}</td>
                                    <td class="align-middle">{{ \Carbon\Carbon::parse($reservasi->tanggal)->translatedFormat('d F Y ') . \Carbon\Carbon::parse($reservasi->waktu)->translatedFormat('H:i') }}</td>
                                </tr>
                                @endforeach
                                @endif
                        </tbody>
                    </table>
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


    });
</script>
@endpush