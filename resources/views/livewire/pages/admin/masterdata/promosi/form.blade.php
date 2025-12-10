<div class="d-flex flex-column flex-column-fluid">
    <x-slot:title>Ivra Beauty - Tambah Promosi</x-slot:title>
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Masterdata Promosi</h1>
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
                    <li class="breadcrumb-item text-muted">Promosi</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <div class="d-flex items-center">
                {{-- <input type="text" class="form-control form-control-solid" placeholder="Search Promosi Name" id="search" autocomplete="off" wire:model.live.dobonce.300ms="search" /> --}}
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Secondary button-->
                {{-- <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a> --}}
                <!--end::Secondary button-->
                <!--begin::Primary button-->
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
                <form class="d-flex flex-column mb-8" wire:submit.prevent="{{ isset($promosiId) ? 'update' : 'store' }}">

                    <div class="d-flex flex-column col-md-6 mb-8 fv-row" wire:ignore>
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Gambar Promosi</span>
                        </label>
                        <!--end::Label-->
                        <input type="file" class="dropify" id="gambarPromosi" wire:model="gambarPromosi" accept="image/*">
                    </div>
                    


                    <div class="d-flex justify-content-end gap-3">
                        <a type="button" class="btn btn-light" href="{{ route('admin.promosi') }}">Kembali</a>
                        <button type="submit" class="btn btn-primary">
                            {{ isset($promosiId) ? 'Update' : 'Simpan' }}
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@push('scripts')
<script src="{{ asset('assets/js/dropify/dropify.min.js') }}"></script>
<script>
    $(function(){
        $('#gambarPromosi').dropify({
                    messages: {
                        'default': '<span style="font-size:2rem;"><i class="fa fa-image me-2"></i>Upload Gambar Promosi di sini</span>',
                        'replace': '<span style="font-size:1.2rem;"><i class="fa fa-sync-alt me-2"></i>Ganti Gambar Promosi</span>',
                        'remove': '<span style="font-size:1rem;"><i class="fa fa-trash me-2"></i>Hapus Gambar Promosi</span>',
                        'error': '<span style="font-size:1.2rem;"><i class="fa fa-exclamation-triangle me-2"></i>File tidak valid untuk Gambar Promosi.</span>'
                    },
                    icons: {
                        'error': '<i class="fa fa-exclamation-triangle"></i>',
                        'remove': '<i class="fa fa-trash"></i>',
                        'replace': '<i class="fa fa-sync-alt"></i>',
                        'clear': '<i class="fa fa-trash"></i>',
                        'default': '<i class="fa fa-image"></i>',
                        'file': '<i class="fa fa-upload"></i>'
                    }
                }).on('dropify.afterClear', function(event, element) {
                    @this.set('gambarPromosi', null);
                });
    });
</script>
@endpush