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
