<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

    <!-- Title -->
    <title> APP-FOOD </title>

    <!-- Favicon -->
    <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/x-icon" />

    <!-- Icons css -->
    <link href="../../assets/css/icons.css" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="../../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="../../assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />

    <!-- Sidemenu css -->
    <link rel="stylesheet" href="../../assets/css/sidemenu.css">

    <!--- Style css --->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/boxed.css" rel="stylesheet">
    <link href="../../assets/css/dark-boxed.css" rel="stylesheet">

    <!--- Dark-mode css --->
    <link href="../../assets/css/style-dark.css" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="../../assets/css/skin-modes.css" rel="stylesheet" />

    <!--- Animations css-->
    <link href="../../assets/css/animate.css" rel="stylesheet">

</head>

<body class="error-page1 main-body bg-light text-dark">

    <!-- Loader -->
    <div id="global-loader">
        <img src="../../assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <div class="container-fluid">
            <div class="row no-gutter">
                <!-- The image half -->
                <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                    <div class="row wd-100p mx-auto text-center">
                        <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                            <img src="../../assets/img/media/login.png"
                                class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                        </div>
                    </div>
                </div>
                <!-- The content half -->
                <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                    <div class="login d-flex align-items-center py-2">
                        <!-- Demo content-->
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                    <div class="card-sigin">
                                        <div class="mb-5 d-flex">
                                            <a href="index.html"><img src="../../assets/img/brand/favicon.png"
                                                    class="sign-favicon-a ht-40" alt="logo">
                                                <img src="../../assets/img/brand/favicon-white.png"
                                                    class="sign-favicon-b ht-40" alt="logo">
                                            </a>
                                            <h1 class="main-logo1 ms-1 me-0 my-auto tx-28"><span>APP-FOOD </span></h1>
                                        </div>
                                        <div class="card-sigin">
                                            <div class="main-signup-header">
                                                <h2>Welcome back!</h2>
                                                @error('error')
                                                    <div class="my-2">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                                <h5 class="fw-semibold mb-4">Please sign in to continue.</h5>
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Email</label> <input class="form-control"
                                                            placeholder="Enter your email" type="text" name="email"
                                                            value="{{ old('email') }}" required autocomplete="email"
                                                            autofocus>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Password</label> <input class="form-control"
                                                            placeholder="Enter your password" type="password"
                                                            name="password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <button class="btn btn-main-primary btn-block" type="submit">Sign
                                                        In</button>

                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p><a href="">Forgot password?</a></p>
                                                    <p>Don't have an account? <a href="page-signup.html">Create an
                                                            Account</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End -->
                    </div>
                </div><!-- End -->
            </div>
        </div>

    </div>
    <!-- End Page -->

    <!-- JQuery min js -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Bundle js -->
    <script src="../../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Ionicons js -->
    <script src="../../assets/plugins/ionicons/ionicons.js"></script>

    <!-- Moment js -->
    <script src="../../assets/plugins/moment/moment.js"></script>

    <!-- P-scroll js -->
    <script src="../../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!-- eva-icons js -->
    <script src="../../assets/js/eva-icons.min.js"></script>

    <!-- Rating js-->
    <script src="../../assets/plugins/rating/jquery.rating-stars.js"></script>
    <script src="../../assets/plugins/rating/jquery.barrating.js"></script>

    <!-- custom js -->
    <script src="../../assets/js/custom.js"></script>

</body>

</html>
