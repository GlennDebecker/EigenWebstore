@extends('layouts.app')

@section('title', 'Product')

@section('content')

<div class="products-detail">
    <div class="container">
        <div class="wrap">
            <div class="head">
                <h2>{{$product->name}}</h2>
                <strong>{{$product->CPU}} - {{$product->RAM}}GB - {{$product->storage}}GB SSD </strong>
            </div>
            <div class="row mb-lg-5 mb-3">
                <div class="col-lg-4">
                    <div class="image">
                        <img src="{{ asset($product->images[0]->path) }}" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="pros-con">
                        <div class="d-flex align-items-center mb-3 flex-wrap">
                            <h4 class="me-3 mb-0">Pros and cons</h4>
                            <span>According to me</span>
                        </div>
                        <ul class="mb-3">
                            @foreach ($pros as $pro)
                            <li class="true">
                                <p>{{$pro}}</p>
                            </li>
                            @endforeach
                            @foreach ($cons as $con)
                            <li class="false">
                                <p>{{$con}}</p>
                            </li>
                            @endforeach
                         
                          
                        </ul>
                    </div>
                    <div class="price d-md-flex justify-content-between align-items-center flex-wrap">
                        <div class="d-flex mb-md-0 mb-2">
                            <strong class="me-3">Price:</strong>
                            <strong>
                                <span>€</span><span>{{$product->price}}</span>
                            </strong>
                        </div>
                        <div class="buy-btns d-flex align-items-center justify-content-center">
                            @if (auth()->user())
                                @if (auth()->user()->role==1)
                                <a href="{{ route('frontend.user.chat', ['pre'=>'Could I please get more info for this '.$product->name]) }}" class="main-btn d-flex align-items-center me-3">
                                    <span class="me-2">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>
                                    <span class="text">Request more info</span>
                                </a>
                                @endif
                            @endif
                        

                        </div>
                    </div>
                </div>
            </div>
      
            <div class="row mb-lg-5 mb-3">
               <div class="col-lg-6">
                    <div class="suggestions pe-md-3">
                        <h4>Description</h4>
                        <ul>
                            <li>
                                <p  >
                                    {{ $product->description }}
                                </p>
                               
                            </li>
                      
                        </ul>
                    </div>
               </div>
               <div class="col-lg-6">
                    <div class="specs table-responsive">
                        <table class="table table-success table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <th>
                                        <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                    </th>
                                    <td>Processor</td>
                                    <td>{{$product->CPU}}</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                    </th>
                                    <td>Internal RAM</td>
                                    <td>{{$product->RAM}} GB</td>
                                </tr>
                             
                                <tr>
                                    <th>
                                        <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                    </th>
                                    <td>Total storage capacity</td>
                                    <td>{{$product->storage}} GB</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                    </th>
                                    <td>Storage type</td>
                                    <td>SSD</td>
                                </tr>
                       
                                <tr>
                                    <th>
                                        <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                    </th>
                                    <td>Speed class</td>
                                    <td>{{$product->speed}}</td>
                                </tr>
                            </tbody>
                          </table>
                    </div>
               </div>
            </div>
            <div class="row mb-lg-5 mb-3">
                <div class="col-lg-8">
                    <h4>Customer Images</h4>
                    <div class="customer-images d-flex justify-content-start align-items-center flex-wrap">
                        @foreach ($product->images as $image)
                        <div class="image">
                            <img src="{{ asset($image->path) }}" alt="parts" class="img-fluid"/>
                        </div>
                        @endforeach
                       
              
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
