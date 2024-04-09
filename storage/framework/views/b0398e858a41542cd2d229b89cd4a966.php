<?php $__env->startSection('title', 'Create your workspace'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row m-0" style="height: 100%">
        <form class="col-4 ps-4 pt-4" action="<?php echo e(route('workspace.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <h2>Create your workspaces</h2>
            <label label class="fs-6 fw-normal" for="">Name</label>
            <input class="textfield mt-2"
                style="padding-left: 20px; width: 100%; height:45px; border-radius: 5px; font-size: 14px;" type="text"
                name="workspace-input-name" id="workspace-input-name" placeholder="Enter workspace name" required>
            <div class="invalid-feedback">Please fill your workspace name.</div>
            <h4 class="fw-normal mt-5">Who can access your workspaces?</h4>


            <input type="radio" class="btn-check" name="access" id="personal" value="personal" checked>
            <label class="btn btn-outline d-flex p-0 cursor" for="personal" style="width:100%; height:55px;">
                <div class="col-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="me-2 mt-3" viewBox="0 0 24 24"
                        width="24" height="24">
                        <path
                            d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z">
                        </path>
                    </svg>
                </div>
                <div class="col-10 d-flex flex-column justify-content-center align-items-start">
                    <label for="personal" class="cursor">Only me</label>
                    <label for="personal" class="cursor" style="color:#808080; font-size:12px;">Personal</label>
                </div>
            </label><br>

            <input type="radio" class="btn-check" name="access" id="team" value="team">
            <label class="btn btn-outline d-flex p-0 cursor" for="team" style="width:100%; height:55px;">
                <div class="col-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="me-2 mt-3" viewBox="0 0 24 24"
                        width="24" height="24">
                        <path
                            d="M3.5 8a5.5 5.5 0 1 1 8.596 4.547 9.005 9.005 0 0 1 5.9 8.18.751.751 0 0 1-1.5.045 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.499-.044 9.005 9.005 0 0 1 5.9-8.181A5.496 5.496 0 0 1 3.5 8ZM9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm8.29 4c-.148 0-.292.01-.434.03a.75.75 0 1 1-.212-1.484 4.53 4.53 0 0 1 3.38 8.097 6.69 6.69 0 0 1 3.956 6.107.75.75 0 0 1-1.5 0 5.193 5.193 0 0 0-3.696-4.972l-.534-.16v-1.676l.41-.209A3.03 3.03 0 0 0 17.29 8Z">
                        </path>
                    </svg>
                </div>
                <div class="col-10 d-flex flex-column justify-content-center align-items-start">
                    <label for="team" class="cursor">Everyone from your team</label>
                    <label for="team" class="cursor" style="color:#808080; font-size:12px;">Team</label>
                </div>
            </label><br>

            <input type="radio" class="btn-check" name="access" id="public" value="public">
            <label class="btn btn-outline d-flex p-0 cursor" for="public" style="width:100%; height:55px;">
                <div class="col-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="me-2 mt-3" viewBox="0 0 24 24"
                        width="24" height="24">
                        <path
                            d="M12 1c6.075 0 11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12 5.925 1 12 1Zm3.241 10.5v-.001c-.1-2.708-.992-4.904-1.89-6.452a13.919 13.919 0 0 0-1.304-1.88L12 3.11l-.047.059c-.354.425-.828 1.06-1.304 1.88-.898 1.547-1.79 3.743-1.89 6.451Zm-12.728 0h4.745c.1-3.037 1.1-5.49 2.093-7.204.39-.672.78-1.233 1.119-1.673C6.11 3.329 2.746 7 2.513 11.5Zm18.974 0C21.254 7 17.89 3.329 13.53 2.623c.339.44.729 1.001 1.119 1.673.993 1.714 1.993 4.167 2.093 7.204ZM8.787 13c.182 2.478 1.02 4.5 1.862 5.953.382.661.818 1.29 1.304 1.88l.047.057.047-.059c.354-.425.828-1.06 1.304-1.88.842-1.451 1.679-3.471 1.862-5.951Zm-1.504 0H2.552a9.505 9.505 0 0 0 7.918 8.377 15.773 15.773 0 0 1-1.119-1.673C8.413 18.085 7.47 15.807 7.283 13Zm9.434 0c-.186 2.807-1.13 5.085-2.068 6.704-.39.672-.78 1.233-1.118 1.673A9.506 9.506 0 0 0 21.447 13Z">
                        </path>
                    </svg>
                </div>
                <div class="col-10 d-flex flex-column justify-content-center align-items-start">
                    <label for="public" class="cursor">Anyone on the internet</label>
                    <label for="public" class="cursor" style="color:#808080; font-size:12px;">Public</label>
                </div>
            </label><br>
            <div class="d-flex mt-2 justify-content-end">
                <div class="py-1">
                    <button class="btn btn-secondary me-2" type="button">Cancel</button>
                    <button class="btn btn-primary" type="submit">Create</button>
                </div>
            </div>
        </form>
        <div class="col-8 p-5" style="background-color:#f2f2f2;">
            <h4>Workspace</h4>
            <p>Customize this space to organize and share your API resources with your team.</p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        const checkboxes = document.querySelectorAll('input[type="radio"]');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    const associatedLabel = document.querySelector(
                        `label[for="${this.id}"].btn.btn-outline`);
                    if (associatedLabel) {
                        associatedLabel.classList.add('focused');
                    }
                } else {
                    const associatedLabel = document.querySelector(
                        `label[for="${this.id}"].btn.btn-outline`);
                    if (associatedLabel) {
                        associatedLabel.classList.remove('focused');
                    }
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OSAD\Click_Next\OSSD_Realv2\resources\views/create.blade.php ENDPATH**/ ?>