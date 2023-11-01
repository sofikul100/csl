@extends('layouts.adminpanel.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- @if (\Session::has('success'))
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
    @endif --}}
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Designation/ <a href="">List</a></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Designations</h5>
                        <a href="{{ route('designation.add.form') }}" class="text-white bg-primary btn btn-sm">Add New
                            Designation</a>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table class="table" id="dTable">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-white">SL No</th>
                                            <th class="text-white">Name</th>
                                            <th class="text-white">Designation</th>
                                            <th class="text-white">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        @foreach ($designations as $key => $designation)
                                            <tr>
                                                <td>
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                                    <strong>1</strong>
                                                </td>
                                                <td>{{ $designation->name }}</td>
                                                <td>{{ $designation->details }}</td>
                                                <td>
                                                    <div>

                                                        <div class="d-inline-flex align-items-center gap-1">
                                                            
                                                            <a class="text-white btn-info btn-sm btn"
                                                                href="{{ route('designation.edit', $designation->id) }}"><i
                                                                    class="bx bx-edit-alt "></i></a>
                                                            <form action="{{ route('designation.delete', $designation->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button type="submit"
                                                                    class="text-white btn btn-danger btn-sm confirm-button"><i
                                                                        class="bx bx-trash"></i> </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('footer_js')
    <script>
        $('#notificationAlert').delay(3000).fadeOut('slow');
    </script>
@endsection
