@extends('layouts.adminpanel.master')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Footer Setting</h1>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                @php
                    Alert::toast($error,'error')
                @endphp
            @endforeach
        @endif
        <div class="row">
            <form action="{{ route('footer_setting_update') }}" method="post" enctype="multipart/form-data">
                {{--  {{ route('footer_setting_update') }}  --}}
            @csrf
            <input type="hidden" name="footersetting_id" value="{{$footersetting->id }}">
            <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Company Brief</label>
                            <input name="company_brief" value="{{ $footersetting->company_brief }}" type="text" class="form-control" required placeholder="Enter Company Brief">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Facebook Url</label>
                            <input name="facebook_url" value="{{ $footersetting->facebook_url }}" type="text" class="form-control" required placeholder="Enter Facebook Url">
                        </div>
                    </div>


                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Twitter Url </label>
                            <input name="twitter_url" value="{{ $footersetting->twitter_url }}" type="text" class="form-control" required placeholder="Enter Twitter Url ">

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Instagram Url</label>
                            <input name="instagram_url" value="{{ $footersetting->instagram_url }}" type="text" class="form-control" required placeholder="Enter Instagram Url  ">

                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Pinterest Url </label>
                            <input name="pinterest_url" value="{{ $footersetting->pinterest_url }}" type="text"  required class="form-control" placeholder="Enter Pinterest Url">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Linkedin Url</label>
                            <input type="text" value="{{ $footersetting->linkedin_url }}" name="linkedin_url"   class="form-control" placeholder="Enter Linkedin Url">
                        </div>
                    </div>
                </div>


                <!-- Text input -->

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
            </form>
        </div>
    </div>
</main>
{{--  <script>
    photo.onchange = evt => {
        const [file] = photo.files
        if (file) {
            blah.style = 'display:block',
                blah.src = URL.createObjectURL(file)
        }
    }
</script>  --}}

@endsection
