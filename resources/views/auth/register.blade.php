@extends('layouts.app')

@section('content')
<div class="wrapper account-verification">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 ps-0 pe-0">
                <div class="form-side-display d-flex justify-content-center align-items-center">
                    <a href="{{ route('frontend.home') }}" class="d-inline-block">
                        <div class="form-side-logo mb-2">
                            <img src="{{ asset('assets/frontend/img/Logo-Computerkopen.png') }}" alt="logo" class="img-fluid"/>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-8 ps-0 pe-0  forms-h">
                <div class="login-main">
                    <div class="login-main-content">
                        <strong class="para-light">Hello User</strong>
                        <h2>Create a New Account</h2>
                        <form class="login-form-main" method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="d-flex mb-0 mb-md-3  form-row justify-content-between">
                                <div class="login-form-input me-md-2 me-0 mb-md-0 mb-3">
                                    <input type="text" value="{{ old('fname') }}" name="fname" class="form-control @error('fname') is-invalid @enderror" placeholder="First Name" autocomplete="first-name" required>
                                    @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="login-form-input mb-md-0 mb-3">
                                    <input type="text" value="{{ old('sname') }}" name="sname" class="form-control @error('sname') is-invalid @enderror" placeholder="Surname" autocomplete="surname" required>
                                    @error('sname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex mb-0 mb-md-3  form-row justify-content-between">
                                <div class="login-form-input me-md-2 me-0 mb-md-0 mb-3">
                                    <select class="form-select" name="gender" required>
                                        <option hidden>Gender</option>
                                        <option value="1" @if(old('gender') == 1) selected @endif>Male </option>
                                        <option value="2" @if(old('gender') == 2) selected @endif>Female</option>
                                        <option value="3" @if(old('gender') == 3) selected @endif>Neither</option>
                                    </select>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="login-form-input mb-md-0 mb-3">
                                    <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" autocomplete="email" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex mb-0 mb-md-3 form-row justify-content-between">
                                <div class="login-form-input form-password-eye-box me-md-2 me-0 mb-md-0 mb-3">
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
                                <div class="login-form-input form-password-eye-box mb-md-0 mb-3">
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
                            </div>
                            <div class="d-flex mb-0 mb-md-3  form-row justify-content-between">
                                <div class="login-form-input me-md-2 me-0 mb-md-0 mb-3">
                                    <input type="text" value="{{ old('postal_code') }}" name="postal_code" class="form-control @error('postal_code') is-invalid @enderror" placeholder="Postal Code" id="exampleInputName1" aria-describedby="emailHelp">

                                    @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="login-form-input mb-md-0 mb-3">
                                    <input type="text" value="{{ old('street') }}" name="street" class="form-control @error('street') is-invalid @enderror" placeholder="Street, House No." id="exampleInputName2" aria-describedby="emailHelp">

                                    @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex mb-0 mb-md-3  form-row justify-content-between">
                                <div class="login-form-input me-md-2 me-0 mb-md-0 mb-3">
                                    <input type="text" value="{{ old('city') }}" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="City" id="exampleInputName2" aria-describedby="emailHelp">

                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="login-form-input mb-md-0 mb-3">
                                    <input type="text" value="{{ old('phone') }}" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone" id="exampleInputName1" aria-describedby="emailHelp" required>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn mb-3 main-btn w-100" href="#your-link">Register</button>
                            <div class="d-flex align-items-center">
                                <span class="me-1">Already Have an Account? </span><a href="{{ route('login') }}" id="register-new-user" class="form-link-a">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

