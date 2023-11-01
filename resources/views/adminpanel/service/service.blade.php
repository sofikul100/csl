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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Service/ <a href="">List</a></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Service</h5>
                        <a href="{{ route('service.add.form') }}" class="text-white bg-primary btn btn-sm">Add New
                            Service</a>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table class="table" id="dTable">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-white">SL No</th>
                                            <th class="text-white">Image</th>
                                            <th class="text-white">Name</th>
                                            <th class="text-white">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        @foreach ($services as $key => $service)
                                            <tr>
                                                <td>
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                                    <strong>1</strong>
                                                </td>

                                                <td>
                                                    <img src="{{ asset('/') }}{{ $service->image->url }}" alt=""
                                                        style="width:120px;height:100px;border-radius:40%">
                                                </td>
                                                <td>{{ $service->name }}</td>
                                                <td>
                                                    <div>

                                                        <div class="d-inline-flex align-items-center gap-1">
                                                            <button class="text-white btn-primary btn-sm btn show_service_data"
                                                                data-bs-toggle="modal" data-id="{{ $service->id }}" data-bs-target="#largeModal"><i
                                                                    class="bx bx-show-alt "></i></button>
                                                            <a class="text-white btn-info btn-sm btn"
                                                                href="{{ route('service.edit', $service->id) }}"><i
                                                                    class="bx bx-edit-alt "></i></a>
                                                            <form action="{{ route('service.delete', $service->id) }}"
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
                <h5 class="modal-title text-white" id="exampleModalLabel3">View Service Data</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col mb-3">
                    <label for="nameLarge" class="form-label">Service Name</label>
                    <input type="text" id="name" disabled class="form-control" style="border:none" placeholder="Enter Name" />
                  </div>
                </div>
                <div class="">
                  <div class="col mb-0">
                    <label for="emailLarge" class="form-label">Service Content</label>
                    <textarea name="" id="content" disabled style="border:none" class="form-control">
                       
                    </textarea>
                  </div>
                  <div class="col mb-0 mt-4" id="image_content">
                    
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
        $('body').on("click",".show_service_data",function(){
        var id = $(this).data("id");
           $.ajax({
              type:"GET",
              url:'{{route("service.index")}}',
              data:{id:id},
              success: function (response){
                    $('#name').val(response.name);
                    $('#content').val(response.content);
                    var imageContent = $("#image_content");
                    imageContent.html(`<img src="{{ asset('/') }}${response.image.url}" id="image" alt="........" style="height: 100px;width:100px;border-radius:8px">`);
                },
              error:function (error) {
                console.log(error)
              }
           });
     });
    </script>
    <script>
        $('#notificationAlert').delay(3000).fadeOut('slow');
    </script>
@endsection
