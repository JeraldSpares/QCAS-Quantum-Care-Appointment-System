<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(__('Appointment')); ?></title>
</head>
<body>
    <div style="font-family:'Roboto,RobotoDraft,Helvetica,Arial,sans-serif',Arial,sans-serif;background:#e5e5e5;margin:0">
        <div style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;background:#e5e5e5;margin:0;padding:50px 15px">
            <table style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;max-width:700px;width:100%;margin:auto;border-top:4px solid #ffa700;border-spacing:0;background:#fff">
                <tbody>
                    <tr>
                        <td style="padding:15px 20px 0 20px;background:#fff">
                            <table style="width:100%;margin:auto;border-bottom:1px solid #ebecf2;padding-bottom:15px">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2 style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:5px 0;font-size:16px;font-weight:bold;color:#1e2538;line-height:22px"><?php echo e($title); ?></h2>
                                        </td>
                                        <?php if($appointment->status == 'pending'): ?>
                                        <td>
                                            <p style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-weight:500;font-size:14px;line-height:18px;text-align:center;color:#60b158;margin:0;background:#f1fff0;border:1px solid #60b158;border-radius:3px;width:100px;padding:5px;margin-left:auto"><?php echo e(__('Created')); ?></p>
                                        </td>
                                        <?php else: ?>
                                        <td>
                                            <?php if( $title == 'Appointment Cancellation'): ?>
                                            <p style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-weight:500;font-size:14px;line-height:18px;text-align:center;color:#fe0303;margin:0;background:#f1fff0;border:1px solid #fe0303;border-radius:3px;width:100px;padding:5px;margin-left:auto"><?php echo e(__('Canceled')); ?></p>
                                            <?php else: ?>
                                            <p style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-weight:500;font-size:14px;line-height:18px;text-align:center;color:#60b158;margin:0;background:#f1fff0;border:1px solid #60b158;border-radius:3px;width:100px;padding:5px;margin-left:auto"><?php echo e(__('Approved')); ?></p>
                                            <?php endif; ?>
                                        </td>
                                        <?php endif; ?>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px 20px">
                            <table style="width:100%;margin:auto;border-bottom:1px solid #ebecf2;padding-bottom:10px">
                                <tbody><tr>
                                    <td>
                                        <h2 style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:14px;font-weight:bold;color:#1e2538;line-height:22px">
                                            
                                            <?php if($title == 'Appointment Created'): ?>
                                            <?php echo e(__('Created')); ?>

                                            <?php elseif($title == 'Appointment Cancellation' ): ?>
                                            <?php echo e(__('Canceled')); ?>

                                            <?php else: ?>
                                            <?php echo e(__('Approved')); ?>

                                            <?php endif; ?>
                                            
                                            
                                        <?php echo e(__('by')); ?>: <u></u><?php echo e(auth()->user()->first_name.' '.auth()->user()->last_name); ?><u></u></h2>
                                    </td>
                                    <td style="text-align:right">
                                        <span style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:14px;font-weight:500;color:#73788b;line-height:16px;max-width:160px"><?php echo e(date('D, d m Y h:i A')); ?></span>
                                        
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:5px 20px 0">
                            <p style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-weight:600;font-size:14px;line-height:18px;color:#1e2538;margin-bottom:15px">
                            <?php echo e(__('Hi')); ?> <?php echo e($name); ?>,</p>

                            <p style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-weight:500;font-size:14px;line-height:18px;color:#73788b">
                            <?php if(isset($cancel_text) && $title == 'Appointment Cancellation' ): ?>
                                <?php echo e($cancel_text); ?>

                            <?php elseif($appointment->status == 'pending'): ?>
                                <?php if($customer->email == $to): ?>
                                    <?php echo e(__('You have a new appointment request. The appointment details are as below:')); ?> 
                                <?php elseif(isset($admin) && $admin->email == $to): ?>
                                    <?php echo e(__("There is a new appointment request has been placed on $company_name. The appointment details are as below:")); ?>

                                <?php elseif($employee->email == $to): ?>
                                    <?php echo e(__('Your appointment has been generated successfully. The appointment details are as below:')); ?>

                                <?php endif; ?>
                            <?php else: ?> 
                                <?php echo e(isset($approved_text) ? $approved_text : __('Your appointment has been approved.')); ?>

                            <?php endif; ?>
                            </p>

                        </td>
                    </tr>
                    <tr>
                        <td style="padding:15px 20px 0 20px">
                            <table style="width:100%;margin:auto;border-bottom:1px solid #ebecf2;padding-bottom:15px">
                                <tbody><tr>
                                    <td style="padding:0">
                                        <p style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:16px;font-weight:bold;color:#007aff;line-height:20px;margin-bottom:5px">
                                            <?php echo e(__('Customer Name')); ?>:
                                        <span style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:14px;font-weight:normal;color:#73788b;line-height:20px">
                                            <?php echo e($customer->first_name.' '.$customer->last_name); ?>

                                        </span></p>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="padding:15px 20px 0 20px">
                            <table style="width:100%;margin:auto;border-bottom:1px solid #ebecf2;padding-bottom:15px">
                                <tbody><tr>
                                    <td style="padding:0">
                                        <p style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:16px;font-weight:bold;color:#007aff;line-height:20px;margin-bottom:5px">
                                            <?php echo e(__('Customer Email')); ?>:
                                        <span style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:14px;font-weight:normal;color:#73788b;line-height:20px">
                                            <?php echo e($customer->email); ?>

                                        </span></p>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:15px 20px 0 20px">
                            <table style="width:100%;margin:auto;border-bottom:1px solid #ebecf2;padding-bottom:15px">
                                <tbody><tr>
                                    <td style="padding:0">
                                        <p style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:16px;font-weight:bold;color:#007aff;line-height:20px;margin-bottom:5px">
                                            <?php echo e(__('Employee Email')); ?>:
                                        <span style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:14px;font-weight:normal;color:#73788b;line-height:20px">
                                            <?php echo e($employee->email); ?>

                                        </span></p>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:15px 20px 0 20px">
                            <table style="width:100%;margin:auto;border-bottom:1px solid #ebecf2;padding-bottom:15px">
                                <tbody><tr>
                                    <td style="padding:0">
                                        <p style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:16px;font-weight:bold;color:#007aff;line-height:20px;margin-bottom:5px">
                                            <?php echo e(__('Appointment Date')); ?>:
                                        <span style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:14px;font-weight:normal;color:#73788b;line-height:20px">
                                            <?php echo e(date('d F Y', strtotime($appointment->date))); ?>

                                        </span></p>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:15px 20px 0 20px">
                            <table style="width:100%;margin:auto;border-bottom:1px solid #ebecf2;padding-bottom:15px">
                                <tbody><tr>
                                    <td style="padding:0">
                                        <p style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:16px;font-weight:bold;color:#007aff;line-height:20px;margin-bottom:5px">
                                            <?php echo e(__('Appointment Time')); ?>:
                                        <span style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:14px;font-weight:normal;color:#73788b;line-height:20px">
                                            <?php echo e(date('h:i:s A',strtotime($appointment->start_time)).' - '.date('h:i:s A',strtotime($appointment->finish_time))); ?>

                                        </span></p>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:15px 20px 0 20px">
                            <table style="width:100%;margin:auto;border-bottom:1px solid #ebecf2;padding-bottom:15px">
                                <tbody><tr>
                                    <td style="padding:0">
                                        <p style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:16px;font-weight:bold;color:#007aff;line-height:20px;margin-bottom:5px">
                                            <?php echo e(__('Appointment Detail')); ?>:
                                        <span style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:14px;font-weight:normal;color:#73788b;line-height:20px">
                                            <?php echo e($appointment->comments); ?>

                                        </span></p>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:15px 20px 0 20px">
                            <table style="width:100%;margin:auto;border-bottom:1px solid #ebecf2;padding-bottom:15px">
                                <tbody><tr>
                                    <td style="padding:0">
                                        <p style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:16px;font-weight:bold;color:#007aff;line-height:20px;margin-bottom:5px">
                                            <?php echo e(__('Appointment Status')); ?>:
                                        <span style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:14px;font-weight:bold;color:#73788b;line-height:20px">
                                        <?php if($appointment->status == 'pending'): ?>
                                        <?php echo e(__('Pending')); ?>

                                        <?php else: ?>
                                            <?php if($title == 'Appointment Cancellation'): ?>
                                            <?php echo e(__('Canceled')); ?>

                                            <?php else: ?>
                                            <?php echo e(__('Approved')); ?>

                                            <?php endif; ?>
                                        <?php endif; ?>
                                        </span></p>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <?php if($title == 'Appointment Cancellation'): ?>
                    <tr>
                        <td style="padding:15px 20px 0 20px">
                            <table style="width:100%;margin:auto;border-bottom:1px solid #ebecf2;padding-bottom:15px">
                                <tbody><tr>
                                    <td style="padding:0">
                                        <p style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:16px;font-weight:bold;color:#ff0000;line-height:20px;margin-bottom:5px">
                                            <?php echo e(__('Cancel Reason')); ?>:
                                        <span style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:14px;font-weight:normal;color:#4162e8;line-height:20px">
                                            <?php echo e($appointment->cancel_reason); ?>

                                        </span></p>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php echo $__env->make('mail.social_media', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/mail/appointments_email.blade.php ENDPATH**/ ?>