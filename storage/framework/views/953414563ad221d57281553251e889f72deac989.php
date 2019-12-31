<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Styles -->
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
    
    <link href="<?php echo e(mix('css/style.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body class="wrapper-login">
    <div id="app">
        <?php if(auth()->guard()->guest()): ?>
        
        <?php else: ?>
        <?php echo $__env->make('partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <div class="content-wrapper">
        <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php if(auth()->guard()->guest()): ?>
        <?php else: ?>
        <?php echo $__env->make('partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
</div>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>


    <!--Plugin-->

</body>

</html>
<?php /**PATH F:\madcoderz\htdocs\boilar-plate\resources\views/layouts/app.blade.php ENDPATH**/ ?>