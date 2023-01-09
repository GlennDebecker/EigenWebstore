@extends('layouts.auth')

@section('title', 'Confirm Password')

@section('content')
<div class="wrapper account-verification">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 ps-0 pe-0">
                <div class="form-side-display d-flex justify-content-center align-items-center">
                    <a href="{{ route('frontend.home') }}" class="d-inline-block">
                        <div class="form-side-logo mb-2">
                            <img src="{{ asset('/assets/frontend/img/Logo-Computerkopen.png') }}" alt="logo" class="img-fluid"/>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-8 ps-0 pe-0  forms-h">
                <div class="login-main">
                    <div class="login-main-content">
                        <h2><h2>{{ __('Confirm Password') }}</h2></h2>
                        <h5>  {{ __('Please confirm your password before continuing.') }}</h5>
                        <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <div class="login-form-input form-password-eye-box mb-3">
                            <input type="password" value="{{ old('password') }}" name="password" class="form-control pe-5 @error('password') is-invalid @enderror " placeholder="Password" id="exampleInputPassword1" required>
                            <span class="form-password-eye" id="passwordVis" onclick="passwordVisibility()">
                                <i class="fa fa-eye" id="eyeopened" aria-hidden="true"></i>
                            </span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                            <button type="submit" class="btn mb-3 main-btn w-100">{{ __('Confirm Password') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
