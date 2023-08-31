<?php $__env->startSection('content'); ?>
        <!-- START CONTENT -->
<!--<div class="page-header">-->
<!--    <div>-->
        <!--<h2 class="main-content-title tx-24 mg-b-5">Roles Listing</h2>-->
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Invoices</li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Invoice Listings</li>-->
<!--        </ol>-->
<!--    </div>-->
<!--</div>-->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card mt-5">
            <div class="card-body">

                <div>
                    <h6 class="main-content-label mb-3">Invoice Lists</h6>
                </div>
                <?php if(Session::has('flash_message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('flash_message')); ?>

                    </div>
                <?php endif; ?>
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom mb-0 border dataTable no-footer" id="recentorders" role="grid" aria-describedby="recentorders_info">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Employee Code</th>
                                <th>Employee Name</th>
                                <th>Employee Date Of Joining</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =0;?>
                            <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td scope="row"><?php echo e($i+=1); ?></td>
                                <td><?php echo e($invoice->employee_code); ?></td>
                                <td><?php echo e($invoice->employee_name); ?></td>
                                <td><?php echo e($invoice->employee_dof); ?></td>
                                <td>
                                    <div class="btn-group text-right">
                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" > Action
                                                <span class="caret ml5"></span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            
                                                <a href="/inovice-view/<?php echo e($invoice->id); ?>" class="dropdown-item">View</a>
                                            
                                                <?php if(Auth::user()->isHR()): ?>
                                                <a href="/delete-invoice/<?php echo e($invoice->id); ?>" class="dropdown-item">Delete</a>
                                                <?php endif; ?>
                                        </div>
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
        
        

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('new/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('new/js/dataTables.bootstrap5.js')); ?>"></script>
<script src="<?php echo e(asset('new/js/dataTables.responsive.min.js')); ?>"></script>
<script>
  $(function () {
    $("#recentorders").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
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