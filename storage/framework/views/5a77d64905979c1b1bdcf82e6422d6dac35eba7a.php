<?php $__env->startSection('content'); ?>
        <div class="container">
            <div id="app">
                <div class="login-form">
                    <div class="card ">
                        <div class="card-body">
                            <div class="main-logo text-center my-3">
                                <img src="http://www.madcoderz.com/madol/asset/images/logo-color.svg" alt="madol">
                            </div>
                            <p class="text-center mb-3">Sign in to your account</p>
                            <form method="POST" action="<?php echo e(route('login')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
									<input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="E-mail">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
									<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
									<input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="password">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
                                <div class="row form-group mt-3">
                                    <div class="col-6">
                                        <div class="custom-control custom-checkbox checkbox-info float-left mb-1">
                                            <input type="checkbox" class="custom-control-input form-check-input" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                            <label class="custom-control-label" for="remember">Remember Me!</label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="<?php echo e(route('password.request')); ?>" class="text-forgot"><i class="icon-lock"></i> Forgot password?</a>
                                    </div>
                                </div>
                                <div class="form-group my-3 row">
                                    <div class="col-12 text-right">
                                        <input type="submit" class="btn btn-custom btn-fullwidth" data-id="dashboard" value="Submit">
                                    </div>
                                </div>
                            </form>
                            <div class="form-group mb-0 mt-2">
                                <div class="col-12 text-center text-muted text-signup">
                                Don't have an account? <a href="<?php echo e(route('register')); ?>" class="text-info ml-2"><b>Sign Up</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\madcoderz\htdocs\boilar-plate\resources\views/auth/login.blade.php ENDPATH**/ ?>