<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(mix('css/all.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(mix('css/style.css')); ?>" rel="stylesheet">

</head>

<body class="wrapper-login">

    <?php echo $__env->yieldContent('content'); ?>
    <!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script src="<?php echo e(asset('js/all.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>
    <!--Plugin-->

</body>

</html>
<?php /**PATH F:\madcoderz\htdocs\boilar-plate\resources\views/layouts/app-log.blade.php ENDPATH**/ ?>