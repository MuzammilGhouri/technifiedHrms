@extends('hrms.layouts.base')
@push('styles')
    <!-- Toggle CSS -->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />-->
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <!--<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>-->
        <style>
        .dt-buttons.btn-group.flex-wrap {
            display: contents;
        }
        .btn-secondary {
            color: #fff!important;
            background-color: #4d65d9!important;
            border-color: #0a28b9!important;
        }
        </style>
@endpush
@section('content')
<!--<div class="page-header">-->
<!--    <div>-->
<!--        <h2 class="main-content-title tx-24 mg-b-5">Employee Manager</h2>-->
<!--    </div>-->
<!--</div>-->

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card mt-5">
            <div class="card-body">
                <div>
                    <h6 class="main-content-label mb-3">Employee Lists</h6>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalCenter">
                  Download Employees Data
                </button>
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom mb-0 border dataTable no-footer example1"  id="recentorders"  role="grid" aria-describedby="recentorders_info">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Email</th>
                                
                                <th>Role</th>
                                <th>Designation</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =0;?>
                            @foreach($members as $emp)
                            <tr>
                                <td scope="row">{{$i+=1}}</td>
                                <td>{{$emp->code}}</td>
                                <td>{{$emp->user->name}}</td>
                                <td>{{$emp->user->email}}</td>
                               
                               
                                <td>{{isset($emp->user->role->role->name)?$emp->user->role->role->name:''}}</td>
                                <td>{{$emp->designation}}</td>
                                <td>
                                    <a href="#" class="btn ripple btn-primary btn-sm">View Detail</a>
                                    <a href="#" class="btn ripple btn-info btn-sm">View Attendance</a>
                                    <!--/delete-emp/{{$emp->id}}-->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom mb-0 border dataTable no-footer"  id="example1"  role="grid" aria-describedby="recentorders_info">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Designation</th>
                                <th>Email</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =0;?>
                            @foreach($members as $emp)
                            <tr>
                                <td scope="row">{{$i+=1}}</td>
                                <td>{{$emp->code}}</td>
                                <td>{{$emp->user->name}}</td>
                                <td>{{isset($emp->role->role->name)?$emp->role->role->name:''}}</td>
                                <td>{{$emp->designation}}</td>
                                <td>{{$emp->user->email}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id');
        $.ajax({
            type: "get",
            dataType: "json",
            url: '{{url("changeStatus")}}',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
<script>
    $(function() {
        
        $('.delete-emp').click(function(event) {
            event.preventDefault();
            var EmpId = $(this).data('id');
            swal({
                title: "Are you sure?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                closeOnConfirm: true
            },
            function () {
                
                var url = "{{ url('/delete-emp')}}";
                var fullUrl = url+'/'+EmpId;
                
            // ajax Start
                $.ajax({
                    url: fullUrl,
                    type:"GET",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        EmpId:EmpId
                    },
                    
                    success:function(response){
                        if(response.status){
                            swal(response.message , "session::get('flash_message')", "success")
                            // $('#contactformsresult').html("<div class='alert alert-success'>" + response.message + "</div>");
                        }
                        else{
                            swal(response.message , "session::get('flash_message')", "danger")
                            // $('#contactformsresult').html("<div class='alert alert-danger'>" + response.message + "</div>");
                        }
                    },
                });
            // ajax End 
            });
        });
    });
    
</script>
<script src="{{asset('DataTablePlugin/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('DataTablePlugin/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('DataTablePlugin/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('DataTablePlugin/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('DataTablePlugin/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('DataTablePlugin/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('DataTablePlugin/jszip/jszip.min.js')}}"></script>
<script src="{{asset('DataTablePlugin/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('DataTablePlugin/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('DataTablePlugin/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('DataTablePlugin/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('DataTablePlugin/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
    
    $(".example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    //   "buttons": ["copy", "csv", "excel", "pdf"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>




@endpush