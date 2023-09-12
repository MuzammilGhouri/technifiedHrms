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
                    <h6 class="main-content-label mb-3">Employees Attendance</h6>
                </div>
               
               
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom mb-0 border dataTable no-footer example1"  id="recentorders"  role="grid" aria-describedby="recentorders_info">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =0;?>
                            @foreach($user as $emp)
                            <tr>
                                <td scope="row">{{$i+=1}}</td>
                                <td>{{$emp->employee['code']}}</td>
                                <td>{{$emp->name}}</td>
                                <td>{{$emp->email}}</td>
                                
                                <!--<td>{{convertStatusBack($emp->employee['status'])}}</td>-->
                               
                                <td>
                                    
                                    <a href="{{route('member-attendance',['id'=>$emp->id])}}" class="btn ripple btn-info btn-sm">View Attendance</a>
                                    
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



@endsection

@push('scripts')

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