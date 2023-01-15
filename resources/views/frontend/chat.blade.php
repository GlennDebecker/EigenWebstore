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
                <strong class="para-light">Welcome Back</strong>
                <h2 class="mb-1">{{auth()->user()->fname}} {{auth()->user()->sname}} </h2>
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
                    <strong>{{auth()->user()->email}}</strong>
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
                    <section class="chat-window" id="chat-window">
                    @foreach (auth()->user()->messages as $message)
                    @if ($message->type=="send")
                    <article class="msg-container msg-self" id="msg-0">
                        <div class="msg-box">
                            <div class="flr">
                                <div class="messages">
                                    <p class="msg" id="msg-1">
                                        {{$message->message}}
                                    </p>
                                </div>
                                <span class="timestamp"><span class="username">Me </span>&bull;<span
                                        class="posttime">  {{$message->created_at}}</span></span>
                            </div>
                            <div class="image">
                                <img class="user-img" id="user-0" src="{{ asset('assets/frontend/img/user.svg') }}" />
                            </div>
                        </div>
                    </article>
                    @else
                    <article class="msg-container msg-remote" id="msg-0">
                        <div class="msg-box">
                            <div class="flr">
                                <div class="messages">
                                    <p class="msg" id="msg-1">
                                        {{$message->message}}
                                    </p>
                                </div>
                                <span class="timestamp"><span class="username">Admin</span>&bull;<span
                                        class="posttime">   {{$message->created_at}}</span></span>
                            </div>
                            <div class="image">
                                <img class="user-img" id="user-0" src="{{ asset('assets/frontend/img/user.svg') }}" />
                            </div>
                        </div>
                    </article>
                    @endif
                 
                    @endforeach
              
                    </section>
                    <form class="chat-input" method="POST" action="{{ route('frontend.user.chat-save') }}">
                        @csrf
                        <input type="text" autocomplete="on" placeholder="Type a message" name="message" value="{{$pre}}" />
                        <button type="submit">
                            <div class="image">
                              
                                <img class="user-img" id="user-0" src="{{ asset('assets/frontend/img/send.svg') }}" />
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
                                <li class="@if (auth()->user()->orderstatus>=1) active @endif" id="orderStep1" class="active">
                                    <div class="wrap">
                                        <div class="image">
                                            <img src="{{ asset('assets/frontend/img/step-1.svg') }}"/>
                                        </div>
                                        <div class="step-name">
                                            <p class="mb-0">Parts Ordered</p>
                                        </div>
                                    </div>
                              
                                </li>
                                <li class="@if (auth()->user()->orderstatus>=2) active @endif" id="orderStep2" class="active">
                                    <div class="wrap">
                                        <div class="image">
                                            <img src="{{ asset('assets/frontend/img/step-2.svg') }}"/>
                                        </div>
                                        <div class="step-name">
                                            <p class="mb-0">Parts Delivered</p>
                                        </div>
                                    </div>
                            
                                </li>
                                <li class="@if (auth()->user()->orderstatus>=3) active @endif" id="orderStep3" class="active">
                                    <div class="wrap">
                                        <div class="image">
                                            <img src="{{ asset('assets/frontend/img/step-3.svg') }}"/>
                                        </div>
                                        <div class="step-name">
                                            <p class="mb-0">Building Started</p>
                                        </div>
                                    </div>
                                
                                </li>
                                <li class="@if (auth()->user()->orderstatus>=4) active @endif" id="orderStep4">
                                    <div class="wrap">
                                        <div class="image">
                                            <img src="{{ asset('assets/frontend/img/step-4.svg') }}"/>
                                        </div>
                                        <div class="step-name">
                                            <p class="mb-0">Stress Test</p>
                                        </div>
                                    </div>
                            
                                </li>
                                <li class="@if (auth()->user()->orderstatus>=5) active @endif" id="orderStep5">
                                    <div class="wrap">
                                        <div class="image">
                                            <img src="{{ asset('assets/frontend/img/step-5.svg') }}"/>
                                        </div>
                                        <div class="step-name">
                                            <p class="mb-0">Build Completed</p>
                                        </div>
                                    </div>
                              
                                </li>
                                <li class="@if (auth()->user()->orderstatus>=6) active @endif" id="orderStep6">
                                    <div class="wrap">
                                        <div class="image">
                                            <img src="{{ asset('assets/frontend/img/step-6.svg') }}"/>
                                        </div>
                                        <div class="step-name">
                                            <p class="mb-0">Delivery</p>
                                        </div>
                                    </div>
                                  
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
      var objDiv = document.getElementById("chat-window");
      console.log(objDiv.scrollHeight);
      objDiv.scrollTop = objDiv.scrollHeight;      

});

</script>
@endsection
