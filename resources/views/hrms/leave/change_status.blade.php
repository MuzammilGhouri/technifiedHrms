@extends('hrms.layouts.base')

@section('content')

    {!! Html::style('/assets/allcp/forms/css/forms.css') !!}

    {!! Html::style('/assets/custom.css') !!}


<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Leaves</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Leaves</li>
            <li class="breadcrumb-item active" aria-current="page">Change Status</li>
        </ol>
    </div>
</div>



<div class="row row-sm">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card">
            <div class="card-header">
                <div>
                    <h6 class="main-content-label">Change Status Form</h6>
                </div>
            </div>
            <div class="card-body">
                
                <form method="post" action="{{ url('update-status/'.$employeeLeave->id) }}" enctype="multipart/form-data">
                
                
                
                    {{ csrf_field() }}
                    @if(session('message'))
                        {{session('message')}}
                    @endif
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            {{ session::get('flash_message') }}
                        </div>
                        @endif
                    <div class="">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label tx-semibold">Remarks</label>
                            <textarea  name="status_remarks" id="status_remarks" class="form-control"  required> </textarea>
                        </div>
                        <div class="form-group">
                            
                            <label for="role" class="form-label tx-semibold">Status</label>
                            <select class="select2-single form-control" name="status" id="role">
                                <option value="">Select Status</option>
                                
                                <option value="1">Approved</option>
                                <option value="2">Disapproved</option>
                                
                            </select>
                            
                        </div>

                       
                    </div>
                    
                    <button type="submit" class="btn btn-primary mb-0">Submit Status</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection