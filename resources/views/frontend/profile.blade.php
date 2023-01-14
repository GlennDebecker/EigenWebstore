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

@endsection
