@extends('hrms.layouts.base')

@section('content')

    {!! Html::style('/assets/allcp/forms/css/forms.css') !!}

    {!! Html::style('/assets/custom.css') !!}




<div class="row row-sm">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card mt-5">
            <div class="card-header">
                <div>
                    @if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}')
                    <h6 class="main-content-label">Employee Form Edit {{$emps->name}}</h6>
                    @else
                    <h6 class="main-content-label">Employee Form </h6>
                    @endif
                </div>
            </div>
            <div class="card-body">
                @if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}')
                <form method="post" action="{{ url('edit-emp/'.$emps->id) }}" enctype="multipart/form-data">
                @else
                <form method="post" action="{{ route('add-employee') }}" enctype="multipart/form-data">
                @endif
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
                            <label for="exampleInputEmail1" class="form-label tx-semibold">Employee Code</label>
                            @if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}')
                                <input type="text" name="emp_code" id="emp_code" class="form-control" value="@if($emps && $emps->employee->code){{$emps->employee->code}}@endif" required>
                            @else
                                <input type="text" name="emp_code" id="emp_code" class="form-control" placeholder="Employee Code..." required>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="designation" class="form-label tx-semibold">Department</label>
                            <select class="form-control" name="department_id" >
                                <option value="">Select Department</option>
                                @foreach($department as $depart)
                                    <option value="{{$depart->id}}" <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}') {if($emps->employee->department_id == $depart->id){echo 'selected';}}?>>{{$depart->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            @if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}')
                            <label for="role" class="form-label tx-semibold">Role</label>
                            <select class="form-control" name="role" id="role"  required>
                                <option value="">Select role</option>
                                @foreach($roles as $role)
                                    @if($emps->role->role->id == $role->id)
                                        <option value="{{$role->id}}" selected>{{$role->name}}</option>
                                    @endif
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            @else
                            <label for="role" class="form-label tx-semibold">Role</label>
                            <select class="form-control" name="role" id="role" required>
                                <option value="">Select role</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="designation" class="form-label tx-semibold">Team</label>
                            <select class="form-control" name="emp_department" >
                                <option value="0">Select Team</option>
                                @foreach($teams as $team)
                                    <option value="{{$team->id}}" <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}') {if($emps->employee->team_id == $team->id){echo 'selected';}}?>>{{$team->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="designation" class="form-label tx-semibold">Designation</label>
                            <input type="text" class="form-control" id="designation" placeholder="Enter Designation" name="emp_designation" value="<?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'){ echo $emps->employee->designation;}?>" required>
                        </div>

                        <div class="form-group">
                            <label for="emp_name" class="form-label tx-semibold">Employee Name</label>
                            <input type="text" class="form-control" id="emp_name" placeholder="Enter Name" name="emp_name" value="<?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'){ echo $emps->employee->name;}?>" required>
                        </div>
                        <div class="form-group">
                            <label for="emp_email" class="form-label tx-semibold">Email address</label>
                            <input type="email" class="form-control" id="emp_email" placeholder="Enter Email" required name="emp_email" value="<?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}') {echo  $emps->email;}?>">
                        </div>
                        <div class="form-group">
                            <label for="emp_pass" class="form-label tx-semibold">Password</label>
                            <input type="password" class="form-control" id="emp_pass" placeholder="Password" name="emp_pass" <?php if(\Route::getFacadeRoot()->current()->uri() != 'edit-emp/{id}') {echo 'required' ;}?>>
                        </div>
                    </div>
                    @if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}')
                    <button type="submit" class="btn btn-primary mb-0">Edit Employee</button>
                    @else
                    <button type="submit" class="btn btn-primary mb-0">Add Employee</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection