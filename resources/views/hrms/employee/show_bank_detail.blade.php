@extends('hrms.layouts.base')
@push('styles')
  <link rel="stylesheet" href="http://surfcoast.alancoaustralia.com.au/public/admin_template_style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="http://surfcoast.alancoaustralia.com.au/public/admin_template_style/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="http://surfcoast.alancoaustralia.com.au/public/admin_template_style/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
<input type="hidden" value="{{csrf_token()}}" id="token">
<!--<div class="page-header">-->
<!--    <div>-->
<!--        <h2 class="main-content-title tx-24 mg-b-5">Bank Account</h2>-->

<!--    </div>-->
<!--</div>-->

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card mt-5">
            <div class="card-body">
                <div>
                    <h6 class="main-content-label mb-3">Bank Detail Listings</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom mb-0 border dataTable no-footer" id="example1" role="grid" aria-describedby="recentorders_info">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Employee</th>
                                <th>Employee Email</th>
                                <th>Bank Name</th>
                                <th>Account Number</th>
                                <th>Ifsc Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =0;?>
                            @foreach($emps as $emp)
                            <tr>
                                <td scope="row">{{$i+=1}}</td>
                                <td>{{$emp->name}}</td>
                                <td>{{$emp->email}}</td>
                                <td>{{$emp->employee['bank_name']}}</td>
                                <td>{{$emp->employee['account_number']}}</td>
                                <td>{{$emp->employee['ifsc_code']}}</td>
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