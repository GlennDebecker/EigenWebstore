@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<div class="">
    <div class="">
        <div class="">
            {{-- <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}


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
                            <div class="signin_form s_form">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="login">
                                        <h2>User Login</h2>
                                    </div>
                                    <div class="input_text">
                                        <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <i class="fa-solid fa-envelope"></i>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input_text" id="password">
                                        <input type="password" value="{{ old('password') }}" name="password" class="form-control @error('password') is-invalid @enderror signup_pass" placeholder="Password" autocomplete="current-password" required>
                                        <i class="fa fa-lock"></i>
                                        <i id="show_hide_password" class="fa fa-eye-slash signup_eye"></i>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input_text">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="login_btn">
                                        <button type="submit" class="login_button">Login</button>
                                    </div>
                                    <div class="forgot">
                                        <p>Forgot <a href="{{ route('password.request') }}">Password</a> ?
                                        </p>
                                    </div>
                                    <div class="create margin">
                                        <a href="{{ route('register') }}" class="create_acc">Create your Account <i
                                                class="fa fa-long-arrow-right"></i>
                                        </a>
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
