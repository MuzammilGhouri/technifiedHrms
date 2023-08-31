@extends('hrms.layouts.base')
@push('css')
<style>
pre.sf-dump, pre.sf-dump .sf-dump-default {
    display: none !important;
}
</style>
@endpush
@section('content')
<!-- START CONTENT -->
<!--<div class="page-header">-->
<!--    <div>-->
<!--        <h2 class="main-content-title tx-24 mg-b-5">Attendance Manager</h2>-->
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Attendance</li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Attendance Manager</li>-->
<!--        </ol>-->
<!--    </div>-->
<!--</div>-->




<div class="content">
    <!-- -------------- Content -------------- -->
    <section id="content" class="table-layout animated fadeIn">
        <!-- -------------- Column Center -------------- -->
        <div class="chute chute-center">
            <!-- -------------- Products Status Table -------------- -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="card custom-card mt-5">
                        <div class="card-body">
                            <div class="box box-success">
                                <div class="panel">
                                    <div class="panel-menu allcp-form theme-primary mtn"> 
                                        <div class="row row-sm">
                                            <form class="att-search col-md-10" method="Post" action="https://hrms.technifiedlabs.com/attendance-manager"> 
                                                {{ csrf_field() }}
                                                <div class="col-lg-5 col-sm-6">
                                                    <div class="form-group">
                                                        @if(Auth::user()->isHR())
                                                        <select id="position"  class="field form-control" name="employee" style="height:100px; width: 100%">
                                                            <option>Select Employees</option>
                                                            @foreach($employees as $emp)
                                                            <option value="{{$emp->name}}" <?php if($name == $emp->name){echo'selected';}?>>{{$emp->name}}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                        @else
                                                        <select id="position"  class="field form-control" name="employee" style="height:100px; width: 100%"">
                                                            <option>Select Employees</option>
                                                            @foreach($employees as $emp)
                                                            <option value="{{$emp->name}}" <?php if($name == $emp->name){echo'selected';} if($emp->user_id == Auth::user()->id){echo'selected';}?>>{{$emp->name}}</option>
                                                            @endforeach
                                                            
                                                        </select>                                                        
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-sm-6">
                                                    <div class="form-group">
                                                        
                                                        <input type="text" class="field form-control" value="{{$daterange}}" name="daterange">
                                                    </div>
                                                </div>
        
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class=""></label>
                                                        <input type="submit" value="Search" name="button" class="btn btn-primary mob-btn">
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="col-md-10">
                                            <div class="col-md-2">
                                                <div class="form-group  d-flex justify-content-end">
                                                    <a href="/attendance-manager"  class="mob-btn">
                                                        <input type="submit" value="Reset" class="btn btn-warning mob-btn">
                                                    </a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    <h6 class="main-content-label mb-3">Attendance Manager Lists</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom mb-0 border dataTable no-footer" id="recentorders" role="grid" aria-describedby="recentorders_info">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Day</th>
                                <th>In Time</th>
                                <th>Out Time</th>
                                <th>Hours Worked</th>
                                <th>Difference</th>
                                <th>Status</th>
                                <th>Leave Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =0;?>
                            @foreach($attendances as $attendance)
                            <tr>
                                <td scope="row">{{$i+=1}}</td>
                                <td>{{$attendance->code}}</td>
                                <td>{{$attendance->name}}</td>
                                <td>{{getFormattedDate($attendance->date)}}</td>
                                <td>{{$attendance->day}}</td>
                                <td>{{$attendance->in_time}}</td>
                                <td>{{$attendance->out_time}}</td>
                                <td>{{round($attendance->hours_worked,2)}}</td>
                                <td>{{$attendance->difference}}</td>
                                <td>{{convertAttendanceFrom($attendance->status)}}</td>
                                <td>{{$attendance->leave_status}}</td>
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
<script src="/assets/js/custom.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>
<script src="{{ asset('new/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('new/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('new/js/dataTables.responsive.min.js') }}"></script>
<script>
  $(function () {
    $("#recentorders").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#recentorders').DataTable({
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