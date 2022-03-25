@include('layouts.header')

<body class="main-body app sidebar-mini">


    @include('layouts.loader')

    <!-- Page -->
    <div class="page">

        <!-- main-sidebar -->
        @include('layouts.logo')
        <!-- main-sidebar -->


        <!-- main-content -->
        <div class="main-content app-content">

            <!-- main-header -->
            @include('layouts.navbar')
            <!-- /main-header -->

            <!-- container -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- /Container -->
        </div>
        <!-- /main-content -->



        <!-- Footer opened -->
        @include('layouts.footer')
        <!-- Footer closed -->

    </div>
    <!-- End Page -->




</body>


</html>
