@extends('admin.layouts.master')
@push('title')
   Social media link
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
                        <div class="col-md-6"><h4 style="color:black">Socail media link</h4></div>
                       @if(empty($Data->id))
                        <div class="col-md-6 text-right"><a href="{{ route('admin.social_link.create') }}" class="btn mb-1 btn-primary float-right">Add Socail media link <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                        </a> </div>    
                     @endif                      
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
                                    <table class="table table-striped table-bordered zero-configuration display nowrap" style="width:100%" id="social_link-list">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>facebook</th>
                                                <th>X</th>
                                                <th>linkdin</th>
                                                 <th>pinterest</th>
                                                <th>youtube</th>
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
    var table = $('#social_link-list').DataTable({
        "language": {
        "zeroRecords": "No record(s) found.",
         searchPlaceholder: "Search records"
      },
      "bDestroy": true,
      searching: false,
       ordering: false,
       paging: true,
       processing: true,
       serverSide: true,
       lengthChange: true,
       "bSearchable":true,
       bStateSave: true,
       scrollX: true,
        ajax:{
            url:"{{route('admin.social_link.list')}}",
        },
        dataType: 'html',
        columns: [
            {data: 'DT_RowIndex' ,name:'DT_RowIndex',searchable: false,orderable: false},
            {data: 'facebook', name:'facebook',orderable: false},
            {data: 'twitter', name: 'twitter',orderable: false},
            {data: 'linkdin', name: 'linkdin',orderable: false},
            {data: 'pinterest', name:'pinterest',orderable: false,defaultContent:919786123454},
            {data: 'youtube', name:'youtube',orderable: false},
            {data: 'action', name: 'action',orderable: false},
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
  });
//   state  Delete Method
function social_linkDelete(id){
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
                url: "{{ route('admin.social_link.delete') }}",
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