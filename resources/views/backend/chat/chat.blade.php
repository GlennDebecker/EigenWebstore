@extends('layouts.master')

@section('title', 'user Management')

@push('third_party_stylesheets')
<link rel="stylesheet" href="{{ asset('assets/DataTable/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
@endpush

@push('page_css')

@endpush


@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-12">
            <div class="card custom-card">
                <div class="card-header">
                    <h3 class="card-title">Chat Management</h3>
               
                </div>
                <div class="row">
                    <div class="col-xl-7 pe-xl-0 pe-2">
                        <section class="chatbox" id="buyChat">
                            <section class="chat-window" id="chat-window">
                            @foreach ($messages as $message)
                            @if ($message->type=="send")
                            <article class="msg-container msg-remote" id="msg-0">
                                <div class="msg-box">
                                    <div class="flr">
                                        <div class="messages">
                                            <p class="msg" id="msg-1">
                                                {{$message->message}}
                                            </p>
                                        </div>
                                        <span class="timestamp"><span class="username">{{$message->user->fname}} {{$message->user->sname}} </span>&bull;<span
                                                class="posttime">   {{$message->created_at}}</span></span>
                                    </div>
                                    <div class="image">
                                        <img class="user-img" id="user-0" src="{{ asset('assets/frontend/img/user.svg') }}" />
                                    </div>
                                </div>
                            </article>
                            @else
                            <article class="msg-container msg-self" id="msg-0">
                                <div class="msg-box">
                                    <div class="flr">
                                        <div class="messages">
                                            <p class="msg" id="msg-1">
                                                {{$message->message}}
                                            </p>
                                        </div>
                                        <span class="timestamp"><span class="username">me </span>&bull;<span
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
                            <form class="chat-input" method="POST" action="{{ route('chats.chat-save',$message->user->id) }}">
                                @csrf
                                <input type="text" autocomplete="on" placeholder="Type a message" name="message" " />
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
                                        <li class="@if ($messages->first()->user->orderstatus>=1) active @endif" id="orderStep1" class="active">
                                            <a href="{{ route('users.change_status', [$messages->first()->user,1]) }}">
                                                <div class="wrap">
                                                    <div class="image">
                                                        <img src="{{ asset('assets/frontend/img/step-1.svg') }}"/>
                                                    </div>
                                                    <div class="step-name">
                                                        <p class="mb-0">Parts Ordered</p>
                                                    </div>
                                                </div>
                                            </a>

                                      
                                        </li>
                                        <li class="@if ($messages->first()->user->orderstatus>=2) active @endif" id="orderStep2" class="active">
                                            <a href="{{ route('users.change_status', [$messages->first()->user,2]) }}">
                                                <div class="wrap">
                                                    <div class="image">
                                                        <img src="{{ asset('assets/frontend/img/step-2.svg') }}"/>
                                                    </div>
                                                    <div class="step-name">
                                                        <p class="mb-0">Parts Delivered</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="@if ($messages->first()->user->orderstatus>=3) active @endif" id="orderStep3" class="active">
                                           <a href="{{ route('users.change_status', [$messages->first()->user,3]) }}">
                                            <div class="wrap">
                                                <div class="image">
                                                    <img src="{{ asset('assets/frontend/img/step-3.svg') }}"/>
                                                </div>
                                                <div class="step-name">
                                                    <p class="mb-0">Building Started</p>
                                                </div>
                                            </div>

                                           </a>
                                          
                                        
                                        </li>
                                        <li class="@if ($messages->first()->user->orderstatus>=4) active @endif" id="orderStep4">
                                           <a href="{{ route('users.change_status', [$messages->first()->user,4]) }}">
                                            <div class="wrap">
                                                <div class="image">
                                                    <img src="{{ asset('assets/frontend/img/step-4.svg') }}"/>
                                                </div>
                                                <div class="step-name">
                                                    <p class="mb-0">Stress Test</p>
                                                </div>
                                            </div>
                                    
                                           </a>
                                        
                                        </li>
                                        <li class="@if ($messages->first()->user->orderstatus>=5) active @endif" id="orderStep5">
                                            <a href="{{ route('users.change_status', [$messages->first()->user,5]) }}">
                                                <div class="wrap">
                                                    <div class="image">
                                                        <img src="{{ asset('assets/frontend/img/step-5.svg') }}"/>
                                                    </div>
                                                    <div class="step-name">
                                                        <p class="mb-0">Build Completed</p>
                                                    </div>
                                                </div>
                                            </a>
                                         
                                      
                                        </li>
                                        <li class="@if ($messages->first()->user->orderstatus>=6) active @endif" id="orderStep6">
                                            <a href="{{ route('users.change_status', [$messages->first()->user,6]) }}">
                                                <div class="wrap">
                                                    <div class="image">
                                                        <img src="{{ asset('assets/frontend/img/step-6.svg') }}"/>
                                                    </div>
                                                    <div class="step-name">
                                                        <p class="mb-0">Delivery</p>
                                                    </div>
                                                </div>
                                            </a>
                                      
                                          
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
@endsection


@push('third_party_scripts')
<script src="{{ asset('assets/DataTable/datatables.min.js') }}"></script>
@endpush

@push('page_scripts')
<script>
      $(document).ready(function() {
        var objDiv = document.getElementById("chat-window");
        console.log(objDiv.scrollHeight);
        objDiv.scrollTop = objDiv.scrollHeight;      

});

</script>
@endpush
