<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card mg-b-20 mt-5" id="tabs-style3">
            <div class="card-header">
                <div>
                    <h6 class="main-content-label">Personal Details</h6>
                </div>
            </div>
            <div class="card-body">
                <div class="text-wrap">
                    <form action="<?php echo e(route('updPers')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($details->id); ?>">
                        <div class="example">
                            <div class="panel panel-primary tabs-style-3">
                                
                                    <div class="panel-body tabs-menu-body">
                                            <div class="form-group">
                                                <label for="photo" class="form-label tx-semibold">Photo</label>
                                                <input type="file" name="photo" id="photo" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="date_of_birth" class="form-label tx-semibold">Birthday</label>
                                                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="<?php echo e(isset($details->date_of_birth) ? $details->date_of_birth:''); ?>" value="<?php echo e(isset($details->date_of_birth) ? $details->date_of_birth:''); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="gender" class="form-label tx-semibold">Gender</label>
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="" <?php echo e($details->gender == null ? 'selected' : ''); ?>>Select Gender</option>
                                                    <option value="0" <?php echo e($details->gender == 0 ? 'selected' : ''); ?>>Male</option>
                                                    <option value="1" <?php echo e($details->gender == 1 ? 'selected' : ''); ?>>Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="father_name" class="form-label tx-semibold">Father's Name</label>
                                                <input type="text" name="father_name" id="father_name" class="form-control" placeholder="<?php echo e(isset($details->father_name) ? $details->father_name:''); ?>" value="<?php echo e(isset($details->father_name) ? $details->father_name:''); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="number" class="form-label tx-semibold">Cellphone</label>
                                                <input type="text" name="number" id="number" class="form-control" placeholder="<?php echo e(isset($details->number) ? $details->number:''); ?>" value="<?php echo e(isset($details->number) ? $details->number:''); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="current_address" class="form-label tx-semibold">Current Address</label>
                                                <input type="text" name="current_address" id="current_address" class="form-control" placeholder="<?php echo e(isset($details->current_address) ? $details->current_address:''); ?>" value="<?php echo e(isset($details->current_address) ? $details->current_address:''); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="permanent_address" class="form-label tx-semibold">Permanent Address</label>
                                                <input type="text" name="permanent_address" id="permanent_address" class="form-control" placeholder="<?php echo e(isset($details->permanent_address) ? $details->permanent_address:''); ?>" value="<?php echo e(isset($details->permanent_address) ? $details->permanent_address:''); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="date_of_joining" class="form-label tx-semibold">Date Joined</label>
                                                <input type="date" name="date_of_joining" id="date_of_joining" class="form-control" placeholder="<?php echo e($details->date_of_joining); ?>" value="<?php echo e($details->date_of_joining); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="date_of_confirmation" class="form-label tx-semibold">Date Confirmed</label>
                                                <input type="date" name="date_of_confirmation" id="date_of_confirmation" class="form-control" placeholder="<?php echo e($details->date_of_confirmation); ?>" value="<?php echo e($details->date_of_confirmation); ?>">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>