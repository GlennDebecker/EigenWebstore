@extends('layouts.master')

@section('title', 'User Management')

@push('third_party_stylesheets')
@endpush

@push('page_css')

@endpush


@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-12">
            <div class="card custom-card">
                <div class="card-header">
                    <h3 class="card-title">User Management</h3>
                    <div class="card-tools">
                        <a href="{{ route('users.index') }}" class="btn btn-sm btn-primary">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">

                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="@if(isset(auth()->user()->image)){{ asset(auth()->user()->image)}}@else{{ asset('assets/image/default/avatar.png') }}@endif" alt="{{ $user->name() }}">
                                    </div>
                                    <h3 class="profile-username text-center">{{ $user->name() }}</h3>
                                    <p class="text-muted text-center">Member since {{ $user->created_at->format('M. Y') }}</p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Email</b> <a href="mailto:{{ $user->email }}" class="float-right">{{ $user->email }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Role</b> <span class="float-right">{{ $user->role_name->name }}</span>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Status</b> <span class="float-right {{ $user->get_status_color() }}">{{ $user->get_status() }}</span>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Verified</b> <span class="float-right {{ $user->verified() == true ? 'bg-success':'bg-danger' }}">{{ $user->verified() == true ? $user->email_verified_at->format('d-m-y'):'Not verified yet' }}</span>
                                        </li>
                                        @if($user->created_by)
                                        <li class="list-group-item">
                                            <b>Created by</b> <span class="float-right">{{ $user->created_user->name() }}</span>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Created at</b> <span class="float-right">{{ date('d-m-Y h:m A', strtotime($user->created_at)) }}</span>
                                        </li>
                                        @endif
                                        @if($user->updated_by)
                                        <li class="list-group-item">
                                            <b>Updated by</b> <span class="float-right">{{ $user->updated_user->name() }}</span>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Updated at</b> <span class="float-right">{{ date('d-m-Y h:m A', strtotime($user->updated_at)) }}</span>
                                        </li>
                                        @endif
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('third_party_scripts')
@endpush

@push('page_scripts')
@endpush
