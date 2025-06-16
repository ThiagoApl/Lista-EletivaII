

<?php $__env->startSection('title', 'Detalhes do Vendedor'); ?>

<?php $__env->startSection('content'); ?>
<div class="w-full flex flex-col items-center justify-center min-h-[60vh] mt-16">
    <div class="card w-full max-w-xs md:max-w-sm p-6 flex flex-col items-start shadow-2xl border border-gray-700 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700">
        <h2 class="text-xl font-extrabold mb-4 text-white drop-shadow-lg">Detalhes do Vendedor</h2>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Nome:</span> <span class="text-white"><?php echo e($seller->nome); ?></span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Código:</span> <span class="text-white"><?php echo e($seller->codigo_identificacao); ?></span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Comissão:</span> <span class="text-white"><?php echo e($seller->comissao); ?>%</span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Área de Atuação:</span> <span class="text-white"><?php echo e($seller->area_atuacao); ?></span></div>
        <div class="mb-1 w-full flex flex-row justify-between items-center"><span class="font-bold text-gray-300">Foto:</span>
            <?php if($seller->foto): ?>
                <img src="<?php echo e($seller->foto); ?>" alt="Foto" class="w-20 h-20 rounded-full object-cover border border-blue-300 shadow ml-4">
            <?php else: ?>
                <span class="text-gray-400 ml-4">-</span>
            <?php endif; ?>
        </div>
        <a href="<?php echo e(route('sellers.index')); ?>" class="btn mt-6 w-full text-center">Voltar para Vendedores</a>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/sellers/show.blade.php ENDPATH**/ ?>