

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h4>Tarefas</h4>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th class="w-50">Tarefa</th>
                        <th class="w-25 text-center">Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

            <p class="text-center opacity-50 my-3">Não existem tarefas registradas</p>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates/main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\gestorTarefas\resources\views/main.blade.php ENDPATH**/ ?>