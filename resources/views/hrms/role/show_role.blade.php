@extends('hrms.layouts.base')

@section('content')
<!-- START CONTENT -->
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Roles Listing</h2>
        <!--<ol class="breadcrumb">-->
        <!--    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>-->
        <!--    <li class="breadcrumb-item active" aria-current="page">Roles</li>-->
        <!--    <li class="breadcrumb-item active" aria-current="page">Roles Listing</li>-->
        <!--</ol>-->
    </div>
</div>
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
                @endif
                <div>
                    <h6 class="main-content-label mb-3">Roles Lists</h6>
                </div>
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom mb-0 border dataTable no-footer" id="recentorders" role="grid" aria-describedby="recentorders_info">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Role</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =0;?>
                            @foreach($roles as $role)
                            <tr>
                                <td scope="row">{{$i+=1}}</td>
                                <td>{{$role->name}}</td>
                                <td>{{$role->description}}</td>
                                <td>
                                    <div class="btn-group text-right">
                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" > Action
                                                <span class="caret ml5"></span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            
                                                <a href="/edit-role/{{$role->id}}" class="dropdown-item">Edit</a>
                                            
                                            
                                                <a href="/delete-role/{{$role->id}}" class="dropdown-item">Delete</a>
                                            
                                        </div>
                                    </div>
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
    $("#recentorders").DataTable({
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