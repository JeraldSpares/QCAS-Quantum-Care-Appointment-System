
<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head',['title'=> trans('Payment Setting')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="mt-1">
    <div class="light-style flex-grow-1 container-p-y container-padding">
        <?php echo $__env->make('includes.message-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h3 class="font-weight-bold t-center">
            <?php echo e(__('Payment Method Settings')); ?>

        </h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card row-bordered card-setting">
                    <form method="POST" action="<?php echo e(route('setting.update',Auth::user()->id)); ?>" id="StripeForm" autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <div class="card-body pb-2">
                            <img src="<?php echo e(asset('rbtheme/img/stripe-logo.png')); ?>" class="" height="40px" width="100px" alt="<?php echo e(__('Smtp logo')); ?>">
                            <hr class="border-light m-0">
                            
                            <div class="mb-3 status-mode">
                                <label for="stripe" class="form-label va-bottom"><?php echo e(__('Status')); ?>:</label>  
                                <input type="checkbox" class="toggle-set" id="stripe" name="is_stripe" value="1" data-toggle="toggle" data-style="slow"
                                data-onstyle="success" data-offstyle="danger" data-off="<?php echo e(__('Inactive')); ?>"  data-on="<?php echo e(__('Active')); ?>"
                                <?php echo e(($smtp->is_stripe == 1) ? "checked": ""); ?>>
                                
                            </div>
                            
                            <div class="mb-3 pull-lg-right ">
                                <label for="stripe" class="form-label va-bottom"><?php echo e(__('Mode')); ?>:</label>  
                                <input type="checkbox" class="toggle-set" id="stripe" name="stripe_active_mode" value="1" data-toggle="toggle" data-style="slow"
                                data-onstyle="success" data-offstyle="primary" data-off="<?php echo e(__('Sandbox')); ?>"  data-on="<?php echo e(__('Live')); ?>"
                                <?php echo e(($smtp->stripe_active_mode == 1) ? "checked": ""); ?>>
                            </div>
                            
                            <div class="mt"><label for="test" class="form-label"> <?php echo e(__('SandBox Credentials')); ?></label></div>
                            <div class="mb-3">
                                <label for="Key" class="form-label"><?php echo e(__('Stripe Key')); ?>:</label>
                                <input type="text" class="form-control" value="<?php echo e($smtp->stripe_key); ?>" name="stripe_key" placeholder="<?php echo e(__('Stripe Key')); ?>"> 
                            </div>
                            <div class="mb-3">
                                <label for="Secret" class="form-label"><?php echo e(__('Stripe Secret')); ?>:</label>
                                <input type="text" class="form-control" value="<?php echo e($smtp->stripe_secret); ?>" name="stripe_secret" placeholder="<?php echo e(__('Stripe Secret')); ?>"> 
                            </div>
                            <hr class="border-light m-0">
                            <label for="live" class="form-label"> <?php echo e(__('Live Credentials')); ?></label>
                            <div class="mb-3">
                                <label for="Key" class="form-label"><?php echo e(__('Stripe Key')); ?>:</label>
                                <input type="text" class="form-control" value="<?php echo e($smtp->stripe_live_key); ?>" name="stripe_live_key" placeholder="<?php echo e(__('Stripe Key')); ?>"> 
                            </div>
                            <div class="mb-3">
                                <label for="Secret" class="form-label"><?php echo e(__('Stripe Secret')); ?>:</label>
                                <input type="text" class="form-control" value="<?php echo e($smtp->stripe_secret_live); ?>" name="stripe_secret_live" placeholder="<?php echo e(__('Stripe Secret')); ?>"> 
                            </div>
                            <div class="text-right mt-5 mb-5">
                                <button type="button" class="btn btn-primary stripeSubmit"><?php echo e(__('Update')); ?></button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card row-bordered card-setting">
                    <form method="POST" action="<?php echo e(route('setting.update',Auth::user()->id)); ?>" id="paypalForm" autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <div class="card-body pb-2">

                            <img src="<?php echo e(asset('rbtheme/img/PayPal.png')); ?>" class="" height="35px" width="120px" alt="<?php echo e(__('Smtp logo')); ?>">
                            <hr class="border-light m-0">
                            <?php if($smtp->currency == "INR"): ?>
                            <div>
                                <span class="text-danger"><?php echo e(__('Currency INR not Supported in PayPal. Please refer the supported currency in PayPal')); ?> *</span>
                            </div>
                            <?php endif; ?>
                            <div class="mb-3 status-mode">
                                <label for="paypal" class="form-label va-bottom"><?php echo e(__('Status')); ?>:</label>  
                                <input type="checkbox" class="toggle-set" id="paypal" name="is_paypal" value="1" data-toggle="toggle" data-style="slow"
                                data-onstyle="success" data-offstyle="danger" data-off="<?php echo e(__('Inactive')); ?>"  data-on="<?php echo e(__('Active')); ?>"
                                <?php echo e(($smtp->currency == "INR") ? "disabled" : (($smtp->is_paypal == 1) ? "checked": "")); ?>>
                            </div>
                            <div class="mb-3 pull-lg-right ">
                                    <label for="stripe" class="form-label va-bottom"><?php echo e(__('Mode')); ?>:</label>  
                                    <input type="checkbox" class="toggle-set" id="paypal" name="paypal_active_mode" value="1" data-toggle="toggle" data-style="slow"
                                    data-onstyle="success" data-offstyle="primary" data-off="<?php echo e(__('Sandbox')); ?>"  data-on="<?php echo e(__('Live')); ?>"
                                    <?php echo e(($smtp->currency == "INR") ? "disabled" : (($smtp->paypal_active_mode == 1) ? "checked": "")); ?>>
                                </div>
                                
                                <div class="mt"><label for="test"><?php echo e(__('SandBox Credentials')); ?></label></div>
                                <div class="mb-3">
                                <label for="currency" class="form-label"><?php echo e(__('Paypal Key')); ?>:</label>
                                <input type="text" class="form-control" value="<?php echo e($smtp->paypal_client_id); ?>" name="paypal_client_id" placeholder="<?php echo e(__('Paypal Client ID')); ?>" <?php if($smtp->currency == "INR"): ?> disabled <?php endif; ?>> 
                            </div>
                            <div class="mb-3">
                                <label for="currency" class="form-label"><?php echo e(__('Paypal Secret')); ?>:</label>
                                <input type="text" class="form-control" value="<?php echo e($smtp->paypal_client_secret); ?>" name="paypal_client_secret" placeholder="<?php echo e(__('Paypal Client Secret')); ?>" <?php if($smtp->currency == "INR"): ?> disabled <?php endif; ?>> 
                            </div> 
                            <div class="mb-3">
                                <label for="currency" class="form-label"><?php echo e(__('Paypal Locale')); ?>:</label>
                                <input type="text" class="form-control" value="<?php echo e($smtp->paypal_locale); ?>" name="paypal_locale" placeholder="<?php echo e(__('Paypal Locale')); ?>" <?php if($smtp->currency == "INR"): ?> disabled <?php endif; ?>> 
                            </div>
                            
                            <hr class="border-light m-0">
                            <label for="live" class="form-label"> <?php echo e(__('Live Credentials')); ?></label>
                            <div class="mb-3">
                                <label for="currency" class="form-label"><?php echo e(__('Paypal Key')); ?>:</label>
                                <input type="text" class="form-control" value="<?php echo e($smtp->paypal_live_client_id); ?>" name="paypal_live_client_id" placeholder="<?php echo e(__('Paypal Client ID')); ?>" <?php if($smtp->currency == "INR"): ?> disabled <?php endif; ?>> 
                            </div>
                            <div class="mb-3">
                                <label for="currency" class="form-label"><?php echo e(__('Paypal Secret')); ?>:</label>
                                <input type="text" class="form-control" value="<?php echo e($smtp->paypal_client_secret_live); ?>" name="paypal_client_secret_live" placeholder="<?php echo e(__('Paypal Client Secret')); ?>" <?php if($smtp->currency == "INR"): ?> disabled <?php endif; ?>> 
                            </div> 
                            <div class="text-right">
                                <button type="button" class="btn btn-primary paypalSubmit" <?php if($smtp->currency == "INR"): ?> disabled <?php endif; ?>><?php echo e(__('Update')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card row-bordered card-setting">
                <form method="POST" action="<?php echo e(route('setting.update',Auth::user()->id)); ?>" id="razorpayForm" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <div class="card-body pb-2">

                        <img src="<?php echo e(asset('rbtheme/img/razorpay.webp')); ?>" class="" height="50px" width="150px" alt="<?php echo e(__('Smtp logo')); ?>">
                        <hr class="border-light m-0">
                        <div class="mb-3 status-mode">
                            <label for="razorpay" class="form-label va-bottom"><?php echo e(__('Status')); ?>:</label>  
                            <input type="checkbox" class="toggle-set" id="paypal" name="is_razorpay" value="1" data-toggle="toggle" data-style="slow"
                            data-onstyle="success" data-offstyle="danger" data-off="Inactive"  data-on="<?php echo e(__('Active')); ?>"
                            <?php echo e(($smtp->is_razorpay == 1) ? "checked": ""); ?>>
                        </div>
                        <div class="mb-3 pull-lg-right ">
                            <label for="razorpay" class="form-label va-bottom"><?php echo e(__('Mode')); ?>:</label>  
                            <input type="checkbox" class="toggle-set" id="razorpay" name="razorpay_active_mode" value="1" data-toggle="toggle" data-style="slow"
                            data-onstyle="success" data-offstyle="primary" data-off="<?php echo e(__('Sandbox')); ?>"  data-on="<?php echo e(__('Live')); ?>"
                            <?php echo e(($smtp->razorpay_active_mode == 1) ? "checked": ""); ?>>
                        </div>
                        
                        <div class="mt"><label for="test" > <?php echo e(__('SandBox Credentials')); ?></label></div>
                        <div class="mb-3">
                            <label for="key_id" class="form-label"> <?php echo e(__('Key Id')); ?></label>
                            <input type="text" class="form-control" name="razorpay_test_key" value="<?php echo e($smtp->razorpay_test_key); ?>" placeholder="<?php echo e(__('Razorpay Test Key')); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="key_secret" class="form-label"> <?php echo e(__('Key Secret')); ?></label>
                            <input type="text" class="form-control" name="razorpay_test_secret" value="<?php echo e($smtp->razorpay_test_secret); ?>" placeholder="<?php echo e(__('Razorpay Test Secret')); ?>">
                        </div>
                        
                        <hr class="border-light m-0">
                        <label for="live" class="form-label"> <?php echo e(__('Live Credentials')); ?></label>
                        <div class="mb-3">
                            <label for="key_id" class="form-label"> <?php echo e(__('Key Id')); ?></label>
                            <input type="text" class="form-control" name="razorpay_live_key" value="<?php echo e($smtp->razorpay_live_key); ?>" placeholder="<?php echo e(__('Razorpay Live Key')); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="key_secret" class="form-label"> <?php echo e(__('Key Secret')); ?></label>
                            <input type="text" class="form-control" name="razorpay_live_secret" value="<?php echo e($smtp->razorpay_live_secret); ?>" placeholder="<?php echo e(__('Razorpay Live Secret')); ?>">
                        </div>
                        <div class="text-right mt-5 mb-5">
                                <button type="button" class="btn btn-primary razorPaySubmit"><?php echo e(__('Update')); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/settings/payment.blade.php ENDPATH**/ ?>