
<?php $__env->startSection('content'); ?>
    <div class="container py-4 min-vh-90 mt-lg-7">
    <div class="card overflow-hidden mb-3">
            <div class="card-header bg-light">
              <div class="row flex-between-center">
                <div class="col-sm-auto">
                  <h5 class="mb-1 mb-md-0"><?php echo e(__('Your Notifications')); ?></h5>
                </div>
              </div>
            </div>
            <div class="card-body fs--1 p-0">
            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($notification->type == 'appointment' ||  $notification->type == 'Appointment'): ?>
              <a class="border-bottom-0 notification rounded-0 border-x-0 border-300" href="#!">
                <div class="notification-avatar">
                  <div class="avatar avatar-xl me-3">
                    <img class="rounded-circle" src="<?php echo e(asset('rbtheme/img/placeholder.png')); ?>" alt="" />
                  </div>
                </div>
                
                <div class="notification-body">
                <p class="mb-1"><?php echo e($notification->message); ?></p>
                  <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji"><span class="fa fa-calendar"></span></span><?php echo e(Helper::notificationTime($notification->created_at)); ?></span>
                </div>
              </a>
              <?php endif; ?>
              
              <?php if($notification->type == 'Cancel'): ?>
              <a class="border-bottom-0  notification rounded-0 border-x-0 border-300" href="#!">
                <div class="notification-avatar">
                  <div class="avatar avatar-xl me-3">
                    <img class="rounded-circle" src="<?php echo e(asset('rbtheme/img/placeholder.png')); ?>" alt="" />
                  </div>
                </div>
                <div class="notification-body">
                  <p class="mb-1"><?php echo e($notification->message); ?></p>
                  <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji"><span class="fa fa-calendar"></span></span><?php echo e(Helper::notificationTime($notification->created_at)); ?></span>
                </div>
              </a>
              <?php endif; ?>
             
              <?php if($notification->type == 'completed'): ?>
              <a class="border-bottom-0 notification rounded-0 border-x-0 border-300" href="#!">
                <div class="notification-avatar">
                  <div class="avatar avatar-xl me-3">
                    <img class="rounded-circle" src="<?php echo e(asset('rbtheme/img/placeholder.png')); ?>" alt="" />
                  </div>
                </div>
                <div class="notification-body">
                  <p class="mb-1"><?php echo e($notification->message); ?></p>
                  <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji"><span class="fa fa-calendar"></span></span><?php echo e(Helper::notificationTime($notification->created_at)); ?></span>
                </div>
              </a>
              <?php endif; ?>

              <?php if($notification->type == 'customer'): ?>
              <a class="border-bottom-0 notification rounded-0 border-x-0 border-300" href="#!">
                <div class="notification-avatar">
                  <div class="avatar avatar-xl me-3">
                    <img class="rounded-circle" src="<?php echo e(asset('rbtheme/img/placeholder.png')); ?>" alt="" />
                  </div>
                </div>
                <div class="notification-body">
                  <p class="mb-1"><?php echo e($notification->message); ?></p>
                  <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji"><span class="fa fa-calendar"></span></span><?php echo e(Helper::notificationTime($notification->created_at)); ?></span>
                </div>
              </a>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home',['title' => trans('Notification')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/customer-notification.blade.php ENDPATH**/ ?>