
<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head',['title'=> trans('Make Payment')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="mb-3 p-2">
    <div class="light-style flex-grow-1">
        <?php echo $__env->make('includes.message-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card overflow-hidden p-5">
                <h4 class="font-weight-bold"><?php echo e(__('Payment')); ?></h4>
                    <div class="row no-gutters row-bordered row-border-light">
                      
                            <div class="col-md-3 p-1">
                                <hr class="border-light m-0">
                                <ul class="nav nav-tabs list-group list-group-flush account-settings-links hover-pointer" role="tablist">
                                    <li class="nav-item  list-group-item-action">
                                        <a class="nav-link list-group-item <?php if(session('frm') == 'detail'): ?> active <?php elseif(!in_array(session('frm'),['detail','upi','cash'])): ?> active <?php endif; ?>" data-bs-toggle="tab" data-bs-target="#account-cheque" aria-current="page"><?php echo e(__('Cheque Details')); ?></a>
                                    </li>
                                    <li class="nav-item list-group-item-action" id="change-upi" >
                                        <a class="nav-link list-group-item <?php if(session('frm') == 'upi'): ?> active <?php endif; ?>" data-bs-toggle="tab" data-bs-target="#account-upi"><?php echo e(__('UPI')); ?></a>
                                    </li>
                                    <li class="nav-item list-group-item-action" id="change-cash">
                                        <a class="nav-link list-group-item <?php if(session('frm') == 'cash'): ?> active <?php endif; ?>" data-bs-toggle="tab" data-bs-target="#account-cash"><?php echo e(__('Cash')); ?></a>
                                    </li>
                                </ul>
                            </div>
    
                            <div class="col-md-8">
                                <div class="tab-content">
                                    <div class="tab-pane fade  <?php if(session('frm') == 'detail'): ?> show active <?php elseif(!in_array(session('frm'),['detail','upi','cash'])): ?> show active <?php endif; ?>" id="account-cheque">
                                        
                                        <form method="POST" action="<?php echo e(route('pay',$payment->id.'?frm=detail')); ?>" id="account-info" autocomplete="off">
                                            <?php echo csrf_field(); ?>
                                            <hr class="border-light m-0">
                                            <div class="card-body p-0">
                                                <h2 class="font-weight-bold mt-0">
                                                <?php echo e(__('Account Info')); ?>

                                                </h2>
                                                <input type="hidden" name="payment_type" value="cheque">
    
                                                <div class="mb-3"> 
                                                    <label for="account_no" class="form-label"><?php echo e(__('Bank Account No')); ?>:</label>
                                                    <input type="text" class="form-control" name="account_no"  value="" id="account" placeholder="<?php echo e(__('Enter Bank Account No')); ?>" autocomplete="off">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="cheque" class="form-label"><?php echo e(__('Cheque No')); ?>:</label>
                                                    <input type="text" class="form-control" name="cheque_no"  value="" id="cheque" placeholder="<?php echo e(__('Enter Cheque No')); ?>" autocomplete="off">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="account_no" class="form-label"><?php echo e(__('Account Holder Name')); ?>:</label>
                                                    <input type="text" class="form-control" name="account_holder_name"  value="" id="account_holder_name" placeholder="<?php echo e(__('Enter Account Holder Name')); ?>" autocomplete="off">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bank_name" class="form-label"><?php echo e(__('Bank Name')); ?>:</label>
                                                    <input type="text" class="form-control" name="bank_name"  value="" id="bank" placeholder="<?php echo e(__('Enter Bank Name')); ?>" autocomplete="off">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ifsc" class="form-label"><?php echo e(__('IFSC Code')); ?>:</label>
                                                    <input type="text" class="form-control" name="ifsc_code"  value="" id="ifsc" placeholder="<?php echo e(__('Enter IFSC Code')); ?>" autocomplete="off">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="date" class="form-label"><?php echo e(__('Date')); ?>:</label>
                                                    <input type="text" class="form-control custom-control custom-format flicker bg-transparent" name="payment_date"  value="<?php echo e($payment->date); ?>" autocomplete="off" 
                                                    data-wizard-validate-date="true"  data-date-format="<?php echo e($custom->date_format); ?>" placeholder="<?php echo e(__('Please Select Date')); ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="amount" class="form-label"><?php echo e(__('Amount')); ?>:</label>
                                                    <div class='input-group'>
                                                        <span class="input-group-text">
                                                            <?php echo e($custom->currency_icon); ?>

                                                        </span>
                                                
                                                    <input type="text" class="form-control bg-transparent" name="amount"  value="<?php echo e($payment->amount); ?>" id="amount" placeholder="<?php echo e(__('Enter Amount')); ?>"  autocomplete="off" readonly>
                                                    </div>
                                                </div>
                                                
                                                <div class="text-right save">
                                                    <button type="submit" class="btn btn-primary"><?php echo e(__('Paid Account')); ?> </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
    
                                    <div class="tab-pane fade <?php if(session('frm') == 'upi'): ?> show active <?php endif; ?>" id="account-upi">
                                        <form method="POST" action="<?php echo e(route('pay',$payment->id.'?frm=upi')); ?>" id="upi-frm" autocomplete="off">
                                            <?php echo csrf_field(); ?>
                                            <div class="card-body p-0 mt-0">
                                                <h2 class="font-weight-bold mt-0">
                                                <?php echo e(__('UPI Details')); ?>

                                                </h2>
                                                <hr class="border-light m-0">
                                                <input type="hidden" name="payment_type" value="upi">
                                                <div class="mb-3">
                                                    <label for="upi" class="form-label"><?php echo e(__('UPI ID')); ?>:</label>
                                                    <input type="text" class="form-control" value="<?php echo e($payment->upi_id); ?>" name="upi_id" placeholder="<?php echo e(__('Enter UPI ID')); ?>"  autocomplete="off"> 
                                                </div>
                                                <div class="mb-3">
                                                    <label for="date" class="form-label"><?php echo e(__('Date')); ?>:</label>
                                                    <input type="text" class="form-control custom-control custom-format flicker bg-transparent" name="payment_date"  value="<?php echo e($payment->date); ?>" autocomplete="off" 
                                                    data-wizard-validate-date="true"  data-date-format="<?php echo e($custom->date_format); ?>" placeholder="<?php echo e(__('Please Select Date')); ?>" >
                                                </div>
                                                <div class="mb-3">
                                                    <label for="amount" class="form-label"><?php echo e(__('Amount')); ?>:</label>
                                                    <div class='input-group'>
                                                        <span class="input-group-text">
                                                            <?php echo e($custom->currency_icon); ?>

                                                        </span>
                                                    <input type="text" class="form-control bg-transparent" name="amount"  value="<?php echo e($payment->amount); ?>" id="amount" placeholder="<?php echo e(__('Enter Amount')); ?>" autocomplete="off" readonly>
                                                    </div>
                                                </div>
                                                
                                                <div class="text-right mt-5 mb-5">
                                                    <button type="submit" class="btn btn-primary"><?php echo e(__('Paid Amount')); ?></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade  <?php if(session('frm') == 'cash'): ?> show active <?php endif; ?>" id="account-cash">
                                        <form method="POST" action="<?php echo e(route('pay',$payment->id.'?frm=cash')); ?>" id="cash-frm" autocomplete="off">
                                            <?php echo csrf_field(); ?>
                                            <div class="card-body pb-2 mt-0 p-0">
                                                <h2 class="font-weight-bold mt-0">
                                               <?php echo e(__(' Cash Details')); ?>

                                                </h2>
                                                <hr class="border-light m-0">
                                                <input type="hidden" name="payment_type" value="cash">
                                                <div class="mb-3">
                                                    <label for="date" class="form-label"><?php echo e(__('Date')); ?>:</label>
                                                    <input type="text" class="form-control custom-control flicker bg-transparent custom-format border-right-0 border-left-0" name="payment_date"  value="<?php echo e($payment->date); ?>" autocomplete="off" 
                                                    data-wizard-validate-date="true"  data-date-format="<?php echo e($custom->date_format); ?>" placeholder="<?php echo e(__('Please Select Date')); ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="amount" class="form-label"><?php echo e(__('Amount')); ?>:</label>
                                                    <div class='input-group'>
                                                        <span class="input-group-text">
                                                            <?php echo e($custom->currency_icon); ?>

                                                        </span>
                                                    <input type="text" class="form-control bg-transparent" name="amount"  value="<?php echo e($payment->amount); ?>" id="amount" placeholder="<?php echo e(__('Enter Amount')); ?>" autocomplete="off" readonly>
                                                    </div>
                                                </div>
                                                
                                                <div class="text-right mt-5 mb-5">
                                                    <button type="submit" class="btn btn-primary"><?php echo e(__('Paid Amount')); ?></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="text-right mt-5 mb-5">
                                    <?php if(Auth::user()->role_id == 1): ?>
                                    <a href="<?php echo e(route('paymentlist')); ?>"><span class="back"><h4><i class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo e(__('Back')); ?></h4></span></a>
                                    <?php endif; ?>
                                    <?php if(Auth::user()->role_id == 3): ?>
                                    <a href="<?php echo e(route('employee-paymentlist')); ?>"><span class="back"><h4><i class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo e(__('Back')); ?></h4></span></a>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/payments/offline_pay.blade.php ENDPATH**/ ?>