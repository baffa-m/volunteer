@extends('layouts.app')

@section('content')

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-7">
                <div class="card custom-form border-0">
                    <div class="card-body">
                        <form class="rounded shadow p-4" action="{{ route('profile')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            @include('profile.form')
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit2" name="send" class="submitBnt btn btn-primary" value="Apply Now">
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>
                </div><!--end custom-form-->
            </div>
        </div>
    </div><!--end container-->
</section>

@endsection
