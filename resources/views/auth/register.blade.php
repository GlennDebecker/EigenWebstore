@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<style>
    .card{
        height: 600px !important;
    }
</style>
<div class="">
    <div class="">
        <div class="">

            <div class="cnt">
                <div class="card">
                    <div class="form">
                        <div class="left-side">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="right-side">
                            <div class="signup_form s_form">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="login">
                                        <h2>Create Account</h2>
                                    </div>
                                    <div class="d-flex">
                                        <div class="input_text">
                                            <input type="text" value="{{ old('fname') }}" name="fname" class="form-control @error('fname') is-invalid @enderror" placeholder="First Name" autocomplete="first-name" required>
                                            <i class="fa fa-user"></i>

                                            @error('fname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input_text">
                                            <input type="text" value="{{ old('sname') }}" name="sname" class="form-control @error('sname') is-invalid @enderror" placeholder="Surname" autocomplete="surname" required>
                                            <i class="fa fa-user"></i>
                                            @error('sname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="input_text">
                                        <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" autocomplete="email" required>
                                        <i class="fa fa-envelope"></i>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input_text" id="password">
                                        <input type="password" value="{{ old('password') }}" name="password" class="form-control @error('password') is-invalid @enderror signup_pass" placeholder="Password" autocomplete="new-password" required>
                                        <i class="fa fa-lock"></i>
                                        <i id="show_hide_password" class="fa fa-eye-slash signup_eye"></i>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input_text" id="conf_password">
                                        <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror signup_pass" placeholder="Password" autocomplete="new-password" required>
                                        <i class="fa fa-lock"></i>
                                        <i id="conf_show_hide_password" class="fa fa-eye-slash signup_eye"></i>
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input_text">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="tc" id="tc" {{ old('tc') ? 'checked' : '' }} required>

                                            <label class="form-check-label" for="tc">
                                                I agree to the <a href="#" target="_blank" class="link-primary">Terms and Conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="login_btn">
                                        <button type="submit" class="signup_button">Sign Up</button>
                                    </div>
                                    <div class="create">
                                        <p>Already have an account? <a href="{{ route('login') }}" class="login_acc">Login <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
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
            if ($('#password input').attr("type") == "text") {
                $('#password input').attr('type', 'password');
                $('#password #show_hide_password').addClass("fa-eye-slash");
                $('#password #show_hide_password').removeClass("fa-eye");
            } else if ($('#password input').attr("type") == "password") {
                $('#password input').attr('type', 'text');
                $('#password #show_hide_password').removeClass("fa-eye-slash");
                $('#password #show_hide_password').addClass("fa-eye");
            }
        });

        $("#conf_show_hide_password").on('click', function(event) {
            event.preventDefault();
            if ($('#conf_password input').attr("type") == "text") {
                $('#conf_assword input').attr('type', 'password');
                $('#conf_assword #conf_show_hide_password').addClass("fa-eye-slash");
                $('#conf_assword #conf_show_hide_password').removeClass("fa-eye");
            } else if ($('#conf_password input').attr("type") == "password") {
                $('#conf_password input').attr('type', 'text');
                $('#conf_password #conf_show_hide_password').removeClass("fa-eye-slash");
                $('#conf_password #conf_show_hide_password').addClass("fa-eye");
            }
        });
    });

</script>

@endsection

