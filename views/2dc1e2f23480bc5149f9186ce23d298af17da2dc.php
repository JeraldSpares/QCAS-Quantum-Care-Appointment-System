
<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head',['title'=> trans('Customers')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row p-2">
        <div class="col-sm-12 col-mobile">
            <div class="board-box">
                <div class="board-title">
                    <h2><?php echo e(__('List of all customers')); ?></h2>
                </div>
                <div class="table-style">
                    <div class="table-responsive">
                        <table class="table table-hover data-table" id="customer-table">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('SR No.')); ?></th>
                                    <th><?php echo e(__('First Name')); ?></th>
                                    <th><?php echo e(__('Last Name')); ?></th>
                                    <th><?php echo e(__('Email')); ?></th>
                                    <th><?php echo e(__('Phone')); ?></th>
                                    <th><?php echo e(__('Status')); ?></th>
                                    <th class="t-right"><?php echo e(__('Action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th><?php echo e($rowIndex++); ?></th>
                                        <td><?php echo e(ucfirst($customer->first_name)); ?></td>
                                        <td><?php echo e(ucfirst($customer->last_name)); ?></td>
                                        <td><?php echo e($customer->email); ?></td>
                                        <td><?php echo e($customer->country_code.$customer->phone); ?></td>
                                        <td><input type="checkbox" name="status" class="status" value="1" <?php if($customer->status == 1): ?> <?php echo e('checked'); ?> <?php endif; ?> data-toggle="toggle" data-style="slow"
                                            data-onstyle="success" data-offstyle="danger" data-off="<?php echo e(__('Inactive')); ?>" data-employee_id="<?php echo e($customer->id); ?>" data-on="<?php echo e(__('Active')); ?>">
                                        </td>
                                        <td  class="t-right">
                                            <a class="btn btn-default btn-lg" href="<?php echo e(route('customers.show',$customer->id)); ?>">
                                                <span class="glyphicon glyphicon-eye-open"></span></a>
                                            <a class="btn btn-default btn-lg" href="<?php echo e(route('customers.edit',$customer->id)); ?>">
                                                <span class="glyphicon glyphicon-edit"></span></a>
                                            <a class="btn btn-default btn-lg" title="<?php echo e(__('appointment')); ?>" href="<?php echo e(route('customers.appointment',$customer->id)); ?>">
                                                    <span class="glyphicon glyphicon-calendar"></span></a>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('backend/js/customer.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\readybook-appointment-booking-code-1.4\resources\views/customers/index.blade.php ENDPATH**/ ?>