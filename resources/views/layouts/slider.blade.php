<div class="main-sidemenu">

    <ul class="side-menu">
        <li class="side-item side-item-category">@lang('lang.home_menu')</li>
        <li class="slide {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
            <a class="side-menu__item" href="{{ route(localize_route('admin.dashboard')) }}"><svg
                    xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                    <path
                        d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                </svg><span class="side-menu__label">@lang('lang.dashboard_menu')</span><span
                    class="badge bg-success text-light" id="bg-side-text">1</span></a>
        </li>
        <li class="side-item side-item-category">@lang('lang.product_menu')</li>
        <li class="slide {{ request()->is('admin/order*') ? 'active' : '' }}">
            <a class="side-menu__item" href="{{ route(localize_route('admin.order')) }}"><svg
                    xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"
                        opacity=".3" />
                    <path
                        d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                </svg></i><span class="side-menu__label">@lang('lang.order_menu')</span><span
                    class="badge bg-danger text-light" id="bg-side-text">New</span></a>
        </li>
        <li class="slide {{ request()->is('admin/category*') ? 'active' : '' }}">
            <a class="side-menu__item" href="{{ route(localize_route('admin.category')) }}"><svg
                    xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"
                        opacity=".3" />
                    <path
                        d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                </svg><span class="side-menu__label">@lang('lang.category_menu')</span><span
                    class="badge bg-danger text-light" id="bg-side-text">New</span></a>
            {{-- <li class="slide ">
            <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                    class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3" />
                    <path
                        d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                </svg><span class="side-menu__label">Charts</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="chart-morris.html">Morris Charts</a></li>
                <li><a class="slide-item" href="chart-flot.html">Flot Charts</a></li>
                <li><a class="slide-item" href="chart-chartjs.html">ChartJS</a></li>

            </ul>
        </li> --}}
        <li class="slide">
            <a class="side-menu__item" href="{{ url('/logout') }}"><svg xmlns="http://www.w3.org/2000/svg"
                    class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"
                        opacity=".3" />
                    <path
                        d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                </svg></i><span class="side-menu__label">@lang('lang.logout_menu')</span></a>
        </li>





    </ul>
</div>
