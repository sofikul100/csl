@extends('layouts.adminpanel.master')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit About</h1>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                @php
                    Alert::toast($error,'error')
                @endphp
            @endforeach
        @endif
        <div class="row">
              <div class="card">
                <div class="card-body">
                    <form action="{{ route('about.update') }}" method="post" enctype="multipart/form-data">
                        {{--  {{ route('contact.update') }}  --}}
                    @csrf
                    <input type="hidden" name="abouts_id" value="{{$abouts->id }}">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form6Example1">Heading</label>
                                    <input name="heading" value="{{$abouts->heading }}" type="text" class="form-control" required  placeholder="Enter Heading">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form6Example1">Content</label>
                                    <input name="content" value="{{ $abouts->content }}" type="text" class="form-control" required  placeholder="Enter Content">
                                </div>
                            </div>
        
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="image">About Image<span
                                        class="text-danger">*</span></label>
                                <input type="file" name="image"
                                    class="form-control @error('image')
                                    is-invalid
                                @enderror"
                                    id="image" placeholder="About Image...." />
                                @error('image')
                                    <div class="error mb-2">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                @enderror
                                <div class="mt-4">
                                    <img src="" alt="" id="about_image_preview"
                                        style="width:140px;height:120px;border-radius:15px">
                                </div>
                            </div>
        
        
                        </div>
        
                        <!-- Text input -->
        
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
                    </form>
                </div>
              </div>
        </div>
    </div>
</main>


@endsection

@section('footer_js')
<script>
    $(document).ready(function(e) {


        $('#about_image_preview').css('display', 'none');
        $('#image').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#about_image_preview').attr('src', e.target.result);
                $('#about_image_preview').css('display', 'block');
            }

            reader.readAsDataURL(this.files[0]);

        });

    });
</script>

@endsection