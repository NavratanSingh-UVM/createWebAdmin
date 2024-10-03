@extends('admin.layouts.master')
@push('title')
    Create Property
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
                        <div class="col-md-6"><h4 style="color:black">Create Property</h4></div>
                        <div class="col-md-6 text-right"><a href="{{ route('admin.property.list') }}" class="btn mb-1 btn-primary float-right">Back <span class="btn-icon-right"><i class="fa fa-angle-double-left"></i></span>
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
                                  <form class="form-valide" method="post" action="{{ route('admin.property.store') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Property Name<span class="text-danger">*</span>
                                            </label>
                                             <div class="col-lg-6">
                                                <input type="text" class="form-control" id="propertyName" name="propertyName" placeholder="Enter a property name.." value=" ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Heading Title<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="headingTitle" name="headingTitle" placeholder="Enter a heading title.." value=" ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="property_type">Property Type <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="property_type" name="property_type" placeholder="Enter a property type.." value=" ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                         </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="price">Display Price($Avg/Night)<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="Enter a price..." value=" ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                         </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="featured_properties">Featured Properties <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="property_type" name="property_type" placeholder="Enter a property type.." value=" ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                         </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
