@extends('admin.layouts.master')
@push('title')
   Additional features Update
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
                        <div class="col-md-6"><h4 style="color:black">My Profile</h4></div>
                          <div class="col-md-6 text-right"><a href="{{ route('admin.additional_features.list') }}" class="btn mb-1 btn-primary float-right">Back <span class="btn-icon-right"><i class="fa fa-angle-double-left"></i></span>
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
                                   <form id="add-additional-form" enctype="multipart/form-data">
                                        @csrf
                                           <div class="row mb-6">
                                             <div class="col-lg-12">
                                               <div class="col-sm-6 col-xl-6 col-xxl-6">
                                                  <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ Auth()->user()->id ?? '' }}">
                                                @if(auth()->user()->image !=null)
                                                 <img src="{{ url('storage\uploads\profile_image/' .auth()->user()->image) }}" alt="" srcset="" height="150" width="150">
                                                  <input type="hidden" name="old_image" value="{{auth()->user()->image ?? ''}}">
                                                 @else
                                                <img src="{{ asset('owner-assets/img/profile.png') }}" alt="My Profile" class="w-25">
                                                @endif
                                                 <div class="custom-file mt-4 h-auto">
                                                 <input type="file" class="custom-file-input" hidden id="customFile" name="image">
                                               <label class="btn btn-secondary btn-lg btn-block" for="customFile">
                                                  <span class="d-inline-block mr-1"><i class="fal fa-cloud-upload"></i></span>Upload profile image</label>
                                              </div>                                             
                                            </div>
                                              <div>
                                                 <div class="col-md-6">
                                                  <label for="inputEmail4" class="form-label">Name</label>
                                                  <input type="text" class="form-control" id="ProfileName" name="ProfileName" value="{{ Auth()->user()->name }}">
                                                 </div>
                                                  <div class="col-md-6">
                                                  <label for="inputEmail4" class="form-label">Email</label>
                                                  <input type="Email" class="form-control" id="email" name="email" value="{{ Auth()->user()->email }}">
                                                 </div>
                                                  <div class="col-md-6">
                                                  <label for="inputEmail4" class="form-label">Phone</label>
                                                  <input type="text" class="form-control" id="phone" name="phone" value="{{ Auth()->user()->phone }}">
                                                 </div>
                                                 <div class="col-md-6">
                                                 <label for="inputPassword4" class="form-label">New Password</label>
                                                 <input type="password" class="form-control" id="newPassword" name="newPassword">
                                                </div>
                                                 <div class="col-md-6">
                                                 <label for="inputPassword4" class="form-label">Confirm Password</label>
                                                 <input type="password" class="form-control" id="confirmNewPassword" name="confirmNewPassword">
                                                </div>
                                              </div>
                                             </div>
                                           </div>
                                          <div class="d-flex justify-content-end flex-wrap">
                                           <button type="submit" class="btn btn-lg btn-primary ml-4 mb-3">Update Profile</button>
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
     var form = '#add-additional-form';
       $(form).on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url: "{{ route('admin.additional_features.store')}}",
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(res){ 
             if(res.status==200){
                toastr.success(res.msg)
                window.location.href = site_url+"/admin/additional_features/list";
               }
             },
             error: function(res) {
                 toastr.error(res.responseJSON.msg)
               }
            
        })
    });
    </script>        
@endsection