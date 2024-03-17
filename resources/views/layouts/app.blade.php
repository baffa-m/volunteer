<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>we Volunteer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template">
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern">
        <meta name="author" content="Shreethemes">
        <meta name="email" content="support@shreethemes.in">
        <meta name="website" content="https://shreethemes.in">
        <meta name="Version" content="v4.7.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap-green.min.css') }}" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style-green.min.css') }}" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css" />
        @livewireStyles

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        @include('layouts.partials.navbar')

        @yield('content')


        @include('layouts.partials.footer')

        @livewire('login')


        @livewire('register')

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
        <!-- Back to top -->

        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- SLIDER -->
        <script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
        <script src="{{ asset('assets/js/easy_background.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.init.js') }}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="{{ asset('assets/js/app.js') }}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->

        @livewireScripts
        @stack('scripts')

        <script>
            easy_background("#home",
                {
                    slide: ["assets/images/volunteer/1.jpg", "assets/images/volunteer/2.jpg", "assets/images/volunteer/3.jpg",
                    "assets/images/volunteer/4.jpg", "assets/images/volunteer/5.jpg", "assets/images/volunteer/6.jpg",
                    "assets/images/volunteer/7.jpg", "assets/images/volunteer/8.jpg", "assets/images/volunteer/9.jpg",
                    "assets/images/volunteer/10.jpg", "assets/images/volunteer/11.jpg", "assets/images/volunteer/12.jpg",
                    "assets/images/volunteer/13.jpg"
                    ],
                    delay: [4000, 4000, 4000]
                }
            );
        </script>
    </body>
</html>
