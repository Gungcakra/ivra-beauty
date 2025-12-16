 <section class="signup-page signin-bg">
      <div class="page-content">
        <div class="container">
          <div class="row">
            <form class="col-lg-6 col-xxl-5" wire:submit.prevent="login">
              <div class="pb-120">
                <a href="{{route('landing')}}" class="py-2 py-xl-3 d-flex">
                  <!-- <img src="assets/images/logo-black.png" class="img-fluid" alt="" /> -->
                </a>
              </div>
              <div class="mb-4 mb-xl-5 pb-xxl-2">
                <a class="d-inline-flex align-items-center gap-2 text-n700 fw-semibold" href="{{route('landing')}}"><i class="ph ph-arrow-left"></i> Kembali</a>
              </div>
              <div class="mb-4 pb-xl-3">
                <h2 class="mb-3">Selamat Datang Kembali!</h2>
                <p class="text-n500">Masuk ke akunmu</p>
              </div>
              <div class="row g-3 g-xl-4 pb-5">
                <div class="col-12">
                  <label for="email" class="d-block text-n500 text-lg fw-medium mb-3">Alamat Email</label>
                  <input type="email" autocomplete="email" placeholder="example@mail.com" class="salonix-input bg4" wire:model="email" />
                </div>
                <div class="col-12">
                  <label for="password" class="d-block text-n500 text-lg fw-medium mb-3">Password</label>
                  <div class="salonix-input bg4 password-toggle">
                    <input type="password" autocomplete="current-password" placeholder="Password" class="bg-transparent border-0 w-100" id="password-input" wire:model="password" />
                    <i class="ph ph-eye-slash eye-icon" id="toggle-password"></i>
                  </div>
                </div>
                <div class="col-12">
                  <p class="mt-1">Belum punya Akun? <a href="{{ route('guest.register') }}" class="text-secondary3">Registrasi</a></p>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary w-100 rounded-0 py-2 fw-medium text-bg1 mt-2 mt-xl-3">Sign In</button>
                </div>
              </div>
              <p class="copyright pt-xl-5">Copyright © <a href="{{route('landing')}}" class="text-secondary3 fw-semibold">Ivira Beauty</a> All rights reserved.</p>
            </form>
          </div>
        </div>
      </div>
    </section>