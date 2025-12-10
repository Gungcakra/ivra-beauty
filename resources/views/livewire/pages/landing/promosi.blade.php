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
                <div class="col-lg-4 offset-lg-2">
                    <p class="fade_up_anim text-white" data-delay=".3">We take pride in our team of talented, passionate, and experienced professionals.</p>
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
    @endif
</div>