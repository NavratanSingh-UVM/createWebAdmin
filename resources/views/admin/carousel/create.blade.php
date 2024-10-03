@extends('admin.layouts.master')
@push('title')
    Create carousel
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
                        <div class="col-md-6"><h4 style="color:black">Create Carousel</h4></div>
                        <div class="col-md-6 text-right"><a href="{{ route('admin.carousel.list') }}" class="btn mb-1 btn-primary float-right">Back <span class="btn-icon-right"><i class="fa fa-angle-double-left"></i></span>
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
                                  <form class="form-valide" method="post" action="{{ route('admin.carousel.store') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Content<span class="text-danger">*</span>
                                            </label>
                                             <div class="col-lg-6">
                                                <input type="text" class="form-control" id="content" name="content" placeholder="Enter a tax.." value=" ">
                                                <span class="content text-danger"></span>  
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Image<span class="text-danger">*</span>
                                            </label>
                                             <div class="col-lg-6">
                                                <input type="file" class="form-control" id="content" name="image" value=" ">
                                                <span class="image text-danger"></span>  
                                            </div>
                                        </div>
                                           <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="video_url">Video Url <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="video_url" name="video_url" placeholder="Enter a video url.." value=" ">
                                                <span class="video_url text-danger"></span>  
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
