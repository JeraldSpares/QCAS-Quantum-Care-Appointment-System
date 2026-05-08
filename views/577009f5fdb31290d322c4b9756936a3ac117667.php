
<?php $__env->startSection('slider'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
            data-aos="fade-up" data-aos-delay="200">
            <h1><?php echo e(__('Choose')); ?> <span class="typed-text fw-bold" data-typed-text='["<?php echo e(__('Service')); ?>","<?php echo e(__('Employee')); ?>", "<?php if($custom->employees == 1): ?><?php echo e(__('Date')); ?><?php endif; ?>","<?php echo e(__('Time')); ?>"]'></span><br> <?php echo e(__('For Your Appointment')); ?></h1>
            <h2><?php echo e(__("your_appointment")); ?></h2>
            <div class="d-lg-flex">
                <a href="<?php echo e(route('appointment.book')); ?>" class="btn-get-started scrollto"><?php echo e(__('Click to Book Appointment')); ?></a>
            </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="<?php echo e(asset('rbtheme/img/hero-img.png')); ?>" class="img-fluid animated" alt="">
        </div>
    </div>
</div>

</section><!-- End Hero -->
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('content'); ?>
    <!-- ======= Features Section ======= -->
    <section id="features" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?php echo e(__('Features')); ?></h2>
                <p><?php echo e(__('Features_detail')); ?></p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a><?php echo e(__('Easy to Book Appointment')); ?></a></h4>
                        <p><?php echo e(__("Easy_Appointment")); ?></p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a><?php echo e(__('Available Time Slots')); ?></a></h4>
                        <p><?php echo e(__("Time_slot")); ?></p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a><?php echo e(__('Multiple Payment Options')); ?></a></h4>
                        <p><?php echo e(__("Multiple_Payment")); ?></p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-layer"></i></div>
                        <h4><a><?php echo e(__('Email Reminder')); ?></a></h4>
                        <p><?php echo e(__("Email_Reminder_content")); ?></p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Features Section -->

    <!-- ======= Skills Section ======= -->
    <section id="features" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="<?php echo e(asset('rbtheme/img/skills.png')); ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                    <h3><?php echo e(__("Why your appointment with us?")); ?></h3>
                    <p class="font-italic">
                        <?php echo e(__("Appointment_Us")); ?> 
                    </p>

                    <div class="skills-content">

                        <div class="progress">
                            <span class="skill"><?php echo e(__('Customers')); ?> <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <?php if($custom->employees == 1): ?>
                        <div class="progress">
                            <span class="skill"><?php echo e(__('Service Providers')); ?> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="progress">
                            <span class="skill"><?php echo e(__('Services')); ?> <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><?php echo e(__('Categories')); ?> <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Cta Section ======= -->
    <section id="features" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3><?php echo e(__('Book Appointment')); ?></h3>
                    <p><?php echo e(__("Book_appointment_steps")); ?></p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="<?php echo e(route('appointment.book')); ?>"><?php echo e(__('Book Appointment')); ?></a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->
    <?php if(isset($services) && count($services) > 0): ?>
    <!-- ======= Service Section ======= -->
    <section id="services" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?php echo e(__('Services')); ?></h2>
                <p><?php echo e(__("We've multiple services with qualified service providers.")); ?></p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active"><?php echo e(__('All')); ?></li>
                <?php if(isset($categories) && !empty($categories)): ?>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($category->services)> 0): ?>
                <li data-filter=".filter-<?php echo e(str_replace(' ','-',$category->name)); ?>"><?php echo e(ucfirst($category->name)); ?></li>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <?php if(isset($services) && !empty($services)): ?>
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo e(!empty($service->categories) ? str_replace(' ','-',$service->categories->name) : '*'); ?>">
                    <div class="portfolio-img"><img src="<?php echo e((isset($service->image) && !empty($service->image)) ? asset('/img/services/'.$service->image) : asset('rbtheme/img/placeholder.jpeg')); ?>" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4><?php echo e($service->name); ?></h4>
                        <p><?php echo e(!empty($service->categories) ? $service->categories->name : 'General'); ?></p>
                        <a href="<?php echo e((isset($service->image) && !empty($service->image)) ? asset('/img/services/'.$service->image) : asset('rbtheme/img/placeholder.jpeg')); ?>" data-gall="portfolioGallery"
                            class="venobox preview-link" title="<?php echo e($service->name); ?>"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>

        </div>
    </section><!-- End Service Section -->
    <?php endif; ?>

    <!-- ======= Employee Section ======= -->
    <?php if($custom->employees == 1): ?>
    <section id="employees" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?php echo e(__('Service Providers')); ?></h2>
                <p><?php echo e(__("Schedule your appointment with us, We'll serve you better. We've a experienced staff for various services.")); ?></p>
            </div>

            <div class="row">
                <?php if(!empty($employees)): ?>
                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6 <?php if($key != 0): ?> mt-4 mt-lg-0 <?php endif; ?>">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?php echo e(!empty($employee->profile) ? asset('/img/profile/'.$employee->profile) : asset('rbtheme/img/image.png')); ?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4><?php echo e($employee->first_name.' '.$employee->last_name); ?></h4>
                                <?php if(isset($employee->position) && !empty($employee->position)): ?>
                                <span><?php echo e($employee->position); ?></span>
                                <?php else: ?>
                                <span><?php echo e(__('Employee')); ?></span>
                                <?php endif; ?>
                                <p><?php echo e($employee->first_name.' '.$employee->last_name); ?> <?php echo e(__('is Specialist. more info to:')); ?> <?php echo e($employee->email); ?></p>
                                <div class="social">
                                    <?php if(isset($employee->twitter) && !empty($employee->twitter)): ?>
                                    <a href="<?php echo e($employee->twitter); ?>" target="_blank"><i class="ri-twitter-fill"></i></a>
                                    <?php else: ?>
                                    <a href="<?php echo e($site->twitter); ?>" target="_blank"><i class="ri-twitter-fill"></i></a>
                                    <?php endif; ?>
                                    <?php if(isset($employee->facebook) && !empty($employee->facebook)): ?>
                                    <a href="<?php echo e($employee->facebook); ?>" target="_blank"><i class="ri-facebook-fill"></i></a>
                                    <?php else: ?>
                                    <a href="<?php echo e($site->facebook); ?>" target="_blank"><i class="ri-facebook-fill"></i></a>
                                    <?php endif; ?>
                                    <?php if(isset($employee->instagram) && !empty($employee->instagram)): ?>
                                    <a href="<?php echo e($employee->instagram); ?>" target="_blank"><i class="ri-instagram-fill"></i></a>
                                    <?php else: ?>
                                    <a href="<?php echo e($site->instagram); ?>" target="_blank"><i class="ri-instagram-fill"></i></a>
                                    <?php endif; ?>
                                    <?php if(isset($employee->linkedin) && !empty($employee->linkedin)): ?>
                                    <a href="<?php echo e($employee->linkedin); ?>" target="_blank"> <i class="ri-linkedin-box-fill"></i> </a>
                                    <?php else: ?>
                                    <a href="<?php echo e($site->linkedin); ?>" target="_blank"> <i class="ri-linkedin-box-fill"></i> </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <?php $employee = \App\Entities\Employee::where('role_id', 1)->where('status', 1)->first(); ?>
                <div class="col-lg-6">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pic"><img src="<?php echo e(!empty($employee->profile) ? asset('/img/profile/'.$employee->profile) : asset('img/image.png')); ?>" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4><?php echo e($employee->first_name.' '.$employee->last_name); ?></h4>
                            <?php if(isset($employee->position) && !empty($employee->position)): ?>
                            <span><?php echo e($employee->position); ?></span>
                            <?php endif; ?>
                            <p><?php echo e($employee->first_name.' '.$employee->last_name); ?> <?php echo e(__('is Specialist. more info to:')); ?> <?php echo e($employee->email); ?></p>
                            <div class="social">
                                <?php if(isset($employee->twitter) && !empty($employee->twitter)): ?>
                                <a href="<?php echo e($employee->twitter); ?>" target="_blank"><i class="ri-twitter-fill"></i></a>
                                <?php endif; ?>
                                <?php if(isset($employee->facebook) && !empty($employee->facebook)): ?>
                                <a href="<?php echo e($employee->facebook); ?>" target="_blank"><i class="ri-facebook-fill"></i></a>
                                <?php endif; ?>
                                <?php if(isset($employee->instagram) && !empty($employee->instagram)): ?>
                                <a href="<?php echo e($employee->instagram); ?>" target="_blank"><i class="ri-instagram-fill"></i></a>
                                <?php endif; ?>
                                <?php if(isset($employee->linkedin) && !empty($employee->linkedin)): ?>
                                <a href="<?php echo e($employee->linkedin); ?>" target="_blank"> <i class="ri-linkedin-box-fill"></i> </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </section><!-- End Employee Section -->
    <?php endif; ?>

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?php echo e(__('About Us')); ?></h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        <?php echo e(__('about', ['sitename' => $site->site_title])); ?>

                    </p>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <ul>
                        <li><i class="ri-check-double-line"></i> <?php echo e(__('Unlimited Categories')); ?></li>
                        <li><i class="ri-check-double-line"></i> <?php echo e(__('Unlimited Services')); ?></li>
                        <li><i class="ri-check-double-line"></i> <?php echo e(__('Unlimited Book Appointments')); ?></li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?php echo e(__('Contact')); ?></h2>
                <p><?php echo e(__('Get connect with us.')); ?></p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4><?php echo e(__('Location')); ?>:</h4>
                            <p><?php echo e((!empty($site->address)) ? ucfirst($site->address) : '-'); ?></p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4><?php echo e(__('Email')); ?>:</h4>
                            <p><a class="contact-email" href="<?php echo e((!empty($site->email)) ? 'mailto:'.$site->email : 'javascript:;'); ?>"><?php echo e((!empty($site->email)) ? $site->email : '-'); ?></a></p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4><?php echo e(__('Call')); ?>:</h4>
                            <p><a class="contact-phone" href="<?php echo e((!empty($site->phone)) ? 'tel:'.$site->phone : 'javascript:;'); ?>"><?php echo e((!empty($site->phone)) ? $site->country_code.$site->phone : '-'); ?></a></p>
                        </div>
                        <div class="map">
                            <?php if(isset($site->location) && !empty($site->location) && strpos($site->location, 'iframe') !== false): ?>
                                <?php echo html_entity_decode($site->location); ?>

                            <?php elseif(isset($site->location) && !empty($site->location)): ?>
                                <iframe class="map location" style="min-width:100%" src="<?php echo html_entity_decode($site->location); ?>"></iframe>
                            <?php else: ?>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119066.41264374652!2d72.75225623680046!3d21.15934583219656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1670587319456!5m2!1sen!2sin" width="800" height="600" frameborder="0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="<?php echo e(route('contact.email')); ?>" method="post" role="form" id="contact-form" class="php-email-form" autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="name"><?php echo e(__('Full Name')); ?></label>
                            <input type="text" name="contact_name" class="form-control" id="name" data-rule="minlen:4"
                                data-msg="<?php echo e(__('Please enter at least 4 characters')); ?>" />
                            <div class="validate"></div>
                        </div>

                        <input type="hidden" name="country_code" class="country_code" id="dialcode" value="<?php echo e(old('country_code')); ?> }}"  data-number="<?php echo e(old('phone')); ?>">
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name"><?php echo e(__('Phone')); ?></label>
                                <input class="form-control mobile country-phone-validation" type="tel" name="contact_phone" autocomplete="off" placeholder="<?php echo e(__('Phone Number')); ?>" value=""  
                                data-name="<?php echo e($site->country_name); ?>"/>
                                <div class="validate"></div>
                                <label id="valid-msg" style="color: green;" class="d-none phone-valid-msg">✓ <?php echo e(__('Phone Number Valid')); ?></label>
                                <label id="error-msg" style="color: #bd5252;" class="d-none phone-error-msg"></label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name"><?php echo e(__('Email')); ?></label>
                                <input type="email" class="form-control" name="contact_email" id="email" data-rule="email"
                                    data-msg="<?php echo e(__('Please enter valid email')); ?>" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name"><?php echo e(__('Message')); ?></label>
                            <textarea class="form-control" name="customer_message" rows="10" data-rule="required"
                                data-msg="<?php echo e(__('Please enter comments')); ?>"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading"><?php echo e(__('Loading')); ?></div>
                            <div class="error-message"></div>
                            <div class="sent-message"><?php echo e(__('Your message has been sent. Thank you!')); ?></div>
                        </div>
                        <div class="text-center"><button type="submit" class="btn-valid"><?php echo e(__('Send Message')); ?></button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer-top'); ?>
    <?php echo $__env->make('theme.includes.footer-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('backend/js/phone.js')); ?>"></script>

<script>
        $(document).ready(function () {
            var url_str = window.location.href;
            var url = new URL(url_str);
            var search_params = url.searchParams;
            if(search_params.get('token') != '' && search_params.get('token') != null) {
                $('#ResetPassword').modal('show');
            }
        });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home',['title' => trans('Home'), 'pagename' => trans('landing')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\readybook-appointment-booking-code-1.4\resources\views/theme/home.blade.php ENDPATH**/ ?>