@extends('admin.layouts.master')
@push('title')
    Create Social media link
@endpush
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
        
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                <h4 style="color:black">Social media link</h4>
                    @include('flash-message.flash-message')
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                   <form   id="add-social-Link-form">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-name">FaceBook</label>
                                              <div class="col-lg-6">
                                               <input type="hidden" class="form-control" id="SocialId" name="SocialId" value="{{$data->social_id ?? ''}} ">
                                                <input type="text" class="form-control" id="fb" name="facebook"  placeholder="Enter the facebook" value="{{$data->facebook ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">X</label>
                                             <div class="col-lg-6">
                                                <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter the x link" value="{{$data->twitter ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                            </div>
                                             <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">LinkedIn</label>
                                             <div class="col-lg-6">
                                                <input type="text" class="form-control" id="linkdin" name="linkdin" placeholder="Enter the linkdin link" value="{{$data->linkdin ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Pinterest</label>
                                              <div class="col-lg-6">
                                                <input type="text" class="form-control" id="pinterest" name="pinterest" placeholder="Enter the pinterest link" value="{{$data->pinterest ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">YouTube</label>
                                             <div class="col-lg-6">
                                                <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Enter the youtube link"  value="{{$data->youtube ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary add-about-form" >Submit</button>
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

<script>
     var form = '#add-social-Link-form';
       $(form).on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url: "{{ route('admin.social_link.store')}}",
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(res){  
                console.log(res);
             if(res.status==200){
                toastr.success(res.msg)
                window.location.href =site_url+"/admin/social_link/list";
               }
             },
             error: function(res) {
               }
            
        })
    });
    </script>
   
@endsection
 