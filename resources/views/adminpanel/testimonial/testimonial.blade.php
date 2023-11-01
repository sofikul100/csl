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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Testimonial/ <a href="">List</a></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Testimonial</h5>
                        <a href="{{ route('testimonial.add.form') }}" class="text-white bg-primary btn btn-sm">Add New
                            Testimonial</a>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table class="table" id="dTable">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-white">SL No</th>
                                            <th class="text-white">Client Name</th>
                                            <th class="text-white">Email</th>
                                            <th class="text-white">Designation</th>
                                            <th class="text-white">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        @foreach ($testimonials as $key => $testimonial)
                                            <tr>
                                                <td>
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                                    <strong>1</strong>
                                                </td>

                                                <td>
                                                    {{ $testimonial->client_name }}
                                                </td>
                                                <td>{{ $testimonial->email }}</td>
                                                <td>{{ $testimonial->designation }}</td>
                                                <td>
                                                    <div>

                                                        <div class="d-inline-flex align-items-center gap-1">
                                                            <button class="text-white btn-primary btn-sm btn show_testimonial_data"
                                                                data-bs-toggle="modal" data-id="{{ $testimonial->id }}"
                                                                data-bs-target="#largeModal"><i
                                                                    class="bx bx-show-alt "></i></button>
                                                            <a class="text-white btn-info btn-sm btn"
                                                                href="{{ route('testimonial.edit', $testimonial->id) }}"><i
                                                                    class="bx bx-edit-alt "></i></a>
                                                            <form action="{{ route('testimonial.delete', $testimonial->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button type="submit"
                                                                    class="text-white btn btn-danger btn-sm confirm-button"><i
                                                                        class="bx bx-trash"></i> </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- service data show modal --}}
        <!-- Large Modal -->
        <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary pb-3">
                        <h5 class="modal-title text-white" id="exampleModalLabel3">View Team Mumber Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3 col-md-6">
                                <label for="nameLarge" class="form-label">Client Name</label>
                                <input type="text" id="client_name" disabled class="form-control"
                                    style="border:none;color:#000;background:#fdf5f5" />
                            </div>
                            <div class="col mb-3 col-md-6">
                                <label for="nameLarge" class="form-label">Email</label>
                                <input type="text" id="email" disabled class="form-control"
                                    style="border:none;color:#000;background:#fdf5f5" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 col-md-6">
                                <label for="nameLarge" class="form-label">Contact</label>
                                <input type="text" id="contact" disabled class="form-control"
                                    style="border:none;color:#000;background:#fdf5f5"
                                    placeholder="No Facebook Url Avaiable" />
                            </div>
                            <div class="col mb-3 col-md-6">
                                <label for="nameLarge" class="form-label">Designation</label>
                                <input type="text" id="designation" disabled class="form-control"
                                    style="border:none;color:#000;background:#fdf5f5"
                                    placeholder="No Twitter Url Avaiable" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3 col-md-12">
                                <label for="nameLarge" class="form-label">Quote</label>
                                <textarea name="" id="quote" disabled style="border:none;color:#000;background:#fdf5f5" class="form-control">
                       
                                </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <label for="nameLarge" class="form-label">Client Photo</label>
                                <div id="image_content">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

@section('footer_js')
    <script>
        $('body').on("click", ".show_testimonial_data", function() {
            var id = $(this).data("id");
            $.ajax({
                type: "GET",
                url: '{{ route('testimonial.index') }}',
                data: {
                    id: id
                },
                success: function(response) {
                    console.log(response)
                    $('#client_name').val(response.client_name);
                    $('#email').val(response.email);
                    $('#contact').val(response.contact);
                    $('#designation').val(response.designation);
                    $('#quote').val(response.quote);
                    var imageContent = $("#image_content");
                    imageContent.html(`<img src="{{ asset('/') }}${response.image.url}" id="image" alt="........" style="height: 180px;width:180px;border-radius:8px">`);
                },
                error: function(error) {
                    console.log(error)
                }
            });
        });
    </script>
    <script>
        $('#notificationAlert').delay(3000).fadeOut('slow');
    </script>
@endsection
