<?php $__env->startSection('title', 'Create your account'); ?>
<?php $__env->startSection('content'); ?>
    <div class="header mt-2 ms-2">
        <img src="https://cdn.discordapp.com/attachments/994685233087643719/1217121151285985350/clicknext_logo.png?ex=6602df67&is=65f06a67&hm=9b903fcb7daa77f74eb6166e5ecf0b998078316cf21d431e1dad8a376caa6082&"
            alt="" width="155px">
    </div>
    <?php if(Session::has('error')): ?>
        <div class="alert alert-error" role="alert">
            <?php echo e(Session::get('error')); ?>

        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('register')); ?>" method="POST" class="col d-flex flex-column align-items-center needs-validation"
        novalidate>
        <?php echo csrf_field(); ?>
        <div class="body d-flex flex-column justify-center align-items-center" style="width: 310px; margin-top: 20%;">
            <label for="" class="mb-4" style="font-size: 32px;">Create your account</label>
            <div class="input-group mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon me-2 mt-2" viewBox="0 0 16 16"
                    width="18" height="18">
                    <path
                        d="M10.561 8.073a6.005 6.005 0 0 1 3.432 5.142.75.75 0 1 1-1.498.07 4.5 4.5 0 0 0-8.99 0 .75.75 0 0 1-1.498-.07 6.004 6.004 0 0 1 3.431-5.142 3.999 3.999 0 1 1 5.123 0ZM10.5 5a2.5 2.5 0 1 0-5 0 2.5 2.5 0 0 0 5 0Z">
                    </path>
                </svg>
                <input class="textfield form-control"
                    style="padding-left: 40px; height: 45px; width: 100%; border-radius: 5px;" type="text" name="name"
                    id="name" placeholder="Enter your full name" required>
                <div class="invalid-feedback">Please fill your full name.</div>
            </div>
            <div class="input-group mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon me-2 mt-2" viewBox="0 0 16 16"
                    width="18" height="18">
                    <path
                        d="M1.75 2h12.5c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0 1 14.25 14H1.75A1.75 1.75 0 0 1 0 12.25v-8.5C0 2.784.784 2 1.75 2ZM1.5 12.251c0 .138.112.25.25.25h12.5a.25.25 0 0 0 .25-.25V5.809L8.38 9.397a.75.75 0 0 1-.76 0L1.5 5.809v6.442Zm13-8.181v-.32a.25.25 0 0 0-.25-.25H1.75a.25.25 0 0 0-.25.25v.32L8 7.88Z">
                    </path>
                </svg>
                <input class="textfield form-control"
                    style="padding-left: 40px; height: 45px; width: 100%; border-radius: 5px;" type="email" name="email"
                    id="email" placeholder="Enter your email" required>
                <div class="invalid-feedback">Please fill your email.</div>
            </div>
            <div class="input-group mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon me-2 mt-2" viewBox="0 0 16 16"
                    width="16" height="16">
                    <path
                        d="M4 4a4 4 0 0 1 8 0v2h.25c.966 0 1.75.784 1.75 1.75v5.5A1.75 1.75 0 0 1 12.25 15h-8.5A1.75 1.75 0 0 1 2 13.25v-5.5C2 6.784 2.784 6 3.75 6H4Zm8.25 3.5h-8.5a.25.25 0 0 0-.25.25v5.5c0 .138.112.25.25.25h8.5a.25.25 0 0 0 .25-.25v-5.5a.25.25 0 0 0-.25-.25ZM10.5 6V4a2.5 2.5 0 1 0-5 0v2Z">
                    </path>
                </svg>
                <input class="textfield form-control"
                    style="padding-left: 40px; height: 45px; width: 100%; border-radius: 5px;" type="password"
                    name="password" id="password" placeholder="Enter your password" required>
                <i class="bi bi-eye-slash icon" style="margin-left: 85%; margin-top: 6px;" id="password-icon"
                    onclick="togglePasswordVisibility('password', 'password-icon')">
                    <input type="checkbox" name="" id="password-visibility" class="visually-hidden">
                </i>
                <div class="invalid-feedback">Please fill your password.</div>
            </div>
            <div class="input-group mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon me-2 mt-2" viewBox="0 0 16 16"
                    width="16" height="16">
                    <path
                        d="M4 4a4 4 0 0 1 8 0v2h.25c.966 0 1.75.784 1.75 1.75v5.5A1.75 1.75 0 0 1 12.25 15h-8.5A1.75 1.75 0 0 1 2 13.25v-5.5C2 6.784 2.784 6 3.75 6H4Zm8.25 3.5h-8.5a.25.25 0 0 0-.25.25v5.5c0 .138.112.25.25.25h8.5a.25.25 0 0 0 .25-.25v-5.5a.25.25 0 0 0-.25-.25ZM10.5 6V4a2.5 2.5 0 1 0-5 0v2Z">
                    </path>
                </svg>
                <input class="textfield form-control"
                    style="padding-left: 40px; height: 45px; width: 100%; border-radius: 5px;" type="password"
                    name="confirm_password" id="confirm_password" placeholder="Confirm your password" required>
                <i class="bi bi-eye-slash icon" style="margin-left: 85%; margin-top: 6px;" id="confirm-password-icon"
                    onclick="togglePasswordVisibility('confirm_password', 'confirm-password-icon')">
                    <input type="checkbox" name="" id="confirm-password-visibility" class="visually-hidden">
                </i>
                <div class="invalid-feedback">Please fill your password.</div>
            </div>
            <button class="btn btn-primary" style="font-weight:400; height: 45px;" onclick="bootstrapAlert()"
                type="submit">Create your account</button>
            <div class="d-flex justify-content-center align-items-center mt-4 mb-4" style="width: 100%">
                <div class="line"></div>
                <div class="mx-2" style="color: #808080;">or</div>
                <div class="line"></div>
            </div>
            <a href="" class="link-black mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 48 48">
                    <path fill="#FFC107"
                        d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                    </path>
                    <path fill="#FF3D00"
                        d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                    </path>
                    <path fill="#4CAF50"
                        d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                    </path>
                    <path fill="#1976D2"
                        d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                    </path>
                </svg>
                <label class="ms-2 cursor" style="font-size: 14px; font-weight: 500;" for="">Sign with
                    Google</label>
            </a>
            <p class="mb-4" style="font-size: 14px; font-weight:400; color: #808080;">Already have an account?</p>
            <a class="link-primary" href="<?php echo e(route('signin')); ?>">Sign in</a>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()

        function togglePasswordVisibility(inputId, iconId) {
            var checkbox = document.getElementById(inputId);
            var icon = document.getElementById(iconId);
            var passwordField = document.getElementById(inputId);
            if (checkbox.checked) {
                icon.classList.replace('bi-eye', 'bi-eye-slash');
                passwordField.setAttribute('type', 'password');
            } else {
                icon.classList.replace('bi-eye-slash', 'bi-eye');
                passwordField.setAttribute('type', 'text');
            }
            checkbox.checked = !checkbox.checked;
        }

        $(document).ready(function() {
            $(".alert").each(function() {
                var alertElement = $(this); // เก็บอ้างอิงไว้ในตัวแปร alertElement
                setTimeout(function() {
                    alertElement.fadeOut("slow"); // ใช้ alertElement แทน $(this)
                }, 1000);
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth_default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OSAD\Click_Next\OSSD_Realv2\resources\views/auth/signup.blade.php ENDPATH**/ ?>