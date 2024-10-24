@extends('admin.layouts.master')
@push('title')
    Create About us
@endpush
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
           ***********************************-->
        <style>
         .ck-editor__editable_inline {
           min-height: 200px;
         }
       </style>
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                  <h4 style="color:black">About us</h4>
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
                                   <form   id="add-about-form" enctype="multipart/form-data">
                                        @csrf
                                       @for ($i = 0; $i < 5; $i++)
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                               <label for="property-photo">@if($i==0)Image @else Site Image {{$i}} @endif</label>
                                                <div class="custom-file">
                                                 <input type="hidden" class="form-control" id="about_id" name="about_id" value="{{ $data->id ?? '' }}">
                                                   @if (!empty($data))
                                                      <img src="{{ url('storage\uploads\about/' . $data->aboutUs_gallery_image[$i]['image_name']) }}" alt="" srcset="" height="200" width="400">
                                                      <input type="hidden" name="about_old_image{{$i}}" value="{{$data->aboutUs_gallery_image[$i]['image_name'] ?? ''}}">
                                                   @else
                                                    <img src="{{ url('storage\uploads\about/default.png')}}"  id="prev" alt="" srcset="" height="200" width="400">  
                                                   @endif
                                                    <input type="file" class="form-control"  id="about-photo"  name="about_image{{$i}}" accept=".png, .jpg, .jpeg, .jpg">
                                                  <span class="image text-danger"></span>
                                              </div>
                                            </div>
                                        </div>
                                         @endfor
                                         {{-- <div class="col-lg-6">
                                          <div class="form-group">
                                               <label for="property-photo">Site Image 1<span class="text-danger">*</span></label>
                                                <div class="custom-file">
                                                   @if (!empty($data))
                                                      <img src="{{ url('storage\uploads\about/' . $data->site_img1) }}" alt="" srcset="" height="200" width="400">
                                                      <input type="hidden" name="about_old_image1" value="{{$data->site_img1 ?? ''}}">
                                                   @else
                                                    <img src="{{ url('storage\uploads\about/default.png')}}"  id="prev" alt="" srcset="" height="200" width="400">  
                                                   @endif
                                                    <input type="file" class="form-control"   name="about_image1" accept=".png, .jpg, .jpeg, .jpg">
                                                  <span class="image text-danger"></span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                               <label for="property-photo">Site Image 2<span class="text-danger">*</span></label>
                                                <div class="custom-file">
                                                   @if (!empty($data))
                                                      <img src="{{ url('storage\uploads\about/' . $data->site_img2) }}" alt="" srcset="" height="200" width="400">
                                                      <input type="hidden" name="about_old_image2" value="{{$data->site_img2 ?? ''}}">
                                                   @else
                                                    <img src="{{ url('storage\uploads\about/default.png')}}"  id="prev" alt="" srcset="" height="200" width="400">  
                                                   @endif
                                                    <input type="file" class="form-control"  id="about-photo2"  name="about_image2" accept=".png, .jpg, .jpeg, .jpg">
                                                  <span class="image text-danger"></span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                               <label for="property-photo">Site Image 3<span class="text-danger">*</span></label>
                                                <div class="custom-file">
                                                   @if (!empty($data))
                                                      <img src="{{ url('storage\uploads\about/' . $data->site_img3) }}" alt="" srcset="" height="200" width="400">
                                                      <input type="hidden" name="about_old_image3" value="{{$data->site_img3 ?? ''}}">
                                                   @else
                                                    <img src="{{ url('storage\uploads\about/default.png')}}"  id="prev" alt="" srcset="" height="200" width="400">  
                                                   @endif
                                                    <input type="file" class="form-control"  id="about-photo3"  name="about_image3" accept=".png, .jpg, .jpeg, .jpg">
                                                  <span class="image text-danger"></span>
                                              </div>
                                            </div>
                                        </div>
                                         <div class="col-lg-6">
                                          <div class="form-group">
                                               <label for="property-photo">Site Image 4<span class="text-danger">*</span></label>
                                                <div class="custom-file">
                                                   @if (!empty($data))
                                                      <img src="{{ url('storage\uploads\about/' . $data->site_img4) }}" alt="" srcset="" height="200" width="400">
                                                      <input type="hidden" name="about_old_image4" value="{{$data->site_img4 ?? ''}}">
                                                   @else
                                                    <img src="{{ url('storage\uploads\about/default.png')}}"  id="prev" alt="" srcset="" height="200" width="400">  
                                                   @endif
                                                    <input type="file" class="form-control"  id="about-photo4"  name="about_image4" accept=".png, .jpg, .jpeg, .jpg">
                                                  <span class="image text-danger"></span>
                                              </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Slider 1</label>
                                             <div class="col-lg-6">
                                                <input type="text" class="form-control"  name="slider1" placeholder="slider link 2" value="{{$data->slider1 ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Slider 2</label>
                                             <div class="col-lg-6">
                                                <input type="text" class="form-control"  name="slider2" placeholder="slider link 2" value="{{$data->slider2 ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div> --}}
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Heading<span class="text-danger">*</span>
                                            </label>
                                             <div class="col-lg-6">
                                                <input type="text" class="form-control" id="heading" name="heading" placeholder="Heading" value="{{$data->heading ?? ''}} ">
                                                <span class="tax text-danger"></span>  
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Content </label>
                                           <textarea class="form-control" id="editor" name="Content"  rows="5">{{$data->content ?? ''}}</textarea>
                                            <span class="description text-danger"></span>
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
      ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );
</script>
    <script>
     var form = '#add-about-form';
       $(form).on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url: "{{ route('admin.about_us.store')}}",
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(res){  
             if(res.status==200){
                toastr.success(res.msg)
                window.location.href = site_url+"/admin/about_us/create";
               }
             },
             error: function(res) {
                toastr.error(res.responseJSON.msg)
               }
            
        })
    });
    </script>
@endsection
 