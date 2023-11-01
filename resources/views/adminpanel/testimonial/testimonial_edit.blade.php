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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Testimonial/ <a href="">Edit</a></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Testimonial</h5>
                        <a href="{{ route('testimonial.index') }}" class="text-white bg-primary btn btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('testimonial.update',$testimonial->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="client_name">Client Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('client_name')
                                    is-invalid
                                @enderror" name="client_name" id="client_name" value="{{ $testimonial->client_name }}" placeholder="Client Name....">
                                    @error('client_name')
                                    <div class="error">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                    @enderror    
                                    
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="facebook_url">Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('email')
                                    is-invalid
                                @enderror" name="email" id="email" value="{{ $testimonial->email }}" placeholder="Email....">
                                    @error('email')
                                    <div class="error">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                    @enderror    
                                    
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="contact">Contact<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('contact')
                                    is-invalid
                                @enderror" name="contact" id="contact" value="{{ $testimonial->contact }}" placeholder="Contact....">
                                    @error('contact')
                                    <div class="error">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                    @enderror    
                                    
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="contact">Designation<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('designation')
                                    is-invalid
                                @enderror" name="designation" id="designation" value="{{ $testimonial->designation }}" placeholder="Designation....">
                                    @error('designation')
                                    <div class="error">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                    @enderror    
                                    
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="quote">Quote</label>
                                    <textarea name="quote" id="quote" class="form-control @error('quote')
                                    is-invalid
                                @enderror" placeholder="Enter Quote......." >
                                {{ $testimonial->quote }}
                            </textarea>
                                @error('quote')
                                <div class="error">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                                @enderror  
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="image">Client Photo<span class="text-danger">*</span></label>
                                    <input type="file" name="image" class="form-control @error('image')
                                        is-invalid
                                    @enderror" id="image"
                                        placeholder="Client Image...." />
                                        @error('image')
                                        <div class="error mb-2">
                                            <p class="text-danger">{{ $message }}</p>
                                        </div>
                                        @enderror 
                                        <div class="d-inline-flex align-items-center gap-3 border rounded p-2 mt-4">
                                            <div class="">
                                                <p class="bg-dark mb-0 text-white px-1"><strong>prev image</strong></p>
                                                <img src="{{ asset('/') }}{{ $testimonial->image->url }}" alt="" id="previous_image"
                                                    style="width:140px;height:120px;">
                                            </div>
                                            <div class="" id="testimonial_image_preview_content">
                                                <p class="bg-primary mb-0 text-white px-1"><strong>new image</strong></p>
                                                <img src="" alt="" id="testimonial_image_preview"
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


            $('#testimonial_image_preview_content').css('display', 'none');
            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#testimonial_image_preview').attr('src', e.target.result);
                    $('#testimonial_image_preview_content').css('display', 'block');
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
    <script>
        $('#notificationAlert').delay(3000).fadeOut('slow');
    </script>
@endsection
