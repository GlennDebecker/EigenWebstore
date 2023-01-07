@extends('layouts.app')

@section('title', 'Email Verification')

@section('content')
<div class="faqs">
    <banner class="faqs-banner">
        <div class="image">
            <img src="{{ asset('/assets/frontend/img/email.svg') }}" alt="faqs" class="img-fluid" />
        </div>
    </banner>
    <div class="email-check faqs-body pb-5">
        <div class="container content">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif
            <h1>Email Confirmation</h1>
            <p>Hey <strong>JustGlennbe,</strong> you are almost ready to start enjoying ComputerKopen. </p>
            <p class="mb-md-5 mb-3">Simply click the below button to verify your email. Once you verify, You will have you will recover your Password.</p>
            <form method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-main">Confirm Email</button>
            </form>
        </div>
    </div>
</div>
@endsection
