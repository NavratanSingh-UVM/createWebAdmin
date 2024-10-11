@extends('admin.layouts.master')
@push('title')
    Create Attraction
@endpush
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
        <style>
.ck-editor__editable_inline {
    min-height: 200px;
}
</style>
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
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
                                   <form   id="add-attraction-form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-lg-6">
                                           <div class="form-group">
                                               <label for="property-photo">Image<span class="text-danger">*</span></label>
                                                <div class="custom-file">
                                                 <input type="hidden" class="form-control" id="id" name="attr_id" value="{{ $data->id ?? '' }}">
                                                   @if (!empty($data))
                                                      <img src="{{ url('storage\uploads\attraction/' . $data->image) }}" alt="" srcset="" height="200" width="400">
                                                      <input type="hidden" name="old_image" value="{{$data->image ?? ''}}">
                                                   @else
                                                    <img src="{{ url('storage\uploads\attraction/default.png')}}"  id="prev" alt="" srcset="" height="200" width="400">  
                                                   @endif
                                                    <input type="file" class="form-control"  id="attraction-photo"  name="image" accept=".png, .jpg, .jpeg, .jpg">
                                                  
                                                  <span class="image text-danger"></span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Attraction Heading<span class="text-danger">*</span>
                                            </label>
                                             <div class="col-lg-6">
                                                <input type="text" class="form-control" id="attractionHeading" name="Attrheading" placeholder="Heading" value="{{$data->heading ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                         <div class="col-md-12">
                                        <div class="form-group">
                                           <label for="description">Content</label>
                                            <textarea class="form-control ck-editor__editable_inline" id="AttractionEditor" name="AttrContent"  rows="5">{{$data->content ?? ''}}</textarea>
                                            <span class="description text-danger"></span>
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary add-attraction-form" >Submit</button>
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
      ClassicEditor
    .create( document.querySelector( '#AttractionEditor' )
    )
    .catch( error => {
        console.error( error );
    } );
</script>
<script>
     var form = '#add-attraction-form';
       $(form).on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url: "{{ route('admin.attraction.store')}}",
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(res){  
             if(res.status==200){
                toastr.success(res.msg); 
                window.location.href = site_url+'/admin/attraction/list';
               
               }
             },
             error: function(res) {
               }
            
        })
    });
</script>
@endsection
 