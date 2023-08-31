<?php $__env->startSection('content'); ?>
<!-- START CONTENT -->
<div class="content">
    <div  class="inner-body">
        <!--<div class="page-header">-->
        <!--    <div>-->
        <!--        <h2 class="main-content-title tx-24 mg-b-5"></h2>-->
        <!--        <ol class="breadcrumb">-->
        <!--            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><span class="fa fa-home"></span> <span style="margin-left:10px">Dashboard</span></a></li>-->
        <!--            <li class="breadcrumb-item active" aria-current="page">Notice</li>-->
        <!--            <li class="breadcrumb-item active" aria-current="page">Add Notice</li>-->
        <!--        </ol>-->
        <!--    </div>-->
        <!--</div>-->
    <!-- -------------- Content -------------- -->
    
        <div class="row row-sm">
		    <div class="col-lg-12 col-md-12">
			    <div class="card custom-card mt-5">
    				<div class="card-header">
    					<div>
    						<h6 class="main-content-label">Add Notice</h6>
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

    								<form method="POST" action="https://hrms.technifiedlabs.com/add-notice" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
    								    <?php echo e(csrf_field()); ?>

    									<div class="form-group">
    										<label class="tx-semibold">Notice Name</label>
                                            <input type="text" placeholder="Notice name..." name="note_name" id="input002" class="select2-single form-control" required>
    									</div>
    									<div class="form-group">
    										<label class="tx-semibold">Notice Description</label>
                                            <textarea name="detail" id="editor" cols="30" rows="10"></textarea>
    									</div>
    									<div class="form-group d-flex">
                                                            
                                            <div class="col-md-4">
    											<input type="submit" class="btn btn-bordered btn-info btn-block" value="Submit">
                                            </div>
                                            <div class="col-md-4">
    											
                                            </div>
                                            <div class="col-md-4">
    											<a href="/add-note">
                                                    <input type="button" class="btn btn-bordered btn-success btn-block" value="Reset">
                                                </a>
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
                    <h6 class="main-content-label mb-3">Notices Lists</h6>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom mb-0 border dataTable no-footer" id="recentorders" role="grid" aria-describedby="recentorders_info">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Notice Name</th>
                                <!--<th>Notice Image</th>-->
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php $i =0;?>
                            <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td scope="row"><?php echo e($i+=1); ?></td>
                                <td><?php echo e($note->name); ?></td>
                                <!--<td><img src="<?php echo e(asset($note->image)); ?>" width="150px" height="150px"/></td>-->
                                <td>
                                    <div class="btn-group text-right">
                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" > Action
                                                <span class="caret ml5"></span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            
                                                <a href="/edit-notice/<?php echo e($note->id); ?>" class="dropdown-item">Edit</a>
                                            
                                            
                                                <a href="/delete-notice/<?php echo e($note->id); ?>" class="dropdown-item">Delete</a>
                                            
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
	    
    </div>
</div>


    <?php $__env->startPush('styles'); ?>
        <link rel="stylesheet" type="text/css" href="/assets/allcp/forms/css/bootstrap-select.css">
        <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    <?php $__env->stopPush(); ?>
    <?php $__env->startPush('scripts'); ?>
        <script src="/assets/allcp/forms/js/bootstrap-select.js"></script>
         <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<!--<script src="<?php echo e(asset('new/js/ckeditor.js')); ?>"></script>-->
<script src="<?php echo e(asset('new/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('new/js/dataTables.bootstrap5.js')); ?>"></script>
<script src="<?php echo e(asset('new/js/dataTables.responsive.min.js')); ?>"></script>
<script>
CKEDITOR.replace('editor', {
  skin: 'moono',
  enterMode: CKEDITOR.ENTER_BR,
  shiftEnterMode:CKEDITOR.ENTER_P,
  toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
             { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
             { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
             { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
             { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
             { name: 'links', items: [ 'Link', 'Unlink' ] },
             { name: 'insert', items: [ 'Image'] },
             { name: 'spell', items: [ 'jQuerySpellChecker' ] },
             { name: 'table', items: [ 'Table' ] }
             ],
});

</script>
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