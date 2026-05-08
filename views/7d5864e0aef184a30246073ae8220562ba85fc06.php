
<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head',['title'=> trans('Services')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.message-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row p-2">
        <div class="col-sm-12 col-mobile">
            <div class="board-box">
                <div class="board-title">
                    <h2><?php echo e(__('List of all services')); ?> <a href="<?php echo e(route('services.create')); ?>" class="add-new-employee"><span
                                    class="fa fa-plus pull-c-right"></span></a></h2>  
                </div>
    
                <div class="table-style">
                    <div class="table-responsive">
                        <table class="table table-hover data-table" id="service-table">
                            <thead>
                            <tr>
                                <th><?php echo e(__('SR No.')); ?></th>
                                <th><?php echo e(ucfirst($custom->custom_field_service)); ?> <?php echo e(__('Name')); ?></th>
                                <?php if($custom->categories == 1): ?>
                                <th><?php echo e(ucfirst($custom->custom_field_category)); ?></th>
                                <?php endif; ?>
                                <th><?php echo e(ucfirst($custom->custom_field_service)); ?> <?php echo e(__('Fee')); ?></th>
                                <th><?php echo e(__('Description')); ?></th>
                                <th><?php echo e(__('Duration')); ?></th>
                                <th><?php echo e(__('Cancel Before')); ?></th>
                                <th><?php echo e(__('Service Image')); ?></th>
                                <th class="t-right"><?php echo e(__('Action')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($rowIndex++); ?></th>
                                    <td><?php echo e(ucfirst($service->name)); ?></td>
                                    <?php if($custom->categories == 1): ?>
                                    <td><?php echo e((ucfirst(isset($service->categories))) ? ucfirst($service->categories->name) : '-'); ?></td>
                                    <?php endif; ?>
                                    <td><?php echo e($custom->currency_icon); ?><?php echo e($service->price); ?></td>
                                    <td><?php echo e($service->description); ?></td>
                                    <td><?php echo e(Helper::timeformat($service->duration)); ?></td>
                                    <td><?php echo e(Helper::timeformat($service->cancel_before)); ?></td>
                                    <?php if(!empty($service->image)): ?>
                                    <td>
                                        <a href="javascript:;" class="btn btn-default btn-lg open-service-image" data-original="<?php echo e(asset('img/services/'.$service->image)); ?>" title="<?php echo e(__('Service Image')); ?>">
                                            <span class="glyphicon glyphicon-picture"></span>
                                        </a>
                                    </td>
                                    <?php else: ?>
                                    <td>
                                        <a href="javascript:;" class="btn btn-default btn-lg open-service-image" data-original="<?php echo e(asset('rbtheme/img/placeholder.jpeg')); ?>" title="<?php echo e(__('Service Image')); ?>">
                                            <span class="glyphicon glyphicon-picture"></span>
                                        </a>
                                    </td>
                                    <?php endif; ?>
    
                                    <td class="t-right">
                                        <a class="btn btn-default btn-lg" href="<?php echo e(route('services.show',$service->id)); ?>">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                        <a class="btn btn-default btn-lg" href="<?php echo e(route('services.edit',$service->id)); ?>">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a class="btn btn-default btn-lg" title="<?php echo e(__('employee')); ?>" href="<?php echo e(route('service.employee',$service->id)); ?>">
                                            <span class="glyphicon glyphicon-user"></span>
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
    <div class="modal fade" id="serviceImageModal" tabindex="-1" aria-labelledby="serviceImageLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceImageLabel"><?php echo e(__('Service Image')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" alt="" id="serviceImagePopup" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="serviceImageModal" tabindex="-1" aria-labelledby="serviceImageLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceImageLabel"><?php echo e(__('Service Image')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" alt="" id="serviceImagePopup" class="img-fluid lazyload" loading="lazy">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('backend/js/jquery.lazyload.min.js')); ?>"></script>
<script>
    $("img").lazyload({
        effect : "fadeIn"
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\readybook-appointment-booking-code-1.4\resources\views/services/index.blade.php ENDPATH**/ ?>