
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('rbtheme/css/jquery.qtip.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('rbtheme/css/fullcalendar.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('rbtheme/css/appointment-calender.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="py-0 overflow-hidden light" id="banner">
    <div class="bg-holder overlay">
    </div>
    <div class="container bg-light card mt-lg-7 mb-5 p-3">
        <div id='appointment-calendar' class="card-body"></div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('rbtheme/js/fullcalendar.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('rbtheme/js/jquery.qtip.min.js')); ?>"></script>
<script src="<?php echo e(asset('rbtheme/js/customer-appointment.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.home',['title' => trans('Dashboard')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/customer-dashboard.blade.php ENDPATH**/ ?>