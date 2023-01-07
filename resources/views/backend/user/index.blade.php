@extends('layouts.master')

@section('title', 'User Management')

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
                    <h3 class="card-title">User Management</h3>
                    @if(auth()->user()->role == 3)
                    <div class="card-tools">
                        <a href="{{ route('users.add') }}" class="btn btn-sm btn-primary">Add new user</a>
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <table id="table" class="table table-striped display nowrap">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $key => $user)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $user->name() }}</td>
                                <td>{{ $user->role_name->name }}</td>
                                <td><button class="btn btn-sm {{ $user->get_status_color() }}"> {{ $user->get_status()}} </button></td>
                                <td>{{ date('d-m-Y h:m A', strtotime($user->created_at)) }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('users.view', $user->id) }}" class="btn btn-info btnView"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-dark btnEdit"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('users.status', $user->id) }}" class="btn btnDelete {{ $user->get_status_color() }}" onclick="delete_msg()"><i class="fa-solid fa-user-lock"></i></i></a>
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
    $(document).ready(function() {
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('users.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'name', name: 'name'},
                {data: 'role_name', name: 'role_name'},
                {data: 'status', name: 'status'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'pdfHtml5',
                    title: 'User Management',
                    download: 'open',
                    orientation: 'potrait',
                    pagesize: 'LETTER',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4]
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4]
                    }
                }, 'pageLength'
            ]
        });

    });
</script>
@endpush
