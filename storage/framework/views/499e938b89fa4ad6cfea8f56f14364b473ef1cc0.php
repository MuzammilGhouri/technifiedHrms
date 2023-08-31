<?php $__env->startSection('content'); ?>
<!-- START CONTENT -->
<div class="content">
    <div  class="inner-body">
        
    <!-- -------------- Content -------------- -->
    
        <div class="row row-sm">
		    <div class="col-lg-12 col-md-12">
			    <div class="card custom-card mt-5">
    				<div class="card-header">
    					<div>
    						<h6 class="main-content-label">Create Invoice</h6>
    					</div>
    				</div>
				    <div class="card-body">
    					<div class="row row-sm">
    						<?php if(Session::has('flash_message')): ?>
                            <div class="alert alert-success">
                                <?php echo e(Session::get('flash_message')); ?>

                            </div>
                            <?php endif; ?>
    					    <div class="col-md-12 col-lg-12 col-xl-12">
    							<div class="">
    								<?php echo Form::open(['class' => 'form-horizontal']); ?>

    									<div class="form-group">
    										<label class="tx-semibold">Employee Name</label>
                                            <select id="position"  class="field form-control" name="employee_id" style="height:100px;">
                                                <option value="" selected>Select One</option>
                                                <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($emp->id); ?>"><?php echo e($emp->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
    									</div>
    									<div class="form-group">
    										<label class="tx-semibold">Invoice Date</label>
    									    <input type="date" name="invoiceDate" class="field form-control"/>
    									</div>
    									<div class="card-header">
                        					<div>
                        						<h6 class="main-content-label">Break Up</h6>
                        					</div>
                        				</div>
    									<div class="form-group mt-2">
    									   
    									    <div class="row row-sm">
            									<div class="col-sm-4">
            										<label class="tx-semibold">Gross Salary</label>
                                                    <input type="number" placeholder="Gross Salary" name="gross_salary" id="input002" step="0.01" class="select2-single form-control" required>

                                                      											
            									</div>
            									<div class="col-sm-4">
                                                    <label class="tx-semibold">Fuel Allowance</label>
                                                    <input type="number" placeholder="Fuel Allowance" name="fuel_allowance" id="input002" step="0.01" class="select2-single form-control" required>
                                                    
                                                </div>
            									<div class="col-sm-4">
                                                    <label class="tx-semibold">Cell phone Allowance</label> 
                                                    <input type="number" placeholder="Cell phone Allowance" name="ceel_phone_allowance" step="0.01" id="input002" class="select2-single form-control" required>
                                                    
                                                </div>
            									<div class="col-sm-4 mt-2">
                                                    <label class="tx-semibold">Special Utility</label>
                                                    <input type="number" placeholder="Special Utility" name="special_utility" step="0.01" id="input002" class="select2-single form-control" required>
                                                    
                                                </div>
            									<div class="col-sm-4 mt-2">
                                                    <label class="tx-semibold">Car Allowance</label>
                                                    <input type="number" placeholder="Car Allowance" name="car_allowance" id="input002" step="0.01" class="select2-single form-control" required>
                                                    
                                                </div>
            									<div class="col-sm-4 mt-2">
                                                    <label class="tx-semibold">Maintenance Allowance</label>
                                                    <input type="number" placeholder="Maintenance Allowance" name="maintan_allowance" step="0.01" id="input002" class="select2-single form-control" required>
                                                    
                                                </div>
    									    </div>

                                        </div>
    									<div class="card-header">
                        					<div>
                        						<h6 class="main-content-label">Deduction</h6>
                        					</div>
                        				</div>
    									<div class="form-group mt-2">
    									   
    									    <div class="row row-sm">
            									<div class="col-sm-4">
            										<label class="tx-semibold">Absent Deduction</label>
                                                    <input type="number" placeholder="Absent Deduction" name="absent_deduction" step="0.01" id="input002" class="select2-single form-control" required>

                                                      											
            									</div>
            									<div class="col-sm-4">
                                                    <label class="tx-semibold">Tax Deduction</label>
                                                    <input type="number" placeholder="Tax Deduction" name="tax_deduction" step="0.01" id="input002" class="select2-single form-control" required>
                                                    
                                                </div>
            									<div class="col-sm-4">
                                                    <label class="tx-semibold">EOBI</label>
                                                    <input type="number" placeholder="EOBI" name="eobi" id="input002" step="0.01" class="select2-single form-control" required>
                                                    
                                                </div>
            									<div class="col-sm-4 mt-2">
                                                    <label class="tx-semibold">Loan Deduction</label>
                                                    <input type="number" placeholder="Loan Deduction" name="loan_deduction" step="0.01" id="input002" class="select2-single form-control" required>
                                                    
                                                </div>
            									<div class="col-sm-4 mt-2">
                                                    <label class="tx-semibold">Advance Salary</label>
                                                    <input type="number" placeholder="Advance Salary" name="advance_salary" step="0.01" id="input002" class="select2-single form-control" required>
                                                    
                                                </div>
            									
    									    </div>

                                        </div>
    									<div class="form-group d-flex">
                                                            
                                            <div class="col-md-4">
    											<input type="submit" class="btn btn-bordered btn-info btn-block" value="Submit">
                                            </div>
                                            <div class="col-md-4">
    											
                                            </div>
                                            <div class="col-md-4">
    											<a href="/add-team">
                                                    <input type="button" class="btn btn-bordered btn-success btn-block" value="Reset">
                                                </a>
                                            </div> 
    									</div>
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
    <?php $__env->stopPush(); ?>
    <?php $__env->startPush('scripts'); ?>
        <script src="/assets/allcp/forms/js/bootstrap-select.js"></script>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>