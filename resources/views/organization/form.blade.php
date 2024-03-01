<input hidden type="text" name="user_id" value="{{ auth()->user()->id }}">
<div class="row">
<div class="col-md-6">
    <div class="mb-3">
        <label class="form-label">Organization Name:<span class="text-danger">*</span></label>
        <div class="form-icon position-relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm icons"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            <input name="org_name" id="org_name" value="{{ auth()->user()->name }}" type="text" class="form-control ps-5" placeholder="Organization Name :">
        </div>
        @error('org_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div><!--end col-->
<div class="col-md-6">
    <div class="mb-3">
        <label class="form-label">Your Email :<span class="text-danger">*</span></label>
        <div class="form-icon position-relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail fea icon-sm icons"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            <input name="email" id="email" value="{{ auth()->user()->email }}" type="email" class="form-control ps-5" placeholder="Your email :">
        </div>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div><!--end col-->
<div class="col-md-6">
    <div class="mb-3">
        <label class="form-label">Address :<span class="text-danger">*</span></label>
        <div class="form-icon position-relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone fea icon-sm icons"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            <input name="address" id="address" value="{{ old('address', isset($user->organization->address) ? $user->organization->address : null) }}" type="text" class="form-control ps-5" placeholder="Address :">
        </div>
        @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div><!--end col-->
<div class="col-md-6">
    <div class="mb-3">
        <label class="form-label">State :</label>
        <select name="state_id" class="form-control form-select" id="Sortbylist-Shop">
            <option>Select State</option>
            @foreach ($states as $state)
            <option value="{{ $state->id}}">{{ $state->state_name }}</option>
            @endforeach
        </select>
        @error('state_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div><!--end col-->

<div class="col-md-12">
    <div class="mb-3">
        <label class="form-label">About Us :</label>
        <div class="form-icon position-relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle fea icon-sm icons"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
            <textarea name="about" id="about" rows="4" class="form-control ps-5" placeholder="About Organization :">{{ old('about', isset($user->organization->about) ? $user->organization->about : null) }}</textarea>
        </div>
        @error('about')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div><!--end col-->
<div class="col-md-12">
    <div class="mb-3">
        <label for="formFile" class="form-label">Upload Avatar :</label>
        <input name="avatar_path" class="form-control" type="file" id="formFile">
        @error('avatar_path')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div><!--end col-->
</div><!--end row-->
