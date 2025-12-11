<div class="d-flex flex-column flex-column-fluid">
    <x-slot:title>Ivira Beauty - Tambah User</x-slot:title>
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Masterdata User</h1>
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
                    <li class="breadcrumb-item text-muted">User</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <div class="d-flex items-center">
                {{-- <input type="text" class="form-control form-control-solid" placeholder="Search User Name" id="search" autocomplete="off" wire:model.live.dobonce.300ms="search" /> --}}
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
                <form class="row g-9 mb-8" wire:submit.prevent="{{ isset($userId) ? 'update' : 'store' }}">

                    <div class="d-flex flex-column col-md-6 mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Nama</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid @error('nama') is-invalid @enderror" placeholder="Masukan nama" id="nama" autocomplete="off" wire:model="nama" />
                    </div>

                    <div class="d-flex flex-column col-md-6 mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Email</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify a target email for future usage and reference">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <input type="email" class="form-control form-control-solid @error('email') is-invalid @enderror" placeholder="Enter email" id="email" autocomplete="off" wire:model="email" />
                    </div>

                    <div class="d-flex flex-column col-md-6 mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Password</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify a password for user account">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <input type="password" class="form-control form-control-solid @error('password') is-invalid @enderror" placeholder="Enter password" id="password" autocomplete="off" wire:model="password" />
                    </div>

                    <div class="d-flex flex-column col-md-6 mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">No Telp</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify a phone number for user contact">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid @error('no_telp') is-invalid @enderror" placeholder="Enter phone number" id="no_telp" autocomplete="off" wire:model="no_telp" />
                    </div>

                    <div class="d-flex flex-column col-md-6 mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Role</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify a phone number for user contact">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                       
                        <select name="selectedRole" id="selectedRole" wire:model="selectedRole" class="form-select form-select-solid @error('selectedRole') is-invalid @enderror" data-control="select2" data-placeholder="Pilih Role" onchange="@this.set('selectedRole', this.value)">
                            <option value="">Pilih Role</option>
                            <option value="guest">Pelanggan</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end gap-3">
                        <a type="button" class="btn btn-light" href="{{ route('admin.user') }}">Kembali</a>
                        <button type="submit" class="btn btn-primary">
                            {{ isset($userId) ? 'Update' : 'Simpan' }}
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>