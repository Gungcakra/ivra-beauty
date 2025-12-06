<div id="kt_app_sidebar" class="app-sidebar flex-column bg-primary-default" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <a href="{{ route('admin.dashboard') }}">
            <div class="d-flex app-sidebar-logo-default align-items-center">
                <img alt="Logo" src="{{ asset('assets/media/logos/default-dark.svg') }}" class="h-25px app-sidebar-logo-default" />
                <p class="app-sidebar-logo-default text-white fw-bold fs-2"></p>
            </div>
            <img alt="Logo" src="{{ asset('assets/media/logos/default-small.svg') }}" class="h-20px app-sidebar-logo-minimize" />
        </a>
        <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
    </div>

    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
            <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
                <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                @php
                $menus = json_decode(file_get_contents(resource_path('views/layouts/admin/partials/menu.json')), true);
                @endphp
                @foreach ($menus as $menu)
                    @php
                    $hasSubMenu = !empty($menu['subMenu']) && count($menu['subMenu']) > 0;
                    $isActive = request()->is(ltrim($menu['url'], '/'));
                    $isSubMenuActive = false;
                    
                    if ($hasSubMenu) {
                        foreach ($menu['subMenu'] as $subMenu) {
                            if (request()->is(ltrim($subMenu['url'], '/'))) {
                                $isSubMenuActive = true;
                                $isActive = true;
                                break;
                            }
                        }
                    }
                    @endphp

                    @if ($hasSubMenu)
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ $isActive ? 'show' : '' }}">
                        <span class="menu-link {{ $isActive ? 'active' : '' }}">
                            <span class="menu-title d-flex gap-2">
                                <i class="{{ $menu['icon'] }}"></i>
                                {{ $menu['title'] }}
                            </span>
                            <span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                            @foreach ($menu['subMenu'] as $subMenu)
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is(ltrim($subMenu['url'], '/')) ? 'active' : '' }}" href="{{ $subMenu['url'] }}" wire:navigate.prevent>
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">{{ $subMenu['title'] }}</span>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @else
                    <div class="menu-item">
                        <a class="menu-link {{ $isActive ? 'active' : '' }}" href="{{ $menu['url'] }}" wire:navigate>
                            <span class="menu-title d-flex gap-2">
                                <i class="{{ $menu['icon'] }}"></i>
                                {{ $menu['title'] }}
                            </span>
                        </a>
                    </div>
                    @endif
                @endforeach

                </div>
            </div>
        </div>
    </div>
</div>