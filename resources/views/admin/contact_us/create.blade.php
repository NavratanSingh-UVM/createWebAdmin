@extends('admin.layouts.master')
@push('title')
    Create Contact us
@endpush
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
        
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                <h4 style="color:black">Contact us</h4>
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
                                   <form   id="add-contact-form">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-name">Name<span class="text-danger">*</span>
                                            </label>
                                              <div class="col-lg-6">
                                               <input type="hidden" class="form-control" id="contactId" name="contactId" value="{{$data->id ?? ''}} ">
                                                <input type="text" class="form-control" id="contactName" name="contactName" placeholder="Enter the Name" value="{{$data->contact_name ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email<span class="text-danger">*</span>
                                            </label>
                                             <div class="col-lg-6">
                                                <input type="Email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Enter the email" value="{{$data->contact_email ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                            </div>
                                             <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Secondary email</label>
                                             <div class="col-lg-6">
                                                <input type="Email" class="form-control" id="contactEmail1" name="contactEmail1" placeholder="Enter the secondary email" value="{{$data->contact_email1 ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Phone No</label>
                                              <div class="col-lg-6">
                                                <input type="text" class="form-control" id="phoneNo" name="phoneNo" placeholder="Enter the phone no" value="{{$data->contact_phone ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Mobile No<span class="text-danger">*</span>
                                            </label>
                                             <div class="col-lg-6">
                                                <input type="text" class="form-control" id="mobileNo" name="mobileNo" placeholder="Enter the mobile no" value="{{$data->contact_mobile_number ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                          <label class="col-lg-4 col-form-label" for="val-address">Address<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="Address" name="contactAddress"  rows="5"   placeholder="Address  ...">{{$data->contact_addr ?? ''}}</textarea>
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
     var form = '#add-contact-form';
       $(form).on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url: "{{ route('admin.contact_us.store')}}",
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(res){  
             if(res.status==200){
                toastr.success(res.msg)
                window.location.href =site_url+"/admin/contact_us/create";
               }
             },
             error: function(res) {
                toastr.error(res.responseJSON.msg)
               }
            
        })
    });
    </script>
@endsection
 