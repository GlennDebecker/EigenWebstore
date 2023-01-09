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
                        <h2><h2>Confirm Password</h2></h2>
                        <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                            <div class="mb-3 login-form-input">
                                <input placeholder="Email" id="email" type="email"
                                class="input_email form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
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
                            <div class="login-form-input form-password-eye-box mb-3">
                                <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" class="input_password form-control @error('password_confirmation') is-invalid @enderror signup_pass pe-5" placeholder="Confirm Password" id="exampleInputPassword2">
                                <span class="form-password-eye" id="passwordVis" onclick="passwordConfirm()">
                                    <i class="fa fa-eye" id="eyeopened" aria-hidden="true"></i>
                                </span>
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <button type="submit" class="btn mb-3 main-btn w-100">Reset Password</button>
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

        $("#conf_show_hide_password").on('click', function(event) {
            event.preventDefault();
            if ($('#conf_password input').attr("type") == "text") {
                $('#conf_password input').attr('type', 'password');
                $('#conf_password #conf_show_hide_password').addClass("fa-eye-slash");
                $('#conf_password #conf_show_hide_password').removeClass("fa-eye");
            } else if ($('#conf_password input').attr("type") == "password") {
                $('#conf_password input').attr('type', 'text');
                $('#conf_password #conf_show_hide_password').removeClass("fa-eye-slash");
                $('#conf_password #conf_show_hide_password').addClass("fa-eye");
            }
        });
    });
</script>





@endsection
