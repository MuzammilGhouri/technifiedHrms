@extends('hrms.layouts.base')

@section('content')
<!-- START CONTENT -->
<div class="content">
    <div  class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5"></h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><span class="fa fa-home"></span> <span style="margin-left:10px">Dashboard</span></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Notice</li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Notice</li>
                </ol>
            </div>
        </div>
    <!-- -------------- Content -------------- -->
    
        <div class="row row-sm">
		    <div class="col-lg-12 col-md-12">
			    <div class="card custom-card">
    				<div class="card-header">
    					<div>
    						<h6 class="main-content-label">Edit Notice</h6>
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

    								<form method="POST" action="https://hrms.technifiedlabs.com/edit-notice/{{$note[0]->id}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
    								    {{ csrf_field() }}
    									<div class="form-group">
    										<label class="tx-semibold">Notice Name</label>
                                            <input type="text" placeholder="Notice name..." name="note_name" id="input002" class="select2-single form-control" value="{{$note[0]->name}}" required>
    									</div>
    									<div class="form-group">
    										<label class="tx-semibold">Notice Image</label>
                                            <input name="image" type="file" class="dropify" data-default-file="{{asset($note[0]->image)}}" />
    									</div>
    									<div class="form-group d-flex">
                                                            
                                            <div class="col-md-4">
    											<input type="submit" class="btn btn-bordered btn-info btn-block" value="Submit">
                                            </div>
                                            <div class="col-md-4">
    											
                                            </div>
                                            <div class="col-md-4">
    											<a href="/add-note">
                                                    <input type="button" class="btn btn-bordered btn-success btn-block" value="Reset">
                                                </a>
                                            </div> 
    									</div>
    								</form>
    							</div>
    						</div>
    					</div>
				    </div>
			    </div>
		    </div>
	    </div>
	    

	    
    </div>
</div>


    @push('styles')
        <link rel="stylesheet" type="text/css" href="/assets/allcp/forms/css/bootstrap-select.css">
        <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    @endpush
    @push('scripts')
        <script src="/assets/allcp/forms/js/bootstrap-select.js"></script>
         <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
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
<script>$('.dropify').dropify();</script>
@endpush
