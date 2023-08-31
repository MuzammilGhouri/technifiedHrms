<?php $__env->startSection('content'); ?>
<!--<div class="page-header">-->
<!--    <div>-->
<!--        <h2 class="main-content-title tx-24 mg-b-5">My Leave List</h2>-->
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Leave</li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">My Leave List</li>-->
<!--        </ol>-->
<!--    </div>-->
<!--</div>-->

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card mt-5">
            <div class="card-body">
                <div>
                    <h6 class="main-content-label mb-3">My Leave List</h6>
                </div>
                <div class="p-4">
					<label class="main-content-label tx-13 mg-b-20">Total Leaves </label>
						<div class="d-sm-flex">
							<div class="mg-sm-r-20 mg-b-10">
								<div class="main-profile-contact-list">
									<div class="media">
										<div class="media-body"> <span>Casual Leaves</span>
											<div> <?php echo e($total_casual_leave); ?> / 10</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mg-sm-r-20 mg-b-10">
								<div class="main-profile-contact-list">
									<div class="media">
										<div class="media-body"> <span>Sick Leaves</span>
												<div> <?php echo e($total_sick_leave); ?> / 10 </div>
											</div>
										</div>
									</div>
								</div>
							<div class="">
								<div class="main-profile-contact-list">
									<div class="media">
										<div class="media-body"> <span>Annual Leaves</span>
												<div><?php echo e($total_annual_leave); ?> / 10</div>
											</div>
										</div>
									</div>
								</div>
							</div>
				</div>
                <div class="table-responsive">
                    <table class="table border text-nowrap text-md-nowrap table-striped mg-b-0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Leave Type</th>
                                <th>Date From</th>
                                <th>Date To</th>
                                <th>Days</th>
                                <th>Remarks</th>
                                <th>HR Approval</th>
                                <th>Manager Approval</th>
                                <th>Team Lead Approval</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i =0;?>
                        <?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i+=1); ?></td>
                                <td><?php echo e(getLeaveType($leave->leave_type_id)); ?></td>
                                <td><?php echo e(getFormattedDate($leave->date_from)); ?></td>
                                <td><?php echo e(getFormattedDate($leave->date_to)); ?></td>
                                <td><?php echo e($leave->days); ?></td>
                                <td></td>
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
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>