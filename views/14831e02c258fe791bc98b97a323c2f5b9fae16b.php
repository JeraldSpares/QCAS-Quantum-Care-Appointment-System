<aside class="aside">
    <div class="aside-content">
        <div class="logo">
            <a href="<?php echo e(route('welcome')); ?>" class="">
            <?php if(!empty($site->logo)): ?>
            <img src="<?php echo e(asset('img/logo/'.$site->logo)); ?>" alt="<?php echo e(__('Site Logo')); ?>" class="img-responsive">
            <?php else: ?>
            <img src="<?php echo e(asset('rbtheme/img/logo.png')); ?>" alt="<?php echo e(__('Site Logo')); ?>" class="img-responsive">
            <?php endif; ?>
            </a>
        </div>

        <nav class="aside-menu">
            <ul>
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-tachometer" aria-hidden="true"></i> <?php echo e(__('Dashboard')); ?></a>
                </li>
            </ul>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('categories',\Illuminate\Support\Facades\Auth::user())): ?>
            <?php if($custom->categories == 1): ?>
            <ul>
                <li>
                    <a href="<?php echo e(route('categories.index')); ?>" class="">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span><?php echo e(__('Categories')); ?></span>
                    </a>
                </li>
            </ul>
            <?php endif; ?>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employees',\Illuminate\Support\Facades\Auth::user())): ?>
            <ul>
                <li>
                    <a href="<?php echo e(route('services.index')); ?>" class="">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <span><?php echo e(__('Services')); ?></span>
                    </a>
                </li>
            </ul>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employees',\Illuminate\Support\Facades\Auth::user())): ?>
            <?php if($custom->employees == 1): ?>
            <ul>
                <li>
                    <a href="<?php echo e(route('employees.index')); ?>" class="">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        <span><?php echo e(__('Employees')); ?></span>
                    </a>
                </li>
            </ul>
            <?php endif; ?>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('customers',\Illuminate\Support\Facades\Auth::user())): ?>
            <ul>
                <li>
                    <a href="<?php echo e(route('customers.index')); ?>" class="">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span><?php echo e(__('Customers')); ?></span>
                    </a>
                </li>
            </ul>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('appointments',\Illuminate\Support\Facades\Auth::user())): ?>
            <ul>
                <li>
                    <a href="<?php echo e(route('appointments.index')); ?>" class="">
                        <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
                        <span><?php echo e(__('Appointments')); ?></span>
                    </a>
                </li>
            </ul>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payments',\Illuminate\Support\Facades\Auth::user())): ?>
            <ul>
                <li>
                    <a href="<?php echo e(route('paymentlist')); ?>" <?php if(isset($custom) && $custom->currency_icon != ""): ?> class="currency-link" <?php endif; ?>>
                        <?php if(isset($custom) && $custom->currency_icon != ""): ?>
                        <span class="currency-icon"><?php echo e($custom->currency_icon); ?></span>
                        <?php else: ?>
                        <i class="fa fa-inr" aria-hidden="true"></i>
                        <?php endif; ?>
                        <span><?php echo e(__('Payments')); ?></span>
                    </a>
                </li>
            </ul>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employeepayment',\Illuminate\Support\Facades\Auth::user())): ?>
            <ul>
                <li>
                    <a href="<?php echo e(route('employee-paymentlist')); ?>" class="">
                        <i class="fa fa-inr" aria-hidden="true"></i>
                        <span><?php echo e(__('Payments')); ?></span>
                    </a>
                </li>
            </ul>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('settings', \Illuminate\Support\Facades\Auth::user())): ?>
            <ul>
                <li>
                    <a href="#" class="toggle-menu">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <span><?php echo e(__('Settings')); ?></span>
                        <div class="icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                    </a>
                    <ul class="nested-menu">
                        <li>
                            <a href="<?php echo e(route('setting')); ?>"><?php echo e(__('General Setting')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('setting.payment')); ?>"><?php echo e(__('Payment Setting')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('setting.site')); ?>"><?php echo e(__('Site Setting')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('notificationSetting')); ?>"><?php echo e(__('Notification Setting')); ?></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php endif; ?>
        </nav>
    </div>
</aside>
<header class="header">
    <div class="header-top header-inverted">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="bt-menu-trigger">
                        <span></span>
                    </div>
                </div>
                <div class="col-10">
                    <ul class="settings">
                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" id="langaugeDropDown" aria-expanded="false">
                                <?php echo e(Config::get('languages')[app()->getLocale()]); ?>

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="langaugeDropDown">
                                <?php $__currentLoopData = Config::get('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a class="dropdown-item" href="<?php echo e(route('chang.locale', $key)); ?>"><?php echo e(__($item)); ?></a></li>    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <li class="dropdown">
                                <?php
                                    $notificationcount = DB::table('notification')->where('user_id',Auth::user()->id)->where('is_read','0')->count();
                                    $empnotification = DB::table('notification')->where('user_id',Auth::user()->id)->where('is_read','0')->count();
                                ?>
                            <a href="<?php echo e(route('admin-notification')); ?>" class="notification">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                                <?php if(Auth()->user()->role_id == 1): ?>
                                    <span class="badge"><?php echo e($notificationcount); ?></span>
                                <?php else: ?>
                                    <span class="badge"><?php echo e($empnotification); ?></span>   
                                <?php endif; ?>
                            </a>
                           
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" id="profileDropdown" aria-expanded="false">
                                <?php if(!empty(Auth::user()->profile)): ?>
                                <img src="<?php echo e(asset('img/profile/'.Auth::user()->profile)); ?>" alt="<?php echo e(__('avatar')); ?>"
                                    class="img-circle img">
                                <?php else: ?>
                                <img src="<?php echo e(asset('rbtheme/img/image.png')); ?>" alt="<?php echo e(__('avatar')); ?>" class="img-circle img">
                                <?php endif; ?>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="<?php echo e(route('users.edit', Auth::user()->id)); ?>"><i class="fa fa-user-o"
                                            aria-hidden="true"></i><?php echo e(__('User Profile')); ?></a></li>
                                <li><a class="dropdown-item btn-logout-click" href="javascript: void(0);"><i class="fa fa-sign-out"
                                            aria-hidden="true"></i> <?php echo e(__('SignOut')); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                    <form id="logout-form" method="post" action="<?php echo e(route('logout')); ?>">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/includes/sidebar-and-header.blade.php ENDPATH**/ ?>