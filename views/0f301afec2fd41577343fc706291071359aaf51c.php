
<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head',['title'=> trans('Appointments')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.message-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row p-2">
        <div class="col-sm-12 col-mobile">
            <div class="board-box">
                <div class="board-title">
                    <h2><?php echo e(__('List of all appointments')); ?> <a href="<?php echo e(route('appointments.create')); ?>" class="add-new-employee"><span class="fa fa-plus pull-c-right"></span></a></h2>   
                </div>
                <form method="post" id="filter-form" action="<?php echo e(route('appointment-filter')); ?>" autocomplete="off">
                <?php echo e(csrf_field()); ?>

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-xl-2 col-lg-6 p-2 appointment-date-filter">
                            <div class="form-group">
                                <label class="form-label"><?php echo e(ucfirst($custom->custom_field_service)); ?>:</label>
                                <select name="service_id" id="service_id" class="form-control custom-control">
                                    <option value=""><?php echo e(__('Select')); ?> <?php echo e(ucfirst($custom->custom_field_service)); ?></option>
                                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($service->name); ?>" data-id="<?php echo e($service->id); ?>" <?php echo e((isset($data) && $service->id == $data['service_id']) ? 'selected' : ''); ?>><?php echo e($service->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <?php if($custom->employees == 1): ?>
                            <?php if(session('frm') != 'employee'): ?>
                            <div class="col-sm-6 col-xl-2 col-lg-6 p-2 appointment-date-filter">
                                <div class="form-group">
                                    <label class="form-label previous-serviceid" data-previous-serviceid="<?php echo e(old('employee_id')); ?>" data-customFieldText="<?php echo e(ucfirst($custom->custom_field_text)); ?>"><?php echo e(ucfirst($custom->custom_field_text)); ?>:</label>
                                    <select name="employee_id" id="employee_id" class="form-control custom-control">
                                        <option value="" ><?php echo e(__('Select')); ?> <?php echo e(ucfirst($custom->custom_field_text)); ?></option>
                                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($employee->id); ?>" <?php echo e((isset($data) && $employee->id == $data['employee_id']) ? 'selected' : ''); ?>><?php echo e(ucfirst($employee->first_name).' '.ucfirst($employee->last_name)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <div class="col-sm-6 col-xl-2 col-lg-6 p-2 appointment-date-filter">
                            <div class="form-group ">
                                <label for="date" class="form-label"><?php echo e(__('Appointment Start Date')); ?>: </label>
                                <input type="text" class="form-control custom-control date custom-format" id="startdate" min="<?php echo e(date($custom->date_format)); ?>" autocomplete="off" 
                                value="<?php echo e(isset($data) ? $data['startdate'] : ''); ?>" name="startdate" data-date-format="<?php echo e($custom->date_format); ?>" data-wizard-validate-date="true" placeholder="<?php echo e(__('Please Select Date')); ?>">
                                <span class=" error-message" id="err-date"></span>
                            </div>
                        </div>

                    
                        <div class="col-sm-6 col-xl-2 col-lg-6 col-lg-2 p-2 appointment-date-filter">
                            <div class="form-group">
                                <label for="date" class="form-label"><?php echo e(__('Appointment End Date')); ?>: </label>
                                <input type="text" class="form-control custom-control date custom-format" id="enddate" max="<?php echo e(date($custom->date_format)); ?>" autocomplete="off" 
                                value="<?php echo e(isset($data) ? $data['enddate'] : ''); ?>" name="enddate" data-date-format="<?php echo e($custom->date_format); ?>" data-wizard-validate-date="true" placeholder="<?php echo e(__('Please Select Date')); ?>">
                                <span class=" error-message" id="err-date"></span>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-xl-2 col-lg-6 p-2 appointment-date-filter">
                            <div class="form-group">
                                <label for="status" class="form-label"> <?php echo e(__('Status')); ?>: </label>
                                <select name="status" id="status" class="form-control custom-control" >
                                <option value=""><?php echo e(__('Select Status')); ?></option>
                                <option value="approved" <?php echo e(( isset($data) && 'approved' == $data['status']) ? 'selected' : ''); ?>><?php echo e(__('Approved')); ?></option>
                                <option value="cancel" <?php echo e((  isset($data) && 'cancel' == $data['status']) ? 'selected' : ''); ?>><?php echo e(__('Cancel')); ?></option>
                                <option value="pending" <?php echo e((  isset($data) &&  'pending' == $data['status']) ? 'selected' : ''); ?>><?php echo e(__('Pending')); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2 col-lg-6 mt-sm-1 p-2 appointment-date-filter">
                            <input type="submit" class="btn btn-primary filter truncate" name="filter" value="<?php echo e(__('Apply Filter')); ?>" id="filter" title="<?php echo e(__('Apply Filter')); ?>">
                            <input type="button" class="btn btn-primary filter" name="reset" value="<?php echo e(__('Reset')); ?>" id="reset">
                        </div>
                        
                    </div>
                </form>
    
                <div class="table-style">
                    <div class="table-responsive">
                        <table class="table table-hover data-table" id="appointment-table">
                            <thead>
                            <tr>
                                <th><?php echo e(__('SR No')); ?>.</th>
                                <th><?php echo e(ucfirst($custom->custom_field_service)); ?></th>
                                <?php if($custom->employees == 1): ?>
                                    <th><?php echo e(ucfirst($custom->custom_field_text)); ?></th>
                                <?php endif; ?>
                                <th><?php echo e(__('Customer')); ?></th>
                                <th><?php echo e(__('Created Date')); ?></th>
                                <th><?php echo e(__('Appointment Date')); ?></th>
                                <th><?php echo e(__('Start time')); ?></th>
                                <th><?php echo e(__('Finish time')); ?></th>
                                <th><?php echo e(__('Status')); ?></th>
                                <th><?php echo e(__('Comment')); ?></th>
                                <th class="custom-column"><?php echo e(__('Action')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($rowIndex++); ?></th>
                                    <td><?php echo e($appointment->service_id); ?></td>
                                    <?php if($custom->employees == 1): ?>
                                        <td><?php echo e(!empty($appointment->employee) ? ucfirst($appointment->employee->first_name).' '.ucfirst($appointment->employee->last_name) : 'Employee Not Available'); ?></td>
                                    <?php endif; ?>
                                    <td><?php echo e(!empty($appointment->user) ?ucfirst($appointment->user->first_name).' '.ucfirst($appointment->user->last_name) : 'User Not Available'); ?></td>
                                    <td><?php echo e(date($custom->date_format,strtotime($appointment->created_at))); ?></td>
                                    <td><?php echo e(date($custom->date_format,strtotime($appointment->date))); ?></td>
                                    <td><?php echo e(date('h:i A',strtotime($appointment->start_time))); ?></td>
                                    <td><?php echo e(date('h:i A',strtotime($appointment->finish_time))); ?></td>
                                    <?php if($appointment->status == 'approved'): ?>
                                        <td><span class="badge bg-success"><?php echo e(ucfirst($appointment->status)); ?></span></td>
                                    <?php endif; ?>
                                    <?php if($appointment->status == 'pending'): ?>
                                        <td><span class="badge bg-warning"><?php echo e(ucfirst($appointment->status)); ?></span></td>
                                    <?php endif; ?>
                                    <?php if($appointment->status == 'cancel'): ?>
                                        <td><span class="badge bg-danger"><?php echo e(ucfirst($appointment->status)); ?></span></td>
                                    <?php endif; ?>
                                    <?php if($appointment->status == 'completed'): ?>
                                        <td><span class="badge bg-info"><?php echo e(ucfirst($appointment->status)); ?></span></td>
                                    <?php endif; ?>
                                    <td><?php echo e($appointment->comments); ?></td>
                                    <td><a class="btn btn-default btn-lg mt-0" href="<?php echo e(route('appointments.show',$appointment->id)); ?>">
                                            <span class="glyphicon glyphicon-eye-open"></span></a></td>
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
<script src="<?php echo e(asset('backend/js/appointment.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\readybook-appointment-booking-code-1.4\resources\views/appointments/index.blade.php ENDPATH**/ ?>