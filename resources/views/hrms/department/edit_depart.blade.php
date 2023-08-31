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
        <!--            <li class="breadcrumb-item active" aria-current="page">Department</li>-->
        <!--            <li class="breadcrumb-item active" aria-current="page">Edit Department</li>-->
        <!--        </ol>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="row row-sm">
		    <div class="col-lg-12 col-md-12">
			    <div class="card custom-card mt-5">
    				<div class="card-header">
    					<div>
    						<h6 class="main-content-label">Edit Department</h6>
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
    									<div class="row row-sm">
        									<div class="col-sm-6">
        										<label class="tx-semibold">Department Name</label>
                                                <input type="text" placeholder="name of Department..." name="depart_name" value="{{$dept->name}}" id="input002" class="select2-single form-control" required>
        									</div>
        									<div class="col-sm-6">
                                                <label class="tx-semibold"> Select Department Head</label>    
                                                <select id="position2"  class="field form-control" name="head" style="height:100px;">
                                                    <option value="" selected>Select One</option>
                                                    @foreach($emp as $leader)
                                                    <option value="{{$leader->id}}" <?php if($dept->head_id == $leader->id){echo 'selected';}?>>{{$leader->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </diV>
    									<div class="form-group d-flex">
                                                            
                                            <div class="col-md-4">
    											<input type="submit" class="btn btn-bordered btn-info btn-block" value="Submit">
                                            </div>
                                            <div class="col-md-4">
    											
                                            </div>
                                            <div class="col-md-4">
    											<a href="/add-department">
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
    </div>
</div>
@endsection