 <div class="">
   <section class="page-banner" style="background-image: url('{{ asset("guest/assets/images/payment-hero-bg.webp") }}')">
     <span class="line"></span>
     <span class="line two"></span>
     <span class="line three"></span>
     <span class="line four"></span>
     <div class="container">
       <div class="row">
         <div class="col-lg-8 col-xxl-7 col-3xl-6 z-2 banner-content px-3">
           <h2 class="display-4 text-white mb-3 fade_up_anim">Reservasi</h2>
           <ul class="list-unstyled d-flex align-items-center gap-2 fade_up_anim mb-0" data-delay=".3">
             <li><a href="{{ route('landing') }}" class="text-white">Home</a></li>
             <i class="ph ph-caret-right text-white"></i>
             <li><a class="text-white">Layanan</a></li>
             <i class="ph ph-caret-right text-white"></i>
             <li><a href="#">Reservasi</a></li>
           </ul>
         </div>
       </div>
     </div>
   </section>

   <section class="pt-80 pb-80 z-3 position-relative">
     <div class="container">
       <div class="col-lg-12 z-3">
        <div class="card shadow-sm">
          <div class="card-body">
            <h4 class="mb-4">Form Reservasi {{ $dataLayanan->nama_layanan }}</h4>
            <form wire:submit.prevent="reservasi">
              <div class="row g-3 g-xl-4 mb-4">
                <div class="col-6">
                  <label for="tanggal" class="d-block text-n500 text-lg fw-medium mb-3">Tanggal</label>
                  <input type="date" placeholder="Pilih tanggal" class="salonix-input bg4" wire:model="tanggal" />
                </div>
                <div class="col-6">
                  <label for="waktu" class="d-block text-n500 text-lg fw-medium mb-3">Waktu</label>
                  <input type="time" placeholder="Pilih waktu" class="salonix-input bg4" wire:model="waktu" />
                </div>
              </div>
            </form>
          </div>
          <div class="card-footer">
            <h5 class="mb-3">Detail</h5>
            <div class="d-flex align-items-start gap-3 flex-column flex-wrap">
              <div class="info-item">
                <i class="ph ph-user fs-3"></i>
                <div>
                  <p class="mb-0">Nama</p>
                  <h4 class="mb-0 fw-medium">{{ Auth::user()->pelanggan?->nama }}</h4>
                </div>
              </div>
              <div class="info-item">
                <i class="ph ph-envelope fs-3"></i>
                <div>
                  <p class="mb-0">Email</p>
                  <h4 class="mb-0 fw-medium">{{ Auth::user()->email }}</h4>
                </div>
              </div>
              <div class="info-item">
                <i class="ph ph-phone fs-3"></i>
                <div>
                  <p class="mb-0">No Telp</p>
                  <h4 class="mb-0 fw-medium">{{ Auth::user()->pelanggan?->no_telp }}</h4>
                </div>
              </div>
              <div class="info-item">
                <i class="ph ph-tag fs-3"></i>
                <div>
                  <p class="mb-0">Layanan</p>
                  <h4 class="mb-0 fw-medium">{{ $dataLayanan->nama_layanan }}</h4>
                </div>
              </div>
              <div class="info-item">
                <i class="ph ph-money fs-3"></i>
                <div>
                  <p class="mb-0">Harga</p>
                  <h4 class="mb-0 fw-medium">RP {{ number_format($dataLayanan->harga, 0, ',', '.') }}</h4>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-lg fw-bold btn-primary mt-3 w-100">Reservasi</button>
          </div>
        </div>
       </div>
     </div>
 </div>
 </section>
 </div>