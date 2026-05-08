
<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head',['title'=> trans('Notification')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-sm-12 col-mobile p-3">
        <div class="board-box">
            <div class="board-title">
                <h2><?php echo e(__('Notifications')); ?></h2>
            </div>

            <div class="table-style">
                <div class="table-responsive">
                    <table class="table table-hover data-table" id="notification-table">
                        <thead>
                        <tr>
                            <th><?php echo e(__('SR No.')); ?></th>
                            <th><?php echo e(__('Customer Name')); ?></th>
                            <th><?php echo e(__('Message')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($rowIndex++); ?></th>
                                <td><?php echo e(ucfirst($result->first_name)); ?></td>
                                <td><?php echo e(ucfirst($result->message)); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\readybook-appointment-booking-code-1.4\resources\views/notification.blade.php ENDPATH**/ ?>