<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Landrick - Saas & Software Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template">
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern">
        <meta name="author" content="Shreethemes">
        <meta name="email" content="support@shreethemes.in">
        <meta name="website" content="https://shreethemes.in">
        <meta name="Version" content="v4.7.0">

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap-green.min.css" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <link href="assets/css/style-green.min.css" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css" />


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

        <div class="modal fade" id="login-popup" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog  modal-lg modal-dialog-centered">
                <div class="modal-content rounded shadow border-0">
                    <div class="modal-body p-0">
                        <div class="container-fluid px-0">
                            <div class="row align-items-center g-0">
                                <div class="col-lg-6 col-md-5">
                                    <img src="assets/images/course/online/ab02.jpg" class="img-fluid" alt="">
                                </div><!--end col-->

                                <div class="col-lg-6 col-md-7">
                                    <form class="login-form p-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm icons"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                        <input type="email" class="form-control ps-5" placeholder="Email" name="email" required="">
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Password <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key fea icon-sm icons"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>
                                                        <input type="password" class="form-control ps-5" placeholder="Password" required="">
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-12">
                                                <div class="d-flex justify-content-between">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                                            <label class="form-check-label" for="flexCheckDefault4">Remember me</label>
                                                        </div>
                                                    </div>
                                                    <p class="forgot-pass mb-0"><a href="auth-re-password.html" class="text-dark fw-bold">Forgot password ?</a></p>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-12 mb-0">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary">Sign in</button>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-12 text-center">
                                                <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a href="auth-signup.html" class="text-dark fw-bold">Sign Up</a></p>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="register-popup" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog  modal-lg modal-dialog-centered">
                <div class="modal-content rounded shadow border-0">
                    <div class="modal-body p-0">
                        <div class="container-fluid px-0">
                            <div class="row align-items-center g-0">
                                <div class="col-lg-6 col-md-5">
                                    <img src="assets/images/course/online/ab02.jpg" class="img-fluid" alt="">
                                </div><!--end col-->

                                <div class="col-lg-6 col-md-7">
                                    <form>
                                        <a href="index.html"><img src="assets/images/logo-icon.png" class="avatar avatar-small mb-4 d-block mx-auto" alt=""></a>
                                        <h5 class="mb-3 text-center">Register your account</h5>

                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Harry">
                                            <label for="floatingInput">First Name</label>
                                        </div>

                                        <div class="form-floating mb-2">
                                            <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                                            <label for="floatingEmail">Email Address</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                            <label for="floatingPassword">Password</label>
                                        </div>

                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                        </div>

                                        <button class="btn btn-primary w-100" type="submit">Register</button>

                                        <div class="col-12 text-center mt-3">
                                            <p class="mb-0 mt-3"><small class="text-dark me-2">Already have an account ?</small> <a href="auth-bs-login.html" class="text-dark fw-bold">Sign in</a></p>
                                        </div><!--end col-->

                                        <p class="mb-0 text-muted mt-3 text-center">© <script>document.write(new Date().getFullYear())</script>2024 Landrick.</p>
                                    </form>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
        <!-- Back to top -->

        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- SLIDER -->
        <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="assets/js/easy_background.js"></script>
        <!-- Main Js -->
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="assets/js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->

        <script>
            easy_background("#home",
                {
                    slide: ["assets/images/real/1.jpg", "assets/images/real/2.jpg", "assets/images/real/3.jpg"],
                    delay: [4000, 4000, 4000]
                }
            );
        </script>
    </body>
</html>
