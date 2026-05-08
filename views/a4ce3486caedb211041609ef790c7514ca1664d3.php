<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php echo e(__('Appointment')); ?>, <?php echo e(__('Booking')); ?>, <?php echo e(__('System')); ?>, <?php echo e(__('Service')); ?>, <?php echo e(__('Categorie')); ?>, <?php echo e(__('Client')); ?>, <?php echo e(__('Customer')); ?>, <?php echo e(__('Employee')); ?>">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta content="" name="description">
    <?php if(!empty($site->site_title)): ?>
    <title><?php echo e($site->site_title); ?> | <?php echo e($title); ?></title>
    <?php else: ?>
    <title><?php echo e(__('Appointment Booking System')); ?> - <?php echo e(__('ReadyBook')); ?> | <?php echo e($title); ?></title>
    <?php endif; ?>
    <?php if(!empty($site->logo)): ?>
    <?php $fIconUrl = asset('img/favicons/'.$site->favicon) ?>
    <?php else: ?>
    <?php $fIconUrl = asset('rbtheme/img/favicon.png') ?>
    <?php endif; ?>
    <link href="<?php echo e($fIconUrl); ?>" rel="icon">
    <link href="<?php echo e($fIconUrl); ?>" rel="apple-touch-icon">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e($fIconUrl); ?>">
    <meta name="msapplication-TileImage" content="<?php echo e($fIconUrl); ?>">
    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="<?php echo e(asset('rbtheme/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('rbtheme/css/icofont.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('rbtheme/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('rbtheme/css/remixicon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('rbtheme/css/venobox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('rbtheme/css/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('rbtheme/css/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('rbtheme/css/toastr.min.css')); ?>" rel="stylesheet" id="style-default">
    <link href="<?php echo e(asset('rbtheme/css/loader.css')); ?>" rel="stylesheet" id="style-default">
    <link rel="stylesheet" href="<?php echo e(asset('backend/css/intlTelInput.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('rbtheme/css/wizard.css?v='.time())); ?>">
    <link rel="stylesheet" href="<?php echo e(url('rbtheme/css/custom.css?v='.time())); ?>">
    <link href="<?php echo e(asset('rbtheme/css/OverlayScrollbars.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('rbtheme/css/style.css?v='.time())); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body>
<div class="loader">
      <div class="spinner">
        <div class="spinner-area spinner-first"></div>
        <div class="spinner-area spinner-second"></div>
        <div class="spinner-area spinner-third"></div>
      </div>
    </div>
    <?php echo $__env->make('front.include.home-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('slider'); ?>
    <main id="main">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer id="footer">
    <?php echo $__env->yieldContent('footer-top'); ?>
    <?php echo $__env->make('front.include.home-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>
    <script src="<?php echo e(asset('rbtheme/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/anchor.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/typed.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/venobox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/lodash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/list.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/toastr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/OverlayScrollbars.min.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/js/intlTelInput.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/js/intlTelInput-jquery.min.js')); ?>"></script>
    <script type="text/javascript">
        "use strict";
        var custom = "<?php echo e((isset($custom) && isset($custom->categories)) ? $custom->categories : ''); ?>";
        let SITEURL = "<?php echo e(route('welcome')); ?>";
        let _token = '<?php echo e(csrf_token ()); ?>';
        let LOGGED = "<?php echo e(Auth::check()); ?>";
        let langauge = "<?php echo e(app()->getLocale()); ?>";
        (function($) {
            "use strict";
            <?php if(Session::has('message')): ?>
            toastr.success("<?php echo e(Session::get('message')); ?>");
            <?php endif; ?>

            <?php if(Session::has('error-message')): ?>
            toastr.error("<?php echo e(Session::get('error-message')); ?>")
            <?php endif; ?>
        }(jQuery));
    </script>
    <script src="<?php echo e(asset('rbtheme/js/lang/'.app()->getLocale().'.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/custom.js?ver=1.1')); ?>"></script>
    <?php if(auth()->guard()->guest()): ?>
    <script src="<?php echo e(asset('rbtheme/js/login.js')); ?>"></script>
    <?php endif; ?>
    <script src="<?php echo e(asset('rbtheme/js/wizard.js')); ?>"></script>
    <script src="<?php echo e(asset('rbtheme/js/main.js')); ?>"></script>
    
    <?php echo $__env->yieldContent('script'); ?>
    <script class="iti-load-utils" async src="<?php echo e(asset('backend/js/utils.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Users\jeral\OneDrive\Desktop\readybook-appointment-booking-code-1.4\resources\views/layouts/home.blade.php ENDPATH**/ ?>