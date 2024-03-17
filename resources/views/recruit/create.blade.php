@extends('layouts.app')


@section('content')

<section class="section">
    <div class="container">
        <form class="rounded shadow p-4" method="POST" action="{{ route('recruit.store')}}">
            @csrf
            <input type="hidden" name="organization_id" value="{{ auth()->user()->organization->id }}">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Title :<span class="text-danger">*</span></label>
                        <div class="form-icon position-relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm icons"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            <input name="post_title" id="post_title" type="text" class="form-control ps-5" placeholder="Post Title :">
                            @error('post_title')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Location :<span class="text-danger">*</span></label>
                        <div class="form-icon position-relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail fea icon-sm icons"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <input name="location" id="location" type="text" class="form-control ps-5" placeholder="Location :">
                            @error('location')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">State :</label>
                        <select name="state_id" class="form-control form-select" id="Sortbylist-Shop">
                            <option value="">Select State</option>
                            @foreach ($states as $state)
                            <option value="{{ $state->id}}">{{ $state->state_name }}</option>
                            @endforeach
                        </select>
                        @error('state_id')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div><!--end col-->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Category :</label>
                        <select name="category_id" class="form-control form-select" id="Sortbylist-Shop">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div><!--end col-->
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Responsibilities :</label>
                        <div class="form-icon position-relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle fea icon-sm icons"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                            <textarea name="responsibilities" id="responsibilities" rows="4" class="form-control ps-5" placeholder="Responsibilities of the job :"></textarea>
                            @error('responsibilities')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Description :</label>
                        <div class="form-icon position-relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle fea icon-sm icons"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                            <textarea name="description" id="description" rows="4" class="form-control ps-5" placeholder="Description of the job :"></textarea>
                            @error('description')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div><!--end col-->

            </div><!--end row-->
            <div class="row">
                <div class="col-sm-12">
                    <input type="submit" id="submit2" name="send" class="submitBnt btn btn-primary" value="Submit">
                </div><!--end col-->
            </div><!--end row-->
        </form>
    </div><!--end container-->
</section>


@endsection
