@extends('layouts.master')

@section('title', 'user Management')

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
                    <h3 class="card-title">chat Management</h3>
               
                </div>
                <div class="card-body">
                    <table id="table" class="table table-striped display nowrap">
                        <thead>
                            <tr>
                           
                                <th> User Name</th>
                            
                                <th>new messages</th>
                                <th>Created at</th>
                                <th>go to Conversation</th>
                          
                           
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $key => $user)
                            <tr>
                               
                                <td>{{ $user->fname }}</td>
                                <td> <span class="bg-danger"> {{ $user->messages->where('vue_admin', false)->count()}}</span></td>
                                <td>{{ $user->messages()->latest()->first()->created_at}}</td>
                                <td>
                                    <div class="btn-group">
                                     
                                        <a href="{{ route('chats.conversation', ['id'=>$user->id]) }}" class="btn btn-success btnView">Responde</a>
                           
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
