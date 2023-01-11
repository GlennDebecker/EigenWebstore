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
                    <h3 class="card-title">Claims Management</h3>
                    @if(auth()->user()->role == 3)
                    <div class="card-tools">
                        <a href="{{ route('claims.index-claim') }}" class="btn btn-sm btn-primary">Back</a>
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 m-auto">
                            <form action="{{ route('products.store-product') }}" method="POST" class="form-horizontal" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            
                              
                              
                                <div class="form-group row">
                                    <label class="col-sm-3" for="description">Message<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <textarea type="email" class="form-control" id="description" name="description" style="white-space: pre-wrap;"  placeholder="Enter the product description" required autocomplete="off">{{ old('description') }}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                           
                             
                              
                                <div class="form-group row">
                                    <label class="col-sm-3"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary w-100">Responde</button>
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
