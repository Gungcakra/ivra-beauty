 <div class="">
   <section class="page-banner" style="background-image: url('{{ asset("guest/assets/images/payment-hero-bg.webp") }}')">
     <span class="line"></span>
     <span class="line two"></span>
     <span class="line three"></span>
     <span class="line four"></span>
     <div class="container">
       <div class="row">
         <div class="col-lg-8 col-xxl-7 col-3xl-6 z-2 banner-content px-3">
           <h2 class="display-4 text-white mb-3 fade_up_anim">Profile</h2>
           <ul class="list-unstyled d-flex align-items-center gap-2 fade_up_anim mb-0" data-delay=".3">
             <li><a href="{{ route('landing') }}" class="text-white">Beranda</a></li>

             <i class="ph ph-caret-right text-white"></i>
             <li><a class="text-primary" href="#">Profile</a></li>
           </ul>
         </div>
       </div>
     </div>
   </section>

   <section class="pt-80 pb-80 z-3 position-relative">
     <div class="container">
       <div class="col-lg-12 z-3">
         <div class="card shadow-sm">
           <form class="card-body" wire:submit.prevent="updateProfile">
             <div class="row g-3 g-xl-4">
               <div class="col-12">
                 <label for="nama" class="d-block text-n500 text-lg fw-medium mb-3">Nama Lengkap</label>
                 <input type="text" wire:model="nama" autocomplete="name" placeholder="Nama Lengkap" class="salonix-input bg4" />
               </div>
               <div class="col-12">
                 <label for="email" class="d-block text-n500 text-lg fw-medium mb-3">Email Address</label>
                 <input type="email" wire:model="email" autocomplete="email" placeholder="example@mail.com" class="salonix-input bg4" />
               </div>
               <div class="col-12">
                 <label for="no_telp" class="d-block text-n500 text-lg fw-medium mb-3">Nomor Telepon</label>
                 <input type="tel" wire:model="no_telp" autocomplete="tel" placeholder="08xxxxxxxxxx" class="salonix-input bg4" />
               </div>
               <div class="col-12">
                 <label for="password" class="d-block text-n500 text-lg fw-medium mb-3">Ubah Password</label>
                 <div class="salonix-input bg4 password-toggle">
                   <input type="password" wire:model="password" autocomplete="current-password" placeholder="Password" class="bg-transparent border-0 w-100" id="password-input" />
                   <i class="ph ph-eye-slash eye-icon" id="toggle-password"></i>
                 </div>
               </div>

               <div class="col-12">
                 <button type="submit" class="btn btn-primary w-100 rounded-0 py-2 fw-medium text-bg1 mt-2 mt-xl-3">Update Profile</button>
               </div>
             </div>

           </form>
         </div>
       </div>
     </div>
 </div>
 </section>
</div>