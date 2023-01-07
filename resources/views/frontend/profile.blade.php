@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="profile mb-5 faqs">
    <banner class="faqs-banner">
        <div class="image">
            <img src="{{ asset('assets/frontend/img/profile-user.svg') }}" alt="Profile" class="img-fluid" />
        </div>
    </banner>
    <div class="container">
        <div class="welcome d-sm-flex d-block justify-content-between align-items-end position-relative">
            <div>
                <strong class="para-light">Welcome Back !</strong>
                <h2 class="mb-1">User Name</h2>
            </div>
            <div>
                <div class="edit">
                    <a href="{{ route('frontend.user.profile.update') }}">
                        <span class="m-auto mb-3 ref-icon d-flex justify-content-center align-items-center">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </span>
                    </a>
                </div>
                <div class="d-flex mb-3 align-items-center para-light">
                    <span class="me-sm-2 me-2 ref-icon d-flex justify-content-center align-items-center">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    <strong>contact@example.com</strong>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="chat-order  pb-xl-4 pb-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 pe-xl-0 pe-2">
                <section class="chatbox" id="buyChat">
                    <section class="chat-window">
                        <article class="msg-container msg-remote" id="msg-0">
                            <div class="msg-box">
                                <div class="image">
                                    <img class="user-img" id="user-0" src="{{ asset('assets/frontend/img/user.svg') }}" />
                                </div>
                                <div class="flr">
                                    <div class="messages">
                                        <p class="msg" id="msg-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Praesent varius, neque non tristique tincidunt, mauris nunc
                                            efficitur erat, elementum semper justo odio id nisi.
                                        </p>
                                    </div>
                                    <span class="timestamp">
                                        <span class="username">Name</span>
                                        &bull;
                                        <span class="posttime">3 minutes ago</span>
                                    </span>
                                </div>
                            </div>
                        </article>
                        <article class="msg-container msg-self" id="msg-0">
                            <div class="msg-box">
                                <div class="flr">
                                    <div class="messages">
                                        <p class="msg" id="msg-1">
                                            Lorem ipsum dolor sit amet
                                        </p>
                                        <p class="msg" id="msg-2">
                                            Praesent varius
                                        </p>
                                    </div>
                                    <span class="timestamp"><span class="username">Name</span>&bull;<span
                                            class="posttime">2 minutes ago</span></span>
                                </div>
                                <div class="image">
                                    <img class="user-img" id="user-0" src="{{ asset('assets/frontend/img/user.svg') }}" />
                                </div>
                            </div>
                        </article>
                        <article class="msg-container msg-remote" id="msg-0">
                            <div class="msg-box">
                                <div class="image">
                                    <img class="user-img" id="user-0" src="{{ asset('assets/frontend/img/user.svg') }}" />
                                </div>
                                <div class="flr">
                                    <div class="messages">
                                        <p class="msg" id="msg-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                    </div>
                                    <span class="timestamp"><span class="username">Name</span>&bull;<span
                                            class="posttime">1 minute ago</span></span>
                                </div>
                            </div>
                        </article>
                        <article class="msg-container msg-remote" id="msg-0">
                            <div class="msg-box">
                                <div class="image">
                                    <img class="user-img" id="user-0" src="{{ asset('assets/frontend/img/user.svg') }}" />
                                </div>
                                <div class="flr">
                                    <div class="messages">
                                        <p class="msg" id="msg-0">
                                            Lorem ipsum dolor sit amet.
                                        </p>
                                    </div>
                                    <span class="timestamp"><span class="username">Name</span>&bull;<span
                                            class="posttime">Now</span></span>
                                </div>
                            </div>
                        </article>
                        <article class="msg-container msg-self" id="msg-0">
                            <div class="msg-box">
                                <div class="flr">
                                    <div class="messages">
                                        <p class="msg" id="msg-1">
                                            Lorem ipsum
                                        </p>
                                    </div>
                                    <span class="timestamp"><span class="username">Name</span>&bull;<span
                                            class="posttime">Now</span></span>
                                </div>
                                <div class="image">
                                    <img class="user-img" id="user-0" src="{{ asset('assets/frontend/img/user.svg') }}" />
                                </div>
                            </div>
                        </article>
                        <article class="msg-container msg-remote" id="msg-0">
                            <div class="msg-box">
                                <div class="image">
                                    <img class="user-img" id="user-0" src="{{ asset('assets/frontend/img/user.svg') }}" />
                                </div>
                                <div class="flr">
                                    <div class="messages">
                                        <p class="msg" id="msg-0">
                                            Lorem ipsum dolor sit amet.
                                        </p>
                                    </div>
                                    <span class="timestamp"><span class="username">Name</span>&bull;<span
                                            class="posttime">Now</span></span>
                                </div>
                            </div>
                        </article>
                        <article class="msg-container msg-self" id="msg-0">
                            <div class="msg-box">
                                <div class="flr">
                                    <div class="messages">
                                        <p class="msg" id="msg-1">
                                            Lorem ipsum
                                        </p>
                                    </div>
                                    <span class="timestamp"><span class="username">Name</span>&bull;<span
                                            class="posttime">Now</span></span>
                                </div>
                                <div class="image">
                                    <img class="user-img" id="user-0" src="{{ asset('assets/frontend/img/user.svg') }}" />
                                </div>
                            </div>
                        </article>
                        <article class="msg-container msg-self" id="msg-0">
                            <div class="msg-box">
                                <div class="flr">
                                    <div class="messages">
                                        <p class="msg" id="msg-1">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, ipsam?
                                        </p>
                                    </div>
                                    <span class="timestamp"><span class="username">Name</span>&bull;<span
                                            class="posttime">Now</span></span>
                                </div>
                                <div class="image">
                                    <img class="user-img" id="user-0" src="{{ asset('assets/frontend/img/user.svg') }}" />
                                </div>
                            </div>
                        </article>
                    </section>
                    <form class="chat-input" onsubmit="return false;">
                        <input type="text" autocomplete="on" placeholder="Type a message" />
                        <button>
                            <div class="image">
                                <img class="user-img" id="user-0" src="{{ asset('assets/frontend/img/send.svg') }}" />
                            </div>
                        </button>
                        <button class="choose-file" onclick="importData()">
                            <div class="image">
                                <img class="user-img" id="user-0" src="{{ asset('assets/frontend/img/attach-files.svg') }}" />
                            </div>
                        </button>
                        <!-- <input type="file" class="choose-input"/> -->
                    </form>
                </section>
            </div>
            <div class="col-xl-5 ps-xl-0 ps-2">
                <section class="order-section">
                    <div class="container mh-100 p-md-3 p-2">
                        <h2>Order Progress</h2>
                        <div class="order-body">
                            <ul>
                                <li onclick="stepOne()" id="orderStep1" class="active">
                                    <div class="wrap">
                                        <div class="image">
                                            <img src="{{ asset('assets/frontend/img/step-1.svg') }}"/>
                                        </div>
                                        <div class="step-name">
                                            <p class="mb-0">Parts Ordered</p>
                                        </div>
                                    </div>
                                    <p class="order-step-date">11 Dec, 2022</p>
                                </li>
                                <li onclick="stepTwo()" id="orderStep2" class="active">
                                    <div class="wrap">
                                        <div class="image">
                                            <img src="{{ asset('assets/frontend/img/step-2.svg') }}"/>
                                        </div>
                                        <div class="step-name">
                                            <p class="mb-0">Parts Delivered</p>
                                        </div>
                                    </div>
                                    <p class="order-step-date">19 Oct, 2022</p>
                                </li>
                                <li onclick="stepThree()" id="orderStep3" class="active">
                                    <div class="wrap">
                                        <div class="image">
                                            <img src="{{ asset('assets/frontend/img/step-3.svg') }}"/>
                                        </div>
                                        <div class="step-name">
                                            <p class="mb-0">Building Started</p>
                                        </div>
                                    </div>
                                    <p class="order-step-date">21 Nov, 2022</p>
                                </li>
                                <li onclick="stepFour()" id="orderStep4">
                                    <div class="wrap">
                                        <div class="image">
                                            <img src="{{ asset('assets/frontend/img/step-4.svg') }}"/>
                                        </div>
                                        <div class="step-name">
                                            <p class="mb-0">Stress Test</p>
                                        </div>
                                    </div>
                                    <p class="order-step-date">01 Dec, 2022</p>
                                </li>
                                <li onclick="stepFive()" id="orderStep5">
                                    <div class="wrap">
                                        <div class="image">
                                            <img src="{{ asset('assets/frontend/img/step-5.svg') }}"/>
                                        </div>
                                        <div class="step-name">
                                            <p class="mb-0">Build Completed</p>
                                        </div>
                                    </div>
                                    <p class="order-step-date">28 Jan, 2022</p>
                                </li>
                                <li onclick="stepSix()" id="orderStep6">
                                    <div class="wrap">
                                        <div class="image">
                                            <img src="{{ asset('assets/frontend/img/step-6.svg') }}"/>
                                        </div>
                                        <div class="step-name">
                                            <p class="mb-0">Delivery</p>
                                        </div>
                                    </div>
                                    <p class="order-step-date">14 Jul, 2022</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<div class="purchase-history">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h1 class="me-3 mb-0">Purchase History</h1>
            <button class="main-btn d-flex justify-content-center align-items-center">
                <span class="me-1"><i class="fa fa-download" aria-hidden="true"></i></span>
                <span class="d-sm-block d-none">Download</span>
            </button>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Buyer Name</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Method</th>
                        <th scope="col">Invoice</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Robert</td>
                        <td>Hp Laptop</td>
                        <td>Done</td>
                        <td>20-11-2022</td>
                        <td>$200</td>
                        <td>Wallet</td>
                        <th><a href="#" class="me-1"><i class="fa fa-download" aria-hidden="true"></i></a></th>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
