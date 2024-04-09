<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="p-0 mt-4 "  style="height:300px;">
        <h2 class="ps-4">User Activity</h2>
        <ul class="p-0" style="list-style-type:none;">
        <?php
            $count = 0;
        ?>
        <li class="d-flex align-items-center custom-table" style="height: 50px">
            <div class="col-2 d-flex align-items-center ps-4" style="height:100%">
                <label label class="fs-6 fw-normal cursor" for=""><b>Username</b></label>
            </div>
            <div class="col-3 d-flex align-items-center" style="height:100%">
                <label class="fs-6 fw-normal mt-1 ms-2 cursor" for=""><b>Email</b></label>
            </div>
            <div class="col-2 d-flex align-items-center" style="height:100%">
                <label class="fs-6 fw-normal mt-1 ms-2 cursor" for=""><b>IP-Address</b></label>
            </div>
            <div class="col-2 d-flex align-items-center" style="height:100%">
                <label class="fs-6 fw-normal mt-1 ms-2 cursor" for=""><b>Description</b></label>
            </div>
            <div class="col-2 d-flex align-items-center" style="height:100%">
                <label class="fs-6 fw-normal mt-1 ms-2 cursor" for=""><b>Date-Time</b></label>
            </div>
        </li>
        <?php
            $reversed_activities = array_reverse($user_activity);
        ?>
        <?php $__currentLoopData = $reversed_activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($activity->id_user == Auth::user()->id && $count < 13): ?>
            <li class="d-flex align-items-center custom-table" style="height: 50px">
                <div class="col-2 d-flex align-items-center ps-4" style="height:100%">
                    <label label class="fs-6 fw-normal cursor" for=""><?php echo e($activity->name); ?></label>
                </div>
                <div class="col-3 d-flex align-items-center" style="height:100%">
                    <label class="fs-6 fw-normal mt-1 ms-2 cursor" for=""><?php echo e($activity->email); ?></label>
                </div>
                <div class="col-2 d-flex align-items-center" style="height:100%">
                    <label label class="fs-6 fw-normal cursor" for=""><?php echo e($activity->ip); ?></label>
                </div>
                <div class="col-2 d-flex align-items-center" style="height:100%">
                    <label class="fs-6 fw-normal mt-1 ms-2 cursor" for=""><?php echo e($activity->description); ?></label>
                </div>
                <div class="col-2 d-flex align-items-center" style="height:100%">
                    <label class="fs-6 fw-normal mt-1 ms-2 cursor" for=""><?php echo e($activity->date_time); ?></label>
                </div>
            </li>
            <?php
                $count++;
            ?>
        <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OSAD\Click_Next\OSSD_Realv2\resources\views/activity_log.blade.php ENDPATH**/ ?>