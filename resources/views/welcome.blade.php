@extends('layouts.app')


@section('content')

<!-- Hero Start -->
<section class="bg-half-260 d-table w-100" id="home">
    <div class="bg-overlay bg-black opacity-7"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h4 class="display-4 fw-bold text-white title-dark mb-3">Find Volunteers Around You</h4>
                    <p class="para-desc text-white-50 mb-0 mx-auto">Be a Part of Something Bigger than Yourself.</p>
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
                    

                    <div class="tab-content bg-white rounded-bottom shadow" id="pills-tabContent">
                        <div class="card border-0 tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-login">
                            <form class="card rounded p-4 mt-4">
                                <div class="row text-start">
                                    <div class="col-lg-5 col-md-4">
                                        <div class="mb-0">
                                            <input type="text" class="form-control" required="" placeholder="Keywords">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-7 col-md-8">
                                        <div class="row align-items-center">
                                            <div class="col-md-4 mt-4 mt-sm-0">
                                                <div class="mb-0">
                                                    <select class="form-control form-select">
                                                        <option selected="">Location</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Åland Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-md-4 mt-4 mt-sm-0">
                                                <div class="mb-0">
                                                    <select class="form-control form-select">
                                                        <option selected="">Job Types</option>
                                                        <option value="4">Accounting</option>
                                                        <option value="1">IT &amp; Software</option>
                                                        <option value="3">Marketing</option>
                                                        <option value="5">Banking</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-md-4 mt-4 mt-sm-0">
                                                <div class="d-grid">
                                                    <input type="submit" id="search" name="search" class="searchbtn btn btn-primary" value="Search">
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div> <!---end col-->
                                </div><!--end row-->
                            </form>
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
                    <h4 class="title mt-3 mb-4">Latest Listings</h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
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



</section><!--end section-->
<!-- End -->

@endsection
