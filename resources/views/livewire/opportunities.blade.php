<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class=" features-absolute">
                        <form class="card rounded p-4 mt-4 shadow">
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
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-5 mt-sm-0">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="sidebar p-4 rounded shadow">
                        <!-- Categories -->
                        <div class="widget mb-4 pb-4 border-bottom">
                            <h5 class="widget-title">Categories</h5>
                            <div class="mt-4 mb-0">
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected="">All Jobs</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Categories -->

                        <!-- Posted -->
                        <div class="widget mb-4 pb-4 border-bottom">
                            <h5 class="widget-title">Date Posted</h5>
                            <div class="mt-4">
                                <div class="form-check mb-0" wire:click="$set('timeFrame', 'all')">
                                    <input class="form-check-input"  type="radio" name="flexRadioDefault">
                                    <label class="form-check-label" for="lasthour">All</label>
                                </div>

                                <div class="form-check mb-0" wire:click="$set('timeFrame', 'oneday')">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault">
                                    <label class="form-check-label" for="oneday">Last 24 hours</label>
                                </div>

                                <div class="form-check mb-0" wire:click="$set('timeFrame', 'sevendays')">
                                    <input class="form-check-input"  type="radio" name="flexRadioDefault">
                                    <label class="form-check-label" for="sevenday">Last 7 days</label>
                                </div>

                                <div class="form-check mb-0" wire:click="$set('timeFrame', 'fourteendays')">
                                    <input class="form-check-input"  type="radio" name="flexRadioDefault">
                                    <label class="form-check-label" for="fourteenhour">Last 14 days</label>
                                </div>

                                <div class="form-check mb-0" wire:click="$set('timeFrame', 'onemonth')">
                                    <input class="form-check-input"  type="radio" name="flexRadioDefault">
                                    <label class="form-check-label" for="onemonth">Last 30 days</label>
                                </div>
                            </div>
                        </div>
                        <!-- Posted -->
                    </div>
                </div><!--end col-->

                <div class="col-lg-8 col-md-6 col-12">
                    <div class="row">
                        @foreach ($volunteers as $volunteer)
                            <div class="col-12 mt-4 pt-2">
                                <div class="job-box job-primary d-md-flex align-items-center border-0 shadow rounded p-4 position-relative">
                                    <img src="assets/images/job/Circleci.svg" class="avatar avatar-md-sm" alt="">

                                    <div class="ms-md-4 mt-4 mt-sm-0">
                                        <a href="{{ route('opportunities.show', ['opportunity' => $volunteer->id ])}}" class="title text-dark h5">{{ $volunteer->post_title }}</a>

                                        <ul class="list-unstyled mb-0 mt-2">
                                            <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i class="uil uil-map-marker icons"></i> <a href="javascript:void(0)" class="text-dark">{{ $volunteer->state->state_name }}</a> State</li>
                                            <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i class="uil uil-clock icons"></i>{{ $volunteer->category->category_name }}</li>
                                            <li class="d-lg-inline text-muted h6 mb-0"><i class="uil uil-bill icons"></i>{{ $volunteer->organizations->org_name }}</li>
                                        </ul>

                                    </div>

                                    
                                </div>
                            </div><!--end col-->
                        @endforeach

                        <div class="col-12 mt-4 pt-2">
                            {{ $volunteers->links() }}
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

</div>
