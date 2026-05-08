<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php if(!empty($site->site_title)): ?>
   <title><?php echo e($site->site_title); ?> | <?php echo e($title); ?></title>
<?php else: ?>
   <title><?php echo e(__('Appointment Booking System')); ?> - <?php echo e(__('ReadyBook')); ?> | <?php echo e($title); ?></title>
<?php endif; ?>
<?php if(!empty($site->favicon)): ?>
   <link rel="icon" href="<?php echo e(asset('img/favicons/'.$site->favicon)); ?>">
<?php else: ?>
   <link rel="icon" href="<?php echo e(asset('rbtheme/img/favicon.png')); ?>">
<?php endif; ?>
<link href="<?php echo e(asset('rbtheme/css/glyphicons.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('backend/css/bootstrap.min.css')); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/css/sidebar.css?ver=1.0')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/css/dashboard.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/css/header.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/css/base.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/css/profile.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/css/sweetalert2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/css/jquery.dataTables.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('rbtheme/css/bootstrap-toggle.min.css')); ?>">
<link href="<?php echo e(asset('rbtheme/css/flatpickr.min.css')); ?>" rel="stylesheet" id="style-default">
<link rel="stylesheet" href="<?php echo e(asset('backend/css/intlTelInput.min.css')); ?>">
<link href="<?php echo e(asset('backend/css/custom.css')); ?>" rel="stylesheet"></script>
<?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/includes/head.blade.php ENDPATH**/ ?>