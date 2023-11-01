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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page Setting/ <a href="">Edit</a></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Page Setting</h5>
                        <a href="{{ route('page_setting.index') }}" class="text-white bg-primary btn btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('page_setting.update',$page_setting->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="banner_title">Banner Title</label>
                                <input type="text" name="banner_title" class="form-control" id="banner_title"
                                    placeholder="Banner Title" value="{{ $page_setting->banner_title }}"/>                    
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="banner_heading">Banner Heading</label>
                                <input type="text" name="banner_heading" class="form-control" id="banner_heading"
                                    placeholder="Banner Heading" value="{{ $page_setting->banner_heading }}"/>                    
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label" for="banner_bief">Banner Bief</label>
                                <input type="text" name="banner_bief" class="form-control" id="banner_bief"
                                    placeholder="Banner Bief" value="{{ $page_setting->banner_bief }}"/>                    
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label" for="happy_clients">Happy Clients</label>
                                <input type="number" min="1" name="happy_clients" class="form-control" id="happy_clients"
                                    placeholder="Happy Clients" value="{{ $page_setting->happy_clients }}"/>                    
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label" for="experience">Experience</label>
                                <input type="number" min="1" name="experience" class="form-control" id="experience"
                                    placeholder="Experience" value="{{ $page_setting->experience }}"/>                    
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label" for="products">Products</label>
                                <input type="number" min="1" name="products" class="form-control" id="products"
                                    placeholder="Products" value="{{ $page_setting->products }}"/>                    
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label" for="team_mumbers">Team Mumbers</label>
                                <input type="number" min="1" name="team_mumbers" class="form-control" id="team_mumbers"
                                    placeholder="Team Mumber" value="{{ $page_setting->team_mumbers }}"/>                    
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="company_address">Company Address</label>
                                <input type="text"  name="company_address" class="form-control" id="company_address"
                                    placeholder="Company Address" value="{{ $page_setting->company_address }}"/>                    
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="company_email">Company Email</label>
                                <input type="text"  name="company_email" class="form-control" id="company_email"
                                    placeholder="Company Email" value="{{ $page_setting->company_email }}"/>                    
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="company_contact">Company Contact</label>
                                <input type="text"  name="company_contact" class="form-control" id="company_contact"
                                    placeholder="Company Contact" value="{{ $page_setting->company_contact }}"/>                    
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="working_hour_start">Working Hour Start</label>
                                <input type="text"  name="working_hour_start" class="form-control" id="working_hour_start"
                                    placeholder="Working Start Hour" value="{{ $page_setting->working_hour_start }}"/>                    
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="working_hour_end">Working Hour End</label>
                                <input type="text"  name="working_hour_end" class="form-control" id="working_hour_end"
                                    placeholder="Working End Hour" value="{{ $page_setting->working_hour_end }}"/>                    
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="image">Logo</label>
                                <input type="file" name="logo" class="form-control @error('logo')
                                    is-invalid
                                @enderror" id="logo"
                                    placeholder="Logo Image...." />
                                    @error('logo')
                                    <div class="error mb-2">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                    @enderror 
                                <div class="mt-4">
                                    <img src="" alt="" id="logo_image_preview"
                                        style="width:140px;height:120px;border-radius:15px">
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


            $('#logo_image_preview').css('display', 'none');
            $('#logo').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#logo_image_preview').attr('src', e.target.result);
                    $('#logo_image_preview').css('display', 'block');
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
    <script>
        $('#notificationAlert').delay(3000).fadeOut('slow');
    </script>
@endsection
