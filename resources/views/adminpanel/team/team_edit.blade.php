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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Team-Mumber/ <a href="">Edit</a></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Team Mumber</h5>
                        <a href="{{ route('team.index') }}" class="text-white bg-primary btn btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('team.update',$team->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="name">Employee Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name')
                                    is-invalid
                                @enderror" name="name" id="name" placeholder="Employee Name...." value="{{ $team->name }}">
                                    @error('name')
                                    <div class="error">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                    @enderror    
                                    
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="designation_feild">Designation Name<span class="text-danger">*</span></label>
                                    <select name="designation_id" id="designation_feild" class="form-select @error('designation_id')
                                        is-invalid
                                    @enderror">
                                         @foreach ($designations as $designation)
                                              <option {{ $designation->id == $team->designation_id ? 'selected' :'' }} value="{{ $designation->id }}">{{ $designation->name }}</option>
                                         @endforeach
                                    </select>
                                    @error('designation_id')
                                    <div class="error">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                    @enderror    
                                    
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="facebook_url">Facebook Url<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('facebook_url')
                                    is-invalid
                                @enderror" name="facebook_url" id="facebook_url" value="{{ $team->facebook_url }}" placeholder="Facebook Url....">
                                    @error('facebook_url')
                                    <div class="error">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                    @enderror    
                                    
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="twitter_url">Twitter Url</label>
                                    <input type="text" class="form-control" name="twitter_url" value="{{ $team->twitter_url }}" id="twitter_url" placeholder="Twitter Url....">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="linkedin_url">Linkedin Url</label>
                                    <input type="text" class="form-control" name="linkedin_url" value="{{ $team->linkedin_url }}" id="linkedin_url" placeholder="Linkedin Url....">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="instagram_url">Instagram Url</label>
                                    <input type="text" class="form-control" name="instagram_url" value="{{ $team->instagram_url }}" id="instagram_url" placeholder="Instagram Url....">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="pinterest_url">Pinterest Url</label>
                                    <input type="text" class="form-control" name="pinterest_url" value="{{ $team->pinterest_url }}" id="pinterest_url" placeholder="Pinterest Url....">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="image">Employee Image<span class="text-danger">*</span></label>
                                    <input type="file" name="image" class="form-control @error('image')
                                        is-invalid
                                    @enderror" id="image"
                                        placeholder="Employee Image...." />
                                        @error('image')
                                        <div class="error mb-2">
                                            <p class="text-danger">{{ $message }}</p>
                                        </div>
                                        @enderror 
                                        <div class="d-inline-flex align-items-center gap-3 border rounded p-2 mt-4">
                                            <div class="">
                                                <p class="bg-dark mb-0 text-white px-1"><strong>prev image</strong></p>
                                                <img src="{{ asset('/') }}{{ $team->image->url }}" alt="" id="previous_image"
                                                    style="width:140px;height:120px;">
                                            </div>
                                            <div class="" id="team_image_preview_content">
                                                <p class="bg-primary mb-0 text-white px-1"><strong>new image</strong></p>
                                                <img src="" alt="" id="team_image_preview"
                                                    style="width:140px;height:120px;">
                                            </div>
                                          </div>
                                </div>
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
        $(document).ready(function(e) {


            $('#team_image_preview_content').css('display', 'none');
            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#team_image_preview').attr('src', e.target.result);
                    $('#team_image_preview_content').css('display', 'block');
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
    <script>
        $('#notificationAlert').delay(3000).fadeOut('slow');
    </script>
@endsection
