@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="position-relative contact-page-wrap">
    <banner class="faqs-banner">
        <div class="image">
            <img src="{{ asset('assets/frontend/img/contact.svg') }}" alt="faqs" class="img-fluid" />
        </div>
    </banner>
    <div class="account-verification faqs-body">
        <div class="container content  mb-5">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="contact-box">
                        <h1>Contact Us</h1>
                        <p>Need help? Have a question? We are here to assist. Send us a message and we’ll be in touch shortly.</p>
                        <div class="wrap">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex mb-3 align-items-center">
                                        <span class="me-sm-3 me-2 ref-icon d-flex justify-content-center align-items-center"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                        <strong class="flex-1">19-B, North Belgium, IT Tower Shop#471</strong>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex mb-3 align-items-center">
                                        <span class="me-sm-3 me-2 ref-icon d-flex justify-content-center align-items-center"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                                        <strong>Call: 03 456 100 100 </strong>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex mb-3 align-items-center">
                                        <span class="me-sm-3 me-2 ref-icon d-flex justify-content-center align-items-center"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                        <strong>contact@example.com</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="get-in-touch contact-main mb-4">
                <strong class="para-light">Need help?</strong>
                <h1>Get in Touch</h1>
                <form class="login-form-main" method="POST" action="{{ route('frontend.save_claim') }}">
                    @csrf
                    <div class="d-flex mb-0 mb-md-3  form-row justify-content-between">
                        <div class="login-form-input me-md-2 me-0 mb-md-0 mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" id="nameHelp" aria-describedby="emailHelp" required>
                        </div>
                        <div class="login-form-input mb-md-0 mb-3">
                            <input type="email" class="form-control" name="email" placeholder="email@example.com" id="emailHelp" aria-describedby="emailHelp" required>
                        </div>
                    </div>
                    <div class="d-flex mb-0 mb-md-3 form-row justify-content-between">
                        <div class="login-form-input me-md-2 me-0 mb-md-0 mb-3">
                            <input type="tel" class="form-control" name="phone" placeholder="Phone Number" id="phoneHelp" aria-describedby="emailHelp" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control form-control-input" style="white-space: pre-wrap;" id="exampleFormControlTextarea1" rows="6" name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="d-flex justify-content-end align-items-center mb-3">
                  
                        <input class="btn main-btn" type="submit" value="submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
