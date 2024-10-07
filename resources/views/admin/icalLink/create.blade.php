@extends('admin.layouts.master')
@push('title')
    Create Ical Link
@endpush
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
        
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    @include('flash-message.flash-message')
                    <div class="row">
                        <div class="col-md-6"><h4 style="color:black">Create Ical Link</h4></div>
                        <div class="col-md-6 text-right"><a href="{{ route('admin.icalLink.list') }}" class="btn mb-1 btn-primary float-right">Back <span class="btn-icon-right"><i class="fa fa-angle-double-left"></i></span>
                        </a> </div>                                
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                  <form class="form-valide" role="form"  method="post"  enctype="multipart/form-data" id="add-about-form" action="{{ route('admin.icalLink.store') }}">
                                        @csrf
                                        <div class="col-lg-6">
                                           <div class="form-group">
                                               <label for="property-photo">Image<span class="text-danger">*</span></label>
                                                <div class="custom-file">
                                                 <img src="" alt="" srcset="" height="100" width="100">
                                                   {{-- @if (!empty($propertyListing))
                                                     <img src="{{ url('storage/upload/property_image/main_image/' . $propertyListing->property_main_photos) }}" alt="" srcset="" height="100" width="100">
                                                     <input type="hidden" name="old_image" value="">
                                                   @endif --}}
                                                  <input type="file" class="form-control"  id="about-photo"  name="image" accept=".png, .jpg, .jpeg, .jpg">
                                                  <span class="image text-danger"></span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Owner Name<span class="text-danger">*</span>
                                            </label>
                                             <div class="col-lg-6">
                                                <input type="text" class="form-control" id="ownerName" name="ownerName" placeholder="Heading" value=" ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary add-about-form">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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
 