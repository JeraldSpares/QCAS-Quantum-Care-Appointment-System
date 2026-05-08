
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('rbtheme/css/booking-slots.css')); ?>">
<link href="<?php echo e(asset('rbtheme/css/flatpickr.min.css')); ?>" rel="stylesheet" id="style-default">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="zluck-container" id="banner">
    <div class="container justify-content-center" data-layout="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-lg-9 col-xxl-7 mb-5">
            
                <div class="d-flex flex-center mb-5">
                    <span class="font-sans-serif fw-bolder fs-4 d-inline-block"><?php echo e(__('Book Appointment')); ?></span>
                </div>
                
                <div class="card theme-wizard mb-5" id="wizard">
                    <form class="needs-validation" novalidate="novalidate" id="formdata" method="POST"
                        id="appointment-form" action="<?php echo e(route('appointment.create')); ?>" autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <div class="card-header bg-light pt-3 pb-2 p-0">
                            <ul class="nav justify-content-between nav-wizard">
                                <li class="nav-item"><a class="nav-link active fw-semi-bold"
                                        href="#bootstrap-wizard-tab1" data-bs-toggle="tab"
                                        data-wizard-step="data-wizard-step" data-winzard-id="0"><span
                                            class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                                    class="fas fa-lock"></span></span></span><span
                                            class="d-none d-md-block mt-1 fs--1"><?php echo e(__('Service')); ?></span></a></li>
                                <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab2"
                                        data-bs-toggle="tab" data-wizard-step="data-wizard-step"
                                        data-winzard-id="1"><span class="nav-item-circle-parent"><span
                                                class="nav-item-circle"><span
                                                    class="fas fa-clock"></span></span></span><span
                                            class="d-none d-md-block mt-1 fs--1"><?php echo e(__('Time')); ?></span></a></li>
                                <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab3"
                                        data-bs-toggle="tab" data-wizard-step="data-wizard-step"
                                        data-winzard-id="2"><span class="nav-item-circle-parent"><span
                                                class="nav-item-circle"><span
                                                    class="fas fa-user"></span></span></span><span
                                            class="d-none d-md-block mt-1 fs--1"><?php echo e(__('Details')); ?></span></a></li>
                                <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab4"
                                        data-bs-toggle="tab" data-wizard-step="data-wizard-step"
                                        data-winzard-id="3"><span class="nav-item-circle-parent"><span
                                                class="nav-item-circle"><?php echo e($custom->currency_icon); ?></span></span><span
                                            class="d-none d-md-block mt-1 fs--1"><?php echo e(__('Billing')); ?></span></a></li>
                                <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab5"
                                        data-bs-toggle="tab" data-wizard-step="data-wizard-step"
                                        data-winzard-id="4"><span class="nav-item-circle-parent"><span
                                                class="nav-item-circle"><span
                                                    class="fas fa-thumbs-up"></span></span></span><span
                                            class="d-none d-md-block mt-1 fs--1"><?php echo e(__('Done')); ?></span></a></li>
                            </ul>
                        </div>
                        <div class="card-body py-3" id="wizard-controller">
                            <div class="tab-content">
                                <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel"
                                    aria-labelledby="bootstrap-wizard-tab1" id="bootstrap-wizard-tab1">
                                    <div class="mb-1 h-20">
                                        <span id="employee_msg" class="employee_book-msg"></span>
                                    </div>
                                    <?php if($custom->categories == 1): ?>
                                    <div class="mb-3">
                                        <label class="form-label custom-category"
                                            for="bootstrap-wizard-category" data-custom-category="<?php echo e(ucfirst($custom->custom_field_category)); ?>"><?php echo e(ucfirst($custom->custom_field_category)); ?><span
                                                class="text-danger">*</span></label>
                                        <select class="form-control form-select" name="category_id" id="bootstrap-wizard-category"
                                            data-wizard-validate-category="true"  required="required">

                                            <option value=""><?php echo e(__('Select')); ?> <?php echo e(ucfirst($custom->custom_field_category)); ?>

                                            </option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($row->name); ?>" data-id="<?php echo e($row->id); ?>"><?php echo e($row->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <div class="invalid-feedback"><?php echo e(__('Please Select')); ?>

                                            <?php echo e(ucfirst($custom->custom_field_category)); ?></div>
                                    </div>
                                    <?php endif; ?>

                                    <div class="mb-3">
                                        <label class="form-label custom-service"
                                            for="bootstrap-wizard-service" data-custom-service="<?php echo e(ucfirst($custom->custom_field_service)); ?>"><?php echo e(ucfirst($custom->custom_field_service)); ?><span
                                                class="text-danger">*</span></label>
                                        <select class="form-control form-select" name="service_id" id="bootstrap-wizard-service"
                                            data-wizard-validate-service="true" required="required">
                                            <option value=""><?php echo e(__('Select')); ?> <?php echo e(ucfirst($custom->custom_field_service)); ?>

                                            </option>
                                            <?php if($custom->categories != 1): ?>
                                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($service->name); ?>" data-id="<?php echo e($service->id); ?>" data-price="<?php echo e($service->price); ?>">
                                                    <?php echo e(ucfirst($service->name)); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </select>
                                        <div class="invalid-feedback"><?php echo e(__('Please Select')); ?>

                                            <?php echo e(ucfirst($custom->custom_field_service)); ?></div>
                                    </div>

                                <?php if($custom->employees == 1): ?>
                                    <div class="mb-3"><label class="form-label custom-employee"
                                            for="bootstrap-wizard-employee" data-custom-employee="<?php echo e(ucfirst($custom->custom_field_text)); ?>"><?php echo e(ucfirst($custom->custom_field_text)); ?><span
                                                class="text-danger">*</span></label>
                                        <select class="form-control form-select"
                                            name="employee_id" id="bootstrap-wizard-employee"
                                            data-wizard-validate-employee="true" required="required">   
                                            <option value=""><?php echo e(__('Select')); ?> <?php echo e(ucfirst($custom->custom_field_text)); ?></option>
                                        </select>
                                        <div class="invalid-feedback"><?php echo e(__('Please Select')); ?>

                                            <?php echo e(ucfirst($custom->custom_field_text)); ?></div>
                                    </div>
                                <?php elseif($custom->employees == 0): ?>
                                    <input type="hidden" class="input-field employee_name" id="bootstrap-wizard-employee" data-wizard-validate-employee="true" name="employee_id" 
                                    data-employee="<?php echo e($admin->first_name.' '.$admin->last_name); ?>" value="<?php echo e($admin->id); ?>">
                                <?php endif; ?>
                                    
                                    <div class="mb-3"><label class="form-label" for="bootstrap-wizard-date"><?php echo e(__('Date')); ?><span
                                                class="text-danger">*</span></label>
                                        <input class="form-control custom-format" type="text" name="date" value="" required="required" autocomplete="off"
                                            id="bootstrap-wizard-date" placeholder="<?php echo e(__('Booking Date')); ?>" data-date-format="<?php echo e($custom->date_format); ?>"
                                            data-wizard-validate-date="true" />
                                        <div class="invalid-feedback"><?php echo e(__('Please Select Date')); ?></div>
                                    </div>
                                </div> 
                                <div class="tab-pane px-sm-3 px-md-5" role="tabpanel"
                                    aria-labelledby="bootstrap-wizard-tab2" id="bootstrap-wizard-tab2">
                                    <p><?php echo e(__('Below you can find list of available time slots for')); ?> <b
                                            class="service_name"><?php echo e(__('Service name')); ?> </b> 
                                    <?php if($custom->employees == 1): ?>
                                    <?php echo e(__('by')); ?> <b class="employee_name emp-cap"><?php echo e(__('Employee Name')); ?> </b>
                                    <?php endif; ?>
                                    </p>
                                    <p><?php echo e(__('Select time slot for booking')); ?></p>
                                    <p id="msg" class="book-msg"></p>
                                    <input type="hidden" name="slots" id="time" value=""
                                        data-wizard-validate-slot="true" required="required">
                                    <div class="invalid-feedback"><?php echo e(__('Please Select slot')); ?></div>
                                    <label for="" class="text-custom"><?php echo e(__('Appointment Time')); ?><span
                                            class="text-danger">*</span></label>
                                    <div class="bookly-time-step">
                                        <div class="bookly-columnizer-wrap">
                                            <div class="bookly-columnizer">
                                                <div class="bookly-time-screen">
                                                    <div class="bookly-column bookly-js-first-column">
                                                        <div class="row" id="time-slots">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="error time-error text-danger"></span>
                                </div>
                                <div class="tab-pane px-sm-3 px-md-5" role="tabpanel"
                                    aria-labelledby="bootstrap-wizard-tab3" id="bootstrap-wizard-tab3">
                                    <span class="text-danger" id="email-check"></span>
                                    <p><?php echo e(__("You've selected")); ?> <b class="service_name"><?php echo e(__('Service Name')); ?></b> <?php echo e(__('service from')); ?> <b
                                            class="booking_time"><?php echo e(__('Booking')); ?>

                                            <?php echo e(__('Time')); ?></b> <?php echo e(__('on')); ?> <b class="booking_date"><?php echo e(__('Booking Date')); ?></b>. <?php echo e(__("you'll be charged by")); ?>

                                        <b class="custom-currency" data-custom-currency="<?php echo e(strtoupper($custom->currency)); ?>"><?php echo e($custom->currency_icon); ?></b><b class="booking_price"><?php echo e(__('1.00')); ?></b>.
                                    </p>
                                    <p><?php echo e(__('Please provide your details in the form below to proceed with booking.')); ?></p>
                                    <div class="row g-2">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="bootstrap-wizard-wizard-first-name"><?php echo e(__('First Name')); ?><span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="first_name" <?php if(auth()->guard()->check()): ?>
                                                    value="<?php echo e(auth()->user()->first_name); ?>"
                                                    disabled <?php endif; ?> placeholder="<?php echo e(__('Enter First Name')); ?>"
                                                    data-wizard-validate-first-name="true" id="bootstrap-wizard-first-name"
                                                    required="required" />
                                                <div class="invalid-feedback"><?php echo e(__('Please enter the first name')); ?></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="bootstrap-wizard-wizard-last-name"><?php echo e(__('Last Name')); ?><span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="last_name" <?php if(auth()->guard()->check()): ?>
                                                    value="<?php echo e(auth()->user()->last_name); ?>"
                                                    disabled <?php endif; ?> placeholder="<?php echo e(__('Enter Last Name')); ?>"
                                                    data-wizard-validate-last-name="true" id="bootstrap-wizard-last-name"
                                                    required="required" />
                                                <div class="invalid-feedback"><?php echo e(__('Please enter the last name')); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <input type="hidden" name="country_name" id="iso2" class="country-name" value="<?php echo e(old('country_name')); ?>">

                                    <input type="hidden" name="country_code" id="dialcode" class="country_code" value="<?php echo e(old('country_code')); ?>" data-country="<?php echo e(old('country_name')); ?>" 
                                    <?php if(auth()->guard()->check()): ?> data-number="<?php echo e(Auth::user()->phone); ?>" <?php endif; ?> <?php if(auth()->guard()->guest()): ?> data-number="<?php echo e(old('phone')); ?>" <?php endif; ?>>
                            
                                    <div class="row g-2">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="bootstrap-wizard-wizard-email"><?php echo e(__('Phone')); ?><span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control intlTelInput country-phone-validation" type="tel" name="phone" 
                                                <?php if(auth()->guard()->check()): ?> value="<?php echo e(Auth::user()->phone); ?>" disabled <?php endif; ?> <?php if(auth()->guard()->guest()): ?> value="" <?php endif; ?>
                                                    placeholder="<?php echo e(__('Enter Phone')); ?>" required="required"
                                                    id="bootstrap-wizard-phone" data-wizard-validate-phone="true" data-name="<?php echo e($site->country_name); ?>"/>
                                                <div class="invalid-feedback phone-error"><?php echo e(__('Please enter the phone number')); ?></div>
                                                <span id="valid-msg" style="color: green;" class="d-none">✓ <?php echo e(__('Phone Number Valid')); ?></span>
                                                <span id="error-msg" style="color: #bd5252;" class="d-none"></span>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="bootstrap-wizard-email"><?php echo e(__('Email')); ?><span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="email" name="email" id="email"
                                                    placeholder="<?php echo e(__('Email address')); ?>" <?php if(auth()->guard()->check()): ?> value="<?php echo e(auth()->user()->email); ?>"
                                                    readonly <?php endif; ?>
                                                    required="required" id="bootstrap-wizard-wizard-email"
                                                    data-wizard-validate-email="true" />
                                                <div class="invalid-feedback email-error"><?php echo e(__('Please enter the email')); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3"><label class="form-label"
                                            for="bootstrap-wizard-detail"><?php echo e(__('Detail')); ?><span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="4" name="comments"
                                            id="bootstrap-wizard-detail" data-wizard-validate-detail="true"
                                            placeholder="<?php echo e(__('Appointment booking detail')); ?>" required="required"></textarea>
                                        <div class="invalid-feedback"><?php echo e(__('Please enter the appointment booking detail')); ?></div>
                                    </div>
                                </div>
                                <div class="tab-pane  px-sm-3 px-md-5" role="tabpanel"
                                    aria-labelledby="bootstrap-wizard-tab4" id="bootstrap-wizard-tab4">
                                    <p> <b><?php echo e(__('Select Payment method')); ?></b><span class="text-danger">*</span></p>
                                    <p id="stripe-msg"></p>
                                    <input type="hidden" id="appointment_id" value="">
                                    <input type="hidden" name="payment_method" value="" id="payment_method" data-wizard-validate-payment="true">                               
                                    <div class="row flex-center payment-options">
                                        <?php if($custom->is_stripe == 1): ?>   
                                        <div class="col-md-3 px-card  payment-card" id="bootstrap-wizard-stripe">
                                            <div class="payment-container">
                                                <span class="payment-image">
                                                    <img class="landing-cta-img payment_method stripe_payment-data" src="<?php echo e(asset('rbtheme/img/stripe-logo.png')); ?>"  alt="" data-value="stripe"
                                                    data-stripePopupKey="<?php echo e(($custom->stripe_active_mode == 1) ? $custom->stripe_live_key : $custom->stripe_key); ?>">
                                                </span>
                                                <span class="payment-label"><?php echo e(__('Stripe')); ?></span>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php if($custom->is_razorpay == 1): ?>
                                        <div class="col-md-3 px-card  payment-card">
                                            <div class="payment-container">
                                                <span class="payment-image">
                                                    <img class="landing-cta-img payment_method razorpay_popup_data" src="<?php echo e(asset('rbtheme/img/Razorpay.png')); ?>" alt=""  data-value="razorpay"
                                                    data-razorpayPopupKey="<?php echo e(($custom->razorpay_active_mode == 1) ? $custom->razorpay_live_key : $custom->razorpay_test_key); ?>">
                                                </span>
                                                <span class="payment-label"><?php echo e(__('Razorpay')); ?></span>
                                            </div>  
                                        </div>
                                        <?php endif; ?>
                                        <?php if($custom->is_paypal == 1): ?>
                                        <div class="col-md-3 px-card  payment-card">
                                            <div class="payment-container">
                                                <span class="payment-image">
                                                    <img class="landing-cta-img payment_method" src="<?php echo e(asset('rbtheme/img/paypal.webp')); ?>" alt="" data-value="paypal">
                                                </span>
                                                <span class="payment-label"><?php echo e(__('PayPal')); ?></span>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php if($custom->is_payment_later == 1): ?>
                                        <div class="col-md-3 px-card  payment-card">
                                            <div class="payment-container">
                                                <span class="payment-image">
                                                    <img class="landing-cta-img payment_method custom-logo" src="<?php echo e(asset('rbtheme/img/COD.png')); ?>" alt="" data-value="offline">
                                                </span>
                                                <span class="payment-label"><?php echo e(__('Pay Later')); ?></span>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <fieldset class="custom_site-data" data-custom-logo="<?php echo e((isset($custom) && !empty($custom->logo)) ? asset("img/logo/".$custom->logo) : asset("rbtheme/img/logo.png")); ?>" data-site-title="<?php echo e((isset($site) && !empty($site->site_title)) ? $site->site_title : 'Rozarpay'); ?>"></fieldset>
                                    </div>
                                </div>

                                <div class="tab-pane px-sm-3 px-md-5" role="tabpanel"
                                    aria-labelledby="bootstrap-wizard-tab5" id="bootstrap-wizard-tab5">
                                    <div class="row text-center">
                                        <div class="col-12 col-md-12">
                                            <span class="countdown d-none"><?php echo e(__('Complete your payment process within')); ?> : <span class="timeleft"></span></span>                  
                                            <p id="confirm-msg"></p>
                                            <p id="confirm-detail"> <?php echo e(__('Please confirm your appointment booking details once before proceed')); ?>.</p>
                                            <?php if($custom->smtp_mail == 1): ?>
                                            <p><?php echo e(__("We'll send booking details via an email to you at")); ?>  <span class="user_email f-700"></span></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <?php if($custom->categories == 1): ?>
                                        <div class="col-6 col-md-6">
                                            <div class="row">
                                                <div class="col-2 col-md-2">
                                                    <span><img class="detail-img " src="<?php echo e(asset('rbtheme/img/category.jpg')); ?>" alt="" height="50px" width="50px"></span>
                                                </div>
                                                <div class="col-10 col-md-10">
                                                    <span class="text-custom">
                                                        <p class="p-space"><label class="f-700 label-color"><?php echo e(ucfirst($custom->custom_field_category)); ?></label></p> 
                                                        <span><label class="category_name f-700 img-detail"></label></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <div class="col-6 col-md-6">
                                            <div class="row">
                                                <div class="col-2 col-md-2">
                                                    <span><img class="detail-img " src="<?php echo e(asset('rbtheme/img/service.jpg')); ?>" alt="" height="50px" width="50px"></span>
                                                </div>
                                                <div class="col-10 col-md-10">
                                                    <span class="text-custom">
                                                        <p class="p-space"><label class="f-700 label-color"><?php echo e(ucfirst($custom->custom_field_service)); ?></label></p>
                                                        <span><label class="service_name f-700 img-detail"></label></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-6">
                                            <div class="row mt-3">
                                                <div class="col-2 col-md-2"> 
                                                    <span><img class="detail-img " src="<?php echo e(asset('rbtheme/img/price.jpg')); ?>" alt="" height="50px" width="50px"></span>
                                                </div>
                                                <div class="col-10 col-md-10">
                                                    <span class="text-custom">
                                                        <p class="p-space"><label class="f-700 label-color"><?php echo e(ucfirst($custom->custom_field_service)); ?> <?php echo e(__('Fees')); ?></label></p>
                                                        <span class="f-700 img-price"><?php echo e($custom->currency_icon); ?></span>
                                                        <span class="booking_price f-700 img-price"></span></label>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <?php if($custom->employees == 1): ?>
                                        <div class="col-6 col-md-6">
                                            <div class="row mt-3">
                                                <div class="col-2 col-md-2">
                                                    <span><img class="detail-img " src="<?php echo e(asset('rbtheme/img/employee.jpg')); ?>" alt="" height="50px" width="50px"></span>
                                                </div>
                                                <div class="col-10 col-md-10">
                                                    <span class="text-custom">
                                                        <p class="p-space"><label class="f-700 label-color"><?php echo e(ucfirst($custom->custom_field_text)); ?></span></label></p>
                                                        <span><label class="employee_name f-700 img-detail"></label></span>
                                                    </span>   
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                        <div class="col-6 col-md-6">
                                            <div class="row mt-3">
                                                <div class="col-2 col-md-2">
                                                    <span><img class="detail-img " src="<?php echo e(asset('rbtheme/img/date.jpg')); ?>" alt="" height="50px" width="50px"></span>
                                                </div>
                                                <div class="col-10 col-md-10">
                                                    <span class="text-custom">
                                                        <p class="p-space"><label class="f-700 label-color"><?php echo e(__('Appointment Date')); ?>:</label></p>
                                                        <span><label class="booking_date f-700 img-detail "></label></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-6  <?php if($custom->categories != 1): ?> mr-auto <?php endif; ?>">
                                            <div class="row mt-3">
                                                <div class="col-2 col-md-2">
                                                    <span><img class="detail-img " src="<?php echo e(asset('rbtheme/img/time-appointment.jpg')); ?>" alt="" height="50px" width="50px"></span>
                                                </div>
                                                <div class="col-10 col-md-10">
                                                    <span class="text-custom">
                                                        <p class="p-space"><label class="f-700 label-color"><?php echo e(__('Appointment Time')); ?>:</label></p>
                                                        <span><label class="booking_time f-700 img-detail"></label></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <div id="paypal-button-container" class="d-none"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-light mt-3">
                                <div class="px-sm-3">
                                    <ul class="pager wizard list-inline mb-0">
                                        <li class="previous">
                                            <button class="btn btn-link ps-0" type="button">
                                                <span class="fas fa-chevron-left me-2 prev-button"
                                                    data-fa-transform="shrink-3"></span>
                                                <?php echo e(__('Prev')); ?>

                                            </button>
                                        </li>
                                        <li class="next">
                                            <button class="btn btn-primary px-5 px-sm-6 next-button btn-valid" type="button"
                                                id="book-button">
                                                <?php echo e(__('Next')); ?>

                                                <span class="fas fa-chevron-right ms-2"
                                                    data-fa-transform="shrink-3"></span>
                                            </button>
                                            <button class="btn btn-info px-5 px-sm-6 pay-razorpay d-none" type="button"
                                                >
                                                <?php echo e(__('Pay With RazorPay')); ?>

                                            </button>
                                            <button class="btn btn-info px-5 px-sm-6 pay-stripe d-none" type="button"
                                                >
                                                <?php echo e(__('Pay With Stripe')); ?>

                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stripe modal start -->
