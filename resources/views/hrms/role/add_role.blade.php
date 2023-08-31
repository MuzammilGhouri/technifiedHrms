@extends('hrms.layouts.base')

@section('content')
        <!-- START CONTENT -->
<div class="content">
    <div  class="inner-body">

    
    <!-- -------------- Content -------------- -->
    
        <div class="row row-sm">
		<div class="col-lg-12 col-md-12">
			<div class="card custom-card mt-5">
				<div class="card-header">
					<div>
						@if(\Route::getFacadeRoot()->current()->uri() == 'edit-role/{id}')
						<h6 class="main-content-label">Edit Role</h6>
						@else
						<h6 class="main-content-label">Add Role</h6>
						@endif
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
										<label class="tx-semibold">Role</label>
                                            @if(\Route::getFacadeRoot()->current()->uri() == 'edit-role/{id}')
                                            <input type="text" name="name" id="input002" class="select2-single form-control" value="@if($result && $result->name){{$result->name}}@endif" required>
                                            @else
                                            <input type="text" name="name" id="input002" class="select2-single form-control" placeholder="Role" required>
                                            @endif
									</div>
									<div class="form-group">
										<label class="tx-semibold">Description</label>
											<div class="pos-relative">
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'edit-role/{id}')
                                                <textarea class="select2-single form-control" rows="3" id="textarea1" name="description" required>@if($result && $result->description){{$result->description}}@endif</textarea>
                                                @else
                                                <textarea class="select2-single form-control" rows="3" id="textarea1" placeholder="Role Description" name="description" required></textarea>
                                                @endif
											</div>
									</div>
									<div class="form-group d-flex">
                                                        
                                        <div class="col-md-4">
											<input type="submit" class="btn btn-bordered btn-info btn-block" value="Submit">
                                        </div>
                                        <div class="col-md-4">
											<a href="/add-role">
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