<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card mg-b-20 mt-5" id="tabs-style3">
            <div class="card-header">
                <div>
                    <h6 class="main-content-label"><?php echo e($details->name); ?> Profile</h6>
                </div>
            </div>
            <div class="card-body">
                <div class="text-wrap">
                    <!--<form action="<?php echo e(route('update-employee')); ?>" method="post" enctype="multipart/form-data">-->
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($details->id); ?>">
                        <div class="example">
                            <div class="panel panel-primary tabs-style-3">
                                
                                <div class="panel-body tabs-menu-body">
                                    <div class="tab-content">
                                        
                                            <div class="form-group prof-img">
                                                <img src="<?php echo e(isset($details->photo) && ($details->photo != '') ? $details->photo : '/assets/img/avatars/profile_pic.png'); ?>" alt="">
                                            </div>
                                            <!--<div class="form-group">-->
                                            <!--    <label for="photo" class="form-label tx-semibold">Photo</label>-->
                                            <!--    <input type="file" name="photo" id="photo" class="form-control">-->
                                            <!--</div>-->
                                            <hr class="EmplHr"/>
                                            <h2 class="">Personal Details</h2>
                                            <hr class="EmplHr"/>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="code" class="form-label tx-semibold">Employee ID</label>
                                                <input type="text" name="code" id="code" class="form-control" placeholder="<?php echo e(isset($details->code) ? $details->code:''); ?>" value="<?php echo e(isset($details->code) ? $details->code:''); ?>" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name" class="form-label tx-semibold">Name</label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="<?php echo e(isset($details->name) ? $details->name:''); ?>" value="<?php echo e(isset($details->name) ? $details->name:''); ?>" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email" class="form-label tx-semibold">Email</label>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="<?php echo e(isset($details->user->email) ? $details->user->email:''); ?>" value="<?php echo e(isset($details->user->email) ? $details->user->email:''); ?>" readonly>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="date_of_birth" class="form-label tx-semibold">Birthday</label>
                                                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="<?php echo e(isset($details->date_of_birth) ? $details->date_of_birth:''); ?>" value="<?php echo e(isset($details->date_of_birth) ? $details->date_of_birth:''); ?>" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="gender" class="form-label tx-semibold">Gender</label>
                                                <select name="gender" id="gender" class="form-control" readonly>
                                                    <option value="" <?php echo e($details->gender == null ? 'selected' : ''); ?>>Select Gender</option>
                                                    <option value="0" <?php echo e($details->gender == 0 ? 'selected' : ''); ?>>Male</option>
                                                    <option value="1" <?php echo e($details->gender == 1 ? 'selected' : ''); ?>>Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="father_name" class="form-label tx-semibold">Father's Name</label>
                                                <input type="text" name="father_name" id="father_name" class="form-control" placeholder="<?php echo e(isset($details->father_name) ? $details->father_name:''); ?>" value="<?php echo e(isset($details->father_name) ? $details->father_name:''); ?>" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="number" class="form-label tx-semibold">Cellphone</label>
                                                <input type="text" name="number" id="number" class="form-control" placeholder="<?php echo e(isset($details->number) ? $details->number:''); ?>" value="<?php echo e(isset($details->number) ? $details->number:''); ?>" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="current_address" class="form-label tx-semibold">Current Address</label>
                                                <input type="text" name="current_address" id="current_address" class="form-control" placeholder="<?php echo e(isset($details->current_address) ? $details->current_address:''); ?>" value="<?php echo e(isset($details->current_address) ? $details->current_address:''); ?>" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="permanent_address" class="form-label tx-semibold">Permanent Address</label>
                                                <input type="text" name="permanent_address" id="permanent_address" class="form-control" placeholder="<?php echo e(isset($details->permanent_address) ? $details->permanent_address:''); ?>" value="<?php echo e(isset($details->permanent_address) ? $details->permanent_address:''); ?>" readonly>
                                            </div>
                                        
                                            
                                            <div class="form-group col-md-6">
                                                <label for="code" class="form-label tx-semibold">Employee ID</label>
                                                <input type="text" name="code" id="code" class="form-control" placeholder="<?php echo e(isset($details->code) ? $details->code:''); ?>" value="<?php echo e(isset($details->code) ? $details->code:''); ?>" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="department" class="form-label tx-semibold">Department</label>
                                                <?php
                                                $departName = App\Models\Department::where('id',$details->department_id)->first();
                                                ?>
                                                <input type="text" name="department" id="department" class="form-control" placeholder="<?php echo e(isset($details->department) ? $details->department:''); ?>" value="<?php echo e($departName->name); ?>" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="designation" class="form-label tx-semibold">Designation</label>
                                                <input type="text" name="designation" id="designation" class="form-control" placeholder="<?php echo e($details->user->designation); ?>" value="<?php echo e($details->user->designation); ?>" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="date_of_joining" class="form-label tx-semibold">Date Joined</label>
                                                <input type="date" name="date_of_joining" id="date_of_joining" class="form-control" placeholder="<?php echo e($details->date_of_joining); ?>" value="<?php echo e($details->date_of_joining); ?>" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="date_of_confirmation" class="form-label tx-semibold">Date Confirmed</label>
                                                <input type="date" name="date_of_confirmation" id="date_of_confirmation" class="form-control" placeholder="<?php echo e($details->date_of_confirmation); ?>" value="<?php echo e($details->date_of_confirmation); ?>" readonly>
                                            </div>
                                        </div>
                                            <hr class="EmplHr"/>
                                            <h2 class="">Bank Details</h2> 
                                            
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="un_number" class="form-label tx-semibold">Account Title</label>
                                                    <input type="text" name="un_number" id="un_number" class="form-control" placeholder="<?php echo e(isset($details->un_number) ? $details->un_number:''); ?>" value="<?php echo e(isset($details->un_number) ? $details->un_number:''); ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="account_number" class="form-label tx-semibold">Account Number</label>
                                                    <input type="text" name="account_number" id="account_number" class="form-control" placeholder="<?php echo e(isset($details->account_number) ? $details->account_number:''); ?>" value="<?php echo e(isset($details->account_number) ? $details->account_number:''); ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="bank_name" class="form-label tx-semibold">Bank Name</label>
                                                    <input type="text" name="bank_name" id="bank_name" class="form-control" placeholder="<?php echo e(isset($details->bank_name) ? $details->bank_name:''); ?>" value="<?php echo e(isset($details->bank_name) ? $details->bank_name:''); ?>" readonly>
                                                </div>   
                                            </div>
                                            
                                            <hr class="EmplHr"/>
                                            <h2>Education History</h2>
                                            <hr class="EmplHr"/>
                                            <?php if(count($empEducation)>0): ?>
                                                <?php $__currentLoopData = $empEducation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <div class=''>
                                                		<!-- Make sure the repeater list value is different from the first repeater  -->
                                                		<div data-repeater-list="group_b">
                                                			<div data-repeater-item>
                                                			    <input type="hidden" name="empEdu[]" value="<?php echo e($item->id); ?>"/>
                                                                <div class="form-group">
                                                                    <label for="code" class="form-label tx-semibold">Name of Institute</label>
                                                                    <input type="text" name="school_name[]" id="code" class="form-control" placeholder="" value="<?php echo e($item->school_name); ?>" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="department" class="form-label tx-semibold">Degree</label>
                                                                    <input type="text" name="sch_degree[]" id="department" class="form-control" placeholder="" value="<?php echo e($item->sch_degree); ?>" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="designation" class="form-label tx-semibold">Field Of Study</label>
                                                                    <input type="text" name="field_study[]" id="designation" class="form-control" placeholder="" value="<?php echo e($item->field_study); ?>" readonly>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="date_of_joining" class="form-label tx-semibold">Start Date</label>
                                                                        <input type="date" name="sch_date_of_joining[]" id="date_of_joining" class="form-control" placeholder="" value="<?php echo e($item->sch_date_of_joining); ?>" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="date_of_confirmation" class="form-label tx-semibold">End Date</label>
                                                                        <input type="date" name="sch_date_of_confirmation[]" id="sch_date_of_confirmation" class="form-control" placeholder="" value="<?php echo e($item->sch_date_of_confirmation); ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <!--<div class="form-group d-flex justify-content-end">-->
                                                                <!--    <button type="button"  class="btn btn-danger">Delete</button>-->
                                                                <!--</div>-->
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <hr class="EmplHr"/>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <h6>No Education Added!</h6>
                                                <hr class="EmplHr"/>
                                            <?php endif; ?>
                                           
                                            
                                            
                                       
                                            <h2>Work Experience</h2>
                                            <hr class="EmplHr"/>
                                            
                                            <?php if(count($empExperience)>0): ?>
                                            <?php $__currentLoopData = $empExperience; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class=''>
                                        		<!-- Make sure the repeater list value is different from the first repeater  -->
                                        		<div data-repeater-list="group_job">
                                        			<div data-repeater-item>
                                        			    <input type="hidden" name="empExpId[]" value="<?php echo e($val->id); ?>" />
                                                        <div class="form-group">
                                                            <label for="code" class="form-label tx-semibold">Title</label>
                                                            <input type="text" name="jobTitle[]" id="code" class="form-control" placeholder="" value="<?php echo e($val->jobTitle); ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="designation" class="form-label tx-semibold">Company Name</label>
                                                            <input type="text" name="companyName[]" id="designation" class="form-control" placeholder="" value="<?php echo e($val->companyName); ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="designation" class="form-label tx-semibold">Location</label>
                                                            <input type="text" name="compLoc[]" id="designation" class="form-control" placeholder="" value="<?php echo e($val->compLoc); ?>" readonly>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="date_of_joining" class="form-label tx-semibold">Start Date</label>
                                                                <input type="date" name="job_date_of_joining[]" id="job_date_of_joining" class="form-control" placeholder="" value="<?php echo e($val->job_date_of_joining); ?>" readonly>
                                                            </div>
                                                            <?php if($val->job_date_of_confirmation != "0000-00-00"): ?>
                                                            <div class="form-group col-md-6">
                                                                <label for="date_of_confirmation" class="form-label tx-semibold">End Date</label>
                                                                <input type="date" name="job_date_of_confirmation[]" id="job_date_of_confirmation" class="form-control" placeholder="" value="<?php echo e($val->job_date_of_confirmation); ?>" readonly>
                                                            </div>
                                                            <?php else: ?>
                                                            <div class="form-group col-md-4">
                                                            <div class="form-check">
                                                              <input class="form-check-input currentWork" type="checkbox" name="currentlyWork" value="present" id="flexCheckDefault" checked>
                                                              <label class="form-check-label" for="flexCheckDefault">
                                                                I am Currently Working In
                                                              </label>
                                                            </div>
                                                            </div>
                                                            <?php endif; ?>
                                                        </div>
                                                        <!--<div class="form-group d-flex justify-content-end">-->
                                                        <!--    <button type="button"  class="btn btn-danger">Delete</button>-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="EmplHr"/>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <h6>No Work Experience Added!</h6>
                                                <hr class="EmplHr"/>
                                            <?php endif; ?>
                                                
                                           
                                            
                                            
                                        
                                    </div>
                                </div>
                            </div>
                            <!--<button type="submit" class="ml-auto btn btn-primary mt-3" style="margin-left: auto;display: block;">Update Profile</button>-->
                        </div>
                    <!--</form>-->
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>