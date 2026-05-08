
<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head', ['title' => trans('Notification Setting')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="mt-3">
        <div class="light-style flex-grow-1 container-p-y container-padding">
            <?php if(Session::has('message')): ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <?php echo e(Session::get('message')); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(Session::has('error-message')): ?>
                <div class="row list-of-all-errors">
                    <div class="col-md-12 error">
                        <div class="alert alert-danger errors">
                            <?php echo e(Session::get('error-message')); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <h3 class="font-weight-bold t-center">
            <?php echo e(__('Notification Setting')); ?>

            </h3>
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="card row-bordered card-setting">
                        <form action="<?php echo e(route('sms.notification.update' )); ?>" method="post" id="notification-frm" autocomplete="off">
                            <?php echo csrf_field(); ?>
                            <h4 class="font-weight-bold mb-4">
                                <?php echo e(__('SMS Notification')); ?>

                            </h4>
                            <img src="<?php echo e(asset('rbtheme/img/smtp-logo.png')); ?>" class="img-right" height="40px" width="40px" alt="<?php echo e(__('SMS Image')); ?>">
                            <hr class="border-light mt-0" size="4">
                         
                            <div class="mb-3 status-mode">
                                <label for="mail" class="form-label"><?php echo e(__('Status')); ?>:</label>
                                <input type="checkbox"  id="sms-notification" name="notification" value="1" data-toggle="toggle" data-style="slow"
                                data-onstyle="success" data-offstyle="danger" data-off="<?php echo e(__('Inactive')); ?>"  data-on="<?php echo e(__('Active')); ?>"
                                <?php echo e(($smtp->notification == 1) ? "checked": ""); ?>> 
                            </div>   
                           
                            <div class="mb-3 pull-lg-right">
                                <label for="twilio" class="form-label va-bottom"><?php echo e(__('Mode')); ?>:</label>  
                                <input type="checkbox" class="toggle-set" id="twilio" name="twilio_active_mode" value="1" data-toggle="toggle" data-style="slow"
                                data-onstyle="success" data-offstyle="primary" data-off="<?php echo e(__('Sandbox')); ?>"  data-on="<?php echo e(__('Live')); ?>"
                                <?php echo e(($smtp->twilio_active_mode == 1) ? "checked": ""); ?>>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mt-3">
                                        <label for=""><?php echo e(__('Sent Notification To')); ?> :</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="twilio_notify_customer" id="twilio-notify-customer" value="1" <?php echo e(($smtp->twilio_notify_customer == 1) ? "checked": ""); ?>>
                                                <label class="form-check-label" for="twilio-notify-customer"><?php echo e(__('Customer')); ?></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="twilio_notify_employee" id="twilio-notify-employee" value="1" <?php echo e(($smtp->twilio_notify_employee == 1) ? "checked": ""); ?>>
                                                <label class="form-check-label" for="twilio-notify-employee"><?php echo e(__('Employee')); ?></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="twilio_notify_admin" id="twilio-notify-admin" value="1" <?php echo e(($smtp->twilio_notify_admin == 1) ? "checked": ""); ?>>
                                                <label class="form-check-label" for="twilio-notify-admin"><?php echo e(__('Admin')); ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3" id="notification-error">
                                    </div>
                                
                                    <div class="mt-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="use_twilio_service_id" id="use-twilio-service-id" value="1" <?php echo e(($smtp->use_twilio_service_id == 1) ? "checked": ""); ?>>
                                            <label class="form-check-label" for="use-twilio-service-id"><?php echo e(__('Send Notification Using Messaging Service Id')); ?></label>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-3">
                                        <label for="twilio-service-id" class="form-label"><?php echo e(__('Messaging Service Id')); ?></label>
                                        <input type="text" class="form-control" name="twilio_service_id" id="twilio-service-id" value="<?php echo e($smtp->twilio_service_id); ?>" placeholder="<?php echo e(__('Messages Service Id')); ?>">
                                        <?php $__errorArgs = ['twilio_service_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    
                                    

                                    <div class="mt-3">
                                        <label for="twilio-live-phone-number" class="form-label"><?php echo e(__('Send Message From')); ?></label>
                                        <small>(<?php echo e(__('Twilio Registered Phone Number')); ?>)</small>
                                        <input type="tel" class="form-control twilioLivePhone" name="twilio_phone" id="twilio-phone-number" value="<?php echo e($smtp->twilio_phone); ?>" placeholder="<?php echo e(__('Twilio Phone Number')); ?>">
                                        <?php $__errorArgs = ['twilio_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            
                                <div class="col-lg-6">
                                    <label class="font-weight-bold" for="sandbox_credentials"><?php echo e(__('SandBox Credentials')); ?></label>
                                    <hr class="border-light mt-0" size="4">
                                    <div class="mb-3">
                                        <label for="twilio-key" class="form-label"><?php echo e(__('Twilio Key')); ?></label>
                                        <input type="text" class="form-control" name="twilio_sandbox_key" id="twilio-key" value="<?php echo e($smtp->twilio_sandbox_key); ?>" placeholder="<?php echo e(__('Twilio Account SID')); ?>">
                                        <?php $__errorArgs = ['twilio_sandbox_key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="twilio-secret" class="form-label"><?php echo e(__('Twilio Secret')); ?></label>
                                        <input type="text" class="form-control" name="twilio_sandbox_secret" id="twilio-secret" value="<?php echo e($smtp->twilio_sandbox_secret); ?>" placeholder="<?php echo e(__('Twilio Auth Token')); ?>">
                                        <?php $__errorArgs = ['twilio_sandbox_secret'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                
                                    <label class="mt-3 font-weight-bold" for="live_credentials"><?php echo e(__('Live Credentials')); ?></label>
                                    <hr class="border-light mt-0" size="4">
                                    <div class="mb-3">
                                        <label for="twilio-live-key" class="form-label"><?php echo e(__('Twilio Key')); ?></label>
                                        <input type="text" class="form-control" name="twilio_live_key" id="twilio-live-key" value="<?php echo e($smtp->twilio_live_key); ?>" placeholder="<?php echo e(__('Twilio Account SID')); ?>">
                                        <?php $__errorArgs = ['twilio_live_key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="twilio-live-secret" class="form-label"><?php echo e(__('Twilio Secret')); ?></label>
                                        <input type="text" class="form-control" name="twilio_live_secret" id="twilio-live-secret" value="<?php echo e($smtp->twilio_live_secret); ?>" placeholder="<?php echo e(__('Twilio Auth Token')); ?>">
                                        <?php $__errorArgs = ['twilio_live_secret'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            
                          
                                <div class="row save">
                                    
                                    <div class="col ">
                                        
                                            <button type="button" class="btn btn-secondary float-right-c testSms" data-bs-toggle="modal" data-bs-target="#testSmsModel">
                                                    <?php echo e(__('Test SMS Notification')); ?>

                                            </button>
                                        
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary  btn-valid"><?php echo e(__('Update')); ?></button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="testSmsModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="testSmsModel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form id="checkSms" action="javascript:;" class="w-100" method="POST" autocomplete="off">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Checking SMS Configuration')); ?></h5>
                    <button type="button" data-bs-dismiss="modal" class="btn-close" aria-label="Close"></button>
                </div>

                <input type="hidden" name="country_name" id="iso2" class="country-name" value="<?php echo e(old('country_name')); ?>">

                <input type="hidden" name="country_code" id="dialcode" class="country_code" value="<?php echo e(old('country_code')); ?>" data-country="<?php echo e(old('country_name')); ?>" data-number="<?php echo e(old('phone')); ?>">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="phone" class="col-form-label"><?php echo e(__('Phone:')); ?> <span class="error">*</span></label>
                        <input type="tel" class="form-control country-phone-validation" name="phone" placeholder="<?php echo e(__('Enter Phone Number')); ?>" value="" data-name="<?php echo e($country->country_name); ?>" required>
                        <label id="valid-msg" style="color: green;" class="d-none phone-valid-msg">✓ <?php echo e(__('Phone Number Valid')); ?></label>
                        <label id="error-msg" style="color: #bd5252;" class="d-none phone-error-msg"></label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    <button type="submit" class="btn btn-primary verifySms"><?php echo e(__('Submit')); ?></button>
                </div>
            </div>
        </form>
    </div>
</div>          
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('backend/js/phone.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/settings/notification.blade.php ENDPATH**/ ?>