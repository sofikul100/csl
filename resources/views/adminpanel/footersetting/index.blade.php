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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Footer Setting/ <a href="">Data</a></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Footer Settings</h5>
                        <a href="{{ route('footer_setting_edit',$footer_setting->id) }}" class="btn btn-sm btn-info">Edit Footer Setting</a> 
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table class="table bordered">
                                    <thead style="border:1px solid gray;">
                                        <tr>
                                            <th class="text-white bg-dark ">Company Brief</th>
                                            <th>{{ $footer_setting->company_brief}}</th>
                                        </tr>
                                        <tr>
                                            <th class="text-white bg-dark">Facebook Url</th>
                                            <th class="">{{ $footer_setting->facebook_url}}</th>
                                        </tr>
                                        <tr>
                                            <th class="text-white bg-dark ">Twitter Url</th>
                                            <th class="">{{ $footer_setting->twitter_url}}</th>
                                        </tr>
                                        <tr>
                                            <th class="text-white bg-dark">Instagram Url</th>
                                            <th class="">{{ $footer_setting->instagram_url}}</th>
                                        </tr>
                                        <tr>
                                            <th class="text-white bg-dark">Pinterest Url</th>
                                            <th class="">{{ $footer_setting->pinterest_url}}</th>
                                        </tr>
                                        <tr>
                                            <th class="text-white bg-dark">Linkedin Url</th>
                                            <th class="">{{ $footer_setting->linkedin_url}}</th>
                                        </tr>
                                        <tr>
                                    </thead>
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
