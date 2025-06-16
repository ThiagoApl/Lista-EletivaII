

<?php $__env->startSection('title', 'Detalhes do Fornecedor'); ?>

<?php $__env->startSection('content'); ?>
<div class="w-full flex flex-col items-center justify-center min-h-[60vh] mt-16">
    <div class="card w-full max-w-xs md:max-w-sm p-6 flex flex-col items-start shadow-2xl border border-gray-700 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700">
        <h2 class="text-xl font-extrabold mb-4 text-white drop-shadow-lg">Detalhes do Fornecedor</h2>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Nome:</span> <span class="text-white"><?php echo e($supplier->nome); ?></span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">CNPJ:</span> <span class="text-white"><?php echo e($supplier->documento); ?></span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">E-mail:</span> <span class="text-white"><?php echo e($supplier->email); ?></span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Telefone:</span> <span class="text-white"><?php echo e($supplier->telefone); ?></span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Endereço:</span> <span class="text-white"><?php echo e($supplier->endereco); ?></span></div>
        <a href="<?php echo e(route('suppliers.index')); ?>" class="btn mt-6 w-full text-center">Voltar para Fornecedores</a>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/admin/suppliers/show.blade.php ENDPATH**/ ?>