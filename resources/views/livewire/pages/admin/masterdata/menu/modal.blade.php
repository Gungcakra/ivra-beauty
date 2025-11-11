{{-- MENU --}}
<div class="modal fade" tabindex="-1" id="menuModal" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{$menuId ? 'Edit' : 'Add'}} Menu</h3>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body">
                <div class="row g-9 mb-8">
                    <div class="d-flex flex-column col-md-6 mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Name</span>
                        </label>
                        @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Name" wire:model="name" />
                    </div>
                    <div class="d-flex flex-column col-md-6 mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Order</span>
                        </label>
                        @error('order') <div class="alert alert-danger">{{ $message }}</div> @enderror
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Order" wire:model="order" />
                    </div>
                </div>
                <div class="row g-9 mb-8">
                    <div class="d-flex flex-column col-md-6 mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Route</span>
                        </label>
                        @error('route') <div class="alert alert-danger">{{ $message }}</div> @enderror
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Route" wire:model="route" />
                    </div>
                    <div class="d-flex flex-column col-md-6 mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Icon</span>
                        </label>
                        @error('icon') <div class="alert alert-danger">{{ $message }}</div> @enderror
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Icon" wire:model="icon" />
                    </div>
                </div>
                <div class="row g-9 mb-8">
                    <div class="d-flex flex-column col-md-6 mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span>Parent Menu</span>
                        </label>
                        <div class="custom-select2 position-relative" id="customParentMenuSelect">
                            <input type="text" class="form-control form-control-solid rounded" placeholder="Search Parent Menu..." id="parentMenuSearchInput" autocomplete="off"
                                value="{{ optional($menus->firstWhere('id', $parrent_id))->name ?? '' }}">
                            <input type="hidden" wire:model="parrent_id" id="parentMenuHiddenInput" />
                            <ul class="custom-select2-dropdown rounded shadow-lg" style="display: none; position: absolute; z-index: 1050; width: 100%; background: #fff; border: 1px solid #e3e6ea; max-height: 220px; overflow-y: auto; margin-top: 2px; padding: 0;">
                                <li class="custom-select2-option px-4 py-2" data-id="" style="cursor: pointer; transition: background 0.2s; @if(empty($parrent_id)) background: #e7f3ff; font-weight: 600; @endif">
                                    <i class="ki-duotone ki-menu fs-5 me-2 text-primary"></i> Parent Menu
                                </li>
                                @foreach ($menus as $menu)
                                <li class="custom-select2-option px-4 py-2" data-id="{{ $menu->id }}" style="cursor: pointer; transition: background 0.2s; @if($menu->id == $parrent_id) background: #e7f3ff; font-weight: 600; @endif">
                                    <i class="ki-duotone ki-menu fs-5 me-2 text-primary"></i> {{ $menu->name }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <style>
                            .custom-select2 .form-control-solid {
                                border: 1px solid #e3e6ea;
                                background: #f8fafc;
                                transition: box-shadow 0.2s;
                            }
                            .custom-select2 .form-control-solid:focus {
                                box-shadow: 0 0 0 2px #0d6efd33;
                                border-color: #0d6efd;
                                background: #fff;
                            }
                            .custom-select2-dropdown {
                                box-shadow: 0 4px 16px rgba(13,110,253,0.08);
                                border-radius: 0.15rem;
                            }
                            .custom-select2-option {
                                border-bottom: 1px solid #f1f1f1;
                            }
                            .custom-select2-option:last-child {
                                border-bottom: none;
                            }
                            .custom-select2-option:hover {
                                background: #f0f8ff;
                                color: #0d6efd;
                            }
                        </style>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const selectWrapper = document.getElementById('customParentMenuSelect');
                                const searchInput = selectWrapper.querySelector('#parentMenuSearchInput');
                                const dropdown = selectWrapper.querySelector('.custom-select2-dropdown');
                                const options = dropdown.querySelectorAll('.custom-select2-option');
                                const hiddenInput = selectWrapper.querySelector('#parentMenuHiddenInput');

                                // Show dropdown on input focus
                                searchInput.addEventListener('focus', function () {
                                    dropdown.style.display = 'block';
                                    searchInput.select();
                                });

                                // Hide dropdown when clicking outside
                                document.addEventListener('mousedown', function (e) {
                                    if (!selectWrapper.contains(e.target)) {
                                        dropdown.style.display = 'none';
                                    }
                                });

                                // Filter options
                                searchInput.addEventListener('input', function () {
                                    const val = searchInput.value.toLowerCase();
                                    options.forEach(function (opt) {
                                        if (opt.textContent.toLowerCase().includes(val)) {
                                            opt.style.display = '';
                                        } else {
                                            opt.style.display = 'none';
                                        }
                                    });
                                });

                                // Select option
                                options.forEach(function (opt) {
                                    opt.addEventListener('mousedown', function (e) {
                                        e.preventDefault();
                                        searchInput.value = opt.textContent.trim();
                                        hiddenInput.value = opt.getAttribute('data-id');
                                        dropdown.style.display = 'none';
                                        // Livewire update
                                        if (window.Livewire) {
                                            window.Livewire.find(document.querySelector('[wire\\:model="parrent_id"]').closest('[wire\\:id]').getAttribute('wire:id'))
                                                .set('parrent_id', opt.getAttribute('data-id'));
                                        }
                                    });
                                });

                                // Preselect if value exists
                                @if($parrent_id)
                                    const selectedOpt = Array.from(options).find(opt => opt.getAttribute('data-id') == "{{ $parrent_id }}");
                                    if (selectedOpt) {
                                        searchInput.value = selectedOpt.textContent.trim();
                                    }
                                @endif
                            });
                        </script>
                    </div>
                    <div class="d-flex flex-column col-md-6 mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span>Permission</span>
                        </label>
                        <div class="custom-select2 position-relative" id="customPermissionSelect">
                            <input type="text" class="form-control form-control-solid rounded " placeholder="Search Permission..." id="permissionSearchInput" autocomplete="off"
                                value="{{ optional($permissions->firstWhere('id', $permission_id))->name ?? '' }}">
                            <input type="hidden" wire:model="permission_id" id="permissionHiddenInput" />
                            <ul class="custom-select2-dropdown rounded shadow-lg" style="display: none; position: absolute; z-index: 1050; width: 100%; background: #fff; border: 1px solid #e3e6ea; max-height: 220px; overflow-y: auto; margin-top: 2px; padding: 0;">
                                @foreach ($permissions as $permission)
                                <li class="custom-select2-option px-4 py-2" data-id="{{ $permission->id }}" style="cursor: pointer; transition: background 0.2s; @if($permission->id === $permission_id) background: #e7f3ff; font-weight: 600; @endif">
                                    <i class="ki-duotone ki-shield fs-5 me-2 text-primary"></i> {{ $permission->name }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <style>
                            .custom-select2 .form-control-solid {
                                border: 1px solid #e3e6ea;
                                background: #f8fafc;
                                transition: box-shadow 0.2s;
                            }
                            .custom-select2 .form-control-solid:focus {
                                box-shadow: 0 0 0 2px #0d6efd33;
                                border-color: #0d6efd;
                                background: #fff;
                            }
                            .custom-select2-dropdown {
                                box-shadow: 0 4px 16px rgba(13,110,253,0.08);
                                border-radius: 0.15rem;
                            }
                            .custom-select2-option {
                                border-bottom: 1px solid #f1f1f1;
                            }
                            .custom-select2-option:last-child {
                                border-bottom: none;
                            }
                            .custom-select2-option:hover {
                                background: #f0f8ff;
                                color: #0d6efd;
                            }
                        </style>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const selectWrapper = document.getElementById('customPermissionSelect');
                                const searchInput = selectWrapper.querySelector('#permissionSearchInput');
                                const dropdown = selectWrapper.querySelector('.custom-select2-dropdown');
                                const options = dropdown.querySelectorAll('.custom-select2-option');
                                const hiddenInput = selectWrapper.querySelector('#permissionHiddenInput');

                                // Show dropdown on input focus
                                searchInput.addEventListener('focus', function () {
                                    dropdown.style.display = 'block';
                                    searchInput.select();
                                });

                                // Hide dropdown when clicking outside
                                document.addEventListener('mousedown', function (e) {
                                    if (!selectWrapper.contains(e.target)) {
                                        dropdown.style.display = 'none';
                                    }
                                });

                                // Filter options
                                searchInput.addEventListener('input', function () {
                                    const val = searchInput.value.toLowerCase();
                                    options.forEach(function (opt) {
                                        if (opt.textContent.toLowerCase().includes(val)) {
                                            opt.style.display = '';
                                        } else {
                                            opt.style.display = 'none';
                                        }
                                    });
                                });

                                // Select option
                                options.forEach(function (opt) {
                                    opt.addEventListener('mousedown', function (e) {
                                        e.preventDefault();
                                        searchInput.value = opt.textContent.trim();
                                        hiddenInput.value = opt.getAttribute('data-id');
                                        dropdown.style.display = 'none';
                                        // Livewire update
                                        if (window.Livewire) {
                                            window.Livewire.find(document.querySelector('[wire\\:model="permission_id"]').closest('[wire\\:id]').getAttribute('wire:id'))
                                                .set('permission_id', opt.getAttribute('data-id'));
                                        }
                                    });
                                });

                                // Preselect if value exists
                                @if($permission_id)
                                    const selectedOpt = Array.from(options).find(opt => opt.getAttribute('data-id') == "{{ $permission_id }}");
                                    if (selectedOpt) {
                                        searchInput.value = selectedOpt.textContent.trim();
                                    }
                                @endif
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
                <button class="btn btn-primary" wire:click="{{ $menuId ? 'update' : 'store' }}">{{ $menuId ? 'Update' : 'Store' }}</button>
            </div>
        </div>
    </div>
</div>

