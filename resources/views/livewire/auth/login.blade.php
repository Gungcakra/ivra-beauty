<div class="d-flex flex-column flex-lg-row flex-column-fluid">
    <!--begin::Body-->
    <div class="d-flex flex-column flex-lg-row-fluid w-100 w-lg-50 p-10 order-2 order-lg-1">
        <!--begin::Form-->
        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <!--begin::Wrapper-->
            <div class="w-100 w-lg-500px">
                <!--begin::Form-->
                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" wire:submit.prevent="login"> 
                    <!--begin::Heading-->
                    <div class="text-center mb-11">
                        <!--begin::Title-->
                        <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                    </div>
                  
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" wire:model="email" />
                        <!--end::Email-->
                    </div>
                    <!--end::Input group=-->
                    <div class="fv-row mb-3">
                        <!--begin::Password-->
                        <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" wire:model="password" />
                        <!--end::Password-->
                    </div>
                    <!--end::Input group=-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                        <div></div>
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Submit button-->
                    <div class="d-grid mb-10">
                        <button wire:click="login" id="kt_sign_in_submit" class="btn btn-primary">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">Sign In</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Submit button-->
                    <!--begin::Sign up-->
                    <div class="text-gray-500 text-center fw-semibold fs-6">
                    {{-- <a href="../../demo1/dist/authentication/layouts/corporate/sign-up.html" class="link-primary">Sign up</a> --}}
                </div>
                    <!--end::Sign up-->
                </form> 
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Form-->
        <!--begin::Footer-->
       
        <!--end::Footer-->
    </div>
    <!--end::Body-->
    <!--begin::Aside-->
    <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url({{ asset('assets/media/misc/auth-bg.png') }})">
        <!--begin::Content-->
        <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100" style="background-color: #D36BA0;">
            <!--begin::Logo-->
            <a href="/" class="mb-0 mb-lg-12">
                <img alt="Logo" src="{{ asset('assets/media/logos/logo-ivira.jpg') }}" class="h-100px h-lg-150px" />
            </a>
            <!--end::Logo-->
            <!--begin::Image-->
           
            <!--end::Text-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Aside-->

</div>