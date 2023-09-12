<?php $__env->startSection('content'); ?>
<style>
    marquee.home_notes {
        background: #ff4b1e;
        color: #fff;
        font-size: 16px;
        display: flex;
        align-items: center;
    }
    
    .modal-body .carousel-caption {
        top: 30% !important;
    }
    
    .modal-body .carousel-caption .row {
        padding: 0px 40px;
    }
    
    .modal-body .carousel-caption .star-text {
        font-size: 20px;
    }
    
    .modal-body .carousel-caption h5 {
        font-size: 36px;
    }
    
    .modal-body .carousel-caption p {
        font-size: 18px !important;
    }
    
    .modal-body .carousel-caption .userAchiImg {
        height: 300px;
        width: 250px;
    }
    
    .modal-body .carousel-caption .star-right {
        padding-right: 25px;
    }
    
    .starMod .modal-content {
        background-color: transparent;
        border: none !important;
        box-shadow: none;
    }
    
    .starMod .modal-header {
        display: flex;
        align-items: end;
        justify-content: end;
    }
    
    .starMod .modal-header button {
        font-size: 20px;
        font-weight: 800 !important;
    }
    
    .starMod img {
        border-radius: 50px;
    }
    
    .starMod .stars-achieve li i {
        font-size: 22px;
    }
    
    .starMod .stars-achieve {
        margin-top: 15px;
    }

</style>
<!-- PAGE HEADER -->


