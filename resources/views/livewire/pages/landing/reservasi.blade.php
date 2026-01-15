<div>
    <section class="page-banner" style="background-image: url('{{ asset("guest/assets/images/payment-hero-bg.webp") }}')">
        <div class="container text-center pt-5">
             <h2 class="text-white">Form Reservasi</h2>
        </div>
    </section>

    <section class="pt-80 pb-80 z-3 position-relative">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <div class="d-flex justify-content-between position-relative">
                        <div class="progress position-absolute start-0 top-50 w-100" style="height: 2px; transform: translateY(-50%); z-index: -1;">
                            <div class="progress-bar" role="progressbar" style="width: {{ ($currentStep - 1) * 100 }}%;"></div>
                        </div>
                        <div class="step-item text-center">
                            <div class="rounded-circle {{ $currentStep >= 1 ? 'bg-primary text-white' : 'bg-light' }} d-flex align-items-center justify-content-center mx-auto" style="width: 40px; height: 40px;">1</div>
                            <small class="mt-2 d-block fw-bold">Pilih Layanan</small>
                        </div>
                        <div class="step-item text-center">
                            <div class="rounded-circle {{ $currentStep >= 2 ? 'bg-primary text-white' : 'bg-light' }} d-flex align-items-center justify-content-center mx-auto" style="width: 40px; height: 40px;">2</div>
                            <small class="mt-2 d-block fw-bold">Waktu & Detail</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    
                    {{-- STEP 1: PILIH LAYANAN --}}
                    @if($currentStep == 1)
                    <div class="step-content fade-in">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4>Pilih Layanan</h4>
                            <input type="text" placeholder="Cari layanan..." class="form-control w-25" wire:model.live="search" />
                        </div>

                        <div class="row g-3 mb-4">
                            @forelse($dataLayanan as $item)
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 border-2 {{ in_array($item->id, $selectedLayananIds) ? 'border-primary bg-light' : 'border-light' }}" 
                                     wire:click="toggleService({{ $item->id }})" style="cursor: pointer; transition: 0.3s;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-title">{{ $item->nama_layanan }}</h5>
                                            @if(in_array($item->id, $selectedLayananIds))
                                                <i class="ph ph-check-circle fs-4 text-primary"></i>
                                            @endif
                                        </div>
                                        <p class="text-muted small">{{ Str::limit($item->deskripsi, 50) }}</p>
                                        <span class="badge bg-primary">Rp {{ number_format($item->harga, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-12 text-center text-muted">Layanan tidak ditemukan</div>
                            @endforelse
                        </div>

                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary px-5" wire:click="nextStep">Lanjut ke Detail <i class="ph ph-arrow-right"></i></button>
                        </div>
                    </div>
                    @endif

                    {{-- STEP 2: DETAIL & WAKTU --}}
                    @if($currentStep == 2)
                    <div class="step-content">
                        <div class="row">
                            <div class="col-lg-7">
                                <h4 class="mb-4">Tentukan Jadwal</h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold"><i class="ph ph-calendar me-2"></i>Tanggal</label>
                                        <input type="date" class="form-control" wire:model="tanggal">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold"><i class="ph ph-clock me-2"></i>Waktu</label>
                                        <input type="time" class="form-control" wire:model="waktu">
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <h5 class="mb-3">Informasi Pelanggan</h5>
                                    <div class="p-3 bg-light rounded">
                                        <p class="mb-1 text-muted small">Nama Pemesan</p>
                                        <p class="fw-bold mb-3">{{ Auth::user()->nama }}</p>
                                        <p class="mb-1 text-muted small">Nomor Telepon</p>
                                        <p class="fw-bold mb-0">{{ Auth::user()->no_telp }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="p-4 border rounded bg-white">
                                    <h5 class="mb-3">Ringkasan Pesanan</h5>
                                    <ul class="list-group list-group-flush mb-3">
                                        @foreach($selectedLayanan as $sl)
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            {{ $sl->nama_layanan }}
                                            <span>Rp {{ number_format($sl->harga, 0, ',', '.') }}</span>
                                        </li>
                                        @endforeach
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 fw-bold">
                                            Total
                                            <span class="text-primary">Rp {{ number_format($selectedLayanan->sum('harga'), 0, ',', '.') }}</span>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary w-100 btn-lg" wire:click="reservasi" wire:loading.attr="disabled">
                                        <span wire:loading.remove>Konfirmasi Reservasi</span>
                                        <span wire:loading>Memproses...</span>
                                    </button>
                                    <button class="btn btn-link w-100 mt-2 text-muted" wire:click="prevStep">Kembali</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
    <style>
        .fade-in { animation: fadeIn 0.5s; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        .step-item { z-index: 2; width: 100px; }
        .form-control:focus { border-color: #your-primary-color; box-shadow: none; }
    </style>
</div>
