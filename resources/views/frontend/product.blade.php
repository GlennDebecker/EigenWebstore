@extends('layouts.app')

@section('title', 'Product')

@section('content')

<div class="products-detail">
    <div class="container">
        <div class="wrap">
            <div class="head">
                <h2>Acer Aspire XC-1760 I5410</h2>
                <strong>i5 - 8GB - 256GB SSD + 1TB HDD</strong>
            </div>
            <div class="row mb-lg-5 mb-3">
                <div class="col-lg-4">
                    <div class="image">
                        <img src="{{ asset('assets/frontend/img/product-1.jpg') }}" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="pros-con">
                        <div class="d-flex align-items-center mb-3 flex-wrap">
                            <h4 class="me-3 mb-0">Pros and cons</h4>
                            <span>According to our desktop expert</span>
                        </div>
                        <ul class="mb-3">
                            <li class="true">
                                <p>With an Intel Core i5 processor and 8GB RAM, you can edit photos.</p>
                            </li>
                            <li class="true">
                                <p>With 1256GB, you have more than enough storage space for all your files
                                    and data.</p>
                            </li>
                            <li class="true">
                                <p>This desktop has more USB ports than comparable models, so you can
                                    connect more peripherals such as a mouse, keyboard, or USB flash drive.
                                </p>
                            </li>
                            <li class="false">
                                <p>Choose an all-in-one with at least an Intel Core i7 or AMD Ryzen 7
                                    processor if you edit videos.</p>
                            </li>
                            <li class="false">
                                <p>Doesn't have a DVD player to play CDs or DVDs.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="price d-md-flex justify-content-between align-items-center flex-wrap">
                        <div class="d-flex mb-md-0 mb-2">
                            <strong class="me-3">Price:</strong>
                            <strong>
                                <span>$</span><span>499</span>
                            </strong>
                        </div>
                        <div class="buy-btns d-flex align-items-center justify-content-center">
                            <a href="" class="main-btn d-flex align-items-center me-3">
                                <span class="me-2">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </span>
                                <span class="text">Request more info</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-lg-5 mb-3">
                <div class="description">
                    <h4 class="me-3 mb-3">Description</h4>
                    <p>The Acer Aspire XC-1760 I5410 is a PC for the whole family. With this desktop, you can
                        check your email, edit your photo files, and do your homework. With the Intel Core i5
                        processor and 8GB RAM, you can multitask with light programs like Microsoft Office. In
                        addition, you have enough space for all your photos, videos, and other files on the
                        1256GB storage. This desktop also has enough USB ports to connect all your devices, like
                        a mouse, keyboard, or USB flash drive. You can also easily connect 2 monitors via the
                        HDMI ports.</p>
                </div>
            </div>
            <div class="row mb-lg-5 mb-3">
               <div class="col-lg-6">
                    <div class="suggestions pe-md-3">
                        <h4>Advice from our expert</h4>
                        <ul>
                            <li>
                                <p>Internet, email, and text processing: <i>suitable</i></p>
                            </li>
                            <li>
                                <p>Photo editing: <i>suitable</i></p>
                            </li>
                            <li>
                                <p>Video editing: <i>unsuitable, at least an i7 / Ryzen 7 processor</i></p>
                            </li>
                            <li>
                                <p>Creating and rendering 3D designs: <i>unsuitable, at least an i9 / Ryzen 9 processor and RTX / RX / Quadro video card</i></p>
                            </li>
                            <li>
                                <p>Gaming: <i>unsuitable, at least a GTX 1650 or RX 6500 / 5500 video card</i></p>
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
                                    <td>Intel Core i5</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                    </th>
                                    <td>Internal RAM</td>
                                    <td>8 GB</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                    </th>
                                    <td>Video card</td>
                                    <td>Intel UHD Graphics 730</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                    </th>
                                    <td>Total storage capacity</td>
                                    <td>1,25 TB</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                    </th>
                                    <td>Storage type</td>
                                    <td>SSD+HDD</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                    </th>
                                    <td>Computer use</td>
                                    <td>Editing photos, Internet and word processing</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                    </th>
                                    <td>Speed class</td>
                                    <td>Mid-range</td>
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
                        <div class="image">
                            <img src="{{ asset('assets/frontend/img/product-2.jpg') }}" alt="parts" class="img-fluid"/>
                        </div>
                        <div class="image">
                            <img src="{{ asset('assets/frontend/img/product-3.jpg') }}" alt="parts" class="img-fluid"/>
                        </div>
                        <div class="image">
                            <img src="{{ asset('assets/frontend/img/product-4.jpg') }}" alt="parts" class="img-fluid"/>
                        </div>
                        <div class="image">
                            <img src="{{ asset('assets/frontend/img/product-5.jpg') }}" alt="parts" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="customer-reviews ps-lg-3 text-lg-end">
                        <h4>Customer Ratings</h4>
                        <div class="d-lg-flex align-items-end justify-content-center flex-column pt-lg-3 pt-1">
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
                            <strong>99 Reviews</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
