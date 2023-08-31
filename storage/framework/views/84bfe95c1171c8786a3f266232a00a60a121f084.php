<?php $__env->startSection('content'); ?>
<!-- START CONTENT -->
<div class="content">
    <div  class="inner-body">
        <!--<div class="page-header">-->
        <!--    <div>-->
        <!--        <h2 class="main-content-title tx-24 mg-b-5"></h2>-->
        <!--        <ol class="breadcrumb">-->
        <!--            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><span class="fa fa-home"></span> <span style="margin-left:10px">Dashboard</span></a></li>-->
        <!--            <li class="breadcrumb-item active" aria-current="page">Notices</li>-->
        <!--            <li class="breadcrumb-item active" aria-current="page">Notice Listing</li>-->
        <!--        </ol>-->
        <!--    </div>-->
        <!--</div>-->
    <!-- -------------- Content -------------- -->
    
       
	    
	    <div class="row row-sm">

            <div class="col-xxl-12 col-xl-12 col-md-12">
            	<div class="card custom-card main-content-body-profile mt-5">
            		<div class="tab-content">
            			<div class="main-content-body  tab-pane border-top-0 active" id="timeline">
            				<div class="border p-4">
            					<div class="main-content-body main-content-body-profile">
            						<div class="main-profile-body p-0">
            							<div class="row row-sm">
            								<div class="col-12">
            								    
            								    <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            									<div class="card mg-b-20 border">
            										<div class="card-header p-4">
            											<div class="media">
            												<div class="media-user me-2">
            													<div class="main-img-user avatar-md">
            													    <img alt="" class="rounded-circle" src="<?php echo e(asset($user->photo)); ?>">
            													</div>
            												</div>
            												<div class="media-body">
            													<h6 class="mb-0 mg-t-2 ms-2 tx-semibold"><?php echo e($user->name); ?></h6><span class="text-muted ms-2"><?php echo e($note->created_at->diffForHumans()); ?></span> </div>
            												
            											</div>
            										</div>
            										<div class="card-body">
            											<!--<p class="mg-t-0"><?php echo e($note->name); ?></p>-->
            											<div class="row row-sm">
            												 <?php echo $note->detail; ?> 
            												<!--<ul id="lightgallery" class="list-unstyled row mb-0 ps-2" lg-uid="lg0">-->
            												<!--	<li class="col-xs-12 col-sm-12 col-md-12 col-xl-12 mb-4"  data-responsive="https://laravel8.spruko.com/dashplex/build/assets/img/media/blog3.jpg" data-src="https://laravel8.spruko.com/dashplex/build/assets/img/media/blog3.jpg" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" lg-event-uid="&amp;1">-->
            												<!--		<a href="<?php echo e(asset($note->image)); ?>" data-fancybox="group" data-caption="<?php echo e($note->name); ?>" class="wd-100p"> -->
            												<!--		    <img class="img-responsive rounded-6" width="100%" src="<?php echo e(asset($note->image)); ?>" alt="Thumb-1"> -->
            												<!--		</a>-->
            												<!--	</li>-->
            												<!--</ul>-->
            											</div>
            										</div>
            									</div>
            								    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            								</div>
            							</div>
            						</div>
            						<!-- main-profile-body -->
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
        </div>
	    
    </div>
</div>

  
  
    <?php $__env->startPush('styles'); ?>
        <link rel="stylesheet" type="text/css" href="/assets/allcp/forms/css/bootstrap-select.css">
        <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <?php $__env->stopPush(); ?>
    <?php $__env->startPush('scripts'); ?>
        <script src="/assets/allcp/forms/js/bootstrap-select.js"></script>
        <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <?php $__env->stopPush(); ?>
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
<script>$('.dropify').dropify();</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>