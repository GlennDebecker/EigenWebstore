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
                        <p>Do you want a custom made computer? But you do not know anything about computers?
                            You can choose one from our examples and customize it to your needs, just tell me for what you need the computer and what the budget is, I do the rest.
                        </p>
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
                @foreach ($products as $product )
                <div class="col-xl-3  col-sm-6">
                    <div class="card-wrap d-lg-flex flex-column justify-content-center align-items-center">
                        <a href="{{ route('frontend.product', $product->id) }}" class="w-100 mb-2">
                            <div class="image p-xxl-3 p-2 pb-0">
                                <img src="{{ asset($product->images[0]->path) }}" alt="product" class="img-fluid"/>
                            </div>
                        </a>
                        <div class="ps-sm-3 ps-2 pe-sm-3 pe-2 pb-sm-3 pb-2 pt-0">
                            <div class="name">
                                <strong><a href="{{ route('frontend.product', $product->id) }}">{{$product->name}}</a></strong>
                            </div>
                            <div class="details">
                                <p>{{$product->title}}</p>
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
                                    
                                </div>
                                <div class="specs">
                                    <span>{{$product->CPU}}</span>
                                    <span>{{$product->speed}} GHz</span>
                                    <span>{{$product->RAM}} GB RAM</span>
                                
                                </div>
                                
                            </div>
                       
                            <div class="price">
                                <span>Price</span>
                                <div>
                                    <span>€</span><span>{{$product->price}}</span>
                                </div>
                            </div>
                            @if (auth()->user())
                                @if (auth()->user()->role==1)
                                <div class="cart d-flex justify-content-between">
                                    <div>
                                        <strong>Contact Admin</strong>
                                    </div>
                                    <a href="{{ route('frontend.user.chat', ['pre'=>'Can I order this '.$product->name]) }}" class="main-btn">
                                        <span><i class="fa fa-comment" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                </div>
                                @endif
                                
                            @endif
                        
                        </div>
                    </div>
                </div>
                @endforeach
             
            </div>
        </div>
    </div>
</div>
@endsection
