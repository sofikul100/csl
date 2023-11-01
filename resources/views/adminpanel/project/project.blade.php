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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Project/ <a href="">List</a></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Project</h5>
                        <a href="{{ route('project.add.form') }}" class="text-white bg-primary btn btn-sm">Add New
                            Project</a>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table class="table" id="dTable">
                                    <thead class="table-dark" id="Dtable">
                                        <tr>
                                            <th class="text-white">SL No</th>
                                            <th class="text-white">Image</th>
                                            <th class="text-white">Categorie Name</th>
                                            <th class="text-white">Title</th>
                                            <th class="text-white">Start-Date</th>
                                            <th class="text-white">End-Date</th>
                                            <th class="text-white">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        @foreach ($projects as $key =>$project)
                                            <tr>
                                                <td>
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                                    <strong>1</strong>
                                                </td>

                                                <td>
                                                    <img src="{{ asset('/') }}{{ $project->image->url }}" alt=""
                                                        style="width:100px;height:80px;border-radius:40%">
                                                </td>
                                                <td>---{{ $project->categorie->name }}---</td>
                                                <td>{{ $project->title }}</td>
                                                <td><span class="badge bg-success">{{ date('d-m-Y',strtotime($project->start_date)) }}</span></td>
                                                <td><span class="badge bg-dark">{{ date('d-m-Y',strtotime($project->end_date)) }}</span></td>
                                                <td>
                                                    <div>

                                                        <div class="d-inline-flex align-items-center gap-1">
                                                            <button class="text-white btn-primary btn-sm btn show_project_data"
                                                                data-bs-toggle="modal" data-id="{{ $project->id }}" data-bs-target="#largeModal"><i
                                                                    class="bx bx-show-alt "></i></button>
                                                            <a class="text-white btn-info btn-sm btn"
                                                                href="{{ route('project.edit', $project->id) }}"><i
                                                                    class="bx bx-edit-alt "></i></a>
                                                            <form action="{{ route('project.delete', $project->id) }}"
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
                <h5 class="modal-title text-white" id="exampleModalLabel3">View Project Data</h5>
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
                    <label for="nameLarge" class="form-label">Categorie Name</label>
                    <input type="text" id="catgorie_id" disabled class="form-control"  style="border:none;color:#000;background:#fdf5f5"/>
                  </div>

                  <div class="col mb-3">
                    <label for="nameLarge" class="form-label">Project Title</label>
                    <input type="text" id="title" disabled class="form-control"  style="border:none;color:#000;background:#fdf5f5"/>
                  </div>

                </div>
                <div class="row">
                  <div class="col-md-12 mb-0">
                    <label for="emailLarge" class="form-label">Project Content</label>
                    <textarea name="" id="content" disabled style="border:none;color:#000;background:#fdf5f5" class="form-control">
                       
                    </textarea>
                  </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                      <label for="nameLarge" class="form-label">Start Date</label>
                      <input type="text" id="start_date" disabled class="form-control"  style="border:none;color:#000;background:#fdf5f5"/>
                    </div>
  
                    <div class="col mb-3">
                      <label for="nameLarge" class="form-label">End Date</label>
                      <input type="text" id="end_date" disabled class="form-control"  style="border:none;color:#000;background:#fdf5f5"/>
                    </div>
  
                  </div>


                  <div>
                    <label for="nameLarge" class="form-label">Project Image</label>
                    <div id="image_content">

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
        $('body').on("click",".show_project_data",function(){
        var id = $(this).data("id");
           $.ajax({
              type:"GET",
              url:'{{route("project.index")}}',
              data:{id:id},
              success: function (response){
                      $("#catgorie_id").val('---'+ response.categorie.name +'---');
                      $('#title').val(response.title);
                      $('#content').val(response.content);
                      $('#start_date').val(response.start_date);
                      $('#end_date').val(response.end_date);
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
