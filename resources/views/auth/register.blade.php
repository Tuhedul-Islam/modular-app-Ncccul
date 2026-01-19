@extends('layouts.app')
@section('title')
    Register
@endsection
@section('content')
    <div class="card-body p-4 p-sm-5">
        <div class="text-center mb-5">
            <h3 class="card-title">NCCCUL ERP</h3>
            <h5 class="card-title">Sign Up</h5>
        </div>
        <form class="form-body" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-xl-6 col-sm-6">
                    <label for="inputName" class="form-label">Name <span class="text-danger">*</span></label>
                    <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                        <input type="text" name="name" class="form-control radius-1 ps-5" id="inputName" placeholder="Enter Name">
                        @error('name')
                            <span class="invalid-feedback position-absolute left-0 d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-xl-6 col-sm-6">
                    <label for="validationCustom04" class="form-label">Gender <span class="text-danger">*</span></label>
                    <select class="form-select radius-1" name="gender_id">
                        @foreach (\App\Constants::GENDER as $genderKey => $genderValue)
                            <option value="{{ $genderKey }}">{{ $genderValue }}</option>
                        @endforeach
                    </select>
                    @error('gender_id')
                        <span class="invalid-feedback position-absolute left-0 d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row {{ $errors->any() ? 'mt-5' : 'mt-3'}}">
                <div class="col-xl-6 col-sm-6">
                    <label for="inputMobile" class="form-label">Mobile <span class="text-danger">*</span></label>
                    <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-badge"></i></div>
                        <input type="text" class="form-control radius-1 ps-5" name="mobile" id="inputMobile" placeholder="Enter Number">
                        @error('mobile')
                            <span class="invalid-feedback position-absolute left-0 d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <label for="inputChooseOrga" class="form-label">Organization <span class="text-danger">*</span></label>
                    <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                        <input type="text" class="form-control radius-1 ps-5" name="organization" id="inputChooseOrga" placeholder="Enter Organization">
                        @error('organization')
                            <span class="invalid-feedback position-absolute left-0 d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row {{ $errors->any() ? 'mt-5' : 'mt-3'}}">
                <div class="col-xl-6 col-sm-6">
                    <label for="inputOccu" class="form-label">Occupation/Designation <span class="text-danger">*</span></label>
                    <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                        <input type="text" class="form-control radius-1 ps-5" name="occupation_designation" id="inputOccu" placeholder="Enter Occupation">
                        @error('occupation_designation')
                            <span class="invalid-feedback position-absolute left-0 d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <label for="inputPresent" class="form-label">Present Address <span class="text-danger">*</span></label>
                    <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-bookmarks-fill"></i></div>
                        <input type="text" class="form-control radius-1 ps-5" name="present_address" id="inputPresent" placeholder="Enter Address">
                        @error('present_address')
                            <span class="invalid-feedback position-absolute left-0 d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

            </div>

            <div class="row {{ $errors->any() ? 'mt-5' : 'mt-3'}}">
                <div class="col-xl-6 col-sm-6">
                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                    <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                        <input type="email" class="form-control radius-1 ps-5" name="email" id="inputEmailAddress" placeholder="Email Address">
                        @error('email')
                            <span class="invalid-feedback position-absolute left-0 d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <label for="inputChoosePassword2" class="form-label">Enter Password <span class="text-danger">*</span></label>
                    <div class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                    <input type="password" class="form-control radius-1 ps-5 @error('password') is-invalid @enderror" id="inputChoosePassword2" placeholder="Enter Password">
                     @if(!$errors->has('password'))
                        <div class="position-absolute top-50 end-0 translate-middle-y pe-3 cursor-pointer">
                            <i class="bi bi-eye-fill" id="togglePassword2"></i>
                        </div>
                    @endif
                    </div>
                </div>
            </div>

            <div class="col-12 {{ $errors->any() ? 'mt-5' : 'mt-3'}}">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="termsCheckbox">
                    <label class="form-check-label" for="termsCheckbox" >
                        I Agree to the Terms & Conditions
                    </label>
                </div>
            </div>
            <div class="col-12">
                <div class="d-grid mb-2">
                    <button type="submit" class="btn btn-primary radius-1" id="submitBtn">Sign Up</button>
                </div>
                <a href="{{route('login')}}">Already have an account?</a>
            </div>
        </form>
   
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkbox = document.getElementById('termsCheckbox');
        const submitBtn = document.getElementById('submitBtn');

        submitBtn.disabled = true;

        checkbox.addEventListener('change', function () {
            submitBtn.disabled = !this.checked;
        });
    });

    const togglePassword = document.querySelector('#togglePassword2');
    const passwordInput = document.querySelector('#inputChoosePassword2');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.classList.toggle('bi-eye-fill');
        this.classList.toggle('bi-eye-slash-fill');
    });
</script>
@endsection