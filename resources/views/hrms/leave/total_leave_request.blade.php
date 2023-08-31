@extends('hrms.layouts.base')

@section('content')
<!-- START CONTENT -->

<div class="content">

    <div class="row row-sm">
            <div class="col-lg-12">
            <div class="card custom-card mt-5">
                <div class="card-body">
                    <div class="card-header">
                        <div>
                            <h6 class="main-content-label">Total Leave Requests</h6>
                        </div>
                    </div>
                    <div class="panel-body pn">
                                @if(Session::has('flash_message'))
                                    <div class="alert alert-success">
                                        {{ Session::get('flash_message') }}
                                    </div>
                                @endif
    
                                @if(count($leaves))
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom mb-0 border dataTable no-footer" id="recentorders" role="grid" aria-describedby="recentorders_info">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Employee</th>
                                            <th>Code</th>
                                            <th>Leave Type</th>
                                            <th>Date From</th>
                                            <th>Date To</th>
                                            <th>Days</th>
                                            <th>Remarks</th>
                                            <th>HR Approval</th>
                                            <th>Manager Approval</th>
                                            <th>Team Lead Approval</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i =0;?>
                                        @foreach($leaves as $leave)
                                            <tr>
                                                <td scope="row">{{$i+=1}}</td>
                                                <td>{{(isset($post))? $leave->name : $leave->user->name}}</td>
                                                <td>{{(isset($post))? $leave->code : $leave->user->employee->code}}</td>
                                                <td>{{(isset($post))? $leave->leave_type : getLeaveType($leave->leave_type_id)}}</td>
                                                <td>{{getFormattedDate($leave->date_from)}}</td>
                                                <td>{{getFormattedDate($leave->date_to)}}</td>
                                                <td>{{$leave->days}}</td>
                                                <td id="remark-{{$leave->id}}">{{(isset($leave->remarks)) ? $leave->remarks : 'N/A'}}</td>
                                                <input type="hidden" value="{!! csrf_token() !!}" id="token">
                                                <td>
                                                    @if($leave->hr_approval==0)
                                                    <a href="javascript:;" class="btn btn-info btn-sm" style="margin:10px">Pending</a>
                                                    @elseif($leave->hr_approval==1)
                                                    <a href="javascript:;" class="btn btn-success btn-sm" style="margin:10px">Approved</a>
                                                    @else
                                                    <a href="javascript:;" class="btn btn-danger btn-sm" style="margin:10px">Disapproved</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($leave->manager_approval==0)
                                                    <a href="javascript:;" class="btn btn-info btn-sm" style="margin:10px">Pending</a>
                                                    @elseif($leave->manager_approval==1)
                                                    <a href="javascript:;" class="btn btn-success btn-sm" style="margin:10px">Approved</a>
                                                    @else
                                                    <a href="javascript:;" class="btn btn-danger btn-sm" style="margin:10px">Disapproved</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($leave->team_lead_approval==0)
                                                    <a href="javascript:;" class="btn btn-info btn-sm" style="margin:10px">Pending</a>
                                                    @elseif($leave->team_lead_approval==1)
                                                    <a href="javascript:;" class="btn btn-success btn-sm" style="margin:10px">Approved</a>
                                                    @else
                                                    <a href="javascript:;" class="btn btn-danger btn-sm" style="margin:10px">Disapproved</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="btn-group text-right" id="button-{{$leave->id}}">
                                                            
                                                            
                                                            <a type="button" href="{{ url('change-status/'.$leave->id) }}"
                                                                    class="btn btn-info br2 btn-xs fs12 "> Chnage Status
                                                            </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
     
                                        </tbody>
                                    </table>
                                </div>
                                    @else
                                    <div class="row text-center">
                                        <h2>No leaves to show</h2>
                                    </div>
                                    @endif
                            </div>
                </div>
            </div>
    </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="/assets/js/custom.js"></script>
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