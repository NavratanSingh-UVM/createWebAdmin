@extends('admin.layouts.master')
@push('title')
    Create Review
@endpush
@section('content')
<!--**********************************
         Content body start -->
     
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                <h4 style="color:black">Review</h4>
                    @include('flash-message.flash-message')
                </div>
                 <div class="col-md-6 text-right"><a href="{{ route('admin.review.list') }}" class="btn mb-1 btn-primary float-right">Back <span class="btn-icon-right"><i class="fa fa-angle-double-left"></i></span>
                </a> </div> 
            </div>
            <!-- row -->
          
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                   <form   id="add-review-form">
                                        @csrf
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Customer name</label>
                                             <div class="col-lg-6">
                                                <input type="hidden" class="form-control" id="ReviewlId" name="ReviewlId"  value="{{$data->id ?? ''}} ">
                                                <input type="text" class="form-control" id="customerName" name="customerName"  value="{{$data->cust_name ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                             </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-name">Property Name</label>
                                              <div class="col-lg-6">
                                                <select class="form-control" name="propertyId" id="propery-name">
                                                    <option value="">Select Property </option>
                                                    @foreach ($propertylist as $property)
                                                        <option value="{{ $property->id }}" @if (!empty($data)) @selected($property->id == $data->property_id) @endif>{{ $property->property_name }}</option>
                                                    @endforeach
                                                </select>
                                                  <span class="property_type text-danger"></span>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Heading</label>
                                             <div class="col-lg-6">
                                                <input type="text" class="form-control" id="heading" name="heading"  value="{{$data->heading ?? ''}} ">
                                                <span class="heading text-danger"></span>  
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Customer review</label>
                                              <div class="col-lg-6">
                                              <textarea class="form-control" id="review" name="review" rows="5">{{$data->cust_review ?? ''}}</textarea>
                                                <span class="review text-danger"></span>  
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Customer place</label>
                                             <div class="col-lg-6">
                                                <input type="text" class="form-control" id="customerPlace" name="customerPlace"   value="{{$data->cust_place ?? ''}} ">
                                                <span class="customerPlace text-danger"></span>  
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Rating</label>
                                             <div class="col-lg-6">
                                                <input type="text" class="form-control" id="rating" name="rating"   value="{{$data->rating ?? ''}} ">
                                                <span class="rating text-danger"></span>  
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
                                                <span class="status text-danger"></span>  
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
     var form = '#add-review-form';
       $(form).on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url: "{{ route('admin.review.store')}}",
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
                window.location.href =site_url+"/admin/review/list";
               }
             },
             error: function(res) {
                 toastr.error(res.responseJSON.msg)
               }
            
        })
    });
    </script>
   
@endsection
 