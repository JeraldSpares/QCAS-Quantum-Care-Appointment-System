
<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head',['title'=> trans('Payments')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('rbtheme/css/flatpickr.min.css')); ?>" rel="stylesheet" id="style-default">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.message-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row p-2">
        <div class="col-sm-12 col-mobile">
            <div class="board-box">
            <div class="board-title">
                    <h2><?php echo e(__('List of all Payments')); ?></h2>
                <form method="post" id="filter-form" action="<?php echo e(route('payment-filter')); ?>" autocomplete="off">
                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-2 payments-filter">  
                        <div class="mb-3">
                            <label for="date" class="form-label"> <?php echo e(__('Appointment Start Date')); ?>: </label>
                            <input type="text" class="form-control custom-control date custom-format" id="startdate" min="<?php echo e(date($custom->date_format)); ?>" autocomplete="off" 
                            value="<?php echo e(isset($data) ? $data['startdate'] : ''); ?>" name="startdate" data-date-format="<?php echo e($custom->date_format); ?>" data-wizard-validate-date="true" placeholder="<?php echo e(__('Please Select Date')); ?>">
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-2 payments-filter">
                        <div class="mb-3">
                            <label for="date" class="form-label"><?php echo e(__('Appointment End Date')); ?>: </label>
                            <input type="text" class="form-control custom-control date custom-format" id="enddate" max="<?php echo e(date($custom->date_format)); ?>" autocomplete="off" 
                            value="<?php echo e(isset($data) ? $data['enddate'] : ''); ?>" name="enddate" data-date-format="<?php echo e($custom->date_format); ?>" data-wizard-validate-date="true" placeholder="<?php echo e(__('Please Select Date')); ?>">
                            <span class=" error-message" id="err-date"></span>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-2 payments-filter">
                        <div class="mb-3">
                            <label for="payment_method" class="form-label"><?php echo e(__('Payment Method')); ?>: </label>
                            <select name="payment_method" id="payment_method" class="form-control custom-control">
                            <option value=""><?php echo e(__('Select Payment Method')); ?></option>
                            <option value="stripe" <?php echo e(( isset($data) && 'stripe' == $data['payment_method']) ? 'selected' : ''); ?>><?php echo e(__('Stripe')); ?></option>
                            <option value="paypal" <?php echo e(( isset($data) && 'paypal' == $data['payment_method']) ? 'selected' : ''); ?>><?php echo e(__('Paypal')); ?></option>
                            <option value="razorpay" <?php echo e(( isset($data) && 'razorpay' == $data['payment_method']) ? 'selected' : ''); ?> ><?php echo e(__('Razorpay')); ?></option>
                            <option value="offline" <?php echo e(( isset($data) && 'offline' == $data['payment_method']) ? 'selected' : ''); ?>><?php echo e(__('COD')); ?></option>
                            </select>
                        </div>
                    </div>  
                    
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-2 payments-filter">
                        <div class="mb-3">
                            <label for="status" class="form-label"><?php echo e(__('Payment Status')); ?>: </label>
                            <select name="status" id="status" class="form-control custom-control">
                            <option value=""><?php echo e(__('Select Status')); ?></option>
                            <option value="succeeded" <?php echo e(( isset($data) && 'succeeded' == $data['status']) ? 'selected' : ''); ?>><?php echo e(__('Succeeded')); ?></option>
                            <option value="pending" <?php echo e(( isset($data) && 'pending' == $data['status']) ? 'selected' : ''); ?>><?php echo e(__('Pending')); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-2 payments-filter mt-1">
                        <input type="submit" class="btn btn-primary filter" name="filter" value="<?php echo e(__('Apply Filter')); ?>" id="filter"></button>
                        <input type="button" class="btn btn-primary filter" name="reset" value="<?php echo e(__('Reset')); ?>" id="reset"></button>
                    </div>
                </div>
    
                </form>
                <div class="table-style">
                    <div class="table-responsive">
                        <table class="table table-hover data-table" id="payment-table">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('SR No')); ?>.</th>
                                    <th><?php echo e(__('Customer Name')); ?></th>
                                    <th><?php echo e(__('Appointment Date')); ?></th>
                                    <th><?php echo e(__('Payment Method')); ?></th>
                                    <th><?php echo e(__('Amount')); ?></th>
                                    <th><?php echo e(__('Appointment Status')); ?></th>
                                    <th><?php echo e(__('Payment Status')); ?></th>
                                    <th class="t-right"><?php echo e(__('Action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $payment_history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                                <tr>
                                    <th><?php echo e($rowIndex++); ?></th>
                                    <td><?php echo e(ucfirst($payment->user->first_name).' '.ucfirst($payment->user->last_name)); ?></td>
                                    <td><?php echo e(date($custom->date_format, strtotime($payment->date))); ?></td>
                                    <td><?php echo e(ucfirst($payment->payment_method)); ?></td>
                                    <td><?php echo e($custom->currency_icon); ?><?php echo e($payment->amount); ?> </td>
                                    
                                    <td><span class="bg-<?php echo e((in_array($payment->status,['approved','completed'])) ? (in_array($payment->status,['completed'])) ? 'info' : 'success' : 'danger'); ?> badge"><?php echo e(ucfirst($payment->status)); ?></span></td>
                                    <?php if($payment->pstatus == 'success' || $payment->pstatus == 'succeeded'): ?>
                                    <td><span class="bg-success badge"><?php echo e(__('Succeeded')); ?></span></td>
                                    <?php endif; ?>
                                    <?php if($payment->pstatus == 'pending'): ?>
                                    <td><span class="bg-danger badge"><?php echo e(ucfirst($payment->pstatus)); ?></span></td>
                                    <?php endif; ?>
                                    <td class="t-right">
                                        <?php if($payment->payment_method == 'offline' && $payment->pstatus == 'pending' && $payment->status == 'approved'): ?>
                                            <a class="btn btn-success" href="<?php echo e(route('pay',$payment->id)); ?>"><?php echo e(__('Add Payment')); ?></a>
                                        <?php endif; ?>
                                        
                                        <a class="btn btn-default btn-lg" href="<?php echo e(route('paymentview',$payment->id)); ?>">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/payments/index.blade.php ENDPATH**/ ?>