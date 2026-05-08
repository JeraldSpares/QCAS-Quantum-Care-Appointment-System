
<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head',['title'=> trans('Edit Service')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend/css/tempus-dominus.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="mb-3 padding-space">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-lg-3 offset-md-3 col-md-6">
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
                            <h3 class="panel-title"><?php echo e(ucfirst($custom->custom_field_service)); ?>: <?php echo e($service->name); ?></h3>
                        </div>
                        <div class="panel-body">
                            <?php echo e(Form::model($service, ['method' => 'PATCH','enctype'=>'multipart/form-data','route' => ['services.update', $service->id],'id'=>'serviceDetail'])); ?>

                            <?php echo e(csrf_field()); ?>

                            <div class="container-fluid">
                            <?php if($custom->categories == 1): ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="category"><?php echo e(ucfirst($custom->custom_field_category)); ?>: </label>
                                            <select name="category_id" id="category_id" class="form-control custom-control">
                                                <option value=""><?php echo e(__('Select')); ?> <?php echo e(ucfirst($custom->custom_field_category)); ?></option>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($category->id); ?>" <?php if($service->category_id == $category->id): ?> <?php echo e('selected'); ?> 
                                                <?php endif; ?>><?php echo e($category->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <?php $__errorArgs = ['category_id'];
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
                            <?php endif; ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="name"><?php echo e(ucfirst($custom->custom_field_service)); ?> <?php echo e(__('Name')); ?>: </label>
                                            <input type="text" class="form-control custom-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" value="<?php echo e($service->name); ?>" name="name" 
                                                placeholder="<?php echo e(ucfirst($custom->custom_field_service)); ?> <?php echo e(__('name')); ?>">
                                                <?php $__errorArgs = ['name'];
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
                                                <label for="name"><?php echo e(__('Price')); ?>:</label>
                                                <div class='input-group'>
                                                    <span class="input-group-text">
                                                       <?php echo e($custom->currency_icon); ?>

                                                    </span>
                                                    <input type='text' class="form-control custom-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="price" value="<?php echo e($service->price); ?>" placeholder="<?php echo e(__('Price')); ?>" autocomplete="off">
                                                </div>
                                                <?php $__errorArgs = ['price'];
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
                                                <label for="description"><?php echo e(__('Description')); ?>: </label>
                                                <textarea  class="form-control custom-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="description"  name="description"><?php echo e($service->description); ?></textarea>
                                                <?php $__errorArgs = ['description'];
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
                                                <label for="name"><?php echo e(__('Duration')); ?>:</label>
                                                <div class='duration_hr_div <?php echo e($service->duration == '23:59:59' ? 'd-none': ''); ?> input-group' id="datetimepickerRest">
                                                    <input type='text' class="form-control custom-control <?php $__errorArgs = ['duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> timeDuration" name="duration" id="duration" value="<?php echo e($service->duration == '23:59:59' ? '' : date('Y-m-d H:i', strtotime($service->duration))); ?>" autocomplete="off">
                                                    <span class="input-group-text">
                                                        <span class="glyphicon glyphicon-time"></span>
                                                    </span>
                                                </div>
                                                <div class="duration_24hr_div_optional <?php echo e($service->duration != '23:59:59' ? '': ''); ?> mt-2">
                                                    <input type="checkbox" name="duration_24hr" id="service_duration" value="1" <?php echo e($service->duration == '23:59:59' ? 'checked': ''); ?>>
                                                    <label for="service_duration"><?php echo e(__('24 Hours Service Duration')); ?></label>
                                                </div>
                                                <?php $__errorArgs = ['duration'];
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
                                                <input type="checkbox" id="approve" name="auto_approve" value="1" 
                                                  <?php echo e(($service->auto_approve == 1 ) ? "checked": ""); ?> > 
                                                <label for="approve"><?php echo e(__('Auto Approved')); ?></label>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="name"><?php echo e(__('Cancel Appointment')); ?>:</label>
                                                <div class='input-group' id="datetimepickerRest1">
                                                    <input type='text' class="form-control custom-control time <?php $__errorArgs = ['cancel_before'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> timeDuration" id="cancel-before" name="cancel_before" value="<?php echo e(date('Y-m-d H:i', strtotime($service->cancel_before))); ?>"  autocomplete="off">
                                                    
                                                    <span class="input-group-text">
                                                        <span class="glyphicon glyphicon-time"></span>
                                                    </span>
    
                                                </div>
                                                <?php $__errorArgs = ['cancel_before'];
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
                                                <label for="service_image"><?php echo e(__('Service Image')); ?>:</label>
                                                <input type="file" class="form-control" id="service_image" name="image" data-value="<?php echo e($service->image); ?>">
                                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="error-message"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                <div class="padding-space">
                                                    <?php if(!empty($service->image)): ?>
                                                    <img src="<?php echo e(asset('img/services/'.$service->image)); ?>" alt="<?php echo e(__('service image')); ?>" id="SImage"  height="auto" width="100px">
                                                    <?php else: ?>
                                                    <img src="<?php echo e(asset('rbtheme/img/placeholder.jpeg')); ?>" alt="<?php echo e(__('service image')); ?>" id="SImage"  height="auto" width="100px">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="text-danger"><?php echo e(__('The image size should be maximum 8MB. Please select jpeg, jpg and png type of image')); ?></div>
                                            </div>
                                        </div>
                                    </div>
    
                                <hr>
    
                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-default custom-btn btn-block"><?php echo e(__('Submit')); ?></button>
                                    </div>
                                    
                                   
                                </div>
                                <a href="<?php echo e(route('services.index')); ?>" class="back-button"><h4><i class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo e(__('Back')); ?></h4></a>
                            </div>
                            <?php echo e(Form::close()); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\readybook-appointment-booking-code-1.4\resources\views/services/edit.blade.php ENDPATH**/ ?>