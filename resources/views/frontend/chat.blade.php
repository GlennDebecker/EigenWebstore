@extends('layouts.app')

@section('title', 'Profile')

@section('content')

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
                                <span class="timestamp"><span class="username">me </span>&bull;<span
                                        class="posttime">   {{$message->created_at}}</span></span>
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
                                <span class="timestamp"><span class="username">admin</span>&bull;<span
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
