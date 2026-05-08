
<?php $__env->startSection('head'); ?>
<?php echo $__env->make('includes.head',['title'=> trans('Dashboard')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="<?php echo e(asset('backend/css/tempus-dominus.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('rbtheme/css/fullcalendar.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('rbtheme/css/jquery.qtip.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(url('rbtheme/css/appointment-calender.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employees',\Illuminate\Support\Facades\Auth::user())): ?>
    <section class="monitor padding-space-half">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 col-mobile">
                    <a href="<?php echo e(route('customers.index')); ?>">
                        <div class="monitor-box relative">
                            <div class="icon">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                            </div>
                            <h4><?php echo e(__('Customers')); ?></h4>

                            <div class="count-number">
                                <p><?php echo e($user); ?> <i class="fa fa-long-arrow-up" aria-hidden="true"></i></p>
                            </div>
                        </div>
                    </a>
                </div>

                <?php if($custom->employees == 1): ?>
                <div class="col-md-3 col-sm-6 col-xs-6 col-mobile">
                    <a href="<?php echo e(route('employees.index')); ?>">
                        <div class="monitor-box relative">
                            <div class="icon">
                                <i class="fa fa-user-secret" aria-hidden="true"></i>
                            </div>
                            <h4><?php echo e(__('Employees')); ?></h4>

                            <div class="count-number">
                                <p><?php echo e($employee); ?> <i class="fa fa-long-arrow-up" aria-hidden="true"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endif; ?>

                <div class="col-md-3 col-sm-6 col-xs-6 col-mobile">
                    <a href="<?php echo e(route('paymentlist')); ?>">
                        <div class="monitor-box relative">
                            <div class="icon">
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                            <h4><?php echo e(__('Total Payments')); ?></h4>

                            <div class="count-number">
                                <p><?php echo e($payment); ?> <i class="fa fa-long-arrow-up" aria-hidden="true"></i></p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6 col-mobile">
                    <a href="<?php echo e(route('appointments.index').'?search=today'); ?>">
                        <div class="monitor-box relative">
                            <div class="icon">
                                <i class="fa fa-files-o" aria-hidden="true"></i>
                            </div>
                            <h4><?php echo e(__('Bookings for today')); ?></h4>

                            <div class="count-number">
                                <p><?php echo e($todayAppointment); ?> <i class="fa fa-long-arrow-up" aria-hidden="true"></i></p>
                            
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="board calendar padding-space-half">
        <?php if(Auth::user()->role_id != 3): ?>
        
        <a href="<?php echo e((Auth::user()->role_id == 2) ? route('book_now') : route('appointments.create')); ?>"><span class=""><button class="btn btn-default custom-btn btn-inline"> <?php echo e(__('ADD NEW')); ?></button></span></a>
        <?php endif; ?>
        <div id="appointment-calendar"></div>
       
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('backend/js/tempus-dominus.min.js')); ?>"></script>
<script src="<?php echo e(asset('rbtheme/js/fullcalendar.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/appointment-list.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app',['title' => trans('Dashboard')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\readybook-appointment-booking-code-1.4\resources\views/dashboard.blade.php ENDPATH**/ ?>