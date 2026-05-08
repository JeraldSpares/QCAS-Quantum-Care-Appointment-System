
<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head',['title'=> trans('Employees')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(\Illuminate\Support\Facades\URL::previous()); ?>"><h4><i class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo e(__('Back')); ?></h4></a>
    <?php echo $__env->make('includes.message-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row p-2">
        <div class="col-sm-12 col-mobile">
            <div class="board-box">
                <div class="board-title">
                    <h2><?php echo e($service->name); ?> <?php echo e(__('Service Of Employee')); ?> <a href="<?php echo e(route('employees.create')); ?>" class="add-new-employee"><span
                                    class="fa fa-plus pull-c-right"></span></a></h2>
                </div>
    
                <div class="table-style">
                    <div class="table-responsive">
                        <table class="table table-hover data-table">
                            <thead>
                            <tr>
                                <th><?php echo e(__('SR No.')); ?></th>
                                <th><?php echo e(__('First Name')); ?></th>
                                <th><?php echo e(__('Last Name')); ?></th>
                                <th><?php echo e(__('Email')); ?></th>
                                <th><?php echo e(__('Phone')); ?></th>
                               <?php if($custom->categories == 1): ?>
                                    <th><?php echo e(__('Category')); ?></th>
                               <?php endif; ?>
                                <th><?php echo e(__('Status')); ?></th>
                                <th class="custom-column"></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php if(count($employees) > 0): ?>
                                <?php $rowIndex = 1; ?>
                                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($rowIndex++); ?></td>
                                    <td><?php echo e($row->employee->first_name); ?></td>
                                    <td><?php echo e($row->employee->last_name); ?></td>
                                    <td><?php echo e($row->employee->email); ?></td>
                                    <td><?php echo e($row->employee->phone); ?></td>
                                    <?php if($custom->categories == 1): ?>
                                        <td><?php echo e(!empty($row->category) ? $row->category->name : '-'); ?></td>
                                    <?php endif; ?>
                                    <td>
                                        <?php
                                        $text = ($row->employee->status) ? 'Actvie' : 'Inactive';
                                        $btnClass = ($row->employee->status) ? 'success' : 'danger';
                                        ?>
                                        <span class="bg-<?php echo e($btnClass); ?> badge"><?php echo e($text); ?></span>
                                    </td>
                                    <td>
                                        <a class="btn btn-default btn-lg mt-0" href="<?php echo e(route('employees.show',$row->employee->id)); ?>">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
    
                    <nav aria-label="Page navigation" class="my-pagination">
                        <?php echo e(str_replace('/?', '?', $employees->render())); ?>

                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jeral\OneDrive\Desktop\readybook-appointment-booking-code-1.4\resources\views/services/employee.blade.php ENDPATH**/ ?>