@extends('hrms.layouts.base')

@section('content')
        <!-- START CONTENT -->
<!--<div class="page-header">-->
<!--    <div>-->
        <!--<h2 class="main-content-title tx-24 mg-b-5">Roles Listing</h2>-->
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Invoices</li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">TICKETListings</li>-->
<!--        </ol>-->
<!--    </div>-->
<!--</div>-->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card mt-5">
            <div class="card-body">

                <div>
                    <h6 class="main-content-label mb-3">TICKET Lists</h6>
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
                                <th>Title</th>
                                <th>Department</th>
                                <th>Ticket No</th>
                                <th>Status</th>
                                <th>Priority</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =0;?>
                            @foreach($ticket as $value)
                            <tr style="background: @if($value->status == 1) #05ae0470 @elseif(now()->subDay()->gte($value->created_at)) #ff000070 @endif ; color:  {{ now()->subDay()->gte($value->created_at) ? '#fff' : '' }};">
                                <td scope="row">{{$i+=1}}</td>
                                <td>{{$value->title}}</td>
                                <td>{{$value->department->name}}</td>
                                <td>{{$value->token_no}}</td>
                                <td><span class="badge bg-{{($value->status == 1) ? 'success' : 'danger'}}">{{($value->status == 1) ? 'Completed' : 'Pending'}}</span></td>
                                <td><span class="badge @if($value->priority == 'Low')bg-warning @elseif($value->priority == 'Medium')bg-success @else bg-danger @endif">{{ $value->priority }}</span></td>
                                <td>{{ Carbon\Carbon::parse($value->created_at)->format('d M Y') }}</td>
                                <td>
                                    <div class="btn-group text-right">
                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" > Action
                                                <span class="caret ml5"></span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            
                                                <a href="/complianceview/{{$value->id}}" class="dropdown-item">View</a>
                                            
                                             
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