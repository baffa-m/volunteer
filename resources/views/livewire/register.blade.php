<div wire:ignore.self>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div wire:ignore.self class="modal fade" id="register-popup" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog  modal-lg modal-dialog-centered">
            <div class="modal-content rounded shadow border-0">
                <div class="modal-body p-0">
                    <div class="container-fluid px-0">
                        <div class="row align-items-center g-0">
                            <div class="col-lg-6 col-md-5">
                                <img src="assets/images/course/online/ab02.jpg" class="img-fluid" alt="">
                            </div><!--end col-->

                            <div class="col-lg-6 col-md-7">
                                <form class="login-form p-4" wire:submit.prevent="submitForm">
                                    @csrf
                                    <h5 class="mb-3 text-center">Register your account</h5>

                                    <div class="form-floating mb-2">
                                        <input name="name" wire:model.defer="name" type="text" class="form-control" id="floatingInput" placeholder="Harry">
                                        <label for="floatingInput">Name</label>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-floating mb-2">
                                        <input name="email" wire:model.defer="email" type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                                        <label for="floatingEmail">Email Address</label>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input name="password" wire:model.defer="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input wire:model.defer="password_confirmation" name="password_confirmation" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Confirm Password</label>
                                    </div>

                                    <div class="form-check mb-3">
                                        <input wire:model.defer="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                    </div>

                                    <button class="btn btn-primary w-100" type="submit">Register</button>

                                    <div class="col-12 text-center mt-3">
                                        <p class="mb-0 mt-3"><small class="text-dark me-2">Already have an account ?</small> <a href="auth-bs-login.html" class="text-dark fw-bold">Sign in</a></p>
                                    </div><!--end col-->

                                    <div class="col-12 text-center mt-3">
                                        <a href="{{ route('register.organization') }}" class="text-dark fw-bold"><small class="text-dark me-2">Register as an Organization</small></a>
                                    </div><!--end col-->

                                </form>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div>
            </div>
        </div>
    </div>
</div>
