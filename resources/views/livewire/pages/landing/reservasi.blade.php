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
             <h4 class="mb-4">Form Reservasi </h4>
            <div class="mb-4">
              <label for="search">Cari Layanan</label>
              <input type="text" id="search" placeholder="Cari layanan..." class="salonix-input bg4 mb-3" wire:model.live="search" />
            </div>

            <div class="row g-3 mb-4">
              @forelse($dataLayanan as $layanan)
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100 border-2 border-transparent {{ $selectedLayanan?->id === $layanan->id ? 'border-primary' : '' }}" wire:click="selectService({{ $layanan->id }})" style="cursor: pointer;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $layanan->nama }}</h5>
                      <p class="card-text text-muted small mb-3">{{ $layanan->deskripsi }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-primary">Rp {{ number_format($layanan->harga, 0, ',', '.') }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              @empty
                <div class="col-12">
                  <p class="text-center text-muted">Tidak ada layanan ditemukan</p>
                </div>
              @endforelse
            </div>
               <div class="card-footer">
               <h5 class="mb-3">Detail</h5>
               <div class="d-flex align-items-start gap-3 flex-column flex-wrap">
                 <div class="info-item">
                   <div class="d-flex align-items-center">
                     <i class="ph ph-user fs-3"></i>
                     <p class="mb-0">Nama</p>
                   </div>
                   <h4 class="mb-0 fw-medium">{{ Auth::user()->pelanggan?->nama }}</h4>
                 </div>
                 <div class="info-item">
                   <div class="d-flex align-items-center">
                     <i class="ph ph-envelope fs-3"></i>
                     <p class="mb-0">Email</p>
                   </div>
                   <h4 class="mb-0 fw-medium">{{ Auth::user()->email }}</h4>
                 </div>
                 <div class="info-item">
                   <div class="d-flex align-items-center">
                     <i class="ph ph-phone fs-3"></i>
                     <p class="mb-0">No Telp</p>
                   </div>
                   <h4 class="mb-0 fw-medium">{{ Auth::user()->pelanggan?->no_telp }}</h4>
                 </div>
                 <div class="info-item">
                   <div class="d-flex align-items-center">
                     <i class="ph ph-tag fs-3"></i>
                     <p class="mb-0">Layanan</p>
                   </div>
                   <h4 class="mb-0 fw-medium">{{ $selectedLayanan?->nama_layanan ?? 'Silahkan Pilih Layanan' }}</h4>
                 </div>
                 <div class="info-item">
                   <div class="d-flex align-items-center">
                     <i class="ph ph-money fs-3"></i>
                     <p class="mb-0">Harga</p>
                   </div>
                   <h4 class="mb-0 fw-medium">{{ $selectedLayanan?->harga ? 'Rp ' . number_format($selectedLayanan->harga, 0, ',', '.') : 'Silahkan Pilih Layanan' }}</h4>
                 </div>
               </div>
               <form wire:submit.prevent="reservasi">
                 <div class="row g-3 g-xl-4 my-2">
                   <div class="col-6">
                     <div class="d-flex align-items-center mb-2">
                       <i class="ph ph-calendar fs-3"></i>
                       <p class="mb-0"> Tanggal</p>
                     </div>
                     <input type="date" placeholder="Pilih tanggal" class="salonix-input bg4" wire:model="tanggal" />
                   </div>
                   <div class="col-6">
                     <div class="d-flex align-items-center mb-2">
                       <i class="ph ph-clock fs-3"></i>
                       <p class="mb-0"> Waktu</p>
                     </div>
                     <input type="time" placeholder="Pilih waktu" class="salonix-input bg4" wire:model="waktu" />
                   </div>
                 </div>
                 <button type="submit" class="btn btn-lg fw-bold btn-primary mt-3 w-100">Reservasi</button>
               </form>
           </div>
         </div>
       </div>
     </div>
 </div>
 </section>
 </div>