<?php $__env->startSection('content'); ?>
<div class="inner-body">
	<!-- PAGE HEADER -->
	<div class="page-header">
		<div>
			<h2 class="main-content-title tx-24 mg-b-5">Notification List</h2>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:;">Pages</a></li>
				<li class="breadcrumb-item active" aria-current="page">Notification List</li>
			</ol>
		</div>
		<div class="d-flex">
			<div class="justify-content-center">
				<button type="button" class="btn btn-white btn-icon-text my-2 me-2"> <i class="fe fe-settings"></i> <span>Settings</span> </button>
				<button type="button" class="btn btn-primary my-2 btn-icon-text"> <i class="fe fe-download-cloud bg-white-transparent text-white"></i> <span>Reports</span> </button>
			</div>
		</div>
	</div>
	<!-- END PAGE HEADER -->
	<!-- CONTAINER -->
	<div class="container">
		<ul class="notification">
		    <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php 
                    if($notification->type == 'App\notification\UserNotification'){                    
                    $userNotifi = App\Models\Employee::where('user_id',$notification->data['user_id'])->first();
                    }elseif($notification->type == 'App\notification\notificationStatus'){
                    $userNotifi = App\Models\Employee::where('user_id',$notification->data['approvedBy'])->first();
                    }
                ?>		    
			<li>
				<div class="notification-time"> <span class="date">Today</span> <span class="time">02:31</span> </div>
				<div class="notification-icon">
					<a href="javascript:void(0);"></a>
				</div>
				<div class="notification-time-date mb-2 d-block d-md-none"> <span class="date">Today</span> <span class="time ms-2">02:31</span> </div>
				<div class="notification-body">
					<div class="media mt-0">
						<div class="main-avatar avatar-md online"> <img alt="avatar" class="rounded-6" src="<?php echo e(asset($userNotifi->photo)); ?>"> </div>
						<div class="media-body ms-3 d-flex">
							<div class="">
								<p class="tx-14 text-dark mb-0 tx-semibold"><?php echo e($userNotifi->name); ?></p>
								<?php if($notification->type == 'App\notification\UserNotification'): ?>
                                
                                <p class="mb-0 tx-13 text-muted"><?php echo e($notification->data['description']); ?>.</p>
                                <?php elseif($notification->type == 'App\notification\notificationStatus'): ?>
                                    <?php if($notification->data['status'] == 1): ?>
                                        <p class="mb-0 tx-13 text-muted">Approved Your Leave.</p>
                                    <?php elseif($notification->data['status'] == 2): ?>
                                        <p class="mb-0 tx-13 text-muted">Disapprove Your Leave.</p>
                                    <?php endif; ?>
                                <?php endif; ?>
							</div>
							<div class="notify-time">
								<p class="mb-0 text-muted tx-11"><?php echo e($notification->created_at->diffForHumans()); ?></p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<?php
			    \Auth::user()->notifications->markAsRead();
			?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php if(count(auth()->user()->unreadNotifications) == 0): ?>
			    <h3 class="m5 text-center p-5" style="color:#4d65d9">Notification Not Found!</h3>
			<?php endif; ?>
		</ul>
	</div>
	<!-- END CONTAINER -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>