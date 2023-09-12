<?php $__env->startSection('content'); ?>
<!-- START CONTENT -->

<div class="content">

    <div class="row row-sm">
            <div class="col-lg-12">
            <div class="card custom-card mt-5">
                <div class="card-body">
                    <div class="card-header">
                        <div>
                            <h6 class="main-content-label">Total Leave Requests</h6>
                        </div>
                    </div>
                    <div class="panel-body pn">
                                <?php if(Session::has('flash_message')): ?>
                                    <div class="alert alert-success">
                                        <?php echo e(Session::get('flash_message')); ?>

                                    </div>
                                <?php endif; ?>
    
                                <?php if(count($leaves)): ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom mb-0 border dataTable no-footer" id="recentorders" role="grid" aria-describedby="recentorders_info">
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
                                            <?php if(!(\Auth::user()->isCEO())): ?>
                                            <th>Status</th>
                                            <?php endif; ?>
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
                                                <?php if(!(\Auth::user()->isCEO())): ?>
                                                <td>
                                                    <div class="btn-group text-right" id="button-<?php echo e($leave->id); ?>">
                                                            
                                                            
                                                            <a type="button" href="<?php echo e(url('change-status/'.$leave->id)); ?>"
                                                                    class="btn btn-info br2 btn-xs fs12 "> Chnage Status
                                                            </a>
                                                    </div>
                                                </td>
                                                <?php endif; ?>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
                                        </tbody>
                                    </table>
                                </div>
                                    <?php else: ?>
                                    <div class="row text-center">
                                        <h2>No leaves to show</h2>
                                    </div>
                                    <?php endif; ?>
                            </div>
                </div>
            </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="/assets/js/custom.js"></script>
    <script src="<?php echo e(asset('new/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('new/js/dataTables.bootstrap5.js')); ?>"></script>
    <script src="<?php echo e(asset('new/js/dataTables.responsive.min.js')); ?>"></script>
    <script>
      $(function () {
        $("#recentorders").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#recentorders').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,

        });

      });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>