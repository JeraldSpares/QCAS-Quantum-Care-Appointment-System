
<?php $__env->startSection('head'); ?>
<?php echo $__env->make('includes.head',['title'=> trans('View Appointment')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('rbtheme/css/loader.css')); ?>" rel="stylesheet" id="style-default">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section class="py-0 overflow-hidden light page-padding" id="banner">
    <div class="bg-holder overlay">
    </div>
    <form action="<?php echo e(route('approval',$appointment->id)); ?>" method="POST" autocomplete="off">
        <?php echo e(csrf_field()); ?>

        <div class="appointment-detail-design">
            <div class="card mb-2">
                <div class="bg-holder d-none d-lg-block bg-card opacity-7"></div>
                
                <div class="card-body position-relative">
                    <h2><?php echo e(__('Appointment Details')); ?></h2>
                    <p class="fs--1"><?php echo e(date($custom->date_format,strtotime($appointment->date))); ?></p>
                    <div><strong class="me-2"><?php echo e(__('Status')); ?>: </strong>
                        <?php if($appointment->status == 'cancel'): ?>
                        <div class="badge bg-danger fs--2"><span class="fa fa-close ms-1"
                                data-fa-transform="shrink-2"></span> <?php echo e(ucfirst($appointment->status)); ?></div>
                        <?php endif; ?>
                        <?php if($appointment->status == 'pending'): ?>
                        <div class="badge bg-warning fs--2"><span class="fa fa-check ms-1"
                                data-fa-transform="shrink-2"></span> <?php echo e(ucfirst($appointment->status)); ?></div>
                        <?php endif; ?>
                        <?php if($appointment->status == 'approved'): ?>
                        <div class="badge bg-success fs--2"><span class="fa fa-check ms-1"
                                data-fa-transform="shrink-2"></span> <?php echo e(ucfirst($appointment->status)); ?></div>
                        <?php endif; ?>
                        <?php if($appointment->status == 'completed'): ?>
                        <div class="badge bg-info fs--2"><span class="fa fa-check ms-1"
                                data-fa-transform="shrink-2"></span> <?php echo e(ucfirst($appointment->status)); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <h4 class="mb-3 fs-0"><?php echo e(__('Customer')); ?></h4>
                            <h5 class="mb-2">
                                <?php echo e(!empty($appointment->user) ? ucfirst($appointment->user->first_name).' '.ucfirst($appointment->user->last_name) : 'User Not Available'); ?>

                            </h5>
                            <div class="mb-0 fs--1">
                                <strong><?php echo e(__('Email')); ?>:</strong> <span
                                    class="appointment_detail"><?php echo e($appointment->user->email); ?></span>
                            </div>
                            <div class="mb-0 fs--1">
                                <strong><?php echo e(__('Phone')); ?>: </strong> <span
                                    class="appointment_detail"><?php echo e($appointment->user->country_code.$appointment->user->phone); ?></span>
                            </div>
                        </div>

                        <?php if($custom->employees == 1): ?>
                            <?php if(Auth::user()->role_id == 1): ?>
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                                <h4 class="mb-3 fs-0"><?php echo e(__('Employee')); ?></h4>
                                <h5 class="mb-2">
                                    <?php echo e(!empty($appointment->employee) ? ucfirst($appointment->employee->first_name).' '.ucfirst($appointment->employee->last_name) : 'Employee Not Available'); ?>

                                </h5>
                            </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        
                        <div class="col-md-6 col-lg-4">
                            <h4 class="mb-3 fs-0"><?php echo e(__('Payment Method')); ?></h4>
                            <div class="flex-1">
                                <h5 class="mb-0">
                                    <div class="bg-secondary badge fs--2">
                                        <?php echo e(isset($appointment->payment) ? ucfirst($appointment->payment->payment_method)  : '-'); ?>

                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-8">
                <div class="card-body">
                    <div class="table-responsive fs--1">
                        <table class="table table-striped border-bottom">
                            <thead class="bg-200 text-900">
                                <tr>
                                    <th class="border-0"><?php echo e(__('Service')); ?></th>
                                    <th class="border-0 text-center"><?php echo e(__('Booking Created Date')); ?></th>
                                    <th class="border-0 text-center"><?php echo e(__('Appointment Date')); ?></th>
                                    <th class="border-0 text-center"><?php echo e(__('Start Time')); ?></th>
                                    <th class="border-0 text-center"><?php echo e(__('End Time')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-200">
                                    <td class="align-middle">
                                        <h4 class="mb-0 text-nowrap previous-serviceid" data-previous-serviceid="<?php echo e(old('employee_id')); ?>"><?php echo e(ucfirst($appointment->service_id)); ?></h4>
                                    </td>
                                    <td class="align-middle">
                                        <h4 class="text-center"><?php echo e(date($custom->date_format,strtotime($appointment->created_at))); ?></h4>
                                    </td>
                                    <td class="align-middle">
                                        <h4 class="text-center"><?php echo e(date($custom->date_format,strtotime($appointment->date))); ?></h4>
                                    </td>
                                    <td class="align-middle">
                                        <h4 class="text-center"><?php echo e(date('h:i a',strtotime($appointment->start_time))); ?>

                                        </h4>
                                    </td>
                                    <td class="align-middle">
                                        <h4 class="text-center"><?php echo e(date('h:i a',strtotime($appointment->finish_time))); ?>

                                        </h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-6 col-md-8 col-sm-12 text-center">
                            <?php if($appointment->status != 'completed'): ?>
                            <?php if($appointment->status != 'approved' && Auth::user()->role_id != 2 && $appointment->status
                            != 'cancel'): ?>
                            <button type="submit" id="approved" class="btn btn-success btn-design"><?php echo e(__('Approve Appointment')); ?></button>
                            <?php endif; ?>

                            <?php if($appointment->status != 'cancel'): ?>
                            <button type="button" class="btn btn-danger btn-design" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter"><?php echo e(__('Cancel Appointment')); ?></button>
                            <?php endif; ?>

                            <?php if($appointment->status == 'cancel'): ?>
                            <button type="button" class="btn btn-info btn-design back-btn-click"><?php echo e(__('Back')); ?></button>
                            <?php endif; ?>
                            <?php endif; ?>

                            <?php if($appointment->status == 'approved' && isset($appointment->payment->status) &&
                            $appointment->payment->status == 'success'): ?>
                            <button type="button" class="btn btn-primary btn-design" id="complete" data-bs-toggle="modal"
                                data-bs-target="#exampleModalComplete"><?php echo e(__('Complete Appointment')); ?></button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="modal fade" id="exampleModalCenter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
                <form action="<?php echo e(route('cancel',$appointment->id)); ?>" class="w-100" method="POST" id="cancel" autocomplete="off">
                    <?php echo e(csrf_field()); ?>

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__('Cancel Appointment')); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="message-text" class="col-form-label"><?php echo e(__('Reason')); ?>:</label>
                            <textarea class="form-control" id="message-text" name="cancel_reason"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="submit" class="btn btn-primary" id="cancel"><?php echo e(__('Submit')); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="exampleModalComplete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form action="<?php echo e(route('complete',$appointment->id)); ?>" class="w-100" method="POST" id="complete" autocomplete="off">
                <?php echo e(csrf_field()); ?>

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__('Complete Appointment')); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="message-text" class="col-form-label"><?php echo e(__('Note')); ?>:</label>
                            <textarea class="form-control" id="message-text" name="note"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('backend/js/appointment.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/appointments/show.blade.php ENDPATH**/ ?>