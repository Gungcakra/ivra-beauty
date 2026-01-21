<div class="">
    @php
    $promosi = App\Models\Promosi::all();
    @endphp

    @if($promosi->count() > 0)
    <section class="services experts" id="experts">
        <div class="left-text d-none d-xl-block">
            <h2 class="vertical dmSansFont">Promosi</h2>
        </div>

        <div class="container">
            <div class="row align-items-end g-4 section-title">
                <div class="col-lg-6">
                    <span class="sub-heading fade_up_anim">Promosi Dari Kami</span>
                    <!-- <h2 class="mb-3 fade_up_anim text-white text-uppercase">Talented, Experienced, Trusted</h2> -->
                </div>

            </div>
            <div class="swiper expertSwiper">
                <div class="swiper-wrapper">
                    @foreach ($promosi as $promo)

                    <div class="swiper-slide">
                        <div class="expert-card w-100">
                            <div class="expert-img w-100" style="aspect-ratio: 16/9; overflow: hidden;">
                                <img src="{{ Storage::url($promo->gambar_promosi) }}" alt="Expert Image" class="w-100 h-100" style="object-fit: cover;" />
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="d-flex justify-content-center col-12">
                    <div class="btns">
                        <button class="expert-prev"><i class="ph ph-arrow-left"></i></button>
                        <button class="expert-next"><i class="ph ph-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Promosi -->
    <div id="promosiModal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Promosi Dari Kami</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="promoCarousel" class="carousel slide mb-4 shadow-sm" data-bs-ride="carousel" style="border-radius: 15px; overflow: hidden; background-color: #f8f9fa;">
                        <div class="carousel-indicators">
                            @foreach ($promosi as $index => $promo)
                            <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="{{ $index }}"
                                class="{{ $index == 0 ? 'active' : '' }} bg-primary"

                                aria-current="true">
                            </button>
                            @endforeach
                        </div>

                        <div class="carousel-inner">
                            @foreach ($promosi as $index => $promo)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" data-bs-interval="5000">
                                <div class="d-flex align-items-center justify-content-center"
                                    style="width: 100%; aspect-ratio: 21 / 9; background-color: #eee;">
                                    <img src="{{ Storage::url($promo->gambar_promosi) }}"
                                        class="d-block w-100 h-100"
                                        alt="Promosi Image"
                                        style="object-fit: contain; max-height: 100%;">
                                </div>

                                @if(isset($promo->judul))
                                <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.5); border-radius: 10px; padding: 10px;">
                                    <h5 class="m-0">{{ $promo->judul }}</h5>
                                </div>
                                @endif
                            </div>
                            @endforeach
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon p-3 rounded-circle bg-primary" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon p-3 rounded-circle bg-primary" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myModalEl = document.getElementById('promosiModal');
            myModalEl.querySelector('.modal-dialog').classList.add('modal-dialog-centered');

            var modal = new bootstrap.Modal(myModalEl);

            setTimeout(function() {
                modal.show();
            }, 1000);
        });
    </script>
    @endpush
    @endif
</div>