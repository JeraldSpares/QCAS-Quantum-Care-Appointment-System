
<?php $__env->startSection('head'); ?>
<?php echo $__env->make('includes.head',['title'=> trans('Edit Profile')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-3 padding-space">
    <div class="container light-style flex-grow-1 container-p-y">
        <?php if(Session::has('message')): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <?php echo e(Session::get('message')); ?>

                    </div>
                </div>
            </div>
            <?php endif; ?>
        <h4 class="font-weight-bold">
            <?php echo e(__('Account settings')); ?>

        </h4>
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="row no-gutters row-bordered row-border-light">
                        
                        <div class="col-md-3 pt-0">
                            <form method="POST" id="profile-form" action="<?php echo e(route('users.update',Auth::user()->id)); ?>" enctype="multipart/form-data" autocomplete="off">
                                <?php echo method_field('PATCH'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="card-body media align-items-center">
                                    <?php if(!empty($user->profile)): ?>
                                    <img src="<?php echo e(asset('img/profile/'.$user->profile)); ?>" alt="<?php echo e(__('profile')); ?>" class="d-block ui-w-80" id="profileImage">
                                   
                                    <?php else: ?>
                                    <img src="<?php echo e(asset('rbtheme/img/image.png')); ?>" alt="<?php echo e(__('user-profile')); ?>" class="d-block ui-w-80 img-set">
                                    <?php endif; ?>
                                </div>
    
                                <div class="media-body">
                                    <?php if(!empty($user->profile)): ?>
                                    <label class="btn btn-outline-primary profile">
                                        <?php echo e(__('Change')); ?>

                                        <input type="file" id="pImage" name="profile"
                                            class="account-settings-fileinput">
                                    </label>
                                    <?php else: ?>
                                    <label class="btn btn-outline-primary profile">
                                        <?php echo e(__('Upload')); ?>

                                        <input type="file" id="pImage" name="profile"
                                            class="account-settings-fileinput">
                                    </label>
                                    <?php endif; ?>
    
                                </div>
                                <span class="z-index-1 text-white dark__text-white text-center fs--1 user_profile_after">
                                    <span class="d-inline"></span>
                                    <button  class="btn btn-danger" data-bs-title="Remove" title="<?php echo e(__('Remove Profile Picture')); ?>"><i class="fa fa-trash"></i></button>
                                </span>
                            </form>
                            
                            <hr class="border-light m-0">
                            <ul class="nav nav-tabs list-group list-group-flush account-settings-links curser-set mt-3" role="tablist">
                                <li class="nav-item list-group-item-action">
                                    <a href="" class="nav-link list-group-item <?php if(session('frm') == 'general'): ?> in active <?php elseif(session('frm') == ''): ?> in active <?php endif; ?>" data-bs-toggle="tab" data-bs-target="#account-general"><?php echo e(__('Personal Information')); ?></a>
                                </li>
                                <li class="nav-item list-group-item-action" id="changepassword-tab">
                                    <a href="" class="nav-link list-group-item <?php if(session('frm') == 'changepassword'): ?> active <?php endif; ?>" data-bs-toggle="tab" data-bs-target="#account-change-password"><?php echo e(__('Change Password')); ?></a>
                                </li>
                                <li class="nav-item list-group-item-action" id="social-tab">
                                    <a href="" class="nav-link list-group-item <?php if(session('frm') == 'social'): ?> active <?php endif; ?>" data-bs-toggle="tab" data-bs-target="#social-profile"><?php echo e(__('Social Profile')); ?></a>
                                </li>
                                <?php if(Auth::user()->role_id == 3): ?>
                                <li class="nav-item list-group-item-action">
                                    <?php if(isset($employee->google_verify) && $employee->google_verify == true): ?>
                                        <span class="list-group-item"><?php echo e(__('Google Calendar:')); ?> <b><?php echo e(__('Connected')); ?></b></span>
                                    <?php endif; ?>
                                </li>
                                <li class="nav-item list-group-item-action">
                                    <?php if(isset($employee->google_verify) && $employee->google_verify == true): ?>    
                                    <?php echo e(Form::open(['method' => 'DELETE','id' => 'removeItem','route' => ['removegoogle',$employee->id]])); ?>

                                        <span class="list-group-item remove-google-access btn-disconnect" style="background-color: #dc3545;color:#fff;font-size: 17px;"><?php echo e(__('Disconnect Google Calendar')); ?></span>
                                    <?php echo e(Form::close()); ?>

                                    <?php else: ?>
                                    <a href="<?php echo e(route('SendEmailGoogleCalenderLink',$user->id)); ?>" class="list-group-item btn-primary"><?php echo e(__('Connect With Google Calendar')); ?></a>
                                    <?php endif; ?>
                                    
                                </li>
                                <?php endif; ?>
                            </ul>
                            <div class="text-danger mt-3 text-center"><?php echo e(__('The image size should be maximum 8MB. Please select jpeg, jpg and png type of image')); ?></div>
                        </div>
    
                        <div class="col-md-9 card-width">   
                            <div class="tab-content">
                                <div class="tab-pane fade <?php if(session('frm') == 'general'): ?> show active <?php elseif(session('frm') == ''): ?> show active  <?php endif; ?>" id="account-general">
                                    <form method="POST" action="<?php echo e(route('users.update', Auth::user()->id.'?frm=general')); ?>" id="account" autocomplete="off">
                                    <?php echo method_field('PATCH'); ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="card-body card-size">
                                        <h2 class="font-weight-bold">
                                            <?php echo e(__('User Profile')); ?>

                                        </h2>
                                        <hr class="border-light m-0">
                                            <div class="mb-3">
                                                <label class="form-label"><?php echo e(__('First Name')); ?></label>
                                                <input type="text" name="first_name" class="form-control mb-1" value="<?php echo e(ucfirst($user->first_name)); ?>" placeholder="<?php echo e(__('First Name')); ?>">
                                                <?php $__errorArgs = ['first_name'];
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
                                                <label class="form-label"><?php echo e(__('Last Name')); ?></label>
                                                <input type="text" name="last_name" class="form-control" value="<?php echo e(ucfirst($user->last_name)); ?>" placeholder="<?php echo e(__('Last Name')); ?>">
                                                <?php $__errorArgs = ['last_name'];
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
                                                <label class="form-label"><?php echo e(__('E-mail')); ?></label>
                                                <input type="text" name="email" class="form-control mb-1" value="<?php echo e($user->email); ?>" placeholder="<?php echo e(__('Email')); ?>">
                                                <?php $__errorArgs = ['email'];
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

                                            <input type="hidden" name="country_name" id="iso2" class="country-name" value="<?php echo e($user->country_name); ?>">

                                            <input type="hidden" name="country_code" class="country_code" id="dialcode" value="<?php echo e($user->country_code); ?>" data-country="<?php echo e($user->country_name); ?>"  data-number="<?php echo e($user->phone); ?>">

                                            <div class="mb-3">
                                                <label class="form-label"><?php echo e(__('Phone')); ?></label>
                                                <input type="tel" name="phone" data-name="<?php echo e($user->country_name); ?>" class="form-control intlTelInput country-phone-validation" id="phone" value="" placeholder="<?php echo e(__('Phone')); ?>">
                                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="error"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                <span id="valid-msg" style="color: green;" class="d-none">✓ <?php echo e(__('Phone Number Valid')); ?></span>
                                                <span id="error-msg" style="color: #bd5252;" class="d-none"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="form-label"><?php echo e(__('Job Title')); ?></label>
                                                <input type="text" name="position" class="form-control" value="<?php echo e(ucfirst($user->position)); ?>" placeholder="<?php echo e(__('Job Title')); ?>" autocomplete="off">
                                            </div>
                                            <div class="text-right save">
                                                <button type="submit" class="btn-valid btn btn-primary"><?php echo e(__('Save changes')); ?></button>
                                            </div>
                                            <a href="<?php echo e(route('dashboard')); ?>" class="back-button"><h4><i class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo e(__('Back')); ?></h4></a>
                                        </div>
                                    </form>
                                </div>
                            
                                <div class="tab-pane fade <?php if(session('frm') == 'changepassword'): ?> show active <?php endif; ?>" id="account-change-password">
                                    <form method="POST" action="<?php echo e(route('updatePassword',['id' => Auth::user()->id.'?frm=changepassword'])); ?>" id="change-password" autocomplete="off">
                                        <?php echo method_field('PATCH'); ?>
                                        <?php echo csrf_field(); ?>
                                        
                                        <div class="card-body card-size">
                                                <h2 class="font-weight-bold">
                                                    <?php echo e(__('Change Password')); ?>

                                                </h2>
                                                <hr class="border-light m-0">
                                                <div class="mb-3">
                                                    <label class="form-label"><?php echo e(__('Current password')); ?></label>
                                                    <span toggle="old-password" class="toggle-password open mt-5"><i class="fa fa-eye-slash"></i></span>
                                                    <span toggle="old-password" class="toggle-password close d-none mt-5"><i class="fa fa-eye"></i></span>
                                                    <input type="password" name="old_password" class="form-control" id="old-password" placeholder="<?php echo e(__('Current Password')); ?>">
                                                </div>
    
                                                <div class="mb-3">
                                                    <label class="form-label"><?php echo e(__('New password')); ?></label>
                                                    <span toggle="new-password" class="toggle-password open mt-5"><i class="fa fa-eye-slash"></i></span>
                                                    <span toggle="new-password" class="toggle-password close d-none mt-5"><i class="fa fa-eye"></i></span>
                                                    <input type="password" name="new_password" class="form-control" id="new-password" placeholder="<?php echo e(__('New Password')); ?>">
                                                </div>
    
                                                <div class="mb-3">
                                                    <label class="form-label"><?php echo e(__('Confirm new password')); ?></label>
                                                    <span toggle="confirm-password" class="toggle-password open mt-5"><i class="fa fa-eye-slash"></i></span>
                                                    <span toggle="confirm-password" class="toggle-password close d-none mt-5"><i class="fa fa-eye"></i></span>
                                                    <input type="password" name="confirm_password" class="form-control" id="confirm-password" placeholder="<?php echo e(__('Confirm New Password')); ?>">
                                                </div>
    
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary"><?php echo e(__('Update Password')); ?></button>
                                                </div>
                                                <a href="<?php echo e(route('dashboard')); ?>" class="back-button"><h4><i class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo e(__('Back')); ?></h4></a>
                                            </div>
                                    </form>
                                </div>
    
                                <div class="tab-pane fade <?php if(session('frm') == 'social'): ?> show active <?php endif; ?>" id="social-profile">
                                    <form method="POST" action="<?php echo e(route('users.social',['id' => Auth::user()->id.'?frm=social'])); ?>" id="social" autocomplete="off">
                                        <?php echo method_field('PATCH'); ?>
                                        <?php echo csrf_field(); ?>
                                        <div class="card-body card-size">
                                            <h2 class="font-weight-bold">
                                                <?php echo e(__('Social Profile')); ?>

                                            </h2>
                                            <hr class="border-light m-0">
                                            <div class="mb-3">
                                                <label for="facebook" class="form-label"><?php echo e(__('Facebook')); ?></label>
                                                <input type="text" name="facebook" class="form-control" value="<?php echo e($user->facebook); ?>" placeholder="https://www.facebook.com/username" autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label for="instagram" class="form-label"><?php echo e(__('Instagram')); ?></label>
                                                <input type="text" name="instagram" class="form-control" value="<?php echo e($user->instagram); ?>" placeholder="https://www.instagram.com/username" autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label for="twitter" class="form-label"><?php echo e(__('Twitter')); ?></label>
                                                <input type="text" name="twitter" class="form-control" value="<?php echo e($user->twitter); ?>" placeholder="https://www.twitter.com/username" autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label for="linkedin" class="form-label"><?php echo e(__('Linkedin')); ?></label>
                                                <input type="text" name="linkedin" class="form-control" value="<?php echo e($user->linkedin); ?>" placeholder="https://www.linkedin.com/in/username" autocomplete="off">
                                            </div>
                                            <div class="text-right save">
                                                <button type="submit" class="btn btn-primary"><?php echo e(__('Save changes')); ?></button>
                                            </div>
                                            <a href="<?php echo e(route('dashboard')); ?>" class="back-button"><h4><i class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo e(__('Back')); ?></h4></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('backend/js/phone.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/employee.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/profile/edit.blade.php ENDPATH**/ ?>