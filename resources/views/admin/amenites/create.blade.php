@extends('admin.layouts.master')
@push('title')
    Create Amenities
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
                        <div class="col-md-6"><h4 style="color:black">Create Amenities</h4></div>
                        <div class="col-md-6 text-right"><a href="{{ route('admin.amenities.list') }}" class="btn mb-1 btn-primary float-right">Back <span class="btn-icon-right"><i class="fa fa-angle-double-left"></i></span>
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
                                  <form class="form-valide" id='add-amenites-form'>
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Amenities Name<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                               <input type="hidden" class="form-control" id="amenites_id" name="Amenites_id" value="{{$data->id ?? '' }}">
                                                <input type="text" class="form-control" id="amenites" name="Amenities_Name" placeholder="Enter a Amenities.." value=" {{$data->aminity_name ?? ''}}">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Status<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                              <select class="form-control" name="status" id="status-type">
                                                  @if (!empty($data))
                                                     <option value="{{ ($data->status==1)?'1':'0' }}">{{ ($data->status==0)?'InActive':'Active' }}</option>
                                                     <option value="{{ ($data->status==1)?'0':'1' }}">{{ ($data->status==1)?'InActive':'Active' }}</option>
                                                  @else
                                                   <option value='1'>Active</option>
                                                  <option value='0'>InActive</option>
                                                  @endif
                                                </select>
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
<script>
     var form = '#add-amenites-form';
       $(form).on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url: "{{ route('admin.amenities.store')}}",
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(res){  
             if(res.status==200){
                toastr.success(res.msg); 
                window.location.href = site_url+'/admin/amenities/list';
               
               }
             },
             error: function(res) {
               }
            
        })
    });
</script>        
@endsection
