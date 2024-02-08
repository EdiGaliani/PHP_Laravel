<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/styles.css')); ?>">
</head>
<body>
    
    <?php echo $__env->yieldContent('content'); ?>


    <script src="<?php echo e(asset('assets/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\laragon\www\gestorTarefas\resources\views/templates/login_layout.blade.php ENDPATH**/ ?>