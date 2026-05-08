
<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head',['title'=> trans('Site Setting')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="mt-3 container-fluid">
    <div class=" light-style flex-grow-1 ">
        <?php echo $__env->make('includes.message-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h3 class="font-weight-bold t-center">
           <?php echo e(__('Site Settings')); ?>

        </h3>
        <div class="row justify-content-center margin">
            <div class="col-md-12 col-lg-8">
                <div class="row-bordered">
                    <form method="POST" action="<?php echo e(route('setting.siteUpdate',$site->id)); ?>" enctype="multipart/form-data" id="site-frm" autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <div class="card-body pb-1">
                            <h4 class="font-weight-bold">
                                <?php echo e(__('Site Configuration')); ?>

                            </h4>
                            <hr class="border-light m-0">
                            <div class="mb-3">
                                <label for="site" class="form-label"><?php echo e(__('Company Name')); ?>:</label>
                                <input type="text" class="form-control" value="<?php echo e($site->company_name); ?>" name="company_name" placeholder="<?php echo e(__('Company Name')); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="site" class="form-label"><?php echo e(__('Site Title')); ?>:</label>
                                <input type="text" class="form-control" value="<?php echo e($site->site_title); ?>" name="site_title" placeholder="<?php echo e(__('Site Title')); ?>"> 
                            </div>
                            <div class="mb-3">
                            <label for="about_company" class="form-label"><?php echo e(__('About Company')); ?>:</label>
                                <textarea name="about_company" class="form-control" id="about_company" cols="80" rows="5" placeholder="<?php echo e(__('Enter about company')); ?>"><?php echo e($site->about_company); ?></textarea>
                            </div>
                            <div class="mb-3">
                            <label for="address" class="form-label"><?php echo e(__('Address')); ?>:</label>
                                <textarea name="address" class="form-control" id="address" cols="80" rows="3" placeholder="<?php echo e(__('Enter address')); ?>"><?php echo e($site->address); ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"><?php echo e(__('Email')); ?>:</label>
                                <input type="text" class="form-control" name="email" value="<?php echo e($site->email); ?>" placeholder="<?php echo e(__('Enter Email')); ?>">
                            </div>

                            <input type="hidden" name="country_name" id="iso2" class="country-name" value="<?php echo e($site->country_name); ?>">

                            <input type="hidden" name="country_code" id="dialcode" class="country_code" value="<?php echo e($site->country_code); ?>" data-country="<?php echo e($site->country_name); ?>" data-number="<?php echo e($site->phone); ?>">

                            <div class="mb-3">
                                <label for="phone" class="form-label"><?php echo e(__('Phone')); ?>:</label>
                                <input type="tel" class="form-control country-phone-validation intlTelInput" name="phone" value="" id="phone" data-name="<?php echo e($site->country_name); ?>">
                                
                                <span id="valid-msg" style="color: green;" class="d-none">✓ <?php echo e(__('Phone Number Valid')); ?></span>
                                <span id="error-msg" style="color: #bd5252;" class="d-none"></span>
                            </div>
                            <div class="mb-3">
                                <label for="facebook" class="form-label"><?php echo e(__('Facebook')); ?>:</label>
                                <input type="text" class="form-control" name="facebook" value="<?php echo e($site->facebook); ?>" placeholder="https://www.facebook.com/your-username/">
                            </div>
                            <div class="mb-3">
                                <label for="twitter" class="form-label"><?php echo e(__('Twitter')); ?>:</label>
                                <input type="text" class="form-control" name="twitter" value="<?php echo e($site->twitter); ?>" placeholder="https://twitter.com/your-username/">
                            </div>
                            <div class="mb-3">
                                <label for="linkedin" class="form-label"><?php echo e(__('Linkedin')); ?>:</label>
                                <input type="text" class="form-control" name="linkedin" value="<?php echo e($site->linkedin); ?>" placeholder="https://www.linkedin.com/in/your-username/">
                            </div>
                            <div class="mb-3">
                                <label for="instagram" class="form-label"><?php echo e(__('Instagram')); ?>:</label>
                                <input type="text" class="form-control" name="instagram" value="<?php echo e($site->instagram); ?>" placeholder="https://www.instagram.com/your-username/">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label"><?php echo e(__('Location')); ?>:</label>
                                <textarea name="location" id="location" class="form-control" rows="5" style="resize: none;"><?php echo e(html_entity_decode($site->location) ?? ''); ?></textarea>
                            </div>
                         
                            <?php if(isset($site->location) && !empty($site->location)): ?>
                                <?php if(strpos($site->location, 'iframe') !== false): ?>
                                    <div class="mb-3 location">
                                        <div class="map" style="min-width:400px;">
                                            <?php echo html_entity_decode($site->location); ?>

                                        </div>
                                    </div>
                                <?php else: ?>
                                    <iframe class="map location" style="min-width:400px;" src="<?php echo html_entity_decode($site->location); ?>"></iframe>
                                <?php endif; ?>
                            <?php endif; ?>
                            <div class="mb-3">
                                <label for="favicon" class="form-label"><?php echo e(__('Favicon')); ?>:</label>
                                <input type="file" class="form-control" id="favicon" name="favicon" value="<?php echo e($site->favicon); ?>">
                                <div class="padding-space">
                                    <?php if(!empty($site->favicon)): ?>
                                    <img src="<?php echo e(asset('img/favicons/'.$site->favicon)); ?>" class="bg-image" alt="<?php echo e(__('favicon')); ?>" id="faviconimage" height="50px" width="50px">
                                    <?php else: ?>
                                    <img src="<?php echo e(asset('rbtheme/img/favicon.png')); ?>" class="bg-image" alt="<?php echo e(__('favicon')); ?>" id="faviconimage" height="50px" width="50px">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="logo" class="form-label"><?php echo e(__('Logo')); ?>:</label>
                                <input type="file" class="form-control" id="Ilogo" name="logo" value="<?php echo e($site->logo); ?>">
                                <?php if(!empty($site->logo)): ?>
                                <div class="padding-space"><img src="<?php echo e(asset('img/logo/'.$site->logo)); ?>" class="bg-image" alt="<?php echo e(__('Logo')); ?>" id="logoimage"  height="80px"></div>
                                <?php else: ?>
                                <div class="padding-space"><img src="<?php echo e(asset('rbtheme/img/logo.png')); ?>" class="bg-image" alt="<?php echo e(__('Logo')); ?>" id="logoimage"  height="80px"></div>
                                <?php endif; ?>
                            </div>
                            <div class="text-right mt-5 mb-5">
                                <button type="submit" class="btn btn-primary btn-valid"><?php echo e(__('Update')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('backend/js/phone.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/settings/site.blade.php ENDPATH**/ ?>