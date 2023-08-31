<?php $__env->startSection('content'); ?>
<style>
td {
    text-wrap: wrap;
}
</style>
        <!-- START CONTENT -->
<!--<div class="page-header">-->
<!--    <div>-->
        <!--<h2 class="main-content-title tx-24 mg-b-5">Roles Listing</h2>-->
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Invoices</li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">TICKETListings</li>-->
<!--        </ol>-->
<!--    </div>-->
<!--</div>-->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card mt-5">
            <div class="card-body">

                <div>
                    <h6 class="main-content-label mb-3">TICKET Detail</h6>
                </div>
                <?php if(Session::has('flash_message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('flash_message')); ?>

                    </div>
                <?php endif; ?>
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom mb-0 border dataTable no-footer" id="recentorders" role="grid" aria-describedby="recentorders_info">
                        
                        <tbody>
                          
                            <tr>
                                <th scope="row">Ticket Number</th>
                                <td><?php echo e($ticket->token_no); ?></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">Ticket Title</th>
                                <td><?php echo e($ticket->title); ?></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">Ticket Priority</th>
                                <td><?php echo e($ticket->priority); ?></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">Department</th>
                                <td><?php echo e($ticket->department->name); ?></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">Description</th>
                                <td><?php echo e($ticket->complianceNotes); ?></td>
                                
                            </tr>
                            
                            <tr>
                                <th scope="row">Status</th>
                                <td><span class="badge bg-<?php echo e(($ticket->status == 1) ? 'success' : 'danger'); ?>"><?php echo e(($ticket->status == 1) ? 'Completed' : 'Pending'); ?></span></td>
                                
                            </tr>
                            
                            <?php if(Auth::user()->isTicketHead()): ?>
                            <tr>
                                <th scope="row">Action</th>
                                <td><div class="btn-group text-right">
                                    <?php if($ticket->status == 0): ?>
                                        <form action="<?php echo e(route('ticketcomplete.compiance')); ?>" method="POST">
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" name="ticket_id" value="<?php echo e($ticket->id); ?>" />
                                            <button type="submit" class="btn btn-success br2 btn-xs fs12">Mark as Completed</button>
                                        </form> 
                                    <?php else: ?>    
                                        <button type="submit" class="btn btn-success br2 btn-xs fs12 disabled" >Completed</button>
                                    <?php endif; ?>    
                                    </div></td>
                                
                            </tr>
                            
                            <?php endif; ?>
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