@extends('layouts.master')

@section('title', 'product Management')

@push('third_party_stylesheets')
<link rel="stylesheet" href="{{ asset('assets/DataTable/datatables.min.css') }}">
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
                        <a href="{{ route('products.add-product') }}" class="btn btn-sm btn-primary">Add new product</a>
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <table id="table" class="table table-striped display nowrap">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>price</th>
                                <th>Processor</th>
                                <th>storage</th>
                                <th>RAM</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $key => $product)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price}}€</td>
                                <td>{{ $product->CPU}}</td>
                                <td>{{ $product->storage}} GB</td>
                                <td>{{ $product->RAM}} GB</td>
                                <td>{{ date('d-m-Y h:m A', strtotime($product->created_at)) }}</td>
                                <td>
                                    <div class="btn-group">
                                     
                                        <a href="{{ route('frontend.product', ['id'=>$product->id]) }}" class="btn btn-info btnView"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('products.edit-product', ['id'=>$product->id]) }}" class="btn btn-dark btnEdit"><i class="fas fa-edit"></i></a>
                                        <form action="{{route("products.delete-product",$product->id)}}" method="Post">

                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" class="btn btn-danger btnDelete " value="delete" >
                                           

                                        </form>
                                    </div>
                                      
                                </td>

                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
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
   
</script>
@endpush
