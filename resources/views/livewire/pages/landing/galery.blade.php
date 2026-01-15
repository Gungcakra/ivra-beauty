 <!-- Showcase Gallery Start -->
 <section class="gallery pt-120 pb-120 position-relative" id="galeri">
     <div class="right-text d-none d-xl-block">
         <h2 class="vertical dmSansFont">Galeri</h2>
     </div>

     <div class="container">
         <div class="section-title">
             <span class="sub-heading fade_up_anim">Hasil Karya Kami</span>
             <h2 class="mb-2 mb-xl-3 fade_up_anim text-uppercase">Keahlian Terbaik Kami</h2>
             <p class="fade_up_anim" data-delay=".3">
                 Kami percaya setiap hasil adalah karya terbaik yang dikerjakan dengan penuh ketelitian dan rasa profesional.
             </p>
         </div>
         <style>
             /* Galeri Wrapper */
             .gallery-container .gallery-item {
                 position: relative;
                 overflow: hidden;
                 border-radius: 16px;
                 /* Membuat sudut membulat modern */
                 display: block;
                 height: 100%;
             }

             /* Memastikan gambar mengisi ruang dengan rapi */
             .gallery-container img {
                 width: 100%;
                 height: 100%;
                 object-fit: cover;
                 transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
                 display: block;
             }

             /* Hover Effect */
             .gallery-item:hover img {
                 transform: scale(1.08);
             }

             /* Overlay Modern */
             .gallery-overlay {
                 position: absolute;
                 inset: 0;
                 background: rgba(0, 0, 0, 0.2);
                 opacity: 0;
                 transition: all 0.3s ease;
                 display: flex;
                 align-items: center;
                 justify-content: center;
             }

             .gallery-item:hover .gallery-overlay {
                 opacity: 1;
                 background: rgba(0, 0, 0, 0.4);
             }

             .plus-icon-circle {
                 width: 50px;
                 height: 50px;
                 background: white;
                 color: black;
                 border-radius: 50%;
                 display: flex;
                 align-items: center;
                 justify-content: center;
                 transform: translateY(20px);
                 transition: all 0.4s ease;
             }

             .gallery-item:hover .plus-icon-circle {
                 transform: translateY(0);
             }

             /* Custom Height untuk Desktop agar seimbang */
             @media (min-width: 576px) {
                 .h-custom-tall {
                     height: 100%;
                     min-height: 500px;
                 }

                 /* Gambar Vertikal */
                 .h-custom-short {
                     height: 240px;
                 }

                 /* Gambar Horizontal Kecil */
                 .h-custom-wide {
                     height: 244px;
                 }

                 /* Gambar Horizontal Besar */
             }

             /* Perbaikan untuk Mobile */
             @media (max-width: 575.98px) {
                 .gallery-item {
                     height: 250px;
                     /* Semua gambar punya tinggi seragam di mobile agar rapi */
                     margin-bottom: 10px;
                 }
             }
         </style>

         <div class="container gallery-container">
             <div class="row g-3">
                 <div class="col-sm-4">
                     <a aria-label="See Original Image" href="{{ asset('guest/assets/images/galery/photo (12).webp') }}" class="gallery-item h-custom-tall">
                         <img src="{{ asset('guest/assets/images/galery/photo (12).webp') }}" alt="Gallery Vertical" />
                         <div class="gallery-overlay">
                             <div class="plus-icon-circle shadow">
                                 <i class="ph ph-plus fs-4"></i>
                             </div>
                         </div>
                     </a>
                 </div>

                 <div class="col-sm-8">
                     <div class="row g-3">
                         <div class="col-12">
                             <a aria-label="See Original Image" href="{{ asset('guest/assets/images/galery/photo (3).webp') }}" class="gallery-item h-custom-wide">
                                 <img src="{{ asset('guest/assets/images/galery/photo (3).webp') }}" alt="Gallery Wide" />
                                 <div class="gallery-overlay">
                                     <div class="plus-icon-circle shadow">
                                         <i class="ph ph-plus fs-4"></i>
                                     </div>
                                 </div>
                             </a>
                         </div>
                         <div class="col-6">
                             <a aria-label="See Original Image" href="{{ asset('guest/assets/images/galery/photo (4).webp') }}" class="gallery-item h-custom-short">
                                 <img src="{{ asset('guest/assets/images/galery/photo (4).webp') }}" alt="Gallery Square 1" />
                                 <div class="gallery-overlay">
                                     <div class="plus-icon-circle shadow">
                                         <i class="ph ph-plus fs-4"></i>
                                     </div>
                                 </div>
                             </a>
                         </div>
                         <div class="col-6">
                             <a aria-label="See Original Image" href="{{ asset('guest/assets/images/galery/photo (9).webp') }}" class="gallery-item h-custom-short">
                                 <img src="{{ asset('guest/assets/images/galery/photo (9).webp') }}" alt="Gallery Square 2" />
                                 <div class="gallery-overlay">
                                     <div class="plus-icon-circle shadow">
                                         <i class="ph ph-plus fs-4"></i>
                                     </div>
                                 </div>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Showcase Gallery End -->