<div class="modal fade" id="stripemodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="container mt-c-10 mb-c-10">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                        <div class="row text-center">      
                            <span class="countdown d-none"><?php echo e(__('Complete your payment process within')); ?> : <span class="timeleft"></span></span>              
                        </div>
                            <div class="card">
                                <form action="<?php echo e(route('intent')); ?>" method="post" id="payment-form" autocomplete="off">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="form-group">
                                    
                                        <div class="card-header">
                                            <label for="card-element">
                                                <?php echo e(__('Enter your credit card information')); ?>

                                            </label>
                                        </div>
                                        <div class="card-body">
                                            <div id="card-element">
                                            </div>
                                            <div id="card-errors" role="alert"></div>
                                            <input type="hidden" name="plan" value="" />
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button id="card-button" class="btn btn-dark" type="submit" data-secret=""
                                            data-appointment=""> <?php echo e(__('Pay')); ?> </button>
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


<!-- Stripe modal end -->
<!-- ============================================-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('rbtheme/js/flatpickr.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/phone.js')); ?>"></script>
<script src="<?php echo e(asset('rbtheme/js/appointment-config.js')); ?>"></script>
<?php if($custom->is_stripe == 1): ?>
<script src="https://js.stripe.com/v3/"></script>
<script src="<?php echo e(asset('rbtheme/js/payment.js')); ?>"></script>
<?php endif; ?>
<?php if($custom->is_paypal == 1): ?>
<script src="https://www.paypal.com/sdk/js?client-id=<?php echo e(($custom->paypal_active_mode == 1) ? $custom->paypal_live_client_id : $custom->paypal_client_id); ?>&components=buttons&locale=en_US"></script>
<script src="<?php echo e(asset('rbtheme/js/paypal.js')); ?>"></script>
<?php endif; ?>
<?php if($custom->is_razorpay == 1): ?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="<?php echo e(asset('rbtheme/js/rozarpay.js')); ?>"></script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home',['title' => trans('Appointment')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/theme/appointment.blade.php ENDPATH**/ ?>