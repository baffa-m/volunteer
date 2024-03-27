<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

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
                                            <input type="text" wire:model.live.debounce.300ms='search' class="form-control" required="" placeholder="Keywords">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-7 col-md-8">
                                        <div class="row align-items-center">
                                            <div class="col-md-6 mt-4 mt-sm-0">
                                                <div class="mb-0">
                                                    <select wire:model.live='state' class="form-control form-select">
                                                        <option selected="" value="">Location</option>
                                                        @foreach ($states as $state)
                                                        <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-md-6 mt-4 mt-sm-0">
                                                <div class="mb-0">
                                                    <select wire:model.live='category' class="form-control form-select">
                                                        <option selected="" value="">Job Types</option>
                                                        @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                        @endforeach
                                                    </select>
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title mb-2 pb-2 text-center">
                    <h4 class="title mt-2 mb-2">Featured Listings</h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            @foreach ($latest_volunteers as $volunteer)
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <a href="{{ route('opportunities.show', ['opportunity' => $volunteer->id ])}}">
                    <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                        <img src="assets/images/job/Circleci.svg" class="avatar avatar-ex-sm" alt="">
                        <div class="flex-1 ms-3">
                            <h4 class="title mb-0 text-dark">{{ $volunteer->post_title }}</h4>
                            <p class="text-muted mb-0">{{ $volunteer->location }}, {{ $volunteer->state->state_name }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            <div class="col-12 text-center mt-4 pt-2">
                <a href="{{ route('opportunities')}}" class="btn btn-primary">See All Jobs <i class="uil uil-angle-right-b align-middle"></i></a>
            </div>
        </div>
    </div><!--end container-->



</section><!--end section-->
<!-- End -->

</div>
