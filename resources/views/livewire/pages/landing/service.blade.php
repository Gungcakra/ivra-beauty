 <section class="services" id="layanan">
    
     <div class="left-text d-none d-xxl-block">
         <h2 class="vertical-white dmSansFont">layanan</h2>
     </div>

     <div class="container">
         <div class="row align-items-center g-3 gx-xl-4 section-title justify-content-between">
             <span class="sub-heading fade_up_anim">Apa Kami Tawarkan</span>
             <h2 class="mb-3 fade_up_anim text-uppercase">Jelajahi Berbagai Layanan Premium Kami</h2>
             
            
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
                
             </div>
            @endforeach
         </div>
     </div>
 </section>
 