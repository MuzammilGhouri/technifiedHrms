<?php $__env->startPush('styles'); ?>
    <!-- Toggle CSS -->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />-->
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <!--<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>-->
        <style>
        .dt-buttons.btn-group.flex-wrap {
            display: contents;
        }
        .btn-secondary {
            color: #fff!important;
            background-color: #4d65d9!important;
            border-color: #0a28b9!important;
        }
        </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<!-- START CONTENT -->
<div class="content">
    <div  class="inner-body">
        <!--<div class="page-header">-->
        <!--    <div>-->
        <!--        <h2 class="main-content-title tx-24 mg-b-5">Add Department</h2>-->
                <!--<ol class="breadcrumb">-->
                <!--    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><span class="fa fa-home"></span> <span style="margin-left:10px">Dashboard</span></a></li>-->
                <!--    <li class="breadcrumb-item active" aria-current="page">Department</li>-->
                <!--    <li class="breadcrumb-item active" aria-current="page">Add Department</li>-->
                <!--</ol>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="row row-sm">
		    <div class="col-lg-12 col-md-12">
			    <div class="card custom-card mt-5">
    				<div class="card-header">
    					<div>
    						<h6 class="main-content-label">Add Star Performer</h6>
    					</div>
    				</div>
				    <div class="card-body">
    					<div class="row row-sm">
    					
    					    <div class="col-md-12 col-lg-12 col-xl-12">
    							<div class="">
    								<form action="<?php echo e(route('add-star-performer.star')); ?>" method="POST">
    								<?php echo e(csrf_field()); ?>

    								<div class="form-group">
    									<div class="row row-sm">
        									<div class="col-sm-6">
                                                <label class="tx-semibold"> Select Employee</label>    
                                                <select id="position2"  class="field form-control" name="user_id" style="height:100px;">
                                                    <option value="" selected>Select One</option>
                                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
        										<label class="tx-semibold">Select Date</label>
                                                <input type="date" name="month" class="form-control" required>
        									</div>
        									<div class="col-sm-12 mt-3">
        										<label class="tx-semibold">Description</label>
                                                <textarea class="form-control" name="description" maxlength ="150"></textarea>
        									</div>
                                        </div>
                                    </diV>
    									<div class="form-group d-flex">
                                                            
                                            <div class="col-md-4">
    											<input type="submit" class="btn btn-bordered btn-info btn-block" value="Submit">
                                            </div>
                                            <div class="col-md-4">
    											
                                            </div>
               <!--                             <div class="col-md-4">-->
    											<!--<a href="/add-department">-->
               <!--                                     <input type="button" class="btn btn-bordered btn-success btn-block" value="Reset">-->
               <!--                                 </a>-->
               <!--                             </div> -->
    									</div>
    							</div>
    							</form>
    						</div>
    					</div>
				    </div>
			    </div>
		    </div>
	    </div>
    </div>
        <div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
               
                <div>
                    <h6 class="main-content-label mb-3">Star Performer Lists</h6>
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
                                <th>Name</th>
                                <th>Status</th>
                                <th>Month</th>
                                <th>Description</th>
                                
                                <!--<th>Actions</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =0;?>
                            <?php $__currentLoopData = $star; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td scope="row"><?php echo e($i+=1); ?></td>
                                <td><?php echo e($value->user->name); ?></td>
                                <td>
                                    <input data-id="<?php echo e($value->user_id); ?>" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" <?php echo e($value->status ? 'checked' : ''); ?> <?php echo e((Auth::user()->isCEO()) ? 'disabled' : ''); ?>          >
                                </td>
                                <td><?php echo e(Carbon\Carbon::parse($value->month)->format('F Y')); ?></td>
                                <td><?php echo e($value->description); ?></td>
                                
                                
                                <!--<td>-->
                                <!--    <div class="btn-group text-right">-->
                                <!--        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" > Action-->
                                <!--                <span class="caret ml5"></span>-->
                                <!--        </button>-->
                                <!--        <div class="dropdown-menu" role="menu">-->
                                            
                                <!--                <a href="/edit-depart/<?php echo e($value->id); ?>" class="dropdown-item">Edit</a>-->
                                            
                                            
                                <!--                <a href="/delete-depart/<?php echo e($value->id); ?>" class="dropdown-item">Delete</a>-->
                                            
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id');
        $.ajax({
            type: "get",
            dataType: "json",
            url: '<?php echo e(route("performanceStatus")); ?>',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>


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