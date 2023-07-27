<head>
    <meta charset="utf-8" />
    <title>Nest - Multipurpose eCommerce HTML Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/imgs/theme/favicon.svg" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main.css?v=5.3" />
</head>

<body>

    <!-- Quick view -->
    @include('frontend.partial.quickview')

    <!-- Header  -->
    @include('frontend.partial.header')

    <!-- End Header  -->

    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Pages <span></span> My Account
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-12 m-auto">
                        <div class="row">
                            <div class="heading_s1">
                                <img class="border-radius-15" src="{{ asset('frontend') }}/assets/imgs/page/reset_password.svg"
                                    alt="" />
                                <h2 class="mb-15 mt-15">Forgot Password</h2>
                                <p class="mb-30">Please create a new password that you don’t use on any other site.</p>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="mb-4 text-sm text-gray-600">
                                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                        </div>

                                        <!-- Session Status -->
                                        <x-auth-session-status class="mb-4" :status="session('status')" />
                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf

                                            <!-- Email Address -->
                                            <div>
                                                <x-input-label for="email" :value="__('Email')" />
                                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>

                                            <div class="flex items-center justify-end mt-4">
                                                <x-primary-button>
                                                    {{ __('Email Password Reset Link') }}
                                                </x-primary-button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('frontend.partial.footer')
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{ asset('frontend') }}/assets/imgs/theme/loading.gif" alt="" />
                </div>
            </div>
            <!-- Vendor JS-->
            <script src="{{ asset('frontend') }}/assets/js/vendor/modernizr-3.6.0.min.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/vendor/bootstrap.bundle.min.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/slick.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.syotimer.min.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/wow.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/perfect-scrollbar.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/magnific-popup.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/select2.min.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/waypoints.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/counterup.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.countdown.min.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/images-loaded.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/isotope.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/scrollup.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.vticker-min.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.theia.sticky.js"></script>
            <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.elevatezoom.js"></script>
            <!-- Template  JS -->
            <script src="{{ asset('frontend') }}/assets/js/main.js?v=5.3"></script>
            <script src="{{ asset('frontend') }}/assets/js/shop.js?v=5.3"></script>
</body>

</html>
