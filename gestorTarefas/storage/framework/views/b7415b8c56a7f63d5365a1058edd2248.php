<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/bootstrap.min.css')); ?>">
</head>
<body>
    
    <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(asset('assets/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\laragon\www\gestorTarefas\resources\views/templates/main_layout.blade.php ENDPATH**/ ?>