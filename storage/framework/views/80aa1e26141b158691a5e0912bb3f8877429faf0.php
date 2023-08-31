<?php $__env->startSection('content'); ?>

    <?php echo Html::style('/assets/allcp/forms/css/forms.css'); ?>


    <?php echo Html::style('/assets/custom.css'); ?>





<div class="row row-sm">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card mt-5">
            <div class="card-header">
                <div>
                    <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                    <h6 class="main-content-label">Employee Form Edit <?php echo e($emps->name); ?></h6>
                    <?php else: ?>
                    <h6 class="main-content-label">Employee Form </h6>
                    <?php endif; ?>
                </div>
            </div>
            <div class="card-body">
                <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                <form method="post" action="<?php echo e(url('edit-emp/'.$emps->id)); ?>" enctype="multipart/form-data">
                <?php else: ?>
                <form method="post" action="<?php echo e(route('add-employee')); ?>" enctype="multipart/form-data">
                <?php endif; ?>
                    <?php echo e(csrf_field()); ?>

                    <?php if(session('message')): ?>
                        <?php echo e(session('message')); ?>

                    <?php endif; ?>
                    <?php if(Session::has('flash_message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session::get('flash_message')); ?>

                        </div>
                        <?php endif; ?>
                    <div class="">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label tx-semibold">Employee Code</label>
                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                <input type="text" name="emp_code" id="emp_code" class="form-control" value="<?php if($emps && $emps->employee->code): ?><?php echo e($emps->employee->code); ?><?php endif; ?>" required>
                            <?php else: ?>
                                <input type="text" name="emp_code" id="emp_code" class="form-control" placeholder="Employee Code..." required>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="designation" class="form-label tx-semibold">Department</label>
                            <select class="form-control" name="department_id" >
                                <option value="">Select Department</option>
                                <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $depart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($depart->id); ?>" <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}') {if($emps->employee->department_id == $depart->id){echo 'selected';}}?>><?php echo e($depart->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                            <label for="role" class="form-label tx-semibold">Role</label>
                            <select class="form-control" name="role" id="role"  required>
                                <option value="">Select role</option>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($emps->role->role->id == $role->id): ?>
                                        <option value="<?php echo e($role->id); ?>" selected><?php echo e($role->name); ?></option>
                                    <?php endif; ?>
                                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php else: ?>
                            <label for="role" class="form-label tx-semibold">Role</label>
                            <select class="form-control" name="role" id="role" required>
                                <option value="">Select role</option>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="designation" class="form-label tx-semibold">Team</label>
                            <select class="form-control" name="emp_department" >
                                <option value="0">Select Team</option>
                                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($team->id); ?>" <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}') {if($emps->employee->team_id == $team->id){echo 'selected';}}?>><?php echo e($team->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                    <button type="submit" class="btn btn-primary mb-0">Edit Employee</button>
                    <?php else: ?>
                    <button type="submit" class="btn btn-primary mb-0">Add Employee</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>