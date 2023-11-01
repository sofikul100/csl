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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Designation/ <a href="">Edit</a></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Designation</h5>
                        <a href="{{ route('designation.index') }}" class="text-white bg-primary btn btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('designation.update',$designation->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="name">Designation Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name')
                                is-invalid
                                @enderror"
                                    id="name" placeholder="Designation  Name...." value="{{ $designation->name }}" />
                                @error('name')
                                    <div class="error">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                @enderror

                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="content">Designation</label>
                                <textarea name="details" id="details" class="form-control @error('details')
                                is-invalid
                            @enderror" placeholder="Enter Designation Details......."">
                            {{ $designation->details }}
                        </textarea>
                                @error('details')
                                    <div class="error">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
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
