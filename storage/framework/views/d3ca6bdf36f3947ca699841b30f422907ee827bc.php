<?php $__env->startSection('content'); ?>
<!-- START CONTENT -->

<div class="content">
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card mt-5">
                <div class="card-header">
                    <div>
                        <h6 class="main-content-label">Leave Requests</h6>
                    </div>
                </div>
                <div class="card-body">
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
                                            <th>Total Request</th>
                                            <th>Details</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i =0;?>
                                        <?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td scope="row"><?php echo e($i+=1); ?></td>
                                                <td><?php echo e((isset($post))? $leave->name : $leave->user->name); ?></td>
                                                <td><?php echo e((isset($post))? $leave->code : $leave->user->employee->code); ?></td>
                                                <td> <?php echo e(App\EmployeeLeaves::where('user_id',$leave->user->id)->count()); ?></td>
                                                <td>
                                                    <div class="btn-group text-right" id="button-<?php echo e($leave->id); ?>">
                                                            
                                                            
                                                            <a type="button" href="/total-leave-list/<?php echo e($leave->user->id); ?>"
                                                                    class="btn btn-info  "> Detail
                                                            </a>
                                                    </div>
                                                </td>
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