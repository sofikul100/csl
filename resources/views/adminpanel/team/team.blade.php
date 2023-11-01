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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Team Mumber/ <a href="">List</a></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Team Mumber</h5>
                        <a href="{{ route('team.add.form') }}" class="text-white bg-primary btn btn-sm">Add New
                            Team</a>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table class="table" id="dTable">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-white">SL No</th>
                                            <th class="text-white">Designation Name</th>
                                            <th class="text-white">Employee Name</th>
                                            <th class="text-white">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        @foreach ($teams as $key => $team)
                                            <tr>
                                                <td>
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                                    <strong>1</strong>
                                                </td>

                                                <td>
                                                    {{ $team->designation->name }}
                                                </td>
                                                <td>{{ $team->name }}</td>
                                                <td>
                                                    <div>

                                                        <div class="d-inline-flex align-items-center gap-1">
                                                            <button class="text-white btn-primary btn-sm btn show_team_data"
                                                                data-bs-toggle="modal" data-id="{{ $team->id }}"
                                                                data-bs-target="#largeModal"><i
                                                                    class="bx bx-show-alt "></i></button>
                                                            <a class="text-white btn-info btn-sm btn"
                                                                href="{{ route('team.edit', $team->id) }}"><i
                                                                    class="bx bx-edit-alt "></i></a>
                                                            <form action="{{ route('team.delete', $team->id) }}"
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
                                <label for="nameLarge" class="form-label">Designation Name</label>
                                <input type="text" id="name" disabled class="form-control"
                                    style="border:none;color:#000;background:#fdf5f5" placeholder="Enter Name" />
                            </div>
                            <div class="col mb-3 col-md-6">
                                <label for="nameLarge" class="form-label">Employee Name</label>
                                <input type="text" id="employee_name" disabled class="form-control"
                                    style="border:none;color:#000;background:#fdf5f5" placeholder="Enter Name" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 col-md-6">
                                <label for="nameLarge" class="form-label">Facebook Url</label>
                                <input type="text" id="facebook_url" disabled class="form-control"
                                    style="border:none;color:#000;background:#fdf5f5"
                                    placeholder="No Facebook Url Avaiable" />
                            </div>
                            <div class="col mb-3 col-md-6">
                                <label for="nameLarge" class="form-label">Twitter Url</label>
                                <input type="text" id="twitter_url" disabled class="form-control"
                                    style="border:none;color:#000;background:#fdf5f5"
                                    placeholder="No Twitter Url Avaiable" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3 col-md-6">
                                <label for="nameLarge" class="form-label">Linked Url</label>
                                <input type="text" id="linkedin_url" disabled class="form-control"
                                    style="border:none;color:#000;background:#fdf5f5"
                                    placeholder="No Linkedin Url Avaiable" />
                            </div>
                            <div class="col mb-3 col-md-6">
                                <label for="nameLarge" class="form-label">Instagram Url</label>
                                <input type="text" id="instagram_url" disabled class="form-control"
                                    style="border:none;color:#000;background:#fdf5f5"
                                    placeholder="No Instagram Url Avaiable" />
                            </div>

                        </div>
                        <div class="row">
                            <div class="col mb-3 col-md-6">
                                <label for="nameLarge" class="form-label">Pinterest Url</label>
                                <input type="text" id="pinterest_url" disabled class="form-control"
                                    style="border:none;color:#000;background:#fdf5f5"
                                    placeholder="No Pinterest Url Avaiable" />
                            </div>
                            <div>
                                <label for="nameLarge" class="form-label">Employee Photo</label>
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
        $('body').on("click", ".show_team_data", function() {
            var id = $(this).data("id");
            $.ajax({
                type: "GET",
                url: '{{ route('team.index') }}',
                data: {
                    id: id
                },
                success: function(response) {
                    $('#name').val(response.designation.name);
                    $('#employee_name').val(response.name);
                    $('#facebook_url').val(response.facebook_url);
                    $('#twitter_url').val(response.twitter ? response.twitter : 'No Data Found');
                    $('#linkedin_url').val(response.linkedin_url ? response.linkedin_url : 'No Data Found');
                    $('#instagram_url').val(response.instagram_url ? response.instagram_url : 'No Data Found');
                    $('#pinterest_url').val(response.pinterest_url ? response.pinterest_url : 'No Data Found');
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
