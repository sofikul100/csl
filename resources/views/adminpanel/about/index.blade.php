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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">About Section/ <a href="">Data</a></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">About</h5>
                        <a href="{{ route('about.edit',$about->id) }}" class="btn btn-sm btn-info">Edit About</a> 
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table class="table bordered">
                                    <thead style="border:1px solid gray;">
                                        <tr>
                                            <th class="text-white bg-dark ">Image</th>
                                            @if(empty($about->image->url))
                                            <th><img src="" alt="No About Image Yet." width="100px" height="80px"></th>
                                            @else    
                                            <th class=""><img src="{{ asset('/') }}{{ $about->image->url }}" alt="" width="200px" height="150px"></th>
                                            @endif                                 
                                        </tr>
                                        <tr>
                                            <th class="text-white bg-dark">About Heading</th>
                                            <th class="">{{ $about->heading }}</th>
                                        </tr>
                                        <tr>
                                            <th class="text-white bg-dark ">About Content</th>
                                            <th class="">{{ $about->content }}</th>
                                        </tr>
                                    </thead>
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
