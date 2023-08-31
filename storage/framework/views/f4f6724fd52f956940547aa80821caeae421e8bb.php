<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card mg-b-20 mt-5" id="tabs-style3">
            <div class="card-header">
                <div>
                    <h6 class="main-content-label">Bank Details</h6>
                </div>
            </div>
            <div class="card-body">
                <div class="text-wrap">
                    <form action="<?php echo e(route('updBank')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($details->id); ?>">
                        <div class="example">
                            <div class="panel panel-primary tabs-style-3">
                                
                                <div class="panel-body tabs-menu-body">
                                            <div class="form-group">
                                                <label for="un_number" class="form-label tx-semibold">Account Title</label>
                                                <input type="text" name="un_number" id="un_number" class="form-control" placeholder="<?php echo e(isset($details->un_number) ? $details->un_number:''); ?>" value="<?php echo e(isset($details->un_number) ? $details->un_number:''); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="account_number" class="form-label tx-semibold">Account Number</label>
                                                <input type="text" name="account_number" id="account_number" class="form-control" placeholder="<?php echo e(isset($details->account_number) ? $details->account_number:''); ?>" value="<?php echo e(isset($details->account_number) ? $details->account_number:''); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="bank_name" class="form-label tx-semibold">Bank Name</label>
                                                <input type="text" name="bank_name" id="bank_name" class="form-control" placeholder="<?php echo e(isset($details->bank_name) ? $details->bank_name:''); ?>" value="<?php echo e(isset($details->bank_name) ? $details->bank_name:''); ?>">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>