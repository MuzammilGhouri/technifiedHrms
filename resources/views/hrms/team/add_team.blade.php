@extends('hrms.layouts.base')

@section('content')
<!-- START CONTENT -->
<div class="content">
    <div  class="inner-body">
        <!--<div class="page-header">-->
        <!--    <div>-->
        <!--        <h2 class="main-content-title tx-24 mg-b-5"></h2>-->
        <!--        <ol class="breadcrumb">-->
        <!--            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><span class="fa fa-home"></span> <span style="margin-left:10px">Dashboard</span></a></li>-->
        <!--            <li class="breadcrumb-item active" aria-current="page">Teams</li>-->
        <!--            <li class="breadcrumb-item active" aria-current="page">Add Team</li>-->
        <!--        </ol>-->
        <!--    </div>-->
        <!--</div>-->
    <!-- -------------- Content -------------- -->
    
        <div class="row row-sm">
		    <div class="col-lg-12 col-md-12">
			    <div class="card custom-card mt-5">
    				<div class="card-header">
    					<div>
    						<h6 class="main-content-label">Add Team</h6>
    					</div>
    				</div>
				    <div class="card-body">
    					<div class="row row-sm">
    						@if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{Session::get('flash_message')}}
                            </div>
                            @endif
    					    <div class="col-md-12 col-lg-12 col-xl-12">
    							<div class="">
    								{!! Form::open(['class' => 'form-horizontal']) !!}
    									<div class="form-group">
    										<label class="tx-semibold">Team Name</label>
                                            <input type="text" placeholder="name of team..." name="team_name" id="input002" class="select2-single form-control" required>
    									</div>
    									<div class="form-group">
    									    <div class="row row-sm">
            									<div class="col-sm-6">
            										<label class="tx-semibold">Select Team Department</label>
                                                    
                                                        <select id="position"  class="field form-control" name="department" style="height:100px;">
                                                            <option value="" selected>Select One</option>
                                                            @foreach($department as $dept)
                                                                <option value="{{$dept->id}}">{{$dept->name}}</option>
                                                            @endforeach
                                                        </select>
                                                      											
            									</div>
            									<div class="col-sm-6">
                                                    <label class="tx-semibold"> Select Team Leader</label>
                                                    
                                                        <select id="position2"  class="field form-control" name="leader_id" style="height:100px;">
                                                            <option value="" selected>Select One</option>
                                                            @foreach($leaders as $leader)
                                                                <option value="{{$leader->id}}">{{$leader->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    
                                                </div>
                                                   									        
    									    </div>

                                        </div>
    									<div class="form-group d-flex">
                                                            
                                            <div class="col-md-4">
    											<input type="submit" class="btn btn-bordered btn-info btn-block" value="Submit">
                                            </div>
                                            <div class="col-md-4">
    											
                                            </div>
                                            <div class="col-md-4">
    											<a href="/add-team">
                                                    <input type="button" class="btn btn-bordered btn-success btn-block" value="Reset">
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
	    
	    <div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">

                <div>
                    <h6 class="main-content-label mb-3">Department Lists</h6>
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
                                <th>Team Name</th>
                                <th>Manager</th>
                                <th>Team Leader</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =0;?>
                            @foreach($teams as $team)
                            <tr>
                                <td scope="row">{{$i+=1}}</td>
                                <td>{{$team->name}}</td>
                                <td>{{$team->manager->name}}</td>
                                <td>{{$team->leader->name}}</td>
                                <td>
                                    <div class="btn-group text-right">
                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" > Action
                                                <span class="caret ml5"></span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            
                                                <a href="/edit-team/{{$team->team_id}}" class="dropdown-item">Edit</a>
                                            
                                            
                                                <a href="/delete-team/{{$team->id}}" class="dropdown-item">Delete</a>
                                            
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
	    
    </div>
</div>

    @push('styles')
        <link rel="stylesheet" type="text/css" href="/assets/allcp/forms/css/bootstrap-select.css">
    @endpush
    @push('scripts')
        <script src="/assets/allcp/forms/js/bootstrap-select.js"></script>
    @endpush
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
