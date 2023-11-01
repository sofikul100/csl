@extends('layouts.adminpanel.master')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Contact</h1>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                @php
                    Alert::toast($error,'error')
                @endphp
            @endforeach
        @endif
        <div class="row">
            <form action="{{ route('contact.update') }} " method="post" enctype="multipart/form-data">
                {{--  {{ route('contact.update') }}  --}}
            @csrf
            <input type="hidden" name="contacts_id" value="{{$contacts->id }}">
            <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Name</label>
                            <input name="name" value="{{ $contacts->name }}" type="text" class="form-control" required placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Email</label>
                            <input name="email" value="{{ $contacts->email }}" type="text" class="form-control" required placeholder="Enter Email">
                        </div>
                    </div>


                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Contact </label>
                            <input name="contact" value="{{ $contacts->contact }}" type="text" class="form-control" required placeholder="Enter Contact ">

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Website</label>
                            <input name="website" value="{{ $contacts->website }}" type="text" class="form-control" required placeholder="Enter Website">

                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Content </label>
                            <input name="content" value="{{ $contacts->content }}" type="text"  required class="form-control" placeholder="Enter Content">
                        </div>
                    </div>

                </div>


                <!-- Text input -->

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
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
