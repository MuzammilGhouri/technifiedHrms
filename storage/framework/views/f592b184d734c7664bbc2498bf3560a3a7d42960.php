<!DOCTYPE html>
<html>
<head>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
    <title> Human Resource Management System </title>
    <meta name="description" content="HRMS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="<?php echo e(csrf_token()); ?>">


    <link id="style" href="<?php echo e(asset('new/css/bootstrap.min.css')); ?>" rel="stylesheet" />

    <link href="<?php echo e(asset('new/css/icons.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('new/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('new/css/plugin.css')); ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo e(asset('new/css/app.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('new/css/app1.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('new/css/responsive.css')); ?>" />
    <!--Date Range-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    
    <link rel="shortcut icon" href="/assets/img/favicon.png">
    <!--Select2-->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />-->
<?php echo $__env->yieldPushContent('styles'); ?>

    <!-- -------------- IE8 HTML5 support  -------------- -->

    <style type="text/css">
        .prof-img {
            height: 300px;
            width: 200px;
        }
        
        .prof-img img {
            width: 100% !important;
            height: 100%;
            object-fit: cover;
            border-radius: 15px !important;
        }
        
        .blink {
            color:mediumblue;
        }

        .blink_second {
            color:red;
        }

        .blink_third {
            color:yellow;
        }
        span.select2-selection__clear {
            margin-right: 10px;
        }
        /*For Select Multiple*/
        li.select2-selection__choice {
            color: #4d65d9 !important;
        }
        span.select2-selection__choice__remove {
            color: #4d67d9 !important;
        }
        
        /*For Badges*/
        .badge-primary {
            color: #fff;
            background-color: #007bff;
        }
        .badge-success {
            color: #fff;
            background-color: #28a745;
        }
        .badge-warning {
            color: #212529;
            background-color: #ffc107;
        }
        .badge-danger {
            color: #fff;
            background-color: #dc3545;
        }
        .badge {
            display: inline-block;
            padding: 0.25em 0.4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
            
        }
        .main-body .main-sidebar-body .nav {
            margin: 14px auto;
        }
        .dt-buttons .buttons-html5 {
            background: #ff4b1e !important;
            border-color: #dadef4 !important;
        }
        .btn-success {
            background: #ff4b1e !important;
            border-color: #ff4b1e !important;
        }
        .example img {
            width: 200px;
            border-radius: 50%;
        }
        .EmplHr{
            border-top: 5px solid #ff4213 !important;
        }
        .birthdayCard{
            position: fixed;
            z-index: 50000;
            background: #ffffff;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            margin: 0 auto;
            text-align: center;
            display:none;
        }
    </style>

</head>

