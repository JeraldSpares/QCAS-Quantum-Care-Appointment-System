<!DOCTYPE html>
<html lang="en" class="fullscreen">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="<?php echo e(__('Appointment')); ?>, <?php echo e(__('Booking')); ?>, System, <?php echo e(__('Service')); ?>, <?php echo e(__('Categorie')); ?>, <?php echo e(__('Client')); ?>, <?php echo e(__('Customer')); ?>, <?php echo e(__('Employee')); ?>">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<head>
    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
    <?php echo $__env->yieldContent('head'); ?>
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body class="page dashboard-page fullscreen relative">
<div class="loader">
    <div class="spinner">
        <div class="spinner-area spinner-forth"></div>
    </div>
</div>
<main class="dashboard-content relative">
<?php echo $__env->make('includes.sidebar-and-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
</main>
<script src="<?php echo e(asset('backend/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/sweetalert2.all.min.js')); ?>"></script>
<script src="<?php echo e(asset('rbtheme/js/lang/'.app()->getLocale().'.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/index.js')); ?>"></script>
<script src="<?php echo e(asset('rbtheme/js/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('rbtheme/js/flatpickr.js')); ?>"></script>
<script src="<?php echo e(asset('rbtheme/js/bootstrap-toggle.min.js')); ?> "></script>
<script src="<?php echo e(asset('backend/js/intlTelInput.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/intlTelInput-jquery.min.js')); ?>"></script>
<script type="text/javascript">
    "use strict";
    var _token = "<?php echo e(csrf_token()); ?>";
    let SITEURL = "<?php echo e(route('welcome')); ?>";
    $(document).ready(function(){
        $("input, select").on("keyup, chnage", function(){
            $(".error").remove();
        });
    });
</script>
<script src="<?php echo e(asset('backend/js/custom.js')); ?>" type="text/javascript"></script>
<?php echo $__env->yieldContent('scripts'); ?>
<script class="iti-load-utils" async src="<?php echo e(asset('backend/js/utils.js')); ?>"></script>
</body>
</html>

<!-- Modal -->
<div class="modal fade demo-popup" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Alert!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="text-danger fw-bold">You are not allowed to update this info. for the demo version. It'll be accessible on the production version.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div><?php /**PATH C:\Users\jeral\OneDrive\Desktop\readybook-appointment-booking-code-1.4\resources\views/layouts/app.blade.php ENDPATH**/ ?>