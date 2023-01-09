@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
<div class="wrapper account-verification">
    <div class="container-fluid">
        <form method="POST" action="{{ route('password.email') }}">
        @csrf
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
                        <h2><h2>{{ __('Reset Password') }}</h2></h2>
                        <form class="login-form-main">
                            <div class="mb-3 login-form-input">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $email ?? old('email') }}" placeholder="email@example.com" id="email" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn mb-3 main-btn w-100">Send Password</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </form>
    </div>
</div>
@endsection

