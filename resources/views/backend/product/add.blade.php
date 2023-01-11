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
                    <h3 class="card-title">Product Management</h3>
                    @if(auth()->user()->role == 3)
                    <div class="card-tools">
                        <a href="{{ route('products.index-product') }}" class="btn btn-sm btn-primary">Back</a>
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 m-auto">
                            <form action="{{ route('products.store-product') }}" method="POST" class="form-horizontal" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3" for="name">Product name<span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="fname" name="name" value="{{ old('name') }}" placeholder="Enter the Product name" required autocomplete="off">
                                        <small>Product name</small>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Enter the product title" required autocomplete="off">
                                        <small>Product title</small>
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" for="fname">Product Info<span class="text-danger">*</span></label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="CPU" name="CPU" value="{{ old('CPU') }}" placeholder="Enter the Processor info" required autocomplete="off">
                                        <small> CPU</small>
                                        @if ($errors->has('CPU'))
                                            <span class="text-danger">{{ $errors->first('CPU') }}</span>
                                        @endif
                                    </div> 
                                    
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="spped" name="speed" value="{{ old('speed') }}" placeholder="Enter the Processor speed " required autocomplete="off">
                                        <small>processor speed </small>
                                        @if ($errors->has('speed'))
                                            <span class="text-danger">{{ $errors->first('speed') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="RAM" name="RAM" value="{{ old('RAM') }}" placeholder="Enter the RAM Capacity" required autocomplete="off">
                                        <small>RAM Capacity</small>
                                        @if ($errors->has('RAM'))
                                            <span class="text-danger">{{ $errors->first('RAM') }}</span>
                                        @endif
                                    </div>
                                    
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="storage" name="storage" value="{{ old('storage') }}" placeholder="Enter the Disc Storage " required autocomplete="off">
                                        <small>Disc Storage </small>
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('storage') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" for="pros">Pros <span class="text-danger">(add - between each of them)*</span></label>
                                    <div class="col-sm-9">
                                        <textarea type="text" class="form-control" id="Pros" name="pros"  placeholder="Pros" style="white-space: pre-wrap;" required autocomplete="off">{{ old('pros') }}</textarea>
                                        @if ($errors->has('pros'))
                                            <span class="text-danger">{{ $errors->first('pros') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" for="cons">Cons <span class="text-danger">(add - between each of them)*</span></label>
                                    <div class="col-sm-9">
                                        <textarea type="text" class="form-control" id="cons" name="cons"  placeholder="cons" style="white-space: pre-wrap;" required autocomplete="off">{{ old('cons') }}</textarea>
                                        @if ($errors->has('cons'))
                                            <span class="text-danger">{{ $errors->first('cons') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" for="description">Descritpion<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <textarea type="email" class="form-control" id="description" name="description" style="white-space: pre-wrap;"  placeholder="Enter the product description" required autocomplete="off">{{ old('description') }}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" for="dob">price<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="number"   class="form-control" id="dob" name="price" value="{{ old('price') }}" required autocomplete="off">
                                        @if ($errors->has('price'))
                                            <span class="text-danger">{{ $errors->first('price') }}</span>
                                        @endif
                                    </div>
                                </div>
                             
                                <div class="form-group row">
                                    <label class="col-sm-3" for="Images">Images <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control"  name="images[]" multiple required  autocomplete="off">
                                        @if ($errors->has('images'))
                                            <span class="text-danger">{{ $errors->first('images') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary w-100">Create product</button>
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
