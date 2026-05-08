
<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head',['title'=> trans('Create New Employee')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend/css/tempus-dominus.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="mb-3 padding-space">
        <div class="container-fluid">
            <div class="row">
                <div class="employee-page offset-lg-2 offset-md-2 offset-md-2 col-md-8">
                    <?php if(Session::has('message')): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success">
                                <?php echo e(Session::get('message')); ?>

                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="panel panel-default panel-custom">
                        <div class="panel-heading panel-custom-heading">
                            <h3 class="panel-title"><?php echo e(__('Create New Employee')); ?></h3>
                        </div>
                        
                        <div class="panel-body">
                            <form action="<?php echo e(route('employees.store')); ?>" method="post" id="employee-frm" autocomplete="off">
                                <?php echo e(csrf_field()); ?>

                                <div class="container-fluid">
                                    <div class="current-page">
                                        <div class="row">  
                                            <div class="col-md-12 col-lg-6">  
                                                    <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
        
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="first_name" class="form-label"><?php echo e(__('First Name')); ?>: </label>
                                                                <input type="text" class="form-control custom-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="first_name" value="<?php echo e(old('first_name')); ?>" placeholder="<?php echo e(__('Enter Your First Name')); ?>" name="first_name">
                                                                <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <span class="error-message"><?php echo e($message); ?></span>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="last_name" class="form-label"><?php echo e(__('Last Name')); ?>: </label>
                                                                <input type="text" class="form-control custom-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="last_name" value="<?php echo e(old('last_name')); ?>" placeholder="<?php echo e(__('Enter Your Last Name')); ?>" name="last_name">
                                                                <?php $__errorArgs = ['last_name'];
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
        
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label"><?php echo e(__('Email')); ?>: </label>
                                                                <input type="email" class="form-control custom-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('Enter Your Email')); ?>" name="email">
                                                                <?php $__errorArgs = ['email'];
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
        
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="password" class="form-label"><?php echo e(__('Password')); ?>: </label>
                                                                <input type="password" class="form-control custom-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" value="<?php echo e(old('password')); ?>" placeholder="<?php echo e(__('Enter Your Password')); ?>" name="password">
                                                                <?php $__errorArgs = ['password'];
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

                                                    <input type="hidden" name="country_name" id="iso2" class="country-name" value="<?php echo e(old('country_name')); ?>">

                                                    <input type="hidden" name="country_code" id="dialcode" class="country_code" value="" data-country="<?php echo e(old('country_name')); ?>" data-number="<?php echo e(old('phone')); ?>">
                
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="phone" class="form-label"><?php echo e(__('Phone')); ?>: </label><br>
                                                                <input type="tel" class="form-control custom-control country-phone-validation intlTelInput <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="phone" pattern="[0-9]" value="<?php echo e(old('phone')); ?>" placeholder="<?php echo e(__('Enter Your Phone Number')); ?>" name="phone"
                                                                data-name="<?php echo e($country->country_name); ?>">
                                                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <span class=" error-message"><?php echo e($message); ?></span>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                <span id="valid-msg" style="color: green;" class="d-none">✓ <?php echo e(__('Phone Number Valid')); ?></span>
                                                                <span id="error-msg" style="color: #bd5252;" class="d-none"></span>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="start_time" class="form-label"><?php echo e(__('Start Time')); ?>: </label>
                                                                <div class="input-group" id="datetimepickerRest2">
                                                                    <input type="text" class="form-control custom-control <?php $__errorArgs = ['start_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> timeDuration" id="start_time" value="<?php echo e(old('start_time')); ?>" name="start_time" placeholder="HH:mm A">
                                                                    <span class="input-group-text">
                                                                        <span class="glyphicon glyphicon-time"></span>
                                                                    </span>
                                                                </div>
                                                                <?php $__errorArgs = ['start_time'];
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
        
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="finish_time" class="form-label"><?php echo e(__('Finish Time')); ?>: </label>
                                                                <div class="input-group" id="datetimepickerRest3">
                                                                    <input type="text" class="form-control custom-control <?php $__errorArgs = ['finish_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> timeDuration" id="finish_time" value="<?php echo e(old('finish_time')); ?>" name="finish_time" placeholder="HH:mm A">
                                                                    <span class="input-group-text">
                                                                        <span class="glyphicon glyphicon-time"></span>
                                                                    </span>
                                                                </div>
                                                                <?php $__errorArgs = ['finish_time'];
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
                                            <div class="col-md-12 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="rest_time" class="form-label"><?php echo e(__('Padding Time')); ?>: </label>
                                                                <div class='input-group' id="datetimepickerRest">
                                                                    <input type='text' class="form-control time <?php $__errorArgs = ['rest_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> timeDuration" name="rest_time" value="<?php echo e(old('rest_time')); ?>" data-padding="<?php echo e($custom->custom_time_slot); ?>"  id="rest_time" placeholder="HH:mm" autocomplete="off">
                                                                    <span class="input-group-text">
                                                                        <span class="glyphicon glyphicon-time"></span>
                                                                    </span>
                                                                </div>
                                                                <?php $__errorArgs = ['rest_time'];
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
        
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="break_start_time" class="form-label"><?php echo e(__('Break Start Time')); ?>: </label>
                                                                <div class="input-group" id="datetimepickerRest4">
                                                                    <input type="text" class="form-control custom-control <?php $__errorArgs = ['break_start_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> timeDuration" id="break_start_time" value="<?php echo e(old('break_start_time')); ?>" name="break_start_time" placeholder="HH:mm A">
                                                                    <span class="input-group-text">
                                                                        <span class="glyphicon glyphicon-time"></span>
                                                                    </span>
                                                                </div>
                                                                <?php $__errorArgs = ['break_start_time'];
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
        
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="break_end_time" class="form-label"><?php echo e(__('Break End Time')); ?>: </label>
                                                                <div class="input-group" id="datetimepickerRest5">
                                                                    <input type="text" class="form-control custom-control <?php $__errorArgs = ['break_end_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> timeDuration" id="break_end_time" value="<?php echo e(old('break_end_time')); ?>" name="break_end_time" placeholder="HH:mm A">    
                                                                    <span class="input-group-text">
                                                                        <span class="glyphicon glyphicon-time"></span>
                                                                    </span>
                                                                </div>
                                                                <?php $__errorArgs = ['break_end_time'];
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
                                                
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3 emp-working-days">
                                                                <label for="days" class="form-label"><?php echo e(__('Working Days')); ?>: </label>
                                                                <?php $days = array(__('Sunday'),__('Monday'),__('Tuesday'),__('Wednesday'),__('Thursday'),__('Friday'),__('Saturday'))?>
                                                                <?php $workingDays = !empty($workingHour->days) ? json_decode($workingHour->days) : NULL ?>
                                                                <li class="list-group-item cursor-pointer" required>
                                                                    <?php echo e(__('All Days')); ?>

                                                                    <div class="material-switch pull-right">
                                                                        <input type="checkbox" data-check="days" id="checkedAll">                                         
                                                                        <label for="allDay" class="label-success"></label>
                                                                    </div>
                                                                </li>
                                                                <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li class="list-group-item cursor-pointer" required>
                                                                    <?php echo e($day); ?> 
                                                                    <div class="material-switch pull-right">
                                                                        <input name="days[]" type="checkbox" class="checkSingle" data-check="days" value="<?php echo e($key); ?>" <?php if(is_array(old('days')) && in_array($key,old('days'))): ?> checked <?php endif; ?>>                                         
                                                                        <label for="<?php echo e($key); ?>" class="label-success"></label>
                                                                    </div>
                                                                </li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                                                <?php $__errorArgs = ['days'];
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
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a href="<?php echo e(route('employees.index')); ?>" class="back-button-previous pull-left"><h4><i class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo e(__('Back')); ?></h4></a>
                                            </div>
                                            <div class="col-lg-6">
                                            <a class="next-button pull-right" id="next-button" style="cursor: pointer;"><h4><?php echo e(__('Next')); ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></h4></a>
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
                                                            <label class="form-label"><?php echo e(__('Categories')); ?>:</label>
                                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li class="list-group-item" required>
                                                                <?php echo e($category->name); ?>

                                                                <div class="material-switch pull-right">
                                                                    <input  value="<?php echo e($category->id); ?>" name="category_id[]" type="checkbox" data-check="categories" <?php if(is_array(old('category_id')) && in_array($category->id,old('category_id'))): ?> checked <?php endif; ?>>
                                                                    <label for="<?php echo e($category->id); ?>" class="label-success"></label>
                                                                </div>
                                                            </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php $__errorArgs = ['category_id'];
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
                                            <?php else: ?> 
                                            <input value="0" name="category_id[]" type="hidden">
                                            <?php endif; ?>
                                            
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-check mb-3" name="service_id" id="service_id">
                                                            <label class="form-label"><?php echo e(__('Services')); ?>:</label>
                                                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li class="list-group-item" required>
                                                                <span class="text-wrap">
                                                                    <?php echo e($service->name); ?>

                                                                </span>
                                                                <div class="material-switch pull-right">
                                                                    <input value="<?php echo e($service->id); ?>" class="form-check-input" name="service_id[<?php echo e($service->category_id); ?>][]" data-check="service" type="checkbox"  <?php if(is_array(old('service_id')) && isset(old('service_id')[$service->category_id]) && in_array($service->id ,old('service_id')[$service->category_id])): ?> checked <?php endif; ?>>
                                                                    <label for="<?php echo e($service->id); ?>" class="form-check-label label-success"></label>
                                                                </div>
                                                            </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                        <?php $__errorArgs = ['service_id'];
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
                                        
                                        
                                        <hr>
                                        <div class="row">
                                            <div class="offset-sm-4 col-sm-4 col-xs-offset-2 col-xs-8">
                                                <button type="submit" class="btn btn-default custom-btn btn-block btn-valid"><?php echo e(__('Submit')); ?></button>
                                            </div>
                                        </div>
                                        <a class="back-button-next pull-left" style="cursor: pointer;"><h4><i class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo e(__('Back')); ?></h4></a>
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
<script src="<?php echo e(asset('backend/js/tempus-dominus.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/datetimepicker-config.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/employee.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/phone.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/employees/create.blade.php ENDPATH**/ ?>