<!-- Modal -->
<?php $__currentLoopData = $stars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade starMod" id="starModal<?php echo e($value->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <!--<div class="modal-header">-->
      <!--  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      <!--</div>-->
      <div class="modal-body">
		 <img alt="img" class="d-block w-100" src="<?php echo e(asset('img/bg-tech.jpg')); ?>">
			<div class="carousel-caption d-none d-md-block">
				<div class="row">
			    <div class="col-md-6 star-left">
			        <p class="star-text"> Employee of The Month <strong class="dot12"><?php echo e(Carbon\Carbon::parse($value->month)->format('F Y')); ?> </strong></p>
					<h5 class="tx-semibold text-left"><?php echo e($value->user->name); ?></h5>
					<p class=""><?php echo e($value->user->employee->designation); ?></p>
					<?php
                    $departName = App\Models\Department::where('id',$value->user->employee->department_id)->first();
                    ?>
					<p><?php echo e($departName->name); ?></p>
					<p class="star-text"><?php echo e($value->description); ?></p>
			        <ul class="stars-achieve">
			            <li class="listart"><i class="fas fa-star"></i></li>
			            <li class="listart"><i class="fas fa-star"></i></li>
			            <li class="listart"><i class="fas fa-star"></i></li>
			            <li class="listart"><i class="fas fa-star"></i></li>
			            <li class="listart"><i class="fas fa-star"></i></li>
			        </ul>       
			    </div>
			    <div class="col-md-6 star-right">
			        <figure class="userAchiImg">
			            <img src="<?php echo e(asset($value->user->employee->photo)); ?>" />
			        </figure>
			    </div>
		    </div>
		</div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Dashboard</h2>
        <!--<ol class="breadcrumb">-->
        <!--    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>-->
        <!--    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>-->
        <!--</ol>-->
    </div>
</div>
<!-- END PAGE HEADER -->



<div class="row row-sm  mt-3">
	<div class="col-7 col-sm-12 col-md-7">
		<div class="card mg-b-20 border h-100 custard">
			<div class="card-header p-4">
				<div class="media">
					
					<div class="media-body">
						<h3 class="mb-0 mg-t-2 ms-2 tx-semibold">Notice Board</h3> </div>
					
				</div>
			</div>
			<?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="card-body">
				<h4 class="mg-t-0"><?php echo e($note->name); ?></h4>
				
					 <?php echo $note->detail; ?> 
				<span class="text-muted ms-2"><?php echo e($note->created_at->diffForHumans()); ?></span>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	  
	</div>
	<div class="col-5 col-sm-12 col-md-5">
    	<div class="card custom-card ">
    		<div class="card-body h-100">
    			<div>
    				<h6 class="main-content-label mb-1">Star Perfomance Of the Month</h6>
    				<p class="text-muted card-sub-title">Each month, we celebrate excellence at Technifiedlabs by recognizing our 'Star Performer of the Month.' This coveted award is a testament to dedication, hard work, and outstanding contributions to our organization.</p>
    			</div>
    			<div class="carousel slide" data-bs-ride="carousel" id="carouselExample6">
    				<ol class="carousel-indicators">
    				    <?php $__currentLoopData = $stars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    					<li class="active" data-bs-slide-to="<?php echo e($key); ?>" data-bs-target="#carouselExample6" aria-current="<?php echo e(($key == 0) ? 'true' : ''); ?>"></li>
    					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    				</ol>
    				<div class="carousel-inner bg-dark">
    				    <?php $__currentLoopData = $stars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    					<div class="carousel-item <?php echo e(($key == 0) ? 'active' : ''); ?>"> <img alt="img" class="d-block w-100" src="<?php echo e(asset('img/bg-tech.jpg')); ?>">
    					<a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#starModal<?php echo e($value->id); ?>">
    						<div class="carousel-caption d-none d-md-block">
    							<div class="row">
    							    <div class="col-md-6 star-left">
    							        <p class="star-text"> Employee of The Month <strong class="dot12"><?php echo e(Carbon\Carbon::parse($value->month)->format('F Y')); ?> </strong></p>
            							<h5 class="tx-semibold text-left"><?php echo e($value->user->name); ?></h5>
            							<p class=""><?php echo e($value->user->employee->designation); ?></p>
            							<?php
                                        $departName = App\Models\Department::where('id',$value->user->employee->department_id)->first();
                                        ?>
            							<p class=""><?php echo e($departName->name); ?></p>
            							<p class="star-text"><?php echo e($value->description); ?></p>
    							        <ul class="stars-achieve">
    							            <li class="listart"><i class="fas fa-star"></i></li>
    							            <li class="listart"><i class="fas fa-star"></i></li>
    							            <li class="listart"><i class="fas fa-star"></i></li>
    							            <li class="listart"><i class="fas fa-star"></i></li>
    							            <li class="listart"><i class="fas fa-star"></i></li>
    							        </ul>       
    							    </div>
    							    <div class="col-md-6 star-right">
    							        <figure class="userAchiImg">
    							            <img src="<?php echo e(asset($value->user->employee->photo)); ?>" />
    							        </figure>
    							    </div>
    							</div>
    							
    						</div>
    						</a>
    					</div>
    					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
	
</div>





<!-- ROW -->
<div class="row row-sm mt-3">
    <div class="col-sm-12 col-lg-12 col-xl-12">
        <!--Row-->
        <div class="row row-sm">
            <!--<div class="col-sm-12 col-md-12 col-lg-4 col-xl-3 col-xxl-2">-->
            <!--    <div class="card custom-card">-->
            <!--        <div class="card-body">-->
            <!--            <div class="card-item">-->
            <!--                <div class="card-item-icon bg-success-transparent">-->
            <!--                    <i class="fa fa-users text-success" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-hand-spock-o" aria-label="fa fa-hand-spock-o"></i>-->
            <!--                </div>-->
            <!--                <div class="card-item-title mb-2">-->
            <!--                    <label class="main-content-label tx-13 mb-1">Total Employees</label>-->
            <!--                </div>-->
            <!--                <div class="card-item-body">-->
            <!--                    <div class="card-item-stat">-->
            <!--                        <h4 class="font-weight-normal"><?php echo e(count(App\Models\Employee::all())); ?></h4>-->
            <!--                        <p><span class="px-1"><a href="<?php echo e(route('employee-manager')); ?>">Get Started <i class="fas fa-chevron-right"></i></a></span></p>-->
                                    <!--<small><b class="badge rounded-pill bg-success fs-11">65%</b><span class="px-1">Higher</span></small>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="card custom-card">-->
            <!--        <div class="card-body">-->
            <!--            <div class="card-item">-->
            <!--                <div class="card-item-icon bg-success-transparent">-->
            <!--                    <i class="fas fa-building"></i>-->
            <!--                </div>-->
            <!--                <div class="card-item-title mb-2">-->
            <!--                    <label class="main-content-label tx-13 mb-1">Departments</label>-->
            <!--                </div>-->
            <!--                <div class="card-item-body">-->
            <!--                    <div class="card-item-stat">-->
            <!--                        <h4 class="font-weight-normal"><?php echo e(count(App\Models\Department::all())); ?></h4>-->
            <!--                        <p><span class="px-1"><a href="<?php echo e(route('depart-listing')); ?>">Get Started <i class="fas fa-chevron-right"></i></a></span></p>-->
                                    <!--<small><b class="badge rounded-pill bg-info fs-11">25%</b><span class="px-1">Increased</span></small>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="card custom-card">-->
            <!--        <div class="card-body">-->
            <!--            <div class="card-item">-->
            <!--                <div class="card-item-icon bg-success-transparent">-->
            <!--                   <i class="fas fa-users-cog"></i>-->
            <!--                </div>-->
            <!--                <div class="card-item-title  mb-2">-->
            <!--                    <label class="main-content-label tx-13 mb-1">Team</label>-->
            <!--                </div>-->
            <!--                <div class="card-item-body">-->
            <!--                    <div class="card-item-stat">-->
            <!--                        <h4 class="font-weight-normal"><?php echo e(count(App\Models\Team::all())); ?></h4>-->
            <!--                        <p><span class="px-1"><a href="<?php echo e(route('team-listing')); ?>">Get Started <i class="fas fa-chevron-right"></i></a></span></p>-->
                                    <!--<small><b class="badge rounded-pill bg-danger fs-11">15%</b> <span class="px-1">Decreased</span></small>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
          
            <div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon bg-success-transparent">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <!--<label class="main-content-label tx-13 mb-1">Casual Leaves</label>-->
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-normal">CASUAL LEAVES</h4>
                                            <h4 class="font-weight-normal"><?php echo e($total_casual_leave); ?> / 10</h4>
                                            <p><span class="px-1"><a href="<?php echo e(route('my-leave-list')); ?>">Get Started <i class="fas fa-chevron-right"></i></a></span></p>
                                            <!--<small><b class="badge rounded-pill bg-success fs-11">65%</b><span class="px-1">Higher</span></small>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon bg-success-transparent">
                                       <i class="fas fa-syringe"></i>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <!--<label class="main-content-label tx-13 mb-1">Sick Leaves</label>-->
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-normal">SICK LEAVES</h4>
                                            <h4 class="font-weight-normal"><?php echo e($total_sick_leave); ?> / 10</h4>
                                            <p><span class="px-1"><a href="<?php echo e(route('my-leave-list')); ?>">Get Started <i class="fas fa-chevron-right"></i></a></span></p>
                                            <!--<small><b class="badge rounded-pill bg-success fs-11">65%</b><span class="px-1">Higher</span></small>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon bg-success-transparent">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <!--<label class="main-content-label tx-13 mb-1">Annual Leaves</label>-->
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-normal">ANNUAL LEAVES</h4>
                                            <h4 class="font-weight-normal"><?php echo e($total_annual_leave); ?> / 10</h4>
                                            <p><span class="px-1"><a href="<?php echo e(route('my-leave-list')); ?>">Get Started <i class="fas fa-chevron-right"></i></a></span></p>
                                            <!--<small><b class="badge rounded-pill bg-success fs-11">65%</b><span class="px-1">Higher</span></small>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="col-md-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon bg-success-transparent">
                                        <i class="fas fa-clipboard-check"></i>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <!--<label class="main-content-label tx-13 mb-1">EMPLOYEE MANAGER</label>-->
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-normal">ATTENDANCE MANAGER </h4>
                                            <p><span class="px-1"><a href="<?php echo e(route('attendance-manager')); ?>">Get Started <i class="fas fa-chevron-right"></i></a></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    
                    <!--<div class="col-md-4">-->
                    <!--    <div class="card custom-card">-->
                    <!--        <div class="card-body">-->
                    <!--            <div class="card-item">-->
                    <!--                <div class="card-item-icon bg-success-transparent">-->
                    <!--                    <i class="fas fa-dollar-sign"></i>-->
                    <!--                </div>-->
                    <!--                <div class="card-item-title mb-2">-->
                                        <!--<label class="main-content-label tx-13 mb-1">EMPLOYEE MANAGER</label>-->
                    <!--                </div>-->
                    <!--                <div class="card-item-body">-->
                    <!--                    <div class="card-item-stat">-->
                    <!--                        <h4 class="font-weight-normal">PAYSLIP </h4>-->
                    <!--                        <p><span class="px-1"><a href="<?php echo e(route('my-invoice')); ?>">Get Started <i class="fas fa-chevron-right"></i></a></span></p>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <?php if(Auth::user()->isHR()): ?>
                    <div class="col-md-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon bg-success-transparent">
                                        <i class="fa fa-users text-success" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-hand-spock-o" aria-label="fa fa-hand-spock-o"></i>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <!--<label class="main-content-label tx-13 mb-1">EMPLOYEE MANAGER</label>-->
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-normal">EMPLOYEE MANAGER</h4>
                                            <p><span class="px-1"><a href="<?php echo e(route('employee-manager')); ?>">Get Started <i class="fas fa-chevron-right"></i></a></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                   
                    
                    <div class="col-md-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon bg-success-transparent">
                                        <i class="fa fa-users text-success" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-hand-spock-o" aria-label="fa fa-hand-spock-o"></i>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <!--<label class="main-content-label tx-13 mb-1">Total Employees</label>-->
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-normal">TOTAL EMPLOYEE</h4>
                                            <h4 class="font-weight-normal"><?php echo e(count(App\Models\Employee::all())); ?></h4>
                                            <p><span class="px-1"><a href="<?php echo e(route('employee-manager')); ?>">Get Started <i class="fas fa-chevron-right"></i></a></span></p>
                                            <!--<small><b class="badge rounded-pill bg-success fs-11">65%</b><span class="px-1">Higher</span></small>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="card-item">
                                <div class="card-item-icon bg-success-transparent">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="card-item-title mb-2">
                                    <!--<label class="main-content-label tx-13 mb-1">Departments</label>-->
                                </div>
                                <div class="card-item-body">
                                    <div class="card-item-stat">
                                        <h4 class="font-weight-normal">DEPARTMENTS</h4>
                                        <h4 class="font-weight-normal"><?php echo e(count(App\Models\Department::all())); ?></h4>
                                        <p><span class="px-1"><a href="<?php echo e(route('depart-listing')); ?>">Get Started <i class="fas fa-chevron-right"></i></a></span></p>
                                        <!--<small><b class="badge rounded-pill bg-info fs-11">25%</b><span class="px-1">Increased</span></small>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div> 
                    <div class="col-md-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="card-item">
                                <div class="card-item-icon bg-success-transparent">
                                   <i class="fas fa-users-cog"></i>
                                </div>
                                <div class="card-item-title  mb-2">
                                    <!--<label class="main-content-label tx-13 mb-1">Team</label>-->
                                </div>
                                <div class="card-item-body">
                                    <div class="card-item-stat">
                                        <h4 class="font-weight-normal">TEAM</h4>
                                        <h4 class="font-weight-normal"><?php echo e(count(App\Models\Team::all())); ?></h4>
                                        <p><span class="px-1"><a href="<?php echo e(route('team-listing')); ?>">Get Started <i class="fas fa-chevron-right"></i></a></span></p>
                                        <!--<small><b class="badge rounded-pill bg-danger fs-11">15%</b> <span class="px-1">Decreased</span></small>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                     <div class="col-md-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon bg-success-transparent">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <!--<label class="main-content-label tx-13 mb-1">EMPLOYEE MANAGER</label>-->
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-normal">LEAVE MANAGER </h4>
                                            <p><span class="px-1"><a href="<?php echo e(route('total-leave-list')); ?>">Get Started <i class="fas fa-chevron-right"></i></a></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <?php endif; ?>
                    <?php if(!Auth::user()->isHR()): ?>
                    <div class="col-md-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon bg-success-transparent">
                                        <i class="fas fa-clipboard-check"></i>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <!--<label class="main-content-label tx-13 mb-1">EMPLOYEE MANAGER</label>-->
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-normal">LEAVE </h4>
                                            <p><span class="px-1"><a href="<?php echo e(route('my-leave-list')); ?>">Get Started <i class="fas fa-chevron-right"></i></a></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <?php endif; ?>
                </div>    
            </div>
            <!--<div class="col-sm-12 col-lg-8 col-xl-9 col-xxl-7">-->
            <!--    <div class="card custom-card overflow-hidden">-->
            <!--        <div class="card-header border-bottom d-flex">-->
            <!--            <div>-->
            <!--                <h3 class="card-title tx-18"><label class="main-content-label tx-15">Sales summary</label></h3>-->
            <!--            </div>-->
            <!--            <div class="ms-auto float-end">-->
            <!--                <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-16 "></i></a>-->
            <!--                <div class="dropdown-menu dropdown-menu-end">-->
            <!--                    <a class="dropdown-item" href="javascript:void(0);">Today</a>-->
            <!--                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>-->
            <!--                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>-->
            <!--                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="card-body">-->
            <!--            <div id="salessummary"></div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-3">-->
            <!--    <div class="row row-sm">-->
            <!--        <div class="col-sm-12 col-lg-12 col-xl-12">-->
            <!--            <div class="card custom-card overflow-hidden">-->
            <!--                <div class="card-body p-0">-->
            <!--                    <div class="row row-sm">-->
            <!--                        <div class="col-sm-6 col-md-6 border-end">-->
            <!--                            <div class="p-4">-->
            <!--                                <p class="revenuechart-container mb-3">-->
            <!--                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 30 30" version="1.1">-->
            <!--                                        <g id="surface1">-->
            <!--                                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(221 221 222);fill-opacity:1;" d="M 6.25 27.5 C 5.558594 27.5 5 26.941406 5 26.25 L 5 16.25 C 5 15.558594 5.558594 15 6.25 15 C 6.941406 15 7.5 15.558594 7.5 16.25 L 7.5 26.25 C 7.5 26.941406 6.941406 27.5 6.25 27.5 Z M 12.5 27.5 C 11.808594 27.5 11.25 26.941406 11.25 26.25 L 11.25 3.75 C 11.25 3.058594 11.808594 2.5 12.5 2.5 C 13.191406 2.5 13.75 3.058594 13.75 3.75 L 13.75 26.25 C 13.75 26.941406 13.191406 27.5 12.5 27.5 Z M 18.75 27.5 C 18.058594 27.5 17.5 26.941406 17.5 26.25 L 17.5 11.25 C 17.5 10.558594 18.058594 10 18.75 10 C 19.441406 10 20 10.558594 20 11.25 L 20 26.25 C 20 26.941406 19.441406 27.5 18.75 27.5 Z M 25 27.5 C 24.308594 27.5 23.75 26.941406 23.75 26.25 L 23.75 21.25 C 23.75 20.558594 24.308594 20 25 20 C 25.691406 20 26.25 20.558594 26.25 21.25 L 26.25 26.25 C 26.25 26.941406 25.691406 27.5 25 27.5 Z M 25 27.5 "/>-->
            <!--                                        </g>-->
            <!--                                    </svg>-->
            <!--                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="chart2" width="30px" height="30px" viewBox="0 0 30 30" version="1.1">-->
            <!--                                        <g id="surface2">-->
            <!--                                            <path style=" stroke:none;fill-rule:nonzero;fill:#fd6074;fill-opacity:0.7;" d="M 6.25 27.5 C 5.558594 27.5 5 26.941406 5 26.25 L 5 16.25 C 5 15.558594 5.558594 15 6.25 15 C 6.941406 15 7.5 15.558594 7.5 16.25 L 7.5 26.25 C 7.5 26.941406 6.941406 27.5 6.25 27.5 Z M 12.5 27.5 C 11.808594 27.5 11.25 26.941406 11.25 26.25 L 11.25 3.75 C 11.25 3.058594 11.808594 2.5 12.5 2.5 C 13.191406 2.5 13.75 3.058594 13.75 3.75 L 13.75 26.25 C 13.75 26.941406 13.191406 27.5 12.5 27.5 Z M 18.75 27.5 C 18.058594 27.5 17.5 26.941406 17.5 26.25 L 17.5 11.25 C 17.5 10.558594 18.058594 10 18.75 10 C 19.441406 10 20 10.558594 20 11.25 L 20 26.25 C 20 26.941406 19.441406 27.5 18.75 27.5 Z M 25 27.5 C 24.308594 27.5 23.75 26.941406 23.75 26.25 L 23.75 21.25 C 23.75 20.558594 24.308594 20 25 20 C 25.691406 20 26.25 20.558594 26.25 21.25 L 26.25 26.25 C 26.25 26.941406 25.691406 27.5 25 27.5 Z M 25 27.5 "/>-->
            <!--                                        </g>-->
            <!--                                    </svg>-->
            <!--                                    <span class="mb-0 fs-13 ms-2 result text-danger"><i class="fe fe-arrow-down"></i> 2.52%</span>-->
            <!--                                </p>-->
            <!--                                <h2 class="tx-normal"><span class="counter">$23,590</span></h2>-->
            <!--                                <p class="tx-12 text-muted">Last Week Revenue</p>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-sm-6 col-md-6">-->
            <!--                            <div class="p-4">-->
            <!--                                <p class="revenuechart-container mb-3">-->
            <!--                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 30 30" version="1.1">-->
            <!--                                        <g id="surface3">-->
            <!--                                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(221 221 222);fill-opacity:1;" d="M 6.25 27.5 C 5.558594 27.5 5 26.941406 5 26.25 L 5 16.25 C 5 15.558594 5.558594 15 6.25 15 C 6.941406 15 7.5 15.558594 7.5 16.25 L 7.5 26.25 C 7.5 26.941406 6.941406 27.5 6.25 27.5 Z M 12.5 27.5 C 11.808594 27.5 11.25 26.941406 11.25 26.25 L 11.25 3.75 C 11.25 3.058594 11.808594 2.5 12.5 2.5 C 13.191406 2.5 13.75 3.058594 13.75 3.75 L 13.75 26.25 C 13.75 26.941406 13.191406 27.5 12.5 27.5 Z M 18.75 27.5 C 18.058594 27.5 17.5 26.941406 17.5 26.25 L 17.5 11.25 C 17.5 10.558594 18.058594 10 18.75 10 C 19.441406 10 20 10.558594 20 11.25 L 20 26.25 C 20 26.941406 19.441406 27.5 18.75 27.5 Z M 25 27.5 C 24.308594 27.5 23.75 26.941406 23.75 26.25 L 23.75 21.25 C 23.75 20.558594 24.308594 20 25 20 C 25.691406 20 26.25 20.558594 26.25 21.25 L 26.25 26.25 C 26.25 26.941406 25.691406 27.5 25 27.5 Z M 25 27.5 "/>-->
            <!--                                        </g>-->
            <!--                                    </svg>-->
            <!--                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="chart2" width="30px" height="30px" viewBox="0 0 30 30" version="1.1">-->
            <!--                                        <g id="surface4">-->
            <!--                                            <path style=" stroke:none;fill-rule:nonzero;fill:#19b159;fill-opacity:0.7;" d="M 6.25 27.5 C 5.558594 27.5 5 26.941406 5 26.25 L 5 16.25 C 5 15.558594 5.558594 15 6.25 15 C 6.941406 15 7.5 15.558594 7.5 16.25 L 7.5 26.25 C 7.5 26.941406 6.941406 27.5 6.25 27.5 Z M 12.5 27.5 C 11.808594 27.5 11.25 26.941406 11.25 26.25 L 11.25 3.75 C 11.25 3.058594 11.808594 2.5 12.5 2.5 C 13.191406 2.5 13.75 3.058594 13.75 3.75 L 13.75 26.25 C 13.75 26.941406 13.191406 27.5 12.5 27.5 Z M 18.75 27.5 C 18.058594 27.5 17.5 26.941406 17.5 26.25 L 17.5 11.25 C 17.5 10.558594 18.058594 10 18.75 10 C 19.441406 10 20 10.558594 20 11.25 L 20 26.25 C 20 26.941406 19.441406 27.5 18.75 27.5 Z M 25 27.5 C 24.308594 27.5 23.75 26.941406 23.75 26.25 L 23.75 21.25 C 23.75 20.558594 24.308594 20 25 20 C 25.691406 20 26.25 20.558594 26.25 21.25 L 26.25 26.25 C 26.25 26.941406 25.691406 27.5 25 27.5 Z M 25 27.5 "/>-->
            <!--                                        </g>-->
            <!--                                    </svg>-->
            <!--                                    <span class="mb-0 fs-13 ms-2 result text-success"><i class="fe fe-arrow-up"></i> 2.68%</span>-->
            <!--                                </p>-->
            <!--                                <h2 class="tx-normal"><span class="counter">$32,900</span></h2>-->
            <!--                                <p class="tx-12 text-muted">This Week Revenue</p>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="row row-sm">-->
            <!--        <div class="col-sm-6 col-lg-6 col-xl-6">-->
            <!--            <div class="card custom-card">-->
            <!--                <div class="card-body text-center">-->
            <!--                    <div class="icon-margin bg-secondary-transparent rounded-circle text-secondary">-->
            <!--                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">-->
            <!--                            <path fill="#f1388b" d="M19.5,7H18V6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3H4.5C3.119812,3.0012817,2.0012817,4.119812,2,5.5V18c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14.5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-9C21.9987183,8.119812,20.880188,7.0012817,19.5,7z M4.5,4H15c1.1040039,0.0014038,1.9985962,0.8959961,2,2v1H4.5C3.6715698,7,3,6.3284302,3,5.5S3.6715698,4,4.5,4z M21,16h-2c-1.1045532,0-2-0.8954468-2-2s0.8954468-2,2-2h2V16z M21,11h-2c-1.6568604,0-3,1.3431396-3,3s1.3431396,3,3,3h2v1.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7.4990234C3.4321899,7.8247681,3.9588013,8.0006714,4.5,8h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V11z"/>-->
            <!--                        </svg>-->
            <!--                    </div>-->
            <!--                    <h6 class="mb-0">Gross Profit Margin</h6>-->
            <!--                    <h2 class="mb-1 mt-2 tx-normal"><span class="counter">77</span>%</h2>-->
            <!--                    <p class="text-muted"><span class="mb-0 text-danger fs-13 ms-1"><i class="fe fe-arrow-down"></i> 1.68%</span> <span class="fs-12">Last month</span></p>-->
            <!--                    <button class="btn btn-sm btn-outline-secondary">Check</button>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="col-sm-6 col-lg-6 col-xl-6">-->
            <!--            <div class="card custom-card">-->
            <!--                <div class="card-body text-center">-->
            <!--                    <div class="icon-margin bg-success-transparent rounded-circle text-success">-->
            <!--                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">-->
            <!--                            <path fill="#19b159" d="M21.5,6h-6C15.223877,6,15,6.223877,15,6.5S15.223877,7,15.5,7h4.7929688l-7.2930298,7.2930298l-3.6464844-3.6464844c-0.1895142-0.1831055-0.4863281-0.1843262-0.680542-0.0091553c-0.0080566,0.0045776-0.0195312,0.0024414-0.0264282,0.0090942l-6.5,6.5c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546C2,17.776062,2.223877,17.999939,2.5,18c0.1326294,0.0001221,0.2598267-0.0526123,0.3534546-0.1465454l6.1464844-6.1464844l3.6465454,3.6465454C12.7369385,15.4440308,12.8619385,15.499939,13,15.5c0.1326294,0.0001221,0.2598267-0.0526123,0.3534546-0.1465454L21,7.7069092v4.7936401C21.0001831,12.7765503,21.223999,13.0001831,21.5,13h0.0006104C21.7765503,12.9998169,22.0001831,12.776001,22,12.5V6.4993896C21.9998169,6.2234497,21.776001,5.9998169,21.5,6z"/>-->
            <!--                        </svg>-->
            <!--                    </div>-->
            <!--                    <h6 class="mb-0">Net Profit Margin</h6>-->
            <!--                    <h2 class="mb-1 mt-2 tx-normal"><span class="counter">35</span>%</h2>-->
            <!--                    <p class="text-muted"><span class="mb-0 text-success fs-13 ms-1"><i class="fe fe-arrow-up"></i> 22%</span> <span class="fs-12">Last month</span></p>-->
            <!--                    <button class="btn btn-sm btn-outline-success">Check</button>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
        <!--End row-->
    </div>
</div>
<!-- END ROW -->


<!-- -------------- Content -------------- -->
<section id="content" class="table-layout animated fadeIn">

    <!-- -------------- Column Center -------------- -->
    <div class="chute chute-center">

        <!-- -------------- Quick Links -------------- -->
        <div class="row">
            <?php if(Auth::user()->isHR()): ?>
            <!--<div class="col-sm-6 col-xl-3">-->
            <!--    <div class="panel panel-tile">-->
            <!--        <div class="panel-body">-->
            <!--            <div class="row pv10">-->
            <!--                <div class="col-xs-5 ph10">-->
            <!--                    <img src="/assets/img/pages/clipart2.png" class="img-responsive mauto" alt=""/></div>-->
            <!--                <div class="col-xs-7 pl5">-->
            <!--                    <h3 class="text-muted"><a href="<?php echo e(route('employee-manager')); ?>"> EMPLOYEE MANAGER</a></h3>-->
            <!--                    -->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-sm-6 col-xl-3">-->
            <!--    <div class="panel panel-tile">-->
            <!--        <div class="panel-body">-->
            <!--            <div class="row pv10">-->
            <!--                <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart0.png"-->
            <!--                                                class="img-responsive mauto" alt=""/></div>-->
            <!--                <div class="col-xs-7 pl5">-->
            <!--                    <h3 class="text-muted"> <a href="<?php echo e(route('total-leave-list')); ?>"> LEAVE <br/> MANAGER </a></h3>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--    <div class="col-sm-6 col-xl-3">-->
            <!--        <div class="panel panel-tile">-->
            <!--            <div class="panel-body">-->
            <!--                <div class="row pv10">-->
            <!--                    <div class="col-xs-5 ph10"><img src="/assets/img/pages/Laptop Sketch-64x64"-->
            <!--                                                    class="img-responsive mauto" style="height: 100px; width: 100px;" alt=""/></div>-->
            <!--                    <div class="col-xs-7 pl5">-->
            <!--                        <h3 class="text-muted"> <a href=""> ASSET <br /> MANAGER </a></h3>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-sm-6 col-xl-3">-->
            <!--        <div class="panel panel-tile">-->
            <!--            <div class="panel-body">-->
            <!--                <div class="row pv10">-->
            <!--                    <div class="col-xs-5 ph10"><img src="/assets/img/pages/dollar.jpg"-->
            <!--                                                    class="img-responsive mauto" style="height: 100px; width: 100px;" alt=""/></div>-->
            <!--                    <div class="col-xs-7 pl5">-->
            <!--                        <h3 class="text-muted"> <a href=""> EXPENSE <br /> MANAGER </a></h3>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--<div class="col-sm-6 col-xl-3">-->
            <!--    <div class="panel panel-tile">-->
            <!--        <div class="panel-body">-->
            <!--            <div class="row pv10">-->
            <!--                <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart5.png"-->
            <!--                                                class="img-responsive mauto" alt=""/></div>-->
            <!--                <div class="col-xs-7 pl5">-->
            <!--                    <h3 class="text-muted"><a href="<?php echo e(route('attendance-manager')); ?>"> ATTENDANCE MANAGER </a></h3>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->


            <?php endif; ?>
                <?php if(!Auth::user()->isHR()): ?>
                <!--<div class="col-sm-6 col-xl-3">-->
                <!--    <div class="panel panel-tile">-->
                <!--        <div class="panel-body">-->
                <!--            <div class="row pv10">-->
                <!--                <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart0.png"-->
                <!--                                                class="img-responsive mauto" alt=""/></div>-->
                <!--                <div class="col-xs-7 pl5">-->
                <!--                    <h3 class="text-muted"><a href="<?php echo e(route('my-leave-list')); ?>"> LEAVES </a></h3>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <?php endif; ?>

             </div>
           </div>
         </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>