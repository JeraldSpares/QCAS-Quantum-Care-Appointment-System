<tr>
    <td style="text-align:center;padding:20px 20px 0 20px">
        <a href="<?php echo e(route('appointments.show',$appointment->id)); ?>"
            style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;background:#007aff;padding:12px 30px;color:#ffffff;font-size:14px;font-weight:700;letter-spacing:0.5px;line-height:16px;border-radius:3px;text-decoration:none;display:inline-block"
            target="_blank"
            data-saferedirecturl="https://www.google.com/url?q=https://hrms.ubsapp.com/L4mqbi0wHu/leave/view/624e707388889f627463d7a6/62fc8fd3cc91ba267575e861&amp;source=gmail&amp;ust=1661063257263000&amp;usg=AOvVaw135T0_ceGFD3IWv9TPZQim"><?php echo e(__('View Details')); ?></a>
    </td>
</tr>
<tr>
    <td style="padding:15px 20px 0 20px">
        <table style="width:100%;margin:auto;border-bottom:1px solid #ebecf2;padding-bottom:15px">
            <tbody>
                <tr>
                    <td>
                        <p
                            style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:14px;font-weight:500;color:#73788b;line-height:16px;text-align:center">
                            <?php echo e(__('if button is not working')); ?> <a
                                href="<?php echo e(route('appointments.show',$appointment->id)); ?>"
                                style="margin:0;color:#007aff;font-size:14px;font-weight:500;line-height:16px;display:inline-block"
                                target="_blank"><?php echo e(__('click here')); ?></a>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style="padding:15px 20px 10px 20px">
        <table style="width:100%;margin:auto;padding-bottom:15px">
            <tbody>
                <tr>
                    <td style="padding:0;text-align:center">
                        <p
                            style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-style:italic;font-weight:normal;font-size:14px;line-height:18px;color:#1e2538;margin:0">
                            <?php echo e(__('Please do not reply to this email. You are receiving this email because')); ?><br><?php echo e(__('you have created an account at')); ?>

                            <a href="<?php echo e(route('welcome')); ?>"
                                style="margin:0;color:#007aff;font-size:14px;font-weight:500;line-height:16px;display:inline-block;font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif"
                                target="_blank"><?php echo e($site_name); ?></a>.</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding:15px 0 0 0">
                        <p
                            style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;font-size:14px;font-weight:normal;color:#73788b;line-height:16px;text-align:center">
                            <?php echo e(__('Copyright © 2022')); ?> <a href="<?php echo e(route('welcome')); ?>"
                                style="font-family: inherit;text-decoration: none;font-size: 14px;color: #73788b;font-weight: 700;"
                                target="_blank"><?php echo e($company_name); ?></a>.<?php echo e(__(' All rights reserved')); ?>.</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding:15px 0 0 0">
                        <table style="width:100%;margin:auto;max-width:250px">
                            <tbody>
                                <tr>
                                    <td style="padding:0">
                                        <a style="display:block"><img alt="<?php echo e(__('google')); ?>" height="19px"
                                                width="auto" title="<?php echo e(__('google')); ?>"
                                                style="display:block;margin:auto"
                                                src="<?php echo e(asset('rbtheme/img/google.png')); ?>" /></a>
                                    </td>
                                    <td style="padding:0">
                                        <a style="display:block"><img alt="<?php echo e(__('gmail')); ?>" height="23px" width="auto"
                                                title="<?php echo e(__('gmail')); ?>" style="display:block;margin:auto"
                                                src="<?php echo e(asset('rbtheme/img/gmail.jpg')); ?>" /></a>
                                    </td>
                                    <td style="padding:0">
                                        <a style="display:block"><img alt="<?php echo e(__('instagram')); ?>" height="23px"
                                                width="auto" title="<?php echo e(__('instagram')); ?>"
                                                style="display:block;margin:auto"
                                                src="<?php echo e(asset('rbtheme/img/instagram.jpg')); ?>" /></a>
                                    </td>
                                    <td style="padding:0">
                                        <a style="display:block"><img alt="<?php echo e(__('linkedin')); ?>" height="26px"
                                                width="auto" title="<?php echo e(__('linkedin')); ?>"
                                                style="display:block;margin:auto"
                                                src="<?php echo e(asset('rbtheme/img/linkedIn.jpg')); ?>" /></a>
                                    </td>
                                    <td style="padding:0">
                                        <a style="display:block"><img alt="<?php echo e(__('facebook')); ?>" height="24px"
                                                width="auto" title="<?php echo e(__('facebook')); ?>"
                                                style="display:block;margin:auto"
                                                src="<?php echo e(asset('rbtheme/img/facebook.png')); ?>" /></a>
                                    </td>
                                    <td style="padding:0">
                                        <a style="display:block"><img alt="<?php echo e(__('twitter')); ?>" height="26px"
                                                width="auto" title="<?php echo e(__('twitter')); ?>"
                                                style="display:block;margin:auto"
                                                src="<?php echo e(asset('rbtheme/img/twitter.jpg')); ?>" /></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>

</tr><?php /**PATH C:\Users\jeral\OneDrive\Desktop\Quantum Care Appointment System\resources\views/mail/social_media.blade.php ENDPATH**/ ?>