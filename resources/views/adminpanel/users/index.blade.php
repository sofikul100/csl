@extends('layouts.adminpanel.master')


@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    @if (\Session::has('success'))
    <div class="row">
        <div class="col-md-12">
            <div id="notificationAlert" style="display: block;">

                <div class="alert alert-warning">
                    <span style="color:black;">
                        {!! \Session::get('success') !!}
                    </span>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User /</span> list</h4>
        </div>
        <div class="my-auto">
            <a href="{{ route('users.create') }}">
                <button class="btn btn-info rounded-pill">Add User</button>
            </a>
        </div>
    </div>
    <!-- Basic Bootstrap Table -->
    <div class="card">

        <div class="table-responsive text-nowrap p-4">
            <table class="table" id="DataTable">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if ($users->isNotEmpty())

                    @foreach ($users as $key=> $data)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>
                            <img src="{{ asset($data->image->url ?? '' ) }}" alt="User Image" style="max-width: 100px;max-height:80px;">
                        </td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->getRoleNames()[0] ?? 'user' }}</td>
                        <td>{{ date('h:ia', strtotime($data->created_at))  }} <br>
                            {{date('d M, Y', strtotime($data->created_at)) }}
                        </td>
                        
                        <td>
                            <a href="{{ route('users.edit', $data->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>  
                            <a href="#" onclick="if(!confirm('Are you sure you want to delete this user?')){event.preventDefault();}else{document.getElementById('delete-form-{{ $key }}').submit();}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></i>
                            </a>

                            <form id="delete-form-{{ $key }}" action="{{route('users.destroy', $data->id)}}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    @endif

                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->



</div>
@endsection

@section('header_css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@endsection

@section('footer_js')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#notificationAlert').delay(3000).fadeOut('slow');
    $(document).ready(function () {
        $('#DataTable').DataTable();
    });
</script>
@endsection