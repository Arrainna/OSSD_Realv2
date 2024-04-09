<?php $__env->startSection('title', 'Workspace'); ?>

<?php $__env->startSection('sidebar'); ?>
    <a href="<?php echo e(route('workspace.collections', ['workspace' => $selectedWorkspace->id])); ?>"
        class="list-group-items hover-white btn-menu <?php if(request()->routeIs('workspace.collections')): ?> focus <?php endif; ?>"
        style="text-decoration: none;">
        <span class="material-symbols-outlined" style="font-size: 36px;">folder</span>
        <label class="fw-normal cursor" style="color: white" for="">Collections</label>
    </a>
    <a href="<?php echo e(route('workspace.history', ['workspace' => $selectedWorkspace->id])); ?>"
        class="list-group-items hover-white  btn-menu <?php if(request()->routeIs('workspace.history')): ?> focus <?php endif; ?>"
        style="text-decoration: none;">
        <span class="material-symbols-outlined" style="font-size: 36px;">manage_history</span>
        <label class="fw-normal cursor" style="color: white" for="">History</label>
    </a>
    <a href="<?php echo e(route('workspace.trash', ['workspace' => $selectedWorkspace->id])); ?>"
        class="list-group-items hover-white  btn-menu <?php if(request()->routeIs('workspace.trash')): ?> focus <?php endif; ?>"
        style="text-decoration: none;">
        <span class="material-symbols-outlined" style="font-size: 36px;">delete</span>
        <label class="fw-normal cursor" style="color: white" for="">Trash</label>
    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="p-0 mt-4 " style="height:300px;">
        <h2 class="ps-4">Test Export Section</h2>
        <form action="<?php echo e(route('home.exportfile')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="file" name="json_file" id="json_file">
            <button type="submit">Export to Word</button>
        </form>

        <form action="<?php echo e(route('home.exportfile')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input class="mt-2" type="text" name="id" id="id"><br>
            <input class="mt-2" type="text" name="name" id="name"><br>
            <input class="mt-2" type="text" name="email" id="email"><br>
            <input class="mt-2" type="text" name="address" id="address"><br>
            <button type="submit">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OSAD\Click_Next\OSSD_Realv2\resources\views/workspace.blade.php ENDPATH**/ ?>