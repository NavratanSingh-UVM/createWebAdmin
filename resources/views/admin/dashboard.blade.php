@extends('admin.layouts.master')
@push('title')
   Alok Paliwal Dashboard
@endpush
@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white" style="font-size: 16px">Total Properties</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$totalProperties}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white" style="font-size: 16px">Total Feature Listing</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$featureListing}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white" style="font-size: 16px">Total Partner Listing</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$partnerListing}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white" style="font-size: 16px">Total Booking</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$totalBooking}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Status</th>
                                                    <th>User Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td><img src="@if($user->image ==null){{ asset('assets/images/avatar/1.jpg') }} @else {{url('public/storage/profile_image/'.$user->image) }} @endif" class=" rounded-circle mr-3" alt="">{{$user->name}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>
                                                            <span>{{$user->phone}}</span>
                                                        </td>
                                                        <td>
                                                            @if($user->status==='1')
                                                                <a href="javascript:void(0)" class="edit btn btn-success btn-sm">Active</a>
                                                            @else
                                                                <a href="javascript:void(0)" class="edit btn btn-danger btn-sm">Inactive</a>
                                                            @endif
                                                        </td>
                                                        <td>{{$user->getRoleNames()->first()}}</td>
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
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection