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
                                                        @foreach ($states as $state)
                                                        <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-md-4 mt-4 mt-sm-0">
                                                <div class="mb-0">
                                                    <select class="form-control form-select">
                                                        <option selected="">Job Types</option>
                                                        @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                        @endforeach
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

            <div class="col-lg-8 col-md-6 col-12">
                <div class="row">
                    <div class="col-12 mt-4 pt-2">
                        <div class="job-box job-primary d-md-flex align-items-center border-0 shadow rounded p-4 position-relative">
                            <img src="assets/images/job/Circleci.svg" class="avatar avatar-md-sm" alt="">

                            <div class="ms-md-4 mt-4 mt-sm-0">
                                <a href="job-detail-one.html" class="title text-dark h5">Web Developer</a>

                                <ul class="list-unstyled mb-0 mt-2">
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i class="uil uil-map-marker icons"></i> <a href="javascript:void(0)" class="text-dark">CircleCI</a>, San Francisco</li>
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i class="uil uil-clock icons"></i> 8hr/ Day</li>
                                    <li class="d-lg-inline text-muted h6 mb-0"><i class="uil uil-bill icons"></i> 30k-35k</li>
                                </ul>

                                <div class="mt-2">
                                    <span class="badge text-bg-soft">Fulltime</span>
                                    <span class="badge bg-soft-warning">Office</span>
                                </div>
                            </div>

                            <div class="position-absolute top-0 end-0 mt-3 me-3">
                                <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft"><i class="uil uil-bookmark align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div>
            </div>

            <div class="col-12 mt-4 pt-2">
                <div class="text-center">
                    <a href="property-grid.html" class="mt-3 h6 text-primary">View More Roles <i class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div>
        </div><!--end row-->
    </div><!--end container-->



</section><!--end section-->
<!-- End -->

@endsection
