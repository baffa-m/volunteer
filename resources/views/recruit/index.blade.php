@extends('layouts.app')


@section('content')


<section class="section">
    <div class="container">
        <div class="container-fluid">
            <div class="layout-specing">
                <div class="d-md-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Organization</h5>
                </div>

                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="table-responsive shadow rounded">
                            <div class="row text-start">
                                <div class="col-lg-7 col-md-8">
                                    <div class="row align-items-center">
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
                                    </div><!--end row-->
                                </div> <!---end col-->
                                <div class="col-lg-5 col-md-4">
                                    <div class="mb-0">
                                        <input type="text" class="form-control" required="" placeholder="Keywords">
                                    </div>
                                </div><!--end col-->
                            </div>

                            <table class="table table-center bg-white mb-0">
                                <thead>
                                    <tr>
                                        <th class="border-bottom p-3" style="min-width: 220px;">Title</th>
                                        <th class="text-center border-bottom p-3" style="min-width: 200px;">Location</th>
                                        <th class="text-center border-bottom p-3">Post Openings</th>
                                        <th class="text-center border-bottom p-3">Status</th>
                                        <th class="text-end border-bottom p-3" style="min-width: 200px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Start -->
                                    <tr>
                                        <td class="p-3">
                                            <a href="#" class="text-primary">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/client/01.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                                    <span class="ms-2">Howard Tanner</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="text-center p-3"></td>
                                        <td class="text-center p-3"></td>
                                        <td class="text-center p-3"></td>
                                        <td class="text-center p-3">
                                            <div class="badge bg-soft-danger rounded px-3 py-1">
                                                Unpaid
                                            </div>
                                        </td>
                                        <td class="text-end p-3">
                                            <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                            <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                        </td>
                                    </tr>
                                    <!-- End -->
                                </tbody>
                            </table>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row text-center">
                    <!-- PAGINATION START -->
                    <div class="col-12 mt-4">
                        <div class="d-md-flex align-items-center text-center justify-content-between">
                            <span class="text-muted me-3">Showing 1 - 10 out of 50</span>
                            <ul class="pagination mb-0 justify-content-center mt-4 mt-sm-0">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next</a></li>
                             </ul>
                        </div>
                    </div><!--end col-->
                    <!-- PAGINATION END -->
                </div><!--end row-->
            </div>
        </div>
    </div>
</section>


@endsection
