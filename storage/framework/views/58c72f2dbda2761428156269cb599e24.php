

<?php $__env->startSection('title', 'Detalhes da Entrada'); ?>

<?php $__env->startSection('content'); ?>
<div class="main-content w-full max-w-full flex flex-col items-center justify-start min-h-screen p-0" style="background: none;">
    <div class="w-full max-w-4xl mx-auto flex flex-col gap-6 mt-12">
        <div class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 rounded-2xl shadow-2xl p-8">
            <h1 class="text-3xl font-extrabold mb-6 text-white drop-shadow-lg">Detalhes da Entrada</h1>
            <div class="grid grid-cols-2 gap-6 mb-8">
                <div>
                    <p class="text-gray-300">Produto:</p>
                    <p class="font-semibold text-lg text-white"><?php echo e($stock_entry->product->name); ?></p>
                </div>
                <div>
                    <p class="text-gray-300">Fornecedor:</p>
                    <p class="font-semibold text-lg text-white"><?php echo e($stock_entry->supplier->nome); ?></p>
                </div>
                <div>
                    <p class="text-gray-300">Quantidade:</p>
                    <p class="font-semibold text-lg text-white"><?php echo e($stock_entry->quantity); ?></p>
                </div>
                <div>
                    <p class="text-gray-300">Data:</p>
                    <p class="font-semibold text-lg text-white"><?php echo e($stock_entry->date); ?></p>
                </div>
            </div>
            <div class="flex justify-end gap-4 mt-8">
                <a href="<?php echo e(route('stock-entries.edit', $stock_entry)); ?>" class="btn bg-blue-500 hover:bg-blue-600 text-white">Editar</a>
                <form action="<?php echo e(route('stock-entries.destroy', $stock_entry)); ?>" method="POST" class="inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn bg-red-500 hover:bg-red-600 text-white" onclick="return confirm('Tem certeza que deseja excluir esta entrada?')">
                        Excluir
                    </button>
                </form>
                <a href="<?php echo e(route('stock-entries.index')); ?>" class="btn bg-gray-500 hover:bg-gray-600 text-white">Voltar</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/admin/stock_entries/show.blade.php ENDPATH**/ ?>