<body class="main-body leftmenu ltr light-theme dark-menu">
    
    <div id="global-loader" >
        <img src="<?php echo e(asset('new/img/loader.svg')); ?>" class="loader-img" alt="loader">
    </div>
        <!-- SWITCHER -->
        <?php echo $__env->make('hrms.layouts.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- SWITCHER End -->
    <div class="page">
        
        <!-- MAIN-HEADER -->
        <?php echo $__env->make('hrms.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- END MAIN-HEADER -->
        <!-- MAIN-SIDEBAR -->
        <?php echo $__env->make('hrms.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- END MAIN-SIDEBAR -->
        <div class="birthdayCard">
            <img src="<?php echo e(asset('new/img/giphy.gif')); ?>" class="loader-img" alt="loader">
        </div>
        <!-- MAIN-CONTENT -->
        <div class="main-content side-content pt-0">
            <div class="main-container container-fluid">
                <div class="inner-body">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <!--<div class="modal fade" id="myModalBirthday" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">-->
        <!--  <div class="modal-dialog">-->
        <!--    <div class="modal-content">-->
        <!--      <div class="modal-header">-->
        <!--        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>-->
        <!--        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
        <!--      </div>-->
        <!--      <div class="modal-body">-->
        <!--        <h2 >Happy <br> Birrrrrthday</h2>-->
        <!--        <h1>(name)</h1>-->
        <!--        <canvas id="confetti"></canvas>-->
        <!--      </div>-->
        <!--      <div class="modal-footer">-->
        <!--        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
        <!--        <button type="button" class="btn btn-primary">Understood</button>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <!-- END MAIN-CONTENT -->
        <!-- MAIN-FOOTER -->
        <div class="main-footer text-center">
            <div class="container">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <span>Copyright © 2023 <a href="https://www.technifiedlabs.com/" target="_blank">Technifiedlabs HRMS</a>. All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN-FOOTER -->
    </div>


<!-- -------------- Scripts -------------- -->



<script src="<?php echo e(asset('new/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('new/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('new/js/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(asset('new/js/bootstrap.min.js')); ?>"></script>
<!-- Toastr -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!--<script src="<?php echo e(asset('new/js/jquery.dataTables.min.js')); ?>"></script>-->
<script>

	// Default Configuration
		$(document).ready(function() {
			toastr.options = {
				'closeButton': true,
				'debug': false,
				'newestOnTop': false,
				'progressBar': false,
				'positionClass': 'toast-top-right',
				'preventDuplicates': false,
				'showDuration': '1000',
				'hideDuration': '1000',
				'timeOut': '5000',
				'extendedTimeOut': '1000',
				'showEasing': 'swing',
				'hideEasing': 'linear',
				'showMethod': 'fadeIn',
				'hideMethod': 'fadeOut',
			}
		});
		
    
    $(document).ready(function(){
        $('.header-setting-icon').click(function(){
             $('.demo_changer').removeAttr("style");
             $('.demo_changer').attr("style", "right:0px !important")
             
        });
        
        
    })
   
    $('.closeSett').click(function() {
        
            $('.demo_changer').attr("style", "right:-270px !important")
            
      
      
    });
    
    $(document).ready(function() {
        // $(".birthdayCard").css('display','none');
    // Your code here, including Ajax call
        $.ajax({
            url: 'birthday-wish',
            method: 'GET', // or 'POST' or other HTTP methods
            success: function(response) {
                // Handle the response from the server
                var now = new Date();
                if(response.status){
                    console.log(response.Date);
                    if(response.Date !== ''){
                        $(".birthdayCard").css('display','block');
                        setTimeout(function() { $(".birthdayCard").hide(); }, 5000);
                    }
                    
                }
            },
            error: function(error) {
                // Handle errors
            }
        });
    });
</script>
<!--<script src="<?php echo e(asset('new/js/card.js')); ?>"></script>-->
<script src="<?php echo e(asset('new/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('new/js/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('new/js/pscroll1.js')); ?>"></script>
<script src="<?php echo e(asset('new/js/sidemenu.js')); ?>"></script>
<script src="<?php echo e(asset('new/js/sidebar.js')); ?>"></script>
<!--<script src="<?php echo e(asset('new/js/jquery.dataTables.min.js')); ?>"></script>-->
<!--<script src="<?php echo e(asset('new/js/dataTables.bootstrap5.js')); ?>"></script>-->
<!--<script src="<?php echo e(asset('new/js/dataTables.responsive.min.js')); ?>"></script>-->
<script src="<?php echo e(asset('new/js/apexcharts.js')); ?>"></script>
<script src="<?php echo e(asset('new/js/index.js')); ?>"></script>
<script src="<?php echo e(asset('new/js/circle-progress.min.js')); ?>"></script>
<script src="<?php echo e(asset('new/js/sticky.js')); ?>"></script>

<script src="<?php echo e(asset('new/js/app.js')); ?>"></script>
<!--Select 2 JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
$("#position").select2({
  allowClear:true,
  placeholder: 'Select Departments',
  
});
$("#position2").select2({
  allowClear:true,
  placeholder: 'Select Employees',
  
});
$("#position3").select2({
  allowClear:true,
  placeholder: 'Select Employees',
  
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(asset('new/js/jquery.repeater.min.js')); ?>"></script>
<script>

$(document).ready(function () {
        $('.repeater').repeater({
            
            // (Optional)
            // start with an empty list of repeaters. Set your first (and only)
            // "data-repeater-item" with style="display:none;" and pass the
            // following configuration flag
            initEmpty: false,
            // (Optional)
            // "defaultValues" sets the values of added items.  The keys of
            // defaultValues refer to the value of the input's name attribute.
            // If a default value is not specified for an input, then it will
            // have its value cleared.
            defaultValues: {
                'text-input': 'foo'
            },
            // (Optional)
            // "show" is called just after an item is added.  The item is hidden
            // at this point.  If a show callback is not given the item will
            // have $(this).show() called on it.
            show: function () {
                $(this).slideDown();
            },
            // (Optional)
            // "hide" is called when a user clicks on a data-repeater-delete
            // element.  The item is still visible.  "hide" is passed a function
            // as its first argument which will properly remove the item.
            // "hide" allows for a confirmation step, to send a delete request
            // to the server, etc.  If a hide callback is not given the item
            // will be deleted.
            hide: function (deleteElement) {
                if(confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            },
            // (Optional)
            // You can use this if you need to manually re-index the list
            // for example if you are using a drag and drop library to reorder
            // list items.
            ready: function (setIndexes) {
            },
            // (Optional)
            // Removes the delete button from the first list item,
            // defaults to false.
            isFirstItemUndeletable: true
        })
        $('.repeater-two').repeater({
            
            // (Optional)
            // start with an empty list of repeaters. Set your first (and only)
            // "data-repeater-item" with style="display:none;" and pass the
            // following configuration flag
            initEmpty: false,
            // (Optional)
            // "defaultValues" sets the values of added items.  The keys of
            // defaultValues refer to the value of the input's name attribute.
            // If a default value is not specified for an input, then it will
            // have its value cleared.
            defaultValues: {
                'text-input': 'foo'
            },
            // (Optional)
            // "show" is called just after an item is added.  The item is hidden
            // at this point.  If a show callback is not given the item will
            // have $(this).show() called on it.
            show: function () {
                $(this).slideDown();
            },
            // (Optional)
            // "hide" is called when a user clicks on a data-repeater-delete
            // element.  The item is still visible.  "hide" is passed a function
            // as its first argument which will properly remove the item.
            // "hide" allows for a confirmation step, to send a delete request
            // to the server, etc.  If a hide callback is not given the item
            // will be deleted.
            hide: function (deleteElement) {
                if(confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            },
            // (Optional)
            // You can use this if you need to manually re-index the list
            // for example if you are using a drag and drop library to reorder
            // list items.
            ready: function (setIndexes) {
            },
            // (Optional)
            // Removes the delete button from the first list item,
            // defaults to false.
            isFirstItemUndeletable: true
        })
    });
    
        function deleteEducation(product_att_id, a){
            var e = a;
            var id = product_att_id;
            $.ajax({
                url: "<?php echo e(route('delete.education.variant')); ?>",
                type:"POST",
                data:{
                    "_token": "<?php echo e(csrf_token()); ?>",
                    id:id
                },
                success:function(response){
                    if(response.status){
                        $(e).parent().parent().parent().parent().remove();
                		
                			toastr.success(response.message);
                	
                    }
                    else{
                            toastr.error(response.message);
                    }
                },
            });
        } 
        function deleteExperience(product_att_id, a){
            var e = a;
            var id = product_att_id;
            $.ajax({
                url: "<?php echo e(route('delete.experience.variant')); ?>",
                type:"POST",
                data:{
                    "_token": "<?php echo e(csrf_token()); ?>",
                    id:id
                },
                success:function(response){
                    if(response.status){
                        $(e).parent().parent().parent().parent().remove();
                		
                			toastr.success(response.message);
                	
                    }
                    else{
                            toastr.error(response.message);
                    }
                },
            });
        }  
</script>
<script>
    <?php if(Session::has('flash_status')): ?>
    <?php if(session::get('flash_status') == 'success'): ?>
        swal("Congratulations!", "<?php echo e(session::get('flash_message')); ?>", "success")
    <?php elseif(session::get('flash_status') == 'danger'): ?>
        swal("Congratulations!", "<?php echo e(session::get('flash_message')); ?>", "error")
    <?php endif; ?>
    <?php endif; ?>
</script>


    
    



    
    



    
    



    
    



    
    



    


    



    
    
    



    
    



    
    


<?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-promotion/{id}'): ?>
    <script src="/assets/js/pages/forms-widgets.js"></script>
    <script src="/assets/js/custom.js"></script>
<?php endif; ?>


    
    



    
    



    


    




<!-- -------------- /Scripts -------------- -->



    

    
        
    

    
        
    

    


        
    


    
    

    <script>
        if($('#datetimepicker2').length != 0){
            $('#datetimepicker2').datetimepicker();
        }

        (function($) {
            $.fn.blink = function(options) {
                var defaults = {
                    delay: 3000
                };
                var options = $.extend(defaults, options);

                return this.each(function() {
                    var obj = $(this);
                    setInterval(function() {
                        if ($(obj).css("visibility") == "visible") {
                            $(obj).css('visibility', 'hidden');
                        }
                        else {
                            $(obj).css('visibility', 'visible');
                        }
                    }, options.delay);
                });
            }
        }(jQuery))

        /////////////////////////////////////////////

        $(document).ready(function() {
            $('.blink').blink(); // default is 500ms blink interval.
            $('.blink_second').blink({
                delay: 100
            }); // causes a 100ms blink interval.
            $('.blink_third').blink({
                delay: 1500
            }); // causes a 1500ms blink interval.
        });

        /////////////////////////////////////////////

</script>

<!-- <script src="/assets/js/pages/allcp_forms-elements.js"></script> -->

<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>