<?php $__env->startSection('content'); ?>

<div class="class login-wrapper">
    <div class="login-box">
        <h3 class="text-center">Login</h3>
        <hr>
        <form action="<?php echo e(route('login_submit')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="text_usename" class="form-label">Usuário</label>
                <input type="text" name="text_usename" id="text_usename" class="form-control" placeholder="Usuário" required>
            </div>
            <div class="mb-3">
                <label for="text_password" class="form-label">Senha</label>
                <input type="text" name="text_password" id="text_password" class="form-control" placeholder="Senha" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-dark w-100">Enviar</button>
            </div>
        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/login_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\gestorTarefas\resources\views/login_form.blade.php ENDPATH**/ ?>