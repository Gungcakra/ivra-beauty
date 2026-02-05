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
                         <li><a href="#" class="text-primary">Riwayat Reservasi</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </section>

     <section class="pt-80 pb-80 z-3 position-relative">
         <div class="container py-5">
             <div class="row justify-content-center">
                 <div class="col-lg-10">
                     @foreach ($reservasi as $item)
                     <div class="card border-0 shadow-sm mb-4" style="overflow: hidden; background: #ffffff;">
                         <div class="card-body p-0">
                             <div class="row g-0">
                                 <div class="col-md-1 d-none d-md-block bg-primary opacity-75"></div>

                                 <div class="col-md-11 p-4">
                                     <div class="d-flex justify-content-between align-items-start mb-4">
                                         <div>
                                             <small class="text-uppercase text-muted fw-bold ls-1 d-block mb-1" style="letter-spacing: 1px;">Layanan Terpilih</small>
                                             <div class="d-flex flex-wrap gap-2">
                                                 @foreach($item->layanans as $layanan)
                                                 <span class="badge rounded bg-primary bg-opacity-10 text-primary px-3 py-2 fw-semibold">
                                                     <i class="ph ph-sparkle me-1"></i> {{ $layanan->nama_layanan }}
                                                 </span>
                                                 @endforeach
                                             </div>
                                         </div>
                                         <div class="text-end">
                                             <small class="text-muted d-block mb-1">Total Pembayaran</small>
                                             <h4 class="fw-bold text-primary mb-0">Rp {{ number_format($item->harga ?? 0, 0, ',', '.') }}</h4>
                                         </div>
                                     </div>

                                     <hr class="border-light my-4">

                                     <div class="row text-center text-md-start">
                                         <div class="col-6 col-md-3 mb-3 mb-md-0">
                                             <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                                                 <div class="icon-box bg-light rounded-3 p-2 me-3">
                                                     <i class="ph ph-calendar-blank fs-4 text-primary"></i>
                                                 </div>
                                                 <div>
                                                     <small class="text-muted d-block">Tanggal</small>
                                                     <span class="fw-bold">{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</span>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="col-6 col-md-3 mb-3 mb-md-0">
                                             <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                                                 <div class="icon-box bg-light rounded-3 p-2 me-3">
                                                     <i class="ph ph-clock fs-4 text-primary"></i>
                                                 </div>
                                                 <div>
                                                     <small class="text-muted d-block">Waktu</small>
                                                     <span class="fw-bold">{{ $item->waktu }}</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                     {{-- Bagian Logika Tombol --}}
                                     <hr class="border-light my-4">
                                     <div class="row">
                                         <div class="col-12 text-end">
                                             @if($item->transaksi)
                                             {{-- Jika sudah ada transaksi, tampilkan form komplain --}}
                                             <div class="text-start">
                                                 <small class="text-uppercase text-muted fw-bold ls-1 d-block mb-2" style="letter-spacing: 1px;">Komplain</small>
                                                 @if($item->komplain)
                                                 <p class="mb-0 text-muted italic">"{{ $item->komplain }}"</p>
                                                 @else
                                                 <textarea class="form-control" placeholder="Tulis komplain Anda di sini..." rows="3" wire:model="komplain"></textarea>
                                                 <button wire:click="submitKomplain({{ $item->id }})" class="btn btn-primary btn-sm mt-2 text-white">
                                                     <i class="ph ph-paper-plane-tilt me-1"></i> Kirim Komplain
                                                 </button>
                                                 @endif
                                             </div>
                                             @else
                                             <button
                                                 wire:click="batalReservasi({{ $item->id }})"
                                                 class="btn btn-outline-danger btn-sm">
                                                 <i class="ph ph-trash me-1"></i> Batalkan Reservasi
                                             </button>
                                             @endif
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </section>
 </div>
 @push('scripts')
 <script>
    $(function(){
        Livewire.on('confirm-batal-reservasi', () => {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Reservasi yang dibatalkan tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, batalkan reservasi!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('batalReservasiConfirmed');
                }
            });
        });
    })
 </script>
 @endpush