<?php $__env->startSection('content'); ?>
<!-- START CONTENT -->
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Notification </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Notification</li>
            <li class="breadcrumb-item active" aria-current="page">Notification Leave </li>
        </ol>
    </div>
</div>
<div class="content">

   


<!-- -------------- Content -------------- -->
 

                        <div class="row row-sm">
<div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                <div class="panel-body pn">
                            <?php if(Session::has('flash_message')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(Session::get('flash_message')); ?>

                                </div>
                            <?php endif; ?>

                            
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom mb-0 border dataTable no-footer">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Employee</th>
                                        <th>Code</th>
                                        <th>Leave Type</th>
                                        <th>Date From</th>
                                        <th>Date To</th>
                                        <th>Days</th>
                                        <th>Remarks</th>
                                        <th>HR Approval</th>
                                        <th>Manager Approval</th>
                                        <th>Team Lead Approval</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i =0;?>
                                    <?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td scope="row"><?php echo e($i+=1); ?></td>
                                            <td><?php echo e((isset($post))? $leave->name : $leave->user->name); ?></td>
                                            <td><?php echo e((isset($post))? $leave->code : $leave->user->employee->code); ?></td>
                                            <td><?php echo e((isset($post))? $leave->leave_type : getLeaveType($leave->leave_type_id)); ?></td>
                                            <td><?php echo e(getFormattedDate($leave->date_from)); ?></td>
                                            <td><?php echo e(getFormattedDate($leave->date_to)); ?></td>
                                            <td><?php echo e($leave->days); ?></td>
                                            <td id="remark-<?php echo e($leave->id); ?>"><?php echo e((isset($leave->remarks)) ? $leave->remarks : 'N/A'); ?></td>
                                            <input type="hidden" value="<?php echo csrf_token(); ?>" id="token">
                                            <td>
                                                <?php if($leave->hr_approval==0): ?>
                                                <a href="javascript:;" class="btn btn-info btn-sm" style="margin:10px">Pending</a>
                                                <?php elseif($leave->hr_approval==1): ?>
                                                <a href="javascript:;" class="btn btn-success btn-sm" style="margin:10px">Approved</a>
                                                <?php else: ?>
                                                <a href="javascript:;" class="btn btn-danger btn-sm" style="margin:10px">Disapproved</a>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($leave->manager_approval==0): ?>
                                                <a href="javascript:;" class="btn btn-info btn-sm" style="margin:10px">Pending</a>
                                                <?php elseif($leave->manager_approval==1): ?>
                                                <a href="javascript:;" class="btn btn-success btn-sm" style="margin:10px">Approved</a>
                                                <?php else: ?>
                                                <a href="javascript:;" class="btn btn-danger btn-sm" style="margin:10px">Disapproved</a>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($leave->team_lead_approval==0): ?>
                                                <a href="javascript:;" class="btn btn-info btn-sm" style="margin:10px">Pending</a>
                                                <?php elseif($leave->team_lead_approval==1): ?>
                                                <a href="javascript:;" class="btn btn-success btn-sm" style="margin:10px">Approved</a>
                                                <?php else: ?>
                                                <a href="javascript:;" class="btn btn-danger btn-sm" style="margin:10px">Disapproved</a>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <div class="btn-group text-right" id="button-<?php echo e($leave->id); ?>">
                                                        
                                                        <?php if(\Auth::user()->isHR() || \Auth::user()->isManager() || \Auth::user()->isteamLaad()): ?>
                                                        <a type="button" href="<?php echo e(url('change-status/'.$leave->id)); ?>"
                                                                class="btn btn-info br2 btn-xs fs12 "> Chnage Status
                                                        </a>
                                                        <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
                                    </tbody>
                                </table>
                            </div>
                               
                        </div>
            </div>
        </div>
</div>

    <!-- Notification modal -->

    <div class="modal fade" tabindex="-1" role="dialog" id="notification-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="modal-header" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Modal -->
    <div id="remarkModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Remark</h4>
                </div>
                <div class="modal-body">
                    <p>
                        <textarea id="remark-text" class="form-control" placeholder="Remarks"></textarea>
                        <input type="hidden" id="leave_id">
                        <input type="hidden" id="type">

                    <div id="loader" class="hidden text-center">
                        <img src="/photos/76.gif" />
                    </div>
                    <div id="status-message" class="hidden">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="proceed-button">Proceed</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!-- /Notification Modal -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
<style>
        .badge-success {
            color: #fff;
            background-color: #28a745;
        }
        .badge-warning {
            color: #212529;
            background-color: #ffc107;
        }
        .badge-danger {
            color: #fff;
            background-color: #dc3545;
        }

</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="/assets/js/custom.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>