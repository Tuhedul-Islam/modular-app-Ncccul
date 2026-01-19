@extends('layouts.app')
@section('title')
    Reset Password
@endsection
@section('content')
<div class="card-body p-4 p-sm-5">
    <div class="mb-5">
        <h3 class="card-text text-center">NCCCUL ERP</h3>
        <h5 class="card-title text-center">Reset Password</h5>
    </div>
    <form class="form-body" action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <label for="inputEmailAddress" class="form-label">Email/ Mobile <span class="text-danger">*</span></label>
                <div class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-fill"></i></div>
                    <input type="email" name="email" class="form-control radius-1 ps-5 @error('email') is-invalid @enderror" id="inputEmailAddress" placeholder="Enter Email or Mobile" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary radius-1 mb-2">Send Password Reset Link</button>
                    <a href="{{route('login')}}">Already have an account?</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection