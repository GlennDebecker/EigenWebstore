@extends('layouts.app')

@section('title', 'Update')

@section('content')

<div class="position-relative contact-page-wrap">
    <banner class="faqs-banner">
        <div class="image">
            <img src="{{ asset('/assets/frontend/img/settings.svg') }}" alt="Update Profile" class="img-fluid" />
        </div>
    </banner>
    <div class="settings account-verification faqs-body">
        <div class="container content  mb-5">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="contact-box">
                        <strong class="para-light">Need change?</strong>
                        <h1>Update Profile</h1>
                        <form class="login-form-main">
                            <div class="form-row">
                                <div class="d-lg-flex">
                                    <div class="login-form-input mb-lg-3 mb-2 me-lg-2 me-0">
                                        <input type="text" class="form-control" value="JustGlenn" id="nameHelp" aria-describedby="nameHelp">
                                    </div>
                                    <div class="login-form-input mb-lg-3 mb-2">
                                        <input type="email" class="form-control" value="email@example.com" id="emailHelp" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="d-lg-flex">
                                    <div class="mb-lg-3 mb-2 login-form-input form-password-eye-box me-lg-2 me-0">
                                        <input type="password" class="form-control pe-5" value="Password123" id="exampleInputPassword1">
                                        <span class="form-password-eye" id="passwordVis" onclick="passwordVisibility()">
                                            <i class="fa fa-eye" id="eyeopened" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="login-form-input mb-lg-3 mb-2">
                                        <input type="tel" class="form-control" value="03058427980" id="phoneHelp" aria-describedby="phoneHelp">
                                    </div>
                                </div>
                                <div class="d-lg-flex mb-3">
                                    <div class="login-form-input mb-lg-3 mb-2 me-lg-2 me-0">
                                        <input type="text" class="form-control" value="34400" id="postalHelp" aria-describedby="postalHelp">
                                    </div>
                                    <div class="login-form-input mb-md-0 mb-3">
                                        <input type="text" class="form-control" value="Street, House No." id="addressHelp" aria-describedby="addressHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a class="btn mb-1 main-btn" href="#your-link">Update</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
