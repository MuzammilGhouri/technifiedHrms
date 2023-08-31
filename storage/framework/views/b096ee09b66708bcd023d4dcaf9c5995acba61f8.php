<?php $__env->startSection('content'); ?>

    <?php echo Html::style('/assets/allcp/forms/css/forms.css'); ?>


    <?php echo Html::style('/assets/custom.css'); ?>





<div class="row row-sm">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card mt-5">
            <div class="card-header">
                <div>
                    <h6 class="main-content-label">Ticket Form</h6>
                </div>
            </div>
            <div class="card-body">
                
                <form method="post" action="<?php echo e(route('store.compiance')); ?>" enctype="multipart/form-data">
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
                            <label for="designation" class="form-label tx-semibold">Department</label>
                            <select class="form-control" name="department_id" required>
                                <option value="">Select Department</option>
                                <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $depart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($depart->id); ?>" <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}') {if($emps->employee->department_id == $depart->id){echo 'selected';}}?>><?php echo e($depart->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="designation" class="form-label tx-semibold">Priority</label>
                            <select class="form-control" name="priority" required>
                                <option value="">Select Priority</option>
                               
                                    <option value="Low">Low</option>
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                                
                            </select>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="emp_name" class="form-label tx-semibold">Title</label>
                            <input type="text" class="form-control" id="comp_note" placeholder="Enter Compliance" name="comp_title" value="" required>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="emp_name" class="form-label tx-semibold">Description</label>
                            <textarea type="text" class="form-control" id="comp_note" placeholder="Enter Compliance" name="comp_note"  required></textarea>
                        </div>
                        
                    </div>
                   
                  
                    <button type="submit" class="btn btn-primary mb-0">Add Compliance</button>
                   
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>