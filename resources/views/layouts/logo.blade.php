<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="index.html"><img src="{{ asset('assets/img/brand/logo.png') }}"
                class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="index.html"><img
                src="{{ asset('assets/img/brand/logo-white.png ') }}" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="index.html"><img
                src=" {{ asset('assets/img/brand/favicon.png') }}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img
                src=" {{ asset('assets/img/brand/favicon-white.png') }}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    @include('layouts.slider')
</aside>
