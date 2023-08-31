@extends('hrms.layouts.base')

@section('content')
        <!-- START CONTENT -->
<!--<div class="page-header">-->
<!--    <div>-->
        <!--<h2 class="main-content-title tx-24 mg-b-5">Roles Listing</h2>-->
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Invoices</li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Invoice Listings</li>-->
<!--        </ol>-->
<!--    </div>-->
<!--</div>-->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card mt-5">
            <div class="card-body">

                <div>
                    <h6 class="main-content-label mb-3">Invoice Lists</h6>
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
                                <th>Employee Code</th>
                                <th>Employee Name</th>
                                <th>Employee Date Of Joining</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =0;?>
                            @foreach($invoices as $invoice)
                            <tr>
                                <td scope="row">{{$i+=1}}</td>
                                <td>{{$invoice->employee_code}}</td>
                                <td>{{$invoice->employee_name}}</td>
                                <td>{{$invoice->employee_dof}}</td>
                                <td>
                                    <div class="btn-group text-right">
                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" > Action
                                                <span class="caret ml5"></span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            
                                                <a href="/inovice-view/{{$invoice->id}}" class="dropdown-item">View</a>
                                            
                                                @if(Auth::user()->isHR())
                                                <a href="/delete-invoice/{{$invoice->id}}" class="dropdown-item">Delete</a>
                                                @endif
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
<script src="{{ asset('new/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('new/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('new/js/dataTables.responsive.min.js') }}"></script>
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