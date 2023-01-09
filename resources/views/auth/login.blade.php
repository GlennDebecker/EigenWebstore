@extends('layouts.auth')

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
                        <strong class="para-light">Welcome Back</strong>
                        <h2>Login to your Account</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3 login-form-input">
                                    <input placeholder="Email" id="email" type="email" class="input_email form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                            <div class="mb-3 login-form-input form-password-eye-box">
                                <div class="input_text" id="password">
                                    <input type="password" value="{{ old('password') }}" name="password" class="input_password form-control @error('password') is-invalid @enderror signup_pass" placeholder="Password" autocomplete="current-password" required>
                                    <span class="form-password-eye" id="passwordVis" onclick="passwordVisibility()">
                                        <i class="fa fa-eye" id="show_hide_password" aria-hidden="true"></i>
                                    </span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4 form-check d-flex justify-content-between">
                                <span>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                </span>
                                <a href="{{ route('password.request') }}" class="form-link-a" id="forget-password">Forget Password?</a>
                            </div>
                            <button type="submit" class="btn mb-3 main-btn w-100">Login</button>
                            <div>
                                <a href="{{ route('register') }}" id="register-new-user" class="form-link-a">Register As New User</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
    $("#show_hide_password").on('click', function(event) {
        event.preventDefault();
        if($('#password input').attr("type") == "text"){
            $('#password input').attr('type', 'password');
            $('#password #show_hide_password').addClass( "fa-eye-slash" );
            $('#password #show_hide_password').removeClass( "fa-eye" );
        }else if($('#password input').attr("type") == "password"){
            $('#password input').attr('type', 'text');
            $('#password #show_hide_password').removeClass( "fa-eye-slash" );
            $('#password #show_hide_password').addClass( "fa-eye" );
        }
    });
});
</script>
@endsection
