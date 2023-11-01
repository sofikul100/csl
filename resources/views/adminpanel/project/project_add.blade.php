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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Project/ <a href="">Add</a></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Add New Project</h5>
                        <a href="{{ route('project.index') }}" class="text-white bg-primary btn btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('project.add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="categorie_id">Categorie Name<span
                                            class="text-danger">*</span></label>
                                    <select name="categorie_id" id="categorie_id"
                                        class="form-select @error('categorie_id')
                                        is-invalid
                                    @enderror">
                                        <option value="" disabled selected>Select Categorie Name</option>

                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ Str::ucfirst($categorie->name) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('categorie_id')
                                        <div class="error">
                                            <p class="text-danger">{{ $message }}</p>
                                        </div>
                                    @enderror

                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="name">Project Title<span
                                            class="text-danger">*</span></label>
                                    <input type="text"
                                        class="form-control @error('title')
                                    is-invalid
                                @enderror"
                                        name="title" id="title" placeholder="Project Title" value="{{ old('title') }}">
                                    @error('title')
                                        <div class="error">
                                            <p class="text-danger">{{ $message }}</p>
                                        </div>
                                    @enderror

                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="content">Content<span
                                        class="text-danger">*</span></label></label>
                                    <textarea name="content" id="content"
                                        class="form-control @error('content')
                                    is-invalid
                                @enderror"
                                        placeholder="Enter Project Content......." value="{{ old('content') }}"></textarea>
                                    @error('content')
                                        <div class="error">
                                            <p class="text-danger">{{ $message }}</p>
                                        </div>
                                    @enderror

                                </div>


                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="html5-date-input">Start Date<span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="date"  name="start_date" id="html5-date-input">
                                    @error('start_date')
                                        <div class="error">
                                            <p class="text-danger">{{ $message }}</p>
                                        </div>
                                    @enderror

                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="name">End Date<span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="date"  name="end_date" id="html5-date-input">
                                    @error('end_date')
                                        <div class="error">
                                            <p class="text-danger">{{ $message }}</p>
                                        </div>
                                    @enderror

                                </div>




                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="image">Project Image<span
                                            class="text-danger">*</span></label>
                                    <input type="file" name="image"
                                        class="form-control @error('image')
                                        is-invalid
                                    @enderror"
                                        id="image" placeholder="Project Image...." />
                                    @error('image')
                                        <div class="error mb-2">
                                            <p class="text-danger">{{ $message }}</p>
                                        </div>
                                    @enderror
                                    <div class="mt-4">
                                        <img src="" alt="" id="project_image_preview"
                                            style="width:140px;height:120px;border-radius:15px">
                                    </div>
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


            $('#project_image_preview').css('display', 'none');
            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#project_image_preview').attr('src', e.target.result);
                    $('#project_image_preview').css('display', 'block');
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
    <script>
        $('#notificationAlert').delay(3000).fadeOut('slow');
    </script>
@endsection
