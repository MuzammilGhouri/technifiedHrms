<?php $__env->startSection('content'); ?>

<!--<div class="page-header">-->
<!--    <div>-->
<!--        <h2 class="main-content-title tx-24 mg-b-5">Add Leave Type</h2>-->
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Leave</li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Add Leave Type</li>-->
<!--        </ol>-->
<!--    </div>-->
<!--</div>-->

<div class="row row-sm">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card mt-5">
            <div class="card-header">
                <div>
                    <h6 class="main-content-label">Leave Type Form</h6>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('add-leave-type')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label tx-semibold"> Leave Type </label>
                                <input type="text" name="leave_type" id="input002" class="select2-single form-control" placeholder="Leave Type" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label tx-semibold"> Total Leave </label>
                                <input type="number" name="total_leave" id="input001" class="select2-single form-control" placeholder="Leave Type" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label tx-semibold"> Description </label>
                                <textarea class="select2-single form-control" rows="3" id="textarea1" placeholder="Leave Description" name="description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group" style="text-align: right;">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>