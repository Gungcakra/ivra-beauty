 <div class="">
     <section class="page-banner" style="background-image: url('{{ asset("guest/assets/images/payment-hero-bg.webp") }}')">
         <span class="line"></span>
         <span class="line two"></span>
         <span class="line three"></span>
         <span class="line four"></span>
         <div class="container">
             <div class="row">
                 <div class="col-lg-8 col-xxl-7 col-3xl-6 z-2 banner-content px-3">
                     <h2 class="display-4 text-white mb-3 fade_up_anim">Riwayat Reservasi</h2>
                     <ul class="list-unstyled d-flex align-items-center gap-2 fade_up_anim mb-0" data-delay=".3">
                         <li><a href="{{ route('landing') }}" class="text-white">Beranda</a></li>

                         <i class="ph ph-caret-right text-white"></i>
                         <li><a href="#">Riwayat Reservasi</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </section>

     <section class="pt-80 pb-80 z-3 position-relative">
         <div class="container">
             <div class="col-lg-12 z-3">
                 @foreach ($reservasi as $item)
                <div class="card shadow-sm mb-4 border-0">
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h5 class="text-primary fw-bold mb-1"><i class="ph ph-star"></i> Layanan</h5>
                                <h5 class="mb-0">{{ $item->layanan?->nama_layanan ?? 'N/A' }}</h5>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-primary fw-bold mb-1">Harga</h5>
                                <h5 class="mb-0">Rp {{ number_format($item->layanan?->harga ?? 0, 0, ',', '.') }}</h5>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-primary fw-bold mb-1">Tanggal</h5>
                                <h5 class="mb-0">{{ \Carbon\Carbon::parse($item->tanggal)->format('d/m/Y') }}</h5>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-primary fw-bold mb-1">Waktu</h5>
                                <h5 class="mb-0">{{ $item->waktu }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach
             </div>
         </div>
 </div>
 </section>
 </div