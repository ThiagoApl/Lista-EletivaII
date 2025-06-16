

<?php $__env->startSection('title', 'Detalhes da Saída'); ?>

<?php $__env->startSection('content'); ?>
<div class="w-full flex flex-col items-center justify-center min-h-[60vh] mt-16">
    <div class="card w-full max-w-md p-8 flex flex-col items-start shadow-2xl border border-gray-700 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700">
        <h1 class="text-2xl font-extrabold mb-2 text-white drop-shadow-lg">Detalhes da Saída</h1>
        <ul class="text-white w-full">
            <li><b>Produto:</b> <?php echo e($output->product->name ?? '-'); ?></li>
            <li><b>Quantidade:</b> <?php echo e($output->quantity); ?></li>
            <li><b>Motivo:</b> <?php echo e($output->reason); ?></li>
            <li><b>Data:</b> <?php echo e($output->date); ?></li>
        </ul>
        <a href="<?php echo e(route('stock-outputs.index')); ?>" class="btn mt-6">Voltar</a>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/stock_outputs/show.blade.php ENDPATH**/ ?>