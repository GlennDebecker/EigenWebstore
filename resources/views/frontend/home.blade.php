@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="main-wrapper position-relative">
    <div class="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <strong class="para-light">
                            {{ __('home.we_deal') }}
                        </strong>
                        <h1>
                            {{ __('home.banner_heading') }}
                        </h1>
                        <p>A Magical and Revolutionary device at an unbelievable price. Does more, cost less & its that simple.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-image">
                        <img src="{{ asset('/assets/frontend/img/shop-banner.png') }}" alt="computers" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-products pb-lg-5 pb-3 home-products">
        <div class="container">
        </div>
    </div>
    <div class="about-me pb-lg-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pe-lg-0">
                    <div class="about-box">
                        <div >
                            <strong class="para-light text-align-start">A bit more about me</strong>
                            <h1>Who  Am I?</h1>
                        </div>
                        <div class="image mb-3">
                            <img src="{{ asset('/assets/frontend/img/question-mark.svg') }}"/>
                        </div>
                        <p class="mb-3">Hi, I'm <strong>Glenn</strong>. I will make you a custom computer for your budget and needs</p>
                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum tenetur quibusdam est explicabo! Beatae ad sunt, nam doloribus facere delectus officiis excepturi quis, mollitia necessitatibus velit iure architecto eos nihil.</p>
                        <strong class="para-light">Owner, ComputerKopen</strong>
                    </div>
                </div>
                <div class="col-lg-7 ps-lg-0">
                    <div class="account-verification">
                        <div class="container">
                            <div class="get-in-touch">
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
            </div>
        </div>
    </div>
    <div class="our-cards">
        <div class="container">
            <div class="row ">

                <div class="col-xl-3 col-sm-6">
                    <div class="card l-bg-blue-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fa fa-users"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Customers</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        15.07k
                                    </h2>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="d-flex align-items-center"><span class="me-2">9.23%</span> <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card l-bg-green-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fa fa-ticket"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Orders Delivered</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        999
                                    </h2>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="d-flex align-items-center"><span class="me-2">10% </span><i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@if (!auth()->user())
    

<!-- Momenteel uitgezet -> Ga ik later implementeren zodat er een cookie pop-up komt die ze kunnen accepteren. 
{{-- Cookie --}}
<div class="cookies-section">
    <div class="modal fade" id="cookiesModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cookiesModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cookiesModalLabel">We Use Cookies</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Cookies help us to improve your buying experience, serve personalized ads or content, and analyze our traffic. By clicking "Accept All" you consent to our use of cookies.<a href="/cookie-settings.html">Read more</a></a></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Reject All</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Accept All</button>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endif
@endsection
