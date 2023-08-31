@extends('hrms.layouts.base')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card mg-b-20 mt-5" id="tabs-style3">
            <div class="card-header">
                <div>
                    <h6 class="main-content-label">{{$details->name}} Profile</h6>
                </div>
            </div>
            <div class="card-body">
                <div class="text-wrap">
                    <!--<form action="{{ route('update-employee') }}" method="post" enctype="multipart/form-data">-->
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="{{ $details->id }}">
                        <div class="example">
                            <div class="panel panel-primary tabs-style-3">
                                
                                <div class="panel-body tabs-menu-body">
                                    <div class="tab-content">
                                        <h2>Personal Details</h2>
                                            <div class="form-group prof-img">
                                                <img src="{{isset($details->photo) && ($details->photo != '') ? $details->photo : '/assets/img/avatars/profile_pic.png'}}" alt="">
                                            </div>
                                            <!--<div class="form-group">-->
                                            <!--    <label for="photo" class="form-label tx-semibold">Photo</label>-->
                                            <!--    <input type="file" name="photo" id="photo" class="form-control">-->
                                            <!--</div>-->
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="code" class="form-label tx-semibold">Employee ID</label>
                                                <input type="text" name="code" id="code" class="form-control" placeholder="{{isset($details->code) ? $details->code:'' }}" value="{{isset($details->code) ? $details->code:'' }}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name" class="form-label tx-semibold">Name</label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="{{isset($details->name) ? $details->name:'' }}" value="{{isset($details->name) ? $details->name:'' }}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email" class="form-label tx-semibold">Email</label>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="{{isset($details->user->email) ? $details->user->email:'' }}" value="{{isset($details->user->email) ? $details->user->email:'' }}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="un_number" class="form-label tx-semibold">Account Title</label>
                                                <input type="text" name="un_number" id="un_number" class="form-control" placeholder="{{isset($details->un_number) ? $details->un_number:'' }}" value="{{isset($details->un_number) ? $details->un_number:'' }}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="account_number" class="form-label tx-semibold">Account Number</label>
                                                <input type="text" name="account_number" id="account_number" class="form-control" placeholder="{{isset($details->account_number) ? $details->account_number:'' }}" value="{{isset($details->account_number) ? $details->account_number:'' }}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="bank_name" class="form-label tx-semibold">Bank Name</label>
                                                <input type="text" name="bank_name" id="bank_name" class="form-control" placeholder="{{isset($details->bank_name) ? $details->bank_name:'' }}" value="{{isset($details->bank_name) ? $details->bank_name:'' }}" readonly>
                                            </div>
                                            
                                            
                                            

                                            <div class="form-group col-md-6">
                                                <label for="date_of_birth" class="form-label tx-semibold">Birthday</label>
                                                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="{{isset($details->date_of_birth) ? $details->date_of_birth:'' }}" value="{{isset($details->date_of_birth) ? $details->date_of_birth:'' }}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="gender" class="form-label tx-semibold">Gender</label>
                                                <select name="gender" id="gender" class="form-control" readonly>
                                                    <option value="" {{ $details->gender == null ? 'selected' : '' }}>Select Gender</option>
                                                    <option value="0" {{ $details->gender == 0 ? 'selected' : '' }}>Male</option>
                                                    <option value="1" {{ $details->gender == 1 ? 'selected' : '' }}>Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="father_name" class="form-label tx-semibold">Father's Name</label>
                                                <input type="text" name="father_name" id="father_name" class="form-control" placeholder="{{isset($details->father_name) ? $details->father_name:'' }}" value="{{isset($details->father_name) ? $details->father_name:'' }}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="number" class="form-label tx-semibold">Cellphone</label>
                                                <input type="text" name="number" id="number" class="form-control" placeholder="{{isset($details->number) ? $details->number:'' }}" value="{{isset($details->number) ? $details->number:'' }}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="current_address" class="form-label tx-semibold">Current Address</label>
                                                <input type="text" name="current_address" id="current_address" class="form-control" placeholder="{{isset($details->current_address) ? $details->current_address:'' }}" value="{{isset($details->current_address) ? $details->current_address:'' }}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="permanent_address" class="form-label tx-semibold">Permanent Address</label>
                                                <input type="text" name="permanent_address" id="permanent_address" class="form-control" placeholder="{{isset($details->permanent_address) ? $details->permanent_address:'' }}" value="{{isset($details->permanent_address) ? $details->permanent_address:'' }}" readonly>
                                            </div>
                                        
                                            
                                            <div class="form-group col-md-6">
                                                <label for="code" class="form-label tx-semibold">Employee ID</label>
                                                <input type="text" name="code" id="code" class="form-control" placeholder="{{isset($details->code) ? $details->code:'' }}" value="{{isset($details->code) ? $details->code:'' }}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="department" class="form-label tx-semibold">Department</label>
                                                @php
                                                $departName = App\Models\Department::where('id',$details->department_id)->first();
                                                @endphp
                                                <input type="text" name="department" id="department" class="form-control" placeholder="{{isset($details->department) ? $details->department:'' }}" value="{{$departName->name}}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="designation" class="form-label tx-semibold">Designation</label>
                                                <input type="text" name="designation" id="designation" class="form-control" placeholder="{{ $details->user->role->role->name }}" value="{{ $details->user->role->role->name }}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="date_of_joining" class="form-label tx-semibold">Date Joined</label>
                                                <input type="date" name="date_of_joining" id="date_of_joining" class="form-control" placeholder="{{$details->date_of_joining}}" value="{{$details->date_of_joining}}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="date_of_confirmation" class="form-label tx-semibold">Date Confirmed</label>
                                                <input type="date" name="date_of_confirmation" id="date_of_confirmation" class="form-control" placeholder="{{$details->date_of_confirmation}}" value="{{$details->date_of_confirmation}}" readonly>
                                            </div>
                                        </div>
                                        
                                            <h2>Education History</h2>
                                            
                                            @if(count($empEducation)>0)
                                                @foreach($empEducation as $item)
                                                   <div class=''>
                                                		<!-- Make sure the repeater list value is different from the first repeater  -->
                                                		<div data-repeater-list="group_b">
                                                			<div data-repeater-item>
                                                			    <input type="hidden" name="empEdu[]" value="{{$item->id}}"/>
                                                                <div class="form-group">
                                                                    <label for="code" class="form-label tx-semibold">Name of Institute</label>
                                                                    <input type="text" name="school_name[]" id="code" class="form-control" placeholder="" value="{{$item->school_name}}" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="department" class="form-label tx-semibold">Degree</label>
                                                                    <input type="text" name="sch_degree[]" id="department" class="form-control" placeholder="" value="{{$item->sch_degree}}" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="designation" class="form-label tx-semibold">Field Of Study</label>
                                                                    <input type="text" name="field_study[]" id="designation" class="form-control" placeholder="" value="{{$item->field_study}}" readonly>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="date_of_joining" class="form-label tx-semibold">Start Date</label>
                                                                        <input type="date" name="sch_date_of_joining[]" id="date_of_joining" class="form-control" placeholder="" value="{{$item->sch_date_of_joining}}" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="date_of_confirmation" class="form-label tx-semibold">Date Confirmed</label>
                                                                        <input type="date" name="sch_date_of_confirmation[]" id="sch_date_of_confirmation" class="form-control" placeholder="" value="{{$item->sch_date_of_confirmation}}" readonly>
                                                                    </div>
                                                                </div>
                                                                <!--<div class="form-group d-flex justify-content-end">-->
                                                                <!--    <button type="button"  class="btn btn-danger">Delete</button>-->
                                                                <!--</div>-->
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <hr class="EmplHr"/>
                                                @endforeach
                                            @else
                                                <h6>No Education Added!</h6>
                                                <hr class="EmplHr"/>
                                            @endif
                                           
                                            
                                            
                                       
                                        
                                            <h2>Work Experience</h2>
                                            
                                            @if(count($empExperience)>0)
                                            @foreach($empExperience as $val)
                                            <div class=''>
                                        		<!-- Make sure the repeater list value is different from the first repeater  -->
                                        		<div data-repeater-list="group_job">
                                        			<div data-repeater-item>
                                        			    <input type="hidden" name="empExpId[]" value="{{$val->id}}" />
                                                        <div class="form-group">
                                                            <label for="code" class="form-label tx-semibold">Title</label>
                                                            <input type="text" name="jobTitle[]" id="code" class="form-control" placeholder="" value="{{$val->jobTitle}}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="designation" class="form-label tx-semibold">Company Name</label>
                                                            <input type="text" name="companyName[]" id="designation" class="form-control" placeholder="" value="{{$val->companyName}}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="designation" class="form-label tx-semibold">Location</label>
                                                            <input type="text" name="compLoc[]" id="designation" class="form-control" placeholder="" value="{{$val->compLoc}}" readonly>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="date_of_joining" class="form-label tx-semibold">Start Date</label>
                                                                <input type="date" name="job_date_of_joining[]" id="job_date_of_joining" class="form-control" placeholder="" value="{{$val->job_date_of_joining}}" readonly>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="date_of_confirmation" class="form-label tx-semibold">Date Confirmed</label>
                                                                <input type="date" name="job_date_of_confirmation[]" id="job_date_of_confirmation" class="form-control" placeholder="" value="{{$val->job_date_of_confirmation}}" readonly>
                                                            </div>
                                                        </div>
                                                        <!--<div class="form-group d-flex justify-content-end">-->
                                                        <!--    <button type="button"  class="btn btn-danger">Delete</button>-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="EmplHr"/>
                                            @endforeach
                                            @else
                                                <h6>No Work Experience Added!</h6>
                                                <hr class="EmplHr"/>
                                            @endif
                                                
                                           
                                            
                                            
                                        
                                    </div>
                                </div>
                            </div>
                            <!--<button type="submit" class="ml-auto btn btn-primary mt-3" style="margin-left: auto;display: block;">Update Profile</button>-->
                        </div>
                    <!--</form>-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection