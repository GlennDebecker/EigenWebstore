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
                    @if(auth()->user()->role == 3)
                    <div class="card-tools">
                        <a href="{{ route('users.index') }}" class="btn btn-sm btn-primary">Back</a>
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 m-auto">
                            <form action="{{ route('users.edit.store') }}" method="POST" class="form-horizontal" autocomplete="off">
                            @csrf
                                <input type="hidden" name="id" class="d-none" value="{{ $user->id }}">
                                <div class="form-group row">
                                    <label class="col-sm-3" for="fname">Name<span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="fname" name="fname" value="{{ $user->fname }}" placeholder="Enter User First Name" required autocomplete="off">
                                        <small>First name</small>
                                        @if ($errors->has('fname'))
                                            <span class="text-danger">{{ $errors->first('fname') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="sname" name="sname" value="{{ $user->sname }}" placeholder="Enter User Surname" required autocomplete="off">
                                        <small>Surname</small>
                                        @if ($errors->has('sname'))
                                            <span class="text-danger">{{ $errors->first('sname') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" for="email">Email<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Enter User Email" required autocomplete="off">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" for="dob">Date of Birth<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="date"  max="{{ Carbon\Carbon::now()->subYears(13)->format('Y-m-d') }}" class="form-control" id="dob" name="dob" value="{{ date('Y-m-d', strtotime($user->dob)) }}" onclick="this.showPicker();" required autocomplete="off">
                                        @if ($errors->has('dob'))
                                            <span class="text-danger">{{ $errors->first('dob') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" for="role">Role<span class="text-danger">*</span></label>

                                    <div class="col-sm-9">
                                        <select class="form-control select2" name="role" id="role" required autocomplete="off">
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}" @if($user->role == $role->id) selected @endif>{{ $role->name }}</option>
                                        @endforeach
                                        </select>
                                        @if ($errors->has('role'))
                                            <span class="text-danger">{{ $errors->first('role') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" for="password">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" name="password" value=""   autocomplete="off">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                        <small>Enter if you want to update password</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary w-100">Update</button>
                                    </div>
                                </div>

                            </form>
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
