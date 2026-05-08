
<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head',['title'=> trans('View Employee')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="mb-3 padding-space">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-lg-2 offset-md-2 col-md-8">
                    <?php echo $__env->make('includes.message-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="panel panel-default panel-custom">
                        <div class="panel-heading panel-custom-heading">
                            <div class="btn-position">
                                <h3 class="panel-title"><?php echo e(__('View Employee')); ?>: <?php echo e(ucfirst($employee->first_name).' '. ucfirst($employee->last_name)); ?></h3>
                                <?php echo e(Form::open(['method' => 'DELETE','id' => 'deleteItem','route' => ['employees.destroy', $employee->id]])); ?>

                                <button type="button" class="btn btn-default btn-delete btn-lg btn-padding btn-color">
                                <span class="glyphicon glyphicon-trash btn-delete-color"></span>
                                <?php echo e(Form::close()); ?>

                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo e(route('employees.store')); ?>" method="post" autocomplete="off">
                                <?php echo e(csrf_field()); ?>

                            <div class="container-fluid">
                                <div class="current-page">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="first_name" class="form-label"><?php echo e(__('First Name')); ?></label>
                                                        <input type="text" class="form-control custom-control" id="first_name" value="<?php echo e($employee->first_name); ?>" name="first_name" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="last_name" class="form-label"><?php echo e(__('Last Name')); ?></label>
                                                        <input type="text" class="form-control custom-control" id="last_name" value="<?php echo e($employee->last_name); ?>" name="last_name" readonly>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label"><?php echo e(__('Email')); ?></label>
                                                        <input type="email" class="form-control custom-control" id="email" value="<?php echo e($employee->email); ?>" name="email" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="country_name" id="iso2" class="country-name" value="<?php echo e($employee->country_name); ?>">
                                            <input type="hidden" name="country_code" class="country_code" id="dialcode" value="<?php echo e($employee->country_code); ?>" data-country="<?php echo e($employee->country_name); ?>"  data-number="<?php echo e($employee->phone); ?>">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="phone" class="form-label"><?php echo e(__('Phone')); ?></label>
                                                        <input type="tel" class="form-control custom-control country-phone-validation intlTelInput" id="phone" value="" data-name="<?php echo e($employee->country_name); ?>" name="phone" readonly>
                                                        <span id="valid-msg" style="color: green; display:none;" class="d-none phone-valid-msg">✓ <?php echo e(__('Phone Number Valid')); ?></span>
                                                        <span id="error-msg" style="color: #bd5252; display:none;" class="d-none phone-error-msg"></span>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="start_time" class="form-label"><?php echo e(__('Start time')); ?></label>
                                                        <div class='input-group'>
                                                            <input type="text" class="form-control custom-control" id="start_time" value="<?php echo e(!empty($workingHour) ? $workingHour->start_time : ''); ?>" name="start_time" placeholder="HH:mm A" readonly>
                                                            <span class="input-group-text">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="finish_time" class="form-label"><?php echo e(__('Finish time')); ?></label>
                                                        <div class='input-group'>
                                                            <input type="text" class="form-control custom-control" id="finish_time" value="<?php echo e(!empty($workingHour) ? $workingHour->finish_time: ''); ?>" name="finish_time" placeholder="HH:mm A" readonly>
                                                            <span class="input-group-text">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="rest_time" class="form-label"><?php echo e(__('Padding time')); ?></label>
                                                        <div class='input-group'>
                                                            <input type='text' class="form-control custom-control" name="rest_time" value="<?php echo e(!empty($workingHour) ? $workingHour->rest_time : ''); ?>" placeholder="HH:mm" readonly/>
                                                            <span class="input-group-text">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="break_start_time" class="form-label"><?php echo e(__('Break Start Time')); ?></label>
                                                        <div class='input-group'>
                                                            <input type="text" class="form-control custom-control" id="break_start_time" value="<?php echo e(!empty($workingHour) ? $workingHour->break_start_time : ''); ?>" name="break_start_time" placeholder="HH:mm A" readonly>
                                                            <span class="input-group-text">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="break_end_time" class="form-label"><?php echo e(__('Break End Time')); ?></label>
                                                        <div class='input-group'>
                                                            <input type="text" class="form-control custom-control" id="break_end_time" value="<?php echo e(!empty($workingHour) ? $workingHour->break_end_time : ''); ?>" name="break_end_time" placeholder="HH:mm A" readonly>
                                                            <span class="input-group-text">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="break_end_time" class="form-label"><?php echo e(__('Working Days')); ?></label>
                                                        <?php $days = array(__('Sunday'),__('Monday'),__('Tuesday'),__('Wednesday'),__('Thursday'),__('Friday'),__('Saturday'))?>
                                                        <?php $workingDays = (!empty($workingHour) && !empty($workingHour->days)) ? json_decode($workingHour->days) : NULL ?>
                                                        <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li class="list-group-item" required>
                                                                <?php echo e($day); ?>

                                                                <div class="material-switch pull-right">
                                                                    <input value="<?php echo e($key); ?>" name="days[]" type="checkbox" 
                                                                    <?php if(!empty($workingDays)): ?> <?php if(in_array($key, $workingDays)): ?> <?php echo e("checked"); ?> <?php endif; ?> <?php endif; ?> disabled>
                                                                    <label for="<?php echo e($key); ?>" class="label-success"></label>
                                                                </div>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                                        <?php $__errorArgs = ['working_day'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class=" error-message"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="<?php echo e(route('employees.index')); ?>" class="back-button-previous pull-left"><h4><i class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo e(__('Back')); ?></h4></a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="next-show-button pull-right" id="next-button" style="cursor: pointer;"><h4><?php echo e(__('Next')); ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></h4></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="next-page" style="display:none;">
                                    <div class="row">
                                            <?php if($custom->categories == 1): ?>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"><?php echo e(__('Categories')); ?></label>
                                                            
                                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li class="list-group-item">
                                                                <?php echo e($category->name); ?>

                                                                <div class="material-switch pull-right">
                                                                    <input value="<?php echo e($category->id); ?>" name="category_id[]" type="checkbox" 
                                                                    <?php $__currentLoopData = $employeeServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryservice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php echo e(($categoryservice->category_id == $category->id) ? "checked": ""); ?>   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> disabled>
                                                                    <label for="<?php echo e($category->id); ?>" class="label-success"></label>
                                                                </div>
                                                            </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3" id="service_id">
                                                            <label class="form-label"><?php echo e(__('Services')); ?></label>
                                                            <?php $__currentLoopData = $employeeServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryservice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li class="list-group-item">
                                                            <?php echo e($categoryservice->service->name); ?>

                                                            <div class="material-switch pull-right">
                                                                <input value="<?php echo e($categoryservice->service->id); ?>" name="service_id[]" type="checkbox" checked disabled>
                                                                <label for="service" class="label-success"></label>
                                                            </div>
                                                            </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="back-show-button btn-valid pull-left" style="cursor: pointer;"><h4><i class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo e(__('Back')); ?></h4></a>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('backend/js/phone.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\readybook-appointment-booking-code-1.4\resources\views/employees/show.blade.php ENDPATH**/ ?>