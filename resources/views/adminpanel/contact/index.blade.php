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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Contact/ <a href="">List</a></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Contacts</h5>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table class="table" id="dTable">

                        <thead>
                          <tr>
                            <th >S/N</th>
                            <th >Name</th>
                            <th >Email </th>
                            <th >Contact</th>
                            <th >Website</th>
                            <th >Content</th>
                            <th >Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i= 1;
                            @endphp
                            @foreach($contacts as $contact)
                          <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->contact }} </td>
                            <td>{{ $contact->website }}</td>
                            <td>{{ $contact->content }}</td>

                            <td>
                                <form action="{{ route('contact.delete', $contact->id) }}"
                                    method="POST">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit"
                                        class="text-white btn btn-danger btn-sm confirm-button"><i
                                            class="bx bx-trash"></i> </button>
                                </form>
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
</div>
@endsection

@section('footer_js')
<script>
$('#notificationAlert').delay(3000).fadeOut('slow');
</script>
@endsection
