@extends('layouts.app')
@section('title')
    Login
@endsection

@section('content')
<div class="card-body p-4 p-sm-5">
    <div class="mb-5">
        <h3 class="card-text text-center">NCCCUL ERP</h3>
        <h5 class="card-title text-center">Sign In</h5>
    </div>
    <form class="form-body" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <label for="inputEmailAddress" class="form-label">Email/ Mobile <span class="text-danger">*</span></label>
                <div class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-fill"></i></div>
                    <input type="text" name="email" class="form-control radius-1 ps-5 @error('email') is-invalid @enderror" id="inputEmailAddress" placeholder="Enter Email or Mobile" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback position-absolute left-0 mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <label for="inputChoosePassword" class="form-label mt-3">Enter Password <span class="text-danger">*</span></label>
                <div class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                    <input type="password" id="inputChoosePassword" name="password" class="form-control radius-1 ps-5 @error('password') is-invalid @enderror" placeholder="Enter Password">
                    <div class="position-absolute top-50 end-0 translate-middle-y pe-3 cursor-pointer"><i class="bi bi-eye-fill" id="togglePassword"></i></div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                
            </div>

            <div class="col-6 text-end">	
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Password ?
                    </a>
                @endif
            </div>

            <div class="col-12">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary radius-1">Sign In</button>
                </div>
            </div>
            <div class="col-12">
                <p class="mb-0">Don't have an account yet? <a href="{{ route('register') }}">Sign up here</a></p>
            </div>
        </div>
    </form>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const passwordInput = document.querySelector('#inputChoosePassword');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('bi-eye-fill');
            this.classList.toggle('bi-eye-slash-fill');
        });
    </script>
</div>
@endsection
