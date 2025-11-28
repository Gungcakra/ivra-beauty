<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

$allMenus = Menu::orderBy('order')->get();

$groupedMenus = $allMenus->groupBy('parrent_id');

$userPermissions = Auth::user()->permissions->pluck('id');

?>

<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <a href="{{ route('dashboard') }}">
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
                <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

                    @foreach ($groupedMenus[null] ?? [] as $menu)
                    @php
                    $children = $groupedMenus[$menu->id] ?? collect();
                    $filteredChildren = $children->filter(fn($child) => $userPermissions->contains($child->permission_id));
                    @endphp

                    @if ($filteredChildren->isNotEmpty())
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs($filteredChildren->pluck('route')->toArray()) ? 'show' : '' }}">
                        <span class="menu-link {{ request()->routeIs($filteredChildren->pluck('route')->toArray()) ? 'active' : '' }}">
                            <span class="menu-icon">
                                <i class="{{ $menu->icon }} fs-2"></i>
                            </span>
                            <span class="menu-title">{{ $menu->name }}</span>
                            <span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                            @foreach ($filteredChildren as $child)
                            @if ($child->route)
                            <div class="menu-item">
                                <a class="menu-link {{ request()->routeIs($child->route) ? 'active' : '' }}" href="{{ route($child->route) }}" wire:navigate.prevent>
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">{{ $child->name }}</span>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    @elseif ($userPermissions->contains($menu->permission_id) && $menu->route)
                    <div class="menu-item">
                        <a class="menu-link {{ request()->routeIs($menu->route) ? 'active' : '' }}" href="{{ route($menu->route) }}" wire:navigate>
                            <span class="menu-icon">
                                <i class="{{ $menu->icon }} fs-2"></i>
                            </span>
                            <span class="menu-title">{{ $menu->name }}</span>
                        </a>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>