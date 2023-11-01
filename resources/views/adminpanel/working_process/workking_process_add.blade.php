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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Working Process/ <a href="">Add</a></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Add New Working Process</h5>
                        <a href="{{ route('working_process.index') }}" class="text-white bg-primary btn btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('working_process.add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="title">Title</label>
                                <input type="text" name="title" class="form-control @error('title')
                                is-invalid
                                @enderror" id="title"
                                    placeholder="Enter Title......" value="{{ old('title') }}"/>
                                @error('title')
                                <div class="error">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                                @enderror    
                                
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="image">Working Process Image</label>
                                <input type="file" name="image" class="form-control @error('image')
                                    is-invalid
                                @enderror" id="image"
                                    placeholder="Service Image...." />
                                    @error('image')
                                    <div class="error mb-2">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                    @enderror 
                                <div class="mt-4">
                                    <img src="" alt="" id="working_process_image_preview"
                                        style="width:140px;height:120px;border-radius:15px">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Now</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('footer_js')
    <script>
        $(document).ready(function(e) {


            $('#working_process_image_preview').css('display', 'none');
            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#working_process_image_preview').attr('src', e.target.result);
                    $('#working_process_image_preview').css('display', 'block');
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
    <script>
        $('#notificationAlert').delay(3000).fadeOut('slow');
    </script>
@endsection
