<header id="header" class="fixed-top header-scrolled">
    <div class="container d-flex align-items-center">
        <a href="<?php echo e(route('welcome')); ?>" class="logo mr-auto">
            <?php if(!empty($site->logo) && $site->logo != 'default-logo.png'): ?>
            <img src="<?php echo e(asset('img/logo/'.$site->logo )); ?>" alt="logo" class="img-fluid">
            <?php else: ?>
            <img src="<?php echo e(asset('rbtheme/img/logo.png')); ?>" alt="" class="img-fluid">
            <?php endif; ?>
        </a>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="<?php if(Request::segment(2) == '' && Request::segment(1) == ''): ?> active <?php endif; ?>"><a href="<?php echo e(route('welcome')); ?>"><?php echo e(__('Home')); ?></a></li>
                <li class=""><a <?php if(!empty(request()->route()) && request()->route()->getName() != 'welcome'): ?> 
                  href="<?php echo e(route('welcome')); ?>#features" 
                  <?php elseif(empty(request()->route())): ?> href="<?php echo e(route('welcome')); ?>#features" 
                  <?php else: ?> href="#features" <?php endif; ?>><?php echo e(__('Feature')); ?></a></li>
                <?php if(isset($services) && count($services) > 0): ?>
                <li class=""><a <?php if(request()->route()->getName() != 'welcome'): ?> 
                  href="<?php echo e(route('welcome')); ?>#services" 
                  <?php elseif(empty(request()->route())): ?> href="<?php echo e(route('welcome')); ?>#services" 
                  <?php else: ?> href="#services" <?php endif; ?>><?php echo e(__('Service')); ?></a></li><?php endif; ?>
                <li class=""><a <?php if(!empty(request()->route()) && request()->route()->getName() != 'welcome'): ?> 
                  href="<?php echo e(route('welcome')); ?>#employees" 
                  <?php elseif(empty(request()->route())): ?> href="<?php echo e(route('welcome')); ?>#employees" 
                  <?php else: ?> href="#employees" <?php endif; ?>><?php echo e(__('Service Providers')); ?></a></li>
                <li class=""><a <?php if(!empty(request()->route()) && request()->route()->getName() != 'welcome'): ?> 
                  href="<?php echo e(route('welcome')); ?>#about" 
                  <?php elseif(empty(request()->route())): ?> href="<?php echo e(route('welcome')); ?>#about" 
                  <?php else: ?> href="#about" <?php endif; ?>><?php echo e(__('About')); ?></a></li>
                <li class=""><a <?php if(!empty(request()->route()) && request()->route()->getName() != 'welcome'): ?> 
                  href="<?php echo e(route('welcome')); ?>#contact" 
                  <?php elseif(empty(request()->route())): ?> href="<?php echo e(route('welcome')); ?>#contact" 
                  <?php else: ?> href="#contact" <?php endif; ?>><?php echo e(__('Contact')); ?></a></li>
                <li class="<?php if(Request::segment(2) == 'book'): ?> active <?php endif; ?>"><a href="<?php echo e(route('appointment.book')); ?>"><?php echo e(__('Book Now')); ?></a></li>
                
                <?php if(auth()->guard()->check()): ?>
                <?php
                    $notificationcount = DB::table('notification')->where('is_read',0)->where('user_id',Auth::user()->id)->count();
                ?>
                <li class="drop-down <?php if($notificationcount > 0): ?> notification-indicator <?php endif; ?> notification-indicator-primary fa-icon-wait">
                    <div class="desktop-view <?php if(Request::segment(2) == 'notification'): ?> active <?php endif; ?>">
                        <a href="javascript:;" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><span class="fas fa-bell font-c-25" data-fa-transform="shrink-5"></span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification">
                            <div class="card card-notification shadow-none">
    
                                <div class="card-header">
              
                                  <div class="row justify-content-between align-items-center">
              
                                    <div class="col-auto">
              
                                      <h6 class="card-header-title mb-0"><?php echo e(__('Notifications')); ?></h6>
              
                                    </div>
              
                                    
                                    <?php if($notificationcount > 0): ?>
                                    <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="javascript:;" id="mark"><?php echo e(__('Mark all as read')); ?></a></div>
                                    <?php endif; ?>
                                  </div>
              
                                </div>
              
                                <div class="scrollbar-overlay max-h-25">
              
                                  <div class="list-group list-group-flush fw-normal fs--1">
              
                                    <div class="list-group-title border-bottom"><?php echo e(__('NEW')); ?></div>
              
                                    <div class="list-group-item">
              
                                      <?php
              
                                        $latestNotifications = DB::table('notification')->where('user_id',Auth::user()->id)->where('is_read', 0)->limit(3)->orderBy('id','desc')->get();
              
                                      ?>
              
              
                                      <?php $__currentLoopData = $latestNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestNotification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
              
                                      <a class="notification notification-flush" href="<?php echo e(route('notification',$latestNotification->id)); ?>">
              
                                        <div class="notification-avatar">
              
                                          <div class="avatar avatar-2xl me-4">
                                            
                                            
                                            <img class="rounded-circle" src="<?php echo e(asset('rbtheme/img/placeholder.png')); ?>" alt="" />
              
                                          </div>
              
                                        </div>
              
                                        <div class="notification-body">
              
                                          <p class="mb-1 wrap"><?php echo e($latestNotification->message); ?></p>
                                          <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji"><i class="icofont icofont-chat"></i></span><?php echo e(Helper::notificationTime($latestNotification->created_at)); ?></span>
              
                                        </div>
              
                                      </a>
              
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
                                    </div>
              
                                  </div>
              
                                </div>
              
                                <div class="card-footer text-center border-top"><a class="card-link d-block" href="<?php echo e(route('notification')); ?>"><?php echo e(__('View all')); ?></a></div>
              
                              </div>
                        </div>
                    </div>
                    <div class="mobile-view <?php if(Request::segment(2) == 'notification'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('notification')); ?>"><span data-fa-transform="shrink-5"><?php echo e(__('Notifications')); ?></span></a>
                    </div>
                </li>
                <li class="drop-down">
                    <?php if(!empty(Auth::user()->profile)): ?>
                    <a href="javascript:;"><img src="<?php echo e(asset('img/profile/'.Auth::user()->profile)); ?>" alt="customer-logo" class="rounded" width="25" height="25"></a>
                    <?php else: ?>
                    <a href="javascript:;"><img src="<?php echo e(asset('rbtheme/img/image.png')); ?>" alt="default-logo" class="rounded" width="25" height="25"></a>
                    <?php endif; ?>
                    <ul <?php if(Request::segment(2) == 'profile' || Request::segment(1) == 'dashboard'): ?> class="d-block" <?php endif; ?>>
                        <li class="<?php if(Request::segment(1) == 'dashboard'): ?> active <?php endif; ?>">
                            <?php if(!empty(Auth::user()->role_id != 2)): ?>
                            <a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a>
                            <?php endif; ?>
                            <?php if(!empty(Auth::user()->role_id == 2)): ?>
                            <a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('My Appointments')); ?></a>
                            <?php endif; ?>
                        </li>
                        <li class="<?php if(Request::segment(2) == 'profile'): ?> active <?php endif; ?>"><a href="<?php echo e(route('customer-profile',Auth::user()->id)); ?>"><?php echo e(__('Profile')); ?></a></li>
                        <li><a href="javascript:;" class="btn-logout-click"><?php echo e(__('Logout')); ?></a></li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
        <?php if(auth()->guard()->check()): ?>
            <a href="javascript:;" class="get-started-btn scrollto btn-logout-click"><?php echo e(__('Logout')); ?></a>
        <?php else: ?>
            <a href="javascript:;" class="get-started-btn scrollto" data-bs-toggle="modal" data-bs-target="#loginModel"><?php echo e(__('Login/Register')); ?></a>
        <?php endif; ?>
    </div>
</header>
<form id="logout-form" method="post" action="<?php echo e(route('logout')); ?>">
  <?php echo e(csrf_field()); ?>

</form>
<?php echo $__env->make('theme.includes.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('theme.includes.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('theme.includes.forgot-password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('theme.includes.reset-password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\readybook-appointment-booking-code-1.4\resources\views/front/include/home-header.blade.php ENDPATH**/ ?>