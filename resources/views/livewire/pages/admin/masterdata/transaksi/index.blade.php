<div class="d-flex flex-column flex-column-fluid">
    <x-slot:title>Ivra Beauty - Masterdata Transaksi</x-slot:title>
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Masterdata Transaksi</h1>
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
                    <li class="breadcrumb-item text-muted">Transaksi</li>
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
                    <div class="d-flex align-items-center position-relative my-1 gap-3">
                        <div class="d-flex flex-col align-items-center border border-primary rounded">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input
                                type="text"
                                data-kt-customer-table-filter="search"
                                class="form-control form-control-solid w-250px ps-12"
                                placeholder="Cari Transaksi"
                                wire:model.live.debounce.100ms="search" />
                        </div>
                        <div class="form-group position-relative mb-0 rounded border border-primary">
                            <input type="text" class="form-control form-control-solid pe-10" placeholder="Pilih rentang tanggal" id="tanggal" name="tanggal" wire:model="tanggal" />
                            <i class="bi bi-calendar3 position-absolute top-50 end-0 translate-middle-y me-3 text-muted"></i>
                        </div>
                    </div>
                    <button class="btn btn-success btn-sm" @if(!$data) disabled @endif onclick="exportReport()"> <i class="bi bi-file-earmark-excel-fill"></i> Export Laporan</button>
                </div>
                <div class="table-responsive" id="table-responsive">
                    <table id="kt_datatable_zero_configuration" class="table table-bordered gy-5">
                        <thead>
                            <tr class="fw-semibold fs-6 text-muted">
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>No Telp</th>
                                <th>Email</th>
                                <th>Nama Layanan</th>
                                <th>Tanggal & Waktu</th>
                                <th>Metode Pembayaran</th>
                                <th>Nominal Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data) < 1) <tr>
                                <td colspan="6" class="text-center">Tidak ada data</td>
                                </tr>
                                @else

                                @foreach ( $data as $index => $transaksi)

                                <tr wire:key="transaksi-{{ $transaksi->id }}">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $transaksi->pelanggan?->nama }}</td>
                                    <td>{{ $transaksi->pelanggan?->no_telp }}</td>
                                    <td>{{ $transaksi->pelanggan?->user?->email }}</td>
                                    <td>{{ $transaksi->reservasi?->layanan?->nama_layanan }}</td>
                                    <td>{{ \Carbon\Carbon::parse($transaksi->tanggal_transaksi)->translatedFormat('d F Y') }}</td>
                                    <td>{{ $transaksi->metode_bayar }}</td>
                                    <td>Rp {{ number_format($transaksi->nominal_pembayaran  , 0, ',', '.') }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="7" class="text-end"><strong>Total Pendapatan:</strong></td>
                                    <td><strong>Rp {{ number_format($data->sum('nominal_pembayaran'), 0, ',', '.') }}</strong></td>
                                </tr>
                                @endif
                        </tbody>
                    </table>
                </div>

            </div>


        </div>
    </div>
</div>
@push('scripts')
<script data-navigate-once src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
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

        $('#tanggal').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            },
            opens: 'left'
        }, function(start, end, label) {
            @this.set('tanggal', start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });

        

    });

    function exportReport() {
        var table = document.getElementById("table-responsive").getElementsByTagName("table")[0];
        var wb = XLSX.utils.table_to_book(table, {
            sheet: "Laporan Keuangan"
        });


        var ws = wb.Sheets["Laporan Keuangan"];
        var cols = [];
        var range = XLSX.utils.decode_range(ws["!ref"]);
        for (var C = range.s.c; C <= range.e.c; ++C) {
            var maxWidth = 10; // Minimum width
            for (var R = range.s.r; R <= range.e.r; ++R) {
                var cell = ws[XLSX.utils.encode_cell({
                    r: R
                    , c: C
                })];
                if (cell && cell.v) {
                    maxWidth = Math.max(maxWidth, cell.v.toString().length);
                }
            }
            cols.push({
                wch: maxWidth
            });
        }
        ws["!cols"] = cols;


        for (var R = range.s.r; R <= range.e.r; ++R) {
            for (var C = range.s.c; C <= range.e.c; ++C) {
                var cellAddress = XLSX.utils.encode_cell({
                    r: R
                    , c: C
                });
                if (!ws[cellAddress]) continue;
                if (!ws[cellAddress].s) ws[cellAddress].s = {};
                ws[cellAddress].s.alignment = {
                    horizontal: "center"
                    , vertical: "center"
                };
            }
        }

        var dateInput = document.getElementById("tanggal").value || null;
        var dateRange = "";
        // if (dateInput) {
        //     var dates = dateInput.split(' to ').map(date => {
        //     var parsedDate = new Date(date.trim());
        //     if (isNaN(parsedDate.getTime())) {
        //         return null;
        //     }
        //     return parsedDate.toLocaleDateString('id-ID', { 
        //         day: 'numeric', 
        //         month: 'long', 
        //         year: 'numeric' 
        //     });
        //     }).filter(date => date !== null);
        //     dateRange = dates.length === 2 ? ' - ' + dates.join(' - ') : "";
        // }
        
        XLSX.writeFile(wb, `Laporan Keuangan - ${dateRange}.xlsx`);
    }

</script>
@endpush