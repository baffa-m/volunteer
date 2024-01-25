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

        @include('partials.navbar')

        <!-- Hero Start -->
        <section class="bg-half-260 d-table w-100" id="home">
            <div class="bg-overlay bg-black opacity-7"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h4 class="display-4 fw-bold text-white title-dark mb-3">Find your perfect property</h4>
                            <p class="para-desc text-white-50 mb-0 mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                        </div>
                    </div>
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-12 text-center mt-sm-0 pt-sm-0">
                        <div class="text-center features-absolute">
                            <ul class="nav nav-pills bg-light shadow border-bottom flex-column flex-sm-row d-md-inline-flex nav-justified mb-0 rounded-top position-relative overflow-hidden" id="pills-tab" role="tablist">
                                <li class="nav-item m-1">
                                    <a class="nav-link py-2 px-5 active rounded" id="buy-login" data-bs-toggle="pill" href="#buy" role="tab" aria-controls="buy" aria-selected="false">
                                        <div class="text-center">
                                            <h6 class="mb-0">Buy</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item m-1">
                                    <a class="nav-link py-2 px-5 rounded" id="sold-login" data-bs-toggle="pill" href="#sold" role="tab" aria-controls="sold" aria-selected="false">
                                        <div class="text-center">
                                            <h6 class="mb-0">Sold</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item m-1">
                                    <a class="nav-link py-2 px-5 rounded" id="rent-login" data-bs-toggle="pill" href="#rent" role="tab" aria-controls="rent" aria-selected="false">
                                        <div class="text-center">
                                            <h6 class="mb-0">Rent</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                            </ul>

                            <div class="tab-content bg-white rounded-bottom shadow" id="pills-tabContent">
                                <div class="card border-0 tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-login">
                                    <form class="card-body text-start">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Search :</label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="search" class="fea icon-sm icons"></i>
                                                        <input name="name" id="name" type="text" class="form-control ps-5" placeholder="Search your home :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Select Categories:</label>
                                                    <select class="form-control form-select" id="buy-properties">
                                                        <option>Houses</option>
                                                        <option>Apartment</option>
                                                        <option>Offices</option>
                                                        <option>Townhome</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Min Price :</label>
                                                    <select class="form-control form-select" id="buy-min-price">
                                                        <option>Min Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Max Price :</label>
                                                    <select class="form-control form-select" id="buy-max-price">
                                                        <option>Max Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <a href="javascript:void(0)" class="btn btn-primary w-100">Search now</a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form><!--end form-->
                                </div><!--end teb pane-->

                                <div class="card border-0 tab-pane fade" id="sold" role="tabpanel" aria-labelledby="sold-login">
                                    <form class="card-body text-start">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 text-start">
                                                    <label class="form-label">Search :</label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="search" class="fea icon-sm icons"></i>
                                                        <input name="name" id="name1" type="text" class="form-control ps-5" placeholder="Search your home :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 text-start">
                                                    <label class="form-label">Select Categories:</label>
                                                    <select class="form-control form-select" id="buy-properties2">
                                                        <option>Houses</option>
                                                        <option>Apartment</option>
                                                        <option>Offices</option>
                                                        <option>Townhome</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 text-start">
                                                    <label class="form-label">Min Price :</label>
                                                    <select class="form-control form-select" id="buy-min-price2">
                                                        <option>Min Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 text-start">
                                                    <label class="form-label">Max Price :</label>
                                                    <select class="form-control form-select" id="buy-max-price2">
                                                        <option>Max Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <a href="javascript:void(0)" class="btn btn-primary w-100">Search now</a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form><!--end form-->
                                </div><!--end teb pane-->

                                <div class="card border-0 tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-login">
                                    <form class="card-body text-start">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 text-start">
                                                    <label class="form-label">Search :</label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="search" class="fea icon-sm icons"></i>
                                                        <input name="name" id="name2" type="text" class="form-control ps-5" placeholder="Search your home :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 text-start">
                                                    <label class="form-label">Select Categories:</label>
                                                    <select class="form-control form-select" id="buy-properties3">
                                                        <option>Houses</option>
                                                        <option>Apartment</option>
                                                        <option>Offices</option>
                                                        <option>Townhome</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 text-start">
                                                    <label class="form-label">Min Price :</label>
                                                    <select class="form-control form-select" id="buy-min-price3">
                                                        <option>Min Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 text-start">
                                                    <label class="form-label">Max Price :</label>
                                                    <select class="form-control form-select" id="buy-max-price3">
                                                        <option>Max Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <a href="javascript:void(0)" class="btn btn-primary w-100">Search now</a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form><!--end form-->
                                </div><!--end teb pane-->
                            </div><!--end tab content-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title mb-4 pb-2 text-center">
                            <span class="badge rounded-pill bg-soft-primary">Process</span>
                            <h4 class="title mt-3 mb-4">How it work</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 text-center features feature-primary feature-clean rounded p-4">
                            <div class="icons text-center mx-auto">
                                <i class="uil uil-map-marker-plus rounded h3 mb-0"></i>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <a href="javascript:void(0)" class="title h5 text-dark">Map Search</a>
                                <p class="text-muted mt-3 mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="text-primary">Read More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 text-center features feature-primary feature-clean rounded p-4">
                            <div class="icons text-center mx-auto">
                                <i class="uil uil-estate rounded h3 mb-0"></i>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <a href="javascript:void(0)" class="title h5 text-dark">Property Lookup</a>
                                <p class="text-muted mt-3 mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="text-primary">Read More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 text-center features feature-primary feature-clean rounded p-4">
                            <div class="icons text-center mx-auto">
                                <i class="uil uil-house-user rounded h3 mb-0"></i>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <a href="javascript:void(0)" class="title h5 text-dark">Buy / Sell Property</a>
                                <p class="text-muted mt-3 mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="text-primary">Read More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title mb-4 pb-2 text-center">
                            <span class="badge rounded-pill bg-soft-primary">Featured Items</span>
                            <h4 class="title mt-3 mb-4">Latest Property</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 shadow position-relative overflow-hidden">
                            <div class="shop-image position-relative overflow-hidden shadow">
                                <img src="assets/images/real/property/1.jpg" class="img-fluid" alt="">
                                <ul class="list-unstyled shop-icons">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-estate"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-heart"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-camera"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content p-4">
                                <a href="property-detail.html" class="text-dark product-name h6">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</a>

                                <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center">
                                    <li class="d-flex align-items-center me-3">
                                        <i class="uil uil-compress-arrows fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">8000sqf</span>
                                    </li>

                                    <li class="d-flex align-items-center me-3">
                                        <i class="uil uil-bed-double fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">4 Beds</span>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <i class="uil uil-bath fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">4 Baths</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                    <li class="list-inline-item mb-0">
                                        <span class="text-muted">Price</span>
                                        <p class="fw-semibold mb-0">$5000</p>
                                    </li>
                                    <li class="list-inline-item mb-0 text-muted">
                                        <span class="text-muted">Rating</span>
                                        <ul class="fw-semibold text-warning list-unstyled mb-0">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 shadow position-relative overflow-hidden">
                            <div class="shop-image position-relative overflow-hidden shadow">
                                <img src="assets/images/real/property/2.jpg" class="img-fluid" alt="">
                                <ul class="list-unstyled shop-icons">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-estate"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-heart"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-camera"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content p-4">
                                <a href="property-detail.html" class="text-dark product-name h6">59345 STONEWALL DR, Plaquemine, LA 70764, USA</a>
                                <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center">
                                    <li class="d-flex align-items-center me-3">
                                        <i class="uil uil-compress-arrows fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">8000sqf</span>
                                    </li>

                                    <li class="d-flex align-items-center me-3">
                                        <i class="uil uil-bed-double fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">4 Beds</span>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <i class="uil uil-bath fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">4 Baths</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                    <li class="list-inline-item mb-0">
                                        <span class="text-muted">Price</span>
                                        <p class="fw-semibold mb-0">$5000</p>
                                    </li>
                                    <li class="list-inline-item mb-0 text-muted">
                                        <span class="text-muted">Rating</span>
                                        <ul class="fw-semibold text-warning list-unstyled mb-0">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 shadow position-relative overflow-hidden">
                            <div class="shop-image position-relative overflow-hidden shadow">
                                <img src="assets/images/real/property/3.jpg" class="img-fluid" alt="">
                                <ul class="list-unstyled shop-icons">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-estate"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-heart"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-camera"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content p-4">
                                <a href="property-detail.html" class="text-dark product-name h6">3723 SANDBAR DR, Addis, LA 70710, USA</a>
                                <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center">
                                    <li class="d-flex align-items-center me-3">
                                        <i class="uil uil-compress-arrows fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">8000sqf</span>
                                    </li>

                                    <li class="d-flex align-items-center me-3">
                                        <i class="uil uil-bed-double fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">4 Beds</span>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <i class="uil uil-bath fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">4 Baths</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                    <li class="list-inline-item mb-0">
                                        <span class="text-muted">Price</span>
                                        <p class="fw-semibold mb-0">$5000</p>
                                    </li>
                                    <li class="list-inline-item mb-0 text-muted">
                                        <span class="text-muted">Rating</span>
                                        <ul class="fw-semibold text-warning list-unstyled mb-0">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 shadow position-relative overflow-hidden">
                            <div class="shop-image position-relative overflow-hidden shadow">
                                <img src="assets/images/real/property/4.jpg" class="img-fluid" alt="">
                                <ul class="list-unstyled shop-icons">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-estate"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-heart"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-camera"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content p-4">
                                <a href="property-detail.html" class="text-dark product-name h6">Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA</a>
                                <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center">
                                    <li class="d-flex align-items-center me-3">
                                        <i class="uil uil-compress-arrows fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">8000sqf</span>
                                    </li>

                                    <li class="d-flex align-items-center me-3">
                                        <i class="uil uil-bed-double fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">4 Beds</span>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <i class="uil uil-bath fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">4 Baths</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                    <li class="list-inline-item mb-0">
                                        <span class="text-muted">Price</span>
                                        <p class="fw-semibold mb-0">$5000</p>
                                    </li>
                                    <li class="list-inline-item mb-0 text-muted">
                                        <span class="text-muted">Rating</span>
                                        <ul class="fw-semibold text-warning list-unstyled mb-0">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 shadow position-relative overflow-hidden">
                            <div class="shop-image position-relative overflow-hidden shadow">
                                <img src="assets/images/real/property/5.jpg" class="img-fluid" alt="">
                                <ul class="list-unstyled shop-icons">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-estate"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-heart"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-camera"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content p-4">
                                <a href="property-detail.html" class="text-dark product-name h6">710 BOYD DR, Unit #1102, Baton Rouge, LA 70808, USA</a>
                                <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center">
                                    <li class="d-flex align-items-center me-3">
                                        <i class="uil uil-compress-arrows fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">8000sqf</span>
                                    </li>

                                    <li class="d-flex align-items-center me-3">
                                        <i class="uil uil-bed-double fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">4 Beds</span>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <i class="uil uil-bath fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">4 Baths</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                    <li class="list-inline-item mb-0">
                                        <span class="text-muted">Price</span>
                                        <p class="fw-semibold mb-0">$5000</p>
                                    </li>
                                    <li class="list-inline-item mb-0 text-muted">
                                        <span class="text-muted">Rating</span>
                                        <ul class="fw-semibold text-warning list-unstyled mb-0">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 shadow position-relative overflow-hidden">
                            <div class="shop-image position-relative overflow-hidden shadow">
                                <img src="assets/images/real/property/6.jpg" class="img-fluid" alt="">
                                <ul class="list-unstyled shop-icons">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-estate"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-heart"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-camera"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content p-4">
                                <a href="property-detail.html" class="text-dark product-name h6">5133 MCLAIN WAY, Baton Rouge, LA 70809, USA</a>
                                <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center">
                                    <li class="d-flex align-items-center me-3">
                                        <i class="uil uil-compress-arrows fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">8000sqf</span>
                                    </li>

                                    <li class="d-flex align-items-center me-3">
                                        <i class="uil uil-bed-double fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">4 Beds</span>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <i class="uil uil-bath fs-5 me-1 text-primary"></i>
                                        <span class="text-muted">4 Baths</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                    <li class="list-inline-item mb-0">
                                        <span class="text-muted">Price</span>
                                        <p class="fw-semibold mb-0">$5000</p>
                                    </li>
                                    <li class="list-inline-item mb-0 text-muted">
                                        <span class="text-muted">Rating</span>
                                        <ul class="fw-semibold text-warning list-unstyled mb-0">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->

                    <div class="col-12 mt-4 pt-2">
                        <div class="text-center">
                            <a href="property-grid.html" class="mt-3 h6 text-primary">View More Properties <i class="uil uil-angle-right-b align-middle"></i></a>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->

            <div class="container-fluid mt-100 mt-60">
                <div class="rounded shadow py-5" style="background: url('assets/images/real/1.jpg') center center;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card rounded p-4">
                                    <div class="tiny-single-item">
                                        <div class="tiny-slider">
                                            <div class="client-testi text-center">
                                                <p class="h6 text-muted fst-italic fw-normal">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. It contains a series of real Latin words. "</p>
                                                <div class="commenter mt-4">
                                                    <img src="assets/images/client/01.jpg" class="avatar avatar-small rounded-circle d-block mx-auto shadow-lg" alt="">
                                                    <div class="content mt-4">
                                                        <ul class="list-unstyled h6 text-warning mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                        </ul>
                                                        <h5 class="text-primary mb-0">Ronald Kinsey</h5>
                                                        <small class="text-muted">User</small>
                                                    </div>
                                                </div>
                                            </div><!--end review content-->
                                        </div>

                                        <div class="tiny-slider">
                                            <div class="client-testi text-center">
                                                <p class="h6 text-muted fst-italic fw-normal">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. It contains a series of real Latin words. "</p>
                                                <div class="commenter mt-4">
                                                    <img src="assets/images/client/02.jpg" class="avatar avatar-small rounded-circle d-block mx-auto shadow-lg" alt="">
                                                    <div class="content mt-4">
                                                        <ul class="list-unstyled h6 text-warning mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                        </ul>
                                                        <h5 class="text-primary mb-0">Raquel Service</h5>
                                                        <small class="text-muted">App User</small>
                                                    </div>
                                                </div>
                                            </div><!--end review content-->
                                        </div>

                                        <div class="tiny-slider">
                                            <div class="client-testi text-center">
                                                <p class="h6 text-muted fst-italic fw-normal">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. It contains a series of real Latin words. "</p>
                                                <div class="commenter mt-4">
                                                    <img src="assets/images/client/03.jpg" class="avatar avatar-small rounded-circle d-block mx-auto shadow-lg" alt="">
                                                    <div class="content mt-4">
                                                        <ul class="list-unstyled h6 text-warning mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                        </ul>
                                                        <h5 class="text-primary mb-0">Leona Moore</h5>
                                                        <small class="text-muted">Client</small>
                                                    </div>
                                                </div>
                                            </div><!--end review content-->
                                        </div>

                                        <div class="tiny-slider">
                                            <div class="client-testi text-center">
                                                <p class="h6 text-muted fst-italic fw-normal">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. It contains a series of real Latin words. "</p>
                                                <div class="commenter mt-4">
                                                    <img src="assets/images/client/04.jpg" class="avatar avatar-small rounded-circle d-block mx-auto shadow-lg" alt="">
                                                    <div class="content mt-4">
                                                        <ul class="list-unstyled h6 text-warning mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                        </ul>
                                                        <h5 class="text-primary mb-0">Mark Rose</h5>
                                                        <small class="text-muted">CEO</small>
                                                    </div>
                                                </div>
                                            </div><!--end review content-->
                                        </div>

                                        <div class="tiny-slider">
                                            <div class="client-testi text-center">
                                                <p class="h6 text-muted fst-italic fw-normal">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. It contains a series of real Latin words. "</p>
                                                <div class="commenter mt-4">
                                                    <img src="assets/images/client/05.jpg" class="avatar avatar-small rounded-circle d-block mx-auto shadow-lg" alt="">
                                                    <div class="content mt-4">
                                                        <ul class="list-unstyled h6 text-warning mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                        </ul>
                                                        <h5 class="text-primary mb-0">Marsha Donoho</h5>
                                                        <small class="text-muted">User</small>
                                                    </div>
                                                </div>
                                            </div><!--end review content-->
                                        </div>

                                        <div class="tiny-slider">
                                            <div class="client-testi text-center">
                                                <p class="h6 text-muted fst-italic fw-normal">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. It contains a series of real Latin words. "</p>
                                                <div class="commenter mt-4">
                                                    <img src="assets/images/client/06.jpg" class="avatar avatar-small rounded-circle d-block mx-auto shadow-lg" alt="">
                                                    <div class="content mt-4">
                                                        <ul class="list-unstyled h6 text-warning mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                        </ul>
                                                        <h5 class="text-primary mb-0">Xavier Giancola</h5>
                                                        <small class="text-muted">App User</small>
                                                    </div>
                                                </div>
                                            </div><!--end review content-->
                                        </div>
                                    </div><!--end owl carousel-->
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div>
            </div><!--end container fluid-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title mb-4 pb-2 text-center">
                            <h4 class="title mb-4">Our Experts</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card team team-primary bg-light text-center rounded shadow border-0">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="assets/images/client/01.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                    <ul class="list-unstyled mb-0 team-icon">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                                    </ul><!--end icon-->
                                </div>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ronny Jofra</a></h5>
                                    <small class="designation text-muted">Commercial Broker</small>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card team team-primary bg-light text-center rounded shadow border-0">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="assets/images/client/04.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                    <ul class="list-unstyled mb-0 team-icon">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                                    </ul><!--end icon-->
                                </div>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Micheal Carlo</a></h5>
                                    <small class="designation text-muted">Commercial Broker</small>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card team team-primary bg-light text-center rounded shadow border-0">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="assets/images/client/03.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                    <ul class="list-unstyled mb-0 team-icon">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                                    </ul><!--end icon-->
                                </div>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Aliana Rosy</a></h5>
                                    <small class="designation text-muted">Commercial Broker</small>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card team team-primary bg-light text-center rounded shadow border-0">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="assets/images/client/02.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                    <ul class="list-unstyled mb-0 team-icon">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                                    </ul><!--end icon-->
                                </div>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Sofia Razaq</a></h5>
                                    <small class="designation text-muted">Commercial Broker</small>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <section class="section pt-0" style="background: url('assets/images/real/build.png') bottom no-repeat;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Latest Blog & News</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog blog-primary rounded border-0 shadow">
                            <div class="position-relative">
                                <img src="assets/images/real/property/1.jpg" class="card-img-top rounded-top" alt="...">
                                <div class="overlay rounded-top"></div>
                            </div>
                            <div class="card-body content">
                                <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your own way</a></h5>
                                <div class="post-meta d-flex justify-content-between mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                    </ul>
                                    <a href="blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                </div>
                            </div>
                            <div class="author">
                                <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                                <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog blog-primary rounded border-0 shadow">
                            <div class="position-relative">
                                <img src="assets/images/real/property/2.jpg" class="card-img-top rounded-top" alt="...">
                                <div class="overlay rounded-top"></div>
                            </div>
                            <div class="card-body content">
                                <h5><a href="javascript:void(0)" class="card-title title text-dark">How apps is changing the IT world</a></h5>
                                <div class="post-meta d-flex justify-content-between mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                    </ul>
                                    <a href="blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                </div>
                            </div>
                            <div class="author">
                                <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                                <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog blog-primary rounded border-0 shadow">
                            <div class="position-relative">
                                <img src="assets/images/real/property/3.jpg" class="card-img-top rounded-top" alt="...">
                                <div class="overlay rounded-top"></div>
                            </div>
                            <div class="card-body content">
                                <h5><a href="javascript:void(0)" class="card-title title text-dark">Smartest Applications for Business</a></h5>
                                <div class="post-meta d-flex justify-content-between mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                    </ul>
                                    <a href="blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                </div>
                            </div>
                            <div class="author">
                                <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                                <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->


        @include('partials.footer')


        @include('partials.offcanvas')


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
