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
                        <form class="login-form-main" method="POST" action="{{ route('frontend.user.profile.update_save') }}">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="d-lg-flex">
                                    <div class="login-form-input mb-lg-3 mb-2 me-lg-2 me-0">
                                        <input type="text" name="fname" class="form-control" value="{{auth()->user()->fname}}" required id="nameHelp" placeholder="first name" aria-describedby="nameHelp">
                                        <small> first name</small>
                                    </div>
                                    <div class="login-form-input mb-lg-3 mb-2 me-lg-2 me-0">
                                        <input type="text" name="sname" class="form-control" value="{{auth()->user()->sname}}" required id="nameHelp" placeholder="last name" aria-describedby="nameHelp">
                                        <small> last name</small>
                                    </div>
                                    <div class="login-form-input mb-lg-3 mb-2">
                                        <input type="email" name="email" class="form-control" value="{{auth()->user()->email}}" required id="emailHelp" placeholder=" email" aria-describedby="emailHelp">
                                        <small> email</small>
                                    </div>
                                </div>
                                <div class="d-lg-flex">
                                    <div class="mb-lg-3 mb-2 login-form-input form-password-eye-box me-lg-2 me-0">
                                        <input type="password" name="password"   class="form-control pe-5"  id="exampleInputPassword1">
                                       
                                        <span class="form-password-eye" id="passwordVis" onclick="passwordVisibility()">
                                            <i class="fa fa-eye" id="eyeopened" aria-hidden="true"></i>
                                       
                                        </span>
                                        <small> password </small>
                                    </div>
                                    <div class="login-form-input mb-lg-3 mb-2">
                                        <input type="tel" name="phone" class="form-control" value="{{auth()->user()->phone}}" id="phoneHelp" placeholder="phone number" aria-describedby="phoneHelp">
                                        <small> phone number</small>
                                    </div>
                                </div>
                                <div class="d-lg-flex mb-3">
                                    <div class="login-form-input mb-lg-3 mb-2 me-lg-2 me-0">
                                        <input type="text" name="code" value="{{auth()->user()->postal_code}}" class="form-control"  placeholder="postale code" value="34400" id="postalHelp" aria-describedby="postalHelp">
                                        <small> postale code</small>
                                    </div>
                                    <div class="login-form-input mb-md-0 mb-3">
                                        <input type="text" name="street" class="form-control" value="{{auth()->user()->street}}" placeholder="street name" id="addressHelp" aria-describedby="addressHelp">
                                        <small> street </small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <input type="submit" class="btn mb-1 main-btn" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
