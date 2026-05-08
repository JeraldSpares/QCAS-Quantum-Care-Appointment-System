
<?php $__env->startSection('head'); ?>
<?php echo $__env->make('includes.head',['title'=> trans('Employees')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row p-2">
    <?php echo $__env->make('includes.message-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="col-sm-12 col-mobile">
        <div class="board-box">
            <div class="board-title">
                <h2><?php echo e(__('List of all employees')); ?> <a href="<?php echo e(route('employees.create')); ?>" class="add-new-employee"><span
                            class="fa fa-plus pull-c-right"></span></a></h2>
                    
            </div>
    
            <div class="table-style">
                <div class="table-responsive">
                    <table class="table table-hover data-table" id="emp-table">
                        <thead>
                            <tr>
                                <th><?php echo e(__('SR No.')); ?></th>
                                <th><?php echo e(__('First Name')); ?></th>
                                <th><?php echo e(__('Last Name')); ?></th>
                                <th><?php echo e(__('Email')); ?></th>
                                <th><?php echo e(__('Phone')); ?></th>
                                <?php if($custom->categories == 1): ?>
                                    <th><?php echo e(ucfirst($custom->custom_field_category)); ?></th>
                                <?php endif; ?>
                                <th><?php echo e(ucfirst($custom->custom_field_service)); ?></th>
                                <th><?php echo e(__('Status')); ?></th>
                                <th></th>
                                <th class="custom-column"><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($rowIndex++); ?></th>
                                <td><?php echo e(ucfirst($employee->first_name)); ?></td>
                                <td><?php echo e(ucfirst($employee->last_name)); ?></td>
                                <td><?php echo e($employee->email); ?></td>
                                <td><?php echo e($employee->country_code.$employee->phone); ?></td>
                                <?php if($custom->categories == 1): ?>
                                    <td><?php echo e(ucfirst($employee->categories)); ?></td>
                                <?php endif; ?>
                                <td><?php echo e($employee->services); ?></td>
                                <td>
                                    <input type="checkbox" name="status" class="status" value="1" <?php if($employee->status == 1): ?> <?php echo e('checked'); ?> <?php endif; ?> 
                                    data-toggle="toggle" data-style="slow" data-onstyle="success" data-offstyle="danger" data-off=<?php echo e(__('Inactive')); ?> 
                                    data-employee_id="<?php echo e($employee->id); ?>" data-on="<?php echo e(__('Active')); ?>">
                                </td>
                                <td>
                                    
                                    <a <?php if($employee->google_verify == true): ?> <?php echo e('disabled'); ?> href="javascript:void(0)" class="remove-google" data-id="<?php echo e($employee->id); ?>" <?php else: ?> onclick="return googleCalendarEmailConfirmation(this);" data-href="<?php echo e(route('SendEmailGoogleCalenderLink',$employee->id)); ?>" <?php endif; ?>>
                                        <?php if(isset($employee->google_verify) && $employee->google_verify == true): ?>  
                                        <?php echo e(Form::open(['method' => 'DELETE','id' => 'removeItem','route' => ['removegoogle',$employee->id]])); ?>

                                            <span class="employee-badge"><i class="fa fa-check d-flex btn-disconnect"></i></span>
                                        <?php echo e(Form::close()); ?>

                                        <?php endif; ?>
                                        <img alt="Connect With Google Calendar" title="Connect With Google Calendar" class="google-calendar mt-3" height="25" width="25" src="<?php echo e(asset('img/employee/calendar.png')); ?>">
                                    </a>
                                    
                                </td>
                                <td>
                                    <a class="btn btn-default btn-lg" href="<?php echo e(route('employees.show',$employee->id)); ?>">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </a>
                                    <a class="btn btn-default btn-lg" href="<?php echo e(route('employees.edit',$employee->id)); ?>">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a class="btn btn-default btn-lg" title="<?php echo e(__('appointment')); ?>" href="<?php echo e(route('employees.appointment',$employee->id)); ?>">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </a> 
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
    
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('backend/js/employee.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\readybook-appointment-booking-code-1.4\resources\views/employees/index.blade.php ENDPATH**/ ?>