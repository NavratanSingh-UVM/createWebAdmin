@extends('admin.layouts.master')
@push('title')
  Property Listing
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
                        <div class="col-md-6"><h4 style="color:black">Property Listing</h4></div>
                         <div class="col-md-6 text-right"><a href="{{ route('admin.property.create') }}" class="btn mb-1 btn-primary float-right">Add Property <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                        </a> </div>  
                    </div>
                </div>
            </div> 
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="my-property-listing" class="table table-hover bg-white border rounded-lg" style="width: 100%">
                                        <thead>
                                             <tr role="row">
                                                 <th>Sr No.</th>
                                                 <th>Property Id</th>
                                                 <th>Property Name</th>
                                                 {{-- <th>No Of Enquiries</th> --}}
                                                 <th>Property Created On</th>
                                                 {{-- <th>Created Date</th> --}}
                                                 {{-- <th>Renewal Date</th> --}}
                                                 {{-- <th>No Visitors</th> --}}
                                                 <th>Photo</th>
                                                 <th>Status</th>
                                                 <th>Action</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
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
@push('js')
<script>
   $(function () {
    var table = $('#my-property-listing').DataTable({
        "language": {
        "zeroRecords": "No record(s) found.",
         searchPlaceholder: "Search records"
      },
      "bDestroy": true,
      searching: true,
       ordering: false,
       paging: true,
       processing: true,
       serverSide: true,
       lengthChange: true,
       "bSearchable":true,
       bStateSave: true,
       scrollX: true,
        ajax:{
            url:"{{route('admin.property.list')}}",
        },
        dataType: 'html',
        columns: [
            {data: 'DT_RowIndex' ,name:'DT_RowIndex',searchable: false,orderable: false},
            {data: 'id', name: 'id',orderable: false},
            {data: 'property_name', name: 'property_name',orderable: false},
            {data: 'subscription_date', name: 'subscription_date',orderable: false,defaultContent:919786123454},
            {data: 'property_main_photos', name: 'property_main_photos',orderable: false},
            {data: 'status', name: 'status',orderable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
    });
    $.fn.dataTable.ext.errMode = 'none';
    $('#amenites').on('error.dt', function(e, settings, techNote, message) {
       console.log( 'An error has been reported by DataTables: ', message);
    })
    $('.mega-menu').on('click',function(){
        try {
            table.state.clear();
        }
        catch(err) {
            console.log(err.message);
        }
    })
    $(".search").on('click',function(){
        table.draw();
    })
  });

 function propertyDelete(id){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            showLoader();
            $.ajax({
                url: "{{ route('admin.property.delete.propert') }}",
                type: 'POST',
                dataType: "json",
                data:{'id':id,'_token': '{{ csrf_token()}}'},
                cache:false,
                success:function (res) {
                    hideLoader();
                    Swal.fire(
                        'Confirmed!',
                        res.msg,
                        ).then((res)=>{
                            setTimeout(function() {
                                location.reload();
                            },500);
                    })
                }
            });
        }
    });
} 
</script>
    
@endpush