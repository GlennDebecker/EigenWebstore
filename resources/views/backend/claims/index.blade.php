@extends('layouts.master')

@section('title', 'claim Management')

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
                    <h3 class="card-title">claims Management</h3>
               
                </div>
                <div class="card-body">
                    <table id="table" class="table table-striped display nowrap">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Created at</th>
                          
                                <th> actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($claims as $key => $claim)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $claim->name }}</td>
                                <td>{{ $claim->email}}</td>
                                <td>{{ $claim->phone}}</td>
                                <td>{{ $claim->message}}</td>
                                <td>{{ date('d-m-Y h:m A', strtotime($claim->created_at)) }}</td>
                                <td>
                                    <div class="btn-group">
                                     
                                        <a href="{{ route('claims.responde-claim', ['id'=>$claim->id]) }}" class="btn btn-success btnView">Responde</a>
                           
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
