@extends('hrms.layouts.base')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card mg-b-20 mt-5" id="tabs-style3">
            <div class="card-header">
                <div>
                    <h6 class="main-content-label">Education History</h6>
                </div>
            </div>
            <div class="card-body">
                <div class="text-wrap">
                    <form action="{{route('updEduc')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="{{ $details->id }}">
                        <div class="example">
                            <div class="panel panel-primary tabs-style-3">
                                
                                <div class="panel-body tabs-menu-body">
                                            @foreach($empEducation as $item)
                                               <div class=''>
                                            		<!-- Make sure the repeater list value is different from the first repeater  -->
                                            		<div data-repeater-list="group_b">
                                            			<div data-repeater-item>
                                            			    <input type="hidden" name="empEdu[]" value="{{$item->id}}"/>
                                                            <div class="form-group">
                                                                <label for="code" class="form-label tx-semibold">Name of Institute</label>
                                                                <input type="text" name="school_name[]" id="code" class="form-control" placeholder="" value="{{$item->school_name}}" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="department" class="form-label tx-semibold">Degree</label>
                                                                <input type="text" name="sch_degree[]" id="department" class="form-control" placeholder="" value="{{$item->sch_degree}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="designation" class="form-label tx-semibold">Field Of Study</label>
                                                                <input type="text" name="field_study[]" id="designation" class="form-control" placeholder="" value="{{$item->field_study}}">
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="date_of_joining" class="form-label tx-semibold">Start Date</label>
                                                                    <input type="date" name="sch_date_of_joining[]" id="date_of_joining" class="form-control" placeholder="" value="{{$item->sch_date_of_joining}}">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="date_of_confirmation" class="form-label tx-semibold">Date Confirmed</label>
                                                                    <input type="date" name="sch_date_of_confirmation[]" id="sch_date_of_confirmation" class="form-control" placeholder="" value="{{$item->sch_date_of_confirmation}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group d-flex justify-content-end">
                                                                <button type="button" onclick="deleteEducation({{ $item->id }}, this)"  class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <hr class="EmplHr"/>
                                           @endforeach
                                           
                                           <div class='repeater'>
                                        		<!-- Make sure the repeater list value is different from the first repeater  -->
                                        		<div data-repeater-list="group_b">
                                        			<div data-repeater-item>
                                                        <div class="form-group">
                                                            <label for="code" class="form-label tx-semibold">Name of Institute</label>
                                                            <input type="text" name="school_name" id="code" class="form-control" placeholder="" value="" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="department" class="form-label tx-semibold">Degree</label>
                                                            <input type="text" name="sch_degree" id="department" class="form-control" placeholder="" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="designation" class="form-label tx-semibold">Field Of Study</label>
                                                            <input type="text" name="field_study" id="designation" class="form-control" placeholder="" value="">
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="date_of_joining" class="form-label tx-semibold">Start Date</label>
                                                                <input type="date" name="sch_date_of_joining" id="date_of_joining" class="form-control" placeholder="" value="">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="date_of_confirmation" class="form-label tx-semibold">Date Confirmed</label>
                                                                <input type="date" name="sch_date_of_confirmation" id="sch_date_of_confirmation" class="form-control" placeholder="" value="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group d-flex justify-content-end">
                                                            <button type="button" data-repeater-delete class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group overflow-hidden">
                                                <div class="">
                                                    <button type="button" data-repeater-create class="btn btn-primary">
                                                        <i class="fa fa-plus" aria-hidden="true"></i> Add
                                                    </button>
                                                </div>
                                                </div>
                                            </div>
                                            
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="ml-auto btn btn-primary mt-3" style="margin-left: auto;display: block;">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection