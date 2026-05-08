
<?php $__env->startSection('head'); ?>
<?php echo $__env->make('includes.head',['title'=> trans('General Setting')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('rbtheme/css/loader.css')); ?>" rel="stylesheet" id="style-default">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="mt-3">
    <div class=" light-style flex-grow-1 container-p-y container-padding">
        <?php echo $__env->make('includes.message-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h3 class="font-weight-bold t-center">
            <?php echo e(__('General Settings')); ?>

        </h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card row-bordered card-setting">
                    <form method="POST" action="<?php echo e(route('setting.update',Auth::user()->id)); ?>" id="smtp-frm"
                        autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <h4 class="font-weight-bold mb-4">
                            <?php echo e(__('SMTP Configuration')); ?>

                        </h4>
                        <img src="<?php echo e(asset('rbtheme/img/smtp-logo.png')); ?>" class="img-right" height="40px" width="40px"
                            alt="<?php echo e(__('Smtp logo')); ?>">
                        <hr class="border-light m-0">
                        <div class="mb-3 status-mode">
                            <label for="mail" class="form-label"><?php echo e(__('SMTP Mail')); ?>:</label>
                            <input type="checkbox" id="smtp_mail" name="smtp_mail" value="1" data-toggle="toggle"
                                data-style="slow" data-onstyle="success" data-offstyle="danger"
                                data-off="<?php echo e(__('InActive')); ?>" data-on="<?php echo e(__('Active')); ?>"
                                <?php echo e(($smtp->smtp_mail == 1) ? "checked": ""); ?>>
                        </div>
                        <div class="mb-3">
                        
                            <label for="mail" class="form-label"><?php echo e(__('Mode')); ?>:</label>
                            <button type="button" class="btn btn-primary testMail" data-bs-toggle="modal" data-bs-target="#testMailModel">
                               <?php echo e(__('Test Mail')); ?>

                            </button>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><?php echo e(__('SMTP Email')); ?>:</label>
                            <input type="email" class="form-control" name="smtp_email" value="<?php echo e($smtp->smtp_email); ?>"
                                id="email" placeholder="<?php echo e(__('SMTP Email')); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label"><?php echo e(__('SMTP Password')); ?>:</label>
                            <input type="password" class="form-control" name="smtp_password"
                                value="<?php echo e($smtp_password); ?>" id="password"
                                placeholder="<?php echo e(__('Smtp Password')); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="host" class="form-label"><?php echo e(__('SMTP Host')); ?>:</label>
                            <input type="text" class="form-control" name="smtp_host" value="<?php echo e($smtp->smtp_host); ?>"
                                placeholder="<?php echo e(__('SMTP Host')); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="port" class="form-label"><?php echo e(__('SMTP Port')); ?>:</label>
                            <input type="text" class="form-control" name="smtp_port" value="<?php echo e($smtp->smtp_port); ?>"
                                placeholder="<?php echo e(__('SMTP Port')); ?>">
                        </div>

                        <div class="save">
                            <button type="submit" class="btn btn-primary float-right-c"><?php echo e(__('Update')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card row-bordered card-setting">
                    <form method="POST" action="<?php echo e(route('setting.update',Auth::user()->id)); ?>" id="custom-frm"
                        autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <h4 class="font-weight-bold mb-4">
                            <?php echo e(__('Custom Labels Configuration')); ?>

                        </h4>
                        <img src="<?php echo e(asset('rbtheme/img/custom-logo.jpg')); ?>" class="img-right" height="35px"
                            width="40px" alt="<?php echo e(__('Smtp logo')); ?>">
                        <hr class="border-light m-0">
                        <div class="mb-3">
                            <label for="stripe" class="form-label"><?php echo e(__('Custom Label Employee')); ?></label>
                            <input type="text" class="form-control" name="custom_field_text"
                                value="<?php echo e($smtp->custom_field_text); ?>" placeholder="<?php echo e(__('Custom Field Text')); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="stripe" class="form-label"><?php echo e(__('Custom Label Category')); ?></label>
                            <input type="text" class="form-control" name="custom_field_category"
                                value="<?php echo e($smtp->custom_field_category); ?>"
                                placeholder="<?php echo e(__('Custom Field category')); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="stripe" class="form-label"><?php echo e(__('Custom Label Service')); ?></label>
                            <input type="text" class="form-control" name="custom_field_service"
                                value="<?php echo e($smtp->custom_field_service); ?>"
                                placeholder="<?php echo e(__('Custom Field service')); ?>">
                        </div>
                        <div class="text-right mt-5 mb-5">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card row-bordered card-setting">
                    <form method="POST" action="<?php echo e(route('setting.update',Auth::user()->id)); ?>" id="custom-frm"
                        autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <h4 class="font-weight-bold mb-4">
                            <?php echo e(__('Google Calendar Configuration')); ?>

                        </h4>

                        <img src="<?php echo e(asset('img/employee/calendar.png')); ?>" class="img-right" height="35px"
                            width="40px" alt="<?php echo e(__('Google Calendar')); ?>">
                        <hr class="border-light m-0">
                        <div class="mb-3">
                            <label for="cliend_id" class="form-label"><?php echo e(__('Client ID')); ?></label>
                            <input type="text" class="form-control" name="google_client_id"
                                value="<?php echo e($smtp->google_client_id); ?>" placeholder="<?php echo e(__('Google Calendar Client ID')); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="client_secret" class="form-label"><?php echo e(__('Client Secret')); ?></label>
                            <input type="text" class="form-control" name="google_client_secret"
                                value="<?php echo e($smtp->google_client_secret); ?>"
                                placeholder="<?php echo e(__('Google Calendar Client Secret')); ?>">
                        </div>
                        <div class="text-right mt-5 mb-5">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
            
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card row-bordered card-setting">
                    <form method="POST" action="<?php echo e(route('setting.update',Auth::user()->id)); ?>" id="currency-frm"
                        autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <h4 class="font-weight-bold mb-4">
                            <?php echo e(__('Currency Configuration')); ?>

                        </h4>
                        <img src="<?php echo e(asset('rbtheme/img/currency-logo.jpg')); ?>" class="img-right" height="40px"
                            width="50px" alt="<?php echo e(__('Smtp logo')); ?>">
                        <hr class="border-light m-0">
                        <div class="mb-3">
                            <label for="currency" class="form-label"> <?php echo e(__('Currency')); ?>:</label>
                            <input type="text" class="form-control" value="<?php echo e($smtp->currency); ?>" name="currency"
                                placeholder="<?php echo e(__('Currency')); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="currency-icon" class="form-label"> <?php echo e(__('Currency Symbol')); ?>:</label>
                            <input type="text" class="form-control" value="<?php echo e($smtp->currency_icon); ?>"
                                name="currency_icon" placeholder="<?php echo e(__('Currency Symbol')); ?>">
                        </div>
                        <div class="text-right mt-5 mb-5">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card row-bordered card-setting">
                    <form method="POST" action="<?php echo e(route('setting.update',Auth::user()->id)); ?>" id="timezone-frm"
                        autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <h4 class="font-weight-bold mb-4">
                            <?php echo e(__('Time Zone Configuration')); ?>

                        </h4>
                        <img src="<?php echo e(asset('rbtheme/img/timezone.jpg')); ?>" class="img-right" height="40px" width="50px"
                            alt="<?php echo e(__('Smtp logo')); ?>">
                        <hr class="border-light m-0">
                        <div class="mb-3">
                            <label for="timezone" class="form-label"> <?php echo e(__('Time Zone')); ?>:</label>
                            <input type="text" class="form-control" value="<?php echo e($smtp->timezone); ?>" name="timezone"
                                placeholder="<?php echo e(__('Time Zone')); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label"> <?php echo e(__('Date Format')); ?>:</label>
                            <select class="form-select date-format" aria-label="Default select example" name="date_format" data-value="<?php echo e($smtp->date_format); ?>">
                                <option value=""><?php echo e(__('Select Date Format')); ?></option>
                                <option value="Y-m-d"><?php echo e(date('Y-m-d', strtotime('today'))); ?></option>
                                <option value="y-m-d"><?php echo e(date('y-m-d', strtotime('today'))); ?></option>
                                <option value="m/d/y"><?php echo e(date('m/d/y', strtotime('today'))); ?></option>
                                <option value="m/d/Y"><?php echo e(date('m/d/Y', strtotime('today'))); ?></option>
                                <option value="d/m/y"><?php echo e(date('d/m/y', strtotime('today'))); ?></option>
                                <option value="d/m/Y"><?php echo e(date('d/m/Y', strtotime('today'))); ?></option>
                                <option value="y/m/d"><?php echo e(date('y/m/d', strtotime('today'))); ?></option>
                                <option value="Y/m/d"><?php echo e(date('Y/m/d', strtotime('today'))); ?></option>
                                <option value="m-d-y"><?php echo e(date('m-d-y', strtotime('today'))); ?></option>
                                <option value="m-d-Y"><?php echo e(date('m-d-Y', strtotime('today'))); ?></option>
                                <option value="d-m-y"><?php echo e(date('d-m-y', strtotime('today'))); ?></option>
                                <option value="d-m-Y"><?php echo e(date('d-m-Y', strtotime('today'))); ?></option>
                                <option value="d.m.y"><?php echo e(date('d.m.y', strtotime('today'))); ?></option>
                                <option value="d.m.Y"><?php echo e(date('d.m.Y', strtotime('today'))); ?></option>
                                <option value="l, F j, Y"><?php echo e(date('l, F j, Y', strtotime('today'))); ?></option>
                                <option value="M, d, Y"><?php echo e(date('M, d, Y', strtotime('today'))); ?></option>
                            </select>
                        </div>
                        <div class="text-right mt-5 mb-5">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card row-bordered card-setting">
                    <form method="POST" action="<?php echo e(route('setting.update',Auth::user()->id)); ?>" id="timeslot-frm"
                        autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <h4 class="font-weight-bold mb-4">
                            <?php echo e(__('Time Slot Configuration')); ?>

                        </h4>
                        <img src="<?php echo e(asset('rbtheme/img/time.jpg')); ?>" class="img-right" height="45px" width="150px"
                            alt="Smtp logo">
                        <hr class="border-light m-0">
                        <div class="mb-3">
                            <input class="form-check-input" type="radio" name="custom_time_slot" id="custom_time_slot_before" value="1"
                                <?php echo e(($smtp->custom_time_slot == "1")? "checked" : ""); ?> />
                            <label class="form-check-label" for="custom_time_slot_before">
                                <?php echo e(__('Add before selection')); ?>

                            </label>
                        </div>
                        <div class="mb-3">
                            <input class="form-check-input" type="radio" name="custom_time_slot" id="custom_time_slot_after" value="2"
                                <?php echo e(($smtp->custom_time_slot == "2")? "checked" : ""); ?> />
                            <label class="form-check-label" for="custom_time_slot_after">
                                <?php echo e(__('Add after selected slot')); ?>

                            </label>
                        </div>
                        <div class="mb-3">
                            <input class="form-check-input" type="radio" name="custom_time_slot" id="custom_time_slot_no" value="0"
                                <?php echo e(($smtp->custom_time_slot == "0")? "checked" : ""); ?> />
                            <label class="form-check-label" for="custom_time_slot_no">
                                <?php echo e(__('No Padding time')); ?>

                            </label>
                        </div>
                        <div class="text-right mt-5 mb-5">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card row-bordered card-setting">
                    <form method="POST" action="<?php echo e(route('setting.update',Auth::user()->id)); ?>" id="category-menu"
                        autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <h4 class="font-weight-bold mb-4">
                            <?php echo e(__('Admin Configuration')); ?>

                        </h4>
                        <img src="<?php echo e(asset('rbtheme/img/category.jpg')); ?>" class="img-right" height="40px" width="50px"
                            alt="<?php echo e(__('Categories')); ?>">
                        <input type="hidden" name="admin_config" value="true">
                        <hr class="border-light m-0">
                        <div class="mb-3">
                            <label for="mail" class="form-label"><?php echo e(__('Include Categories ?')); ?></label>
                            <input type="checkbox" id="category_menu" name="categories" value="1" data-toggle="toggle"
                                data-style="slow" data-onstyle="success" data-offstyle="danger"
                                data-off="<?php echo e(__('No')); ?>" data-on="<?php echo e(__('Yes')); ?>"
                                <?php echo e(($smtp->categories == 1) ? "checked": ""); ?>>
                        </div>
                        <div class="mb-3">
                            <label for="mail" class="form-label"><?php echo e(__('Include Employees ?')); ?></label>
                            <input type="checkbox" id="employee_menu" name="employees" value="1" data-toggle="toggle"
                                data-style="slow" data-onstyle="success" data-offstyle="danger"
                                data-off="<?php echo e(__('No')); ?>" data-on="<?php echo e(__('Yes')); ?>"
                                <?php echo e(($smtp->employees == 1) ? "checked": ""); ?>>
                        </div>
                        <div class="mb-3">
                            <label for="mail" class="form-label"><?php echo e(__('Allow Payment Later ?')); ?></label>
                            <input type="checkbox" id="payment_later" name="is_payment_later" value="1"
                                data-toggle="toggle" data-style="slow" data-onstyle="success" data-offstyle="danger"
                                data-off="<?php echo e(__('No')); ?>" data-on="<?php echo e(__('Yes')); ?>"
                                <?php echo e((isset($smtp->is_payment_later) && $smtp->is_payment_later == 1) ? "checked": ""); ?>>
                        </div>
                        <div class="text-right mt-5 mb-5">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="modal fade" id="testMailModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="testMailModel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form id="checkEmail" action="javascript:;" class="w-100" method="POST" autocomplete="off">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Checking Mail Configuration')); ?></h5>
                    <button type="button" data-bs-dismiss="modal" class="btn-close" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="to" class="col-form-label"><?php echo e(__('To:')); ?> <span class="error">*</span></label>
                        <input type="email" class="form-control" name="to" placeholder="<?php echo e(__('Enter Mail Address')); ?>" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    <button type="submit" class="btn btn-primary verifySmtp"><?php echo e(__('Submit')); ?></button>
                </div>
            </div>
        </form>
    </div>
</div>                
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\readybook-appointment-booking-code-1.4\resources\views/settings/general.blade.php ENDPATH**/ ?>