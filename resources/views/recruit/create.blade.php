@extends('layouts.app')


@section('content')

<section class="section">
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Post Title <span class="text-danger">*</span></label>
                        <div class="form-icon position-relative">
                            <i data-feather="user" class="fea icon-sm icons"></i>
                            <input name="post_title" id="post_title" type="text" class="form-control ps-5" placeholder="Title :">
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Slots <span class="text-danger">*</span></label>
                        <div class="form-icon position-relative">
                            <i data-feather="mail" class="fea icon-sm icons"></i>
                            <input name="post_openings" id="post_openings" type="number" class="form-control ps-5">
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Location </label>
                        <div class="form-icon position-relative">
                            <i data-feather="book" class="fea icon-sm icons"></i>
                            <input name="subject" id="subject" class="form-control ps-5" placeholder="Address :">
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Responsibilities </label>
                        <div class="form-icon position-relative">
                            <i data-feather="message-circle" class="fea icon-sm icons"></i>
                            <textarea name="responsibilities" id="responsibilities" rows="4" class="form-control ps-5" placeholder="Key Responsibilities :"></textarea>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
            <div class="row">
                <div class="col-sm-12">
                    <input type="submit" id="submit" name="send" class="btn btn-primary" value="Submit">
                </div><!--end col-->
            </div><!--end row-->
        </form>
    </div><!--end container-->
</section>


@endsection
