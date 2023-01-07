@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="main-wrapper position-relative">
    <div class="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <strong class="para-light">Our Products</strong>
                        <h1>Includes All Featured, with Exra Ordinary Specs</h1>
                        <p>A Magical and Revolutionary device at an unbelievable price. Does more, cost less
                            & its that simple. A Magical and Revolutionary device at an unbelievable price.
                            Does more, cost less & its that simpple.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-image">
                        <img src="{{ asset('assets/frontend/img/imac-svgrepo-com.svg') }}" alt="computers" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-products mt-0 pb-lg-5 pb-3 pt-lg-5 pt-3">
        <div class="container">
            <div>
                <h1>Our Products</h1>
            </div>
            <div class="row">
                <div class="col-xl-4  col-sm-6">
                    <div class="card-wrap d-lg-flex flex-column justify-content-center align-items-center">
                        <a href="{{ route('frontend.product', 1) }}" class="w-100 mb-2">
                            <div class="image">
                                <img src="{{ asset('assets/frontend/img/product-1.jpg') }}" alt="products" class="img-fluid" />
                            </div>
                        </a>
                        <div class="ps-sm-3 ps-2 pe-sm-3 pe-2 pb-sm-3 pb-2 pt-0">
                            <div class="name">
                                <strong><a href="{{ route('frontend.product', 1) }}">Acer Aspire XC-1760 I5410</a></strong>
                            </div>
                            <div class="details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, illo!</p>
                                <div class="d-flex justify-content-between align-items-center ratings-wrap">
                                    <ul>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                    <span>99 Reviews</span>
                                </div>
                                <div class="specs">
                                    <span>Intel Core i5 processor</span>
                                    <span> Shared video card</span>
                                    <span>32 gb ram</span>
                                </div>
                            </div>
                            <div class="cart d-flex justify-content-between">
                                <div>
                                    <strong>Delivery tomorrow</strong>
                                    <p>Available for pickup even sooner in 3 Coolblue stores</p>
                                </div>
                                <a href="" class="main-btn">
                                    <span>
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="price">
                                <span>Price</span>
                                <div>
                                    <span>$</span><span>300</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
