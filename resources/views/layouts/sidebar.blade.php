 <div class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
         <div>
             {{-- <img src="{{ asset('logo1.png') }}" class="logo-icon" alt="logo icon"> --}}
         </div>
         <div>
             <h4 class="logo-text text-dark">Balinologi</h4>
         </div>
         <div class="toggle-icon ms-auto text-dark"><i class='bx bx-arrow-to-left'></i>
         </div>
     </div>
     <!--navigation-->
     <ul class="metismenu" id="menu">
         <li>
             <a href="{{ url('dashboard') }}">
                 <div class="parent-icon"><i class='bx bx-home-circle'></i>
                 </div>
                 <div class="menu-title">Dashboard</div>
             </a>
         </li>

         <li class="menu-label">Program & Feature</li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class='bx bx-book-bookmark'></i>
                 </div>
                 <div class="menu-title">Master Data</div>
             </a>
             <ul>
                 <li>
                     <a href="{{ url('category') }}"><i class="bx bx-right-arrow-alt"></i>Kategori</a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class='bx bx-directions'></i>
                 </div>
                 <div class="menu-title">Location</div>
             </a>
             <ul>
                 <li>
                     <a href="{{ url('add-location') }}"><i class="bx bx-right-arrow-alt"></i>Tambah Lokasi</a>
                 </li>
                 <li>
                     <a href="{{ url('location') }}"><i class="bx bx-right-arrow-alt"></i>Semua Lokasi</a>
                 </li>
             </ul>
         </li>
     </ul>

     <!--end navigation-->
 </div>
