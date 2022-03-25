 <!-- main-header -->
 <div class="main-header sticky side-header nav nav-item">
     <div class="container-fluid">
         <div class="main-header-left ">
             <div class="responsive-logo">
                 <a href="index.html"><img src="../../assets/img/brand/logo.png" class="logo-1" alt="logo"></a>
                 <a href="index.html"><img src="../../assets/img/brand/logo-white.png" class="dark-logo-1"
                         alt="logo"></a>
                 <a href="index.html"><img src="../../assets/img/brand/favicon.png" class="logo-2"
                         alt="logo"></a>
                 <a href="index.html"><img src="../../assets/img/brand/favicon-white.png" class="dark-logo-2"
                         alt="logo"></a>
             </div>
             <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                 <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                 <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
             </div>

         </div>
         <div class="main-header-right">
             <ul class="nav nav-item  navbar-nav-right ms-auto">
                 <li class="nav">
                     <div class="dropdown nav-itemd-none d-md-flex">
                         @if (session()->get('locale') == 'th')
                             <a href="#" class="d-flex  nav-item country-flag1" data-bs-toggle="dropdown"
                                 aria-expanded="false">
                                 <span class="avatar  me-3 align-self-center bg-transparent"><img
                                         src="{{ asset('assets/img/flags/Thailand.png') }}" alt="img"></span>
                                 <div class="d-flex">
                                     <span class="mt-2"></span>

                                 </div>
                             </a>
                         @elseif(session()->get('locale') == 'en')
                             <a href="#" class="d-flex  nav-item country-flag1" data-bs-toggle="dropdown"
                                 aria-expanded="false">
                                 <span class="avatar  me-3 align-self-center bg-transparent"><img
                                         src="{{ asset('assets/img/flags/us_flag.jpg') }}" alt="img"></span>
                                 <div class="d-flex">
                                     <span class="mt-2"></span>

                                 </div>
                             </a>
                         @elseif(session()->get('locale') == '')
                             <a href="#" class="d-flex  nav-item country-flag1" data-bs-toggle="dropdown"
                                 aria-expanded="false">
                                 <span class="avatar  me-3 align-self-center bg-transparent"><img
                                         src="{{ asset('assets/img/flags/us_flag.jpg') }}" alt="img"></span>
                                 <div class="d-flex">
                                     <span class="mt-2"></span>

                                 </div>
                             </a>
                         @endif
                         {{-- {{ dd(App::getLocale()) }} --}}
                         <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
                             @if (App::getLocale() === 'en')
                                 <a href="{{ localize_path(request()->path() . str_replace(request()->url(), '', request()->fullUrl()), 'th') }}"
                                     class="dropdown-item d-flex ">
                                     <span class="avatar  me-3 align-self-center bg-transparent"><img
                                             src="{{ asset('assets/img/flags/Thailand.png') }}" alt="img"></span>
                                     <div class="d-flex">
                                         <span class="mt-2">ไทย</span>
                                     </div>
                                 </a>
                             @else
                                 <a href="{{ localize_path(request()->path() . str_replace(request()->url(), '', request()->fullUrl()), 'en') }}"
                                     class="dropdown-item d-flex ">
                                     <span class="avatar  me-3 align-self-center bg-transparent"><img
                                             src="{{ asset('assets/img/flags/us_flag.jpg') }}" alt="img"></span>
                                     <div class="d-flex">
                                         <span class="mt-2">English</span>
                                     </div>
                                 </a>
                             @endif






                         </div>
                     </div>
                 </li>





                 <li class="nav-item full-screen fullscreen-button">
                     <a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                             class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-maximize">
                             <path
                                 d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                             </path>
                         </svg></a>
                 </li>



             </ul>
         </div>
     </div>
 </div>
 <!-- /main-header -->
