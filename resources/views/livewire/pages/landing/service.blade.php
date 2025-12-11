 <section class="services" id="layanan">
    
     <div class="left-text d-none d-xxl-block">
         <h2 class="vertical-white dmSansFont">layanan</h2>
     </div>

     <div class="container">
         <div class="row align-items-center g-3 gx-xl-4 section-title justify-content-between">
             <div class="col-lg-6">
                 <span class="sub-heading fade_up_anim">What We Offer</span>
                 <h2 class="mb-3 fade_up_anim text-uppercase">Explore Our Wide Range of Premium Services</h2>
             </div>
             <div class="col-lg-5">
                 <p class="fade_up_anim" data-delay=".3">We’re dedicated to transforming your hair into a masterpiece. Our expert stylists offer a wide range of services tailored.</p>
                 <p class="fade_up_anim second" data-delay=".3">Whether you're looking for a quick touch-up or a complete makeover, Ivira Beauty is here to deliver an experience.</p>
             </div>
         </div>
         <div class="service-card-area row">
            @php
            $services = App\Models\Layanan::all();
            @endphp
            @foreach($services as $service)
             <div class="service-card col-sm-6 col-lg-3">
                 <img src="{{  asset('guest/assets/images/service-1.png')}}" width="72" height="72" alt="" />
                 <h4>{{ $service->nama_layanan }}</h4>
                 <p>{{ $service->deskripsi }}</p>
                 <div class="d-flex align-items-center">
                     <div class="readmore">
                         <a href="{{ route('guest.reservasi',$service->id) }}" class="playFairFont">Reservasi Layanan</a>
                         <i class="ph ph-arrow-right"></i>
                     </div>
                 </div>
             </div>
            @endforeach
         </div>
     </div>
 </section>
 