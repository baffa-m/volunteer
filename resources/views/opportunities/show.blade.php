@extends('layouts.app')


@section('content')

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-12">
                <div class="card sidebar sticky-bar rounded shadow border-0">
                    <div class="card-body widget border-bottom">
                        <h5 class="mb-0">Job Information</h5>
                    </div>

                    <div class="card-body">
                        <div class="d-flex widget align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check fea icon-ex-md me-3"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Organization:</h6>
                                <small class="text-primary mb-0">{{ $volunteer->organizations->org_name }}</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin fea icon-ex-md me-3"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Location:</h6>
                                <small class="text-primary mb-0">{{ $volunteer->location }}</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor fea icon-ex-md me-3"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Volunteer Title:</h6>
                                <small class="text-primary mb-0">{{ $volunteer->post_title }}</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin fea icon-ex-md me-3"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Location:</h6>
                                <small class="text-primary mb-0">{{ $volunteer->category->category_name }}</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase fea icon-ex-md me-3"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">State:</h6>
                                <small class="text-primary mb-0">{{ $volunteer->state->state_name }}</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock fea icon-ex-md me-3"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Date posted:</h6>
                                <small class="text-primary mb-0 mb-0">{{ $volunteer->created_at }}</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-8 col-md-7 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="ms-lg-4">
                    <h5>Job Description: </h5>
                    @foreach (explode("\n", $volunteer->description ) as $desc)
                    <p class="text-muted">{{ $desc }}</p>
                    @endforeach

                    <h5 class="mt-4">Responsibilities and Duties: </h5>
                    <ul class="list-unstyled">
                        @foreach (explode("\n", $volunteer->responsibilities) as $res)
                        <li class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fea icon-sm text-success me-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>{{ $res }}</li>
                        @endforeach
                    </ul>

                    <div class="mt-4">
                        <a href="job-apply.html" class="btn btn-outline-primary">Apply Now <i class="mdi mdi-send"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>


@endsection
