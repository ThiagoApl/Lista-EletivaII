

<?php $__env->startSection('title', 'Editar Entrada'); ?>

<?php $__env->startSection('content'); ?>
<div class="main-content w-full max-w-full flex flex-col items-center justify-start min-h-screen p-0" style="background: none;">
    <div class="w-full max-w-4xl mx-auto flex flex-col gap-6 mt-12">
        <div class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 rounded-2xl shadow-2xl p-8">
            <h1 class="text-3xl font-extrabold mb-6 text-white drop-shadow-lg">Editar Entrada</h1>
            <form action="<?php echo e(route('stock-entries.update', $stock_entry)); ?>" method="POST" class="w-full">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="mb-4">
                        <label for="product_id" class="block text-gray-300 font-bold mb-2">Produto</label>
                        <select name="product_id" id="product_id" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" required>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($product->id); ?>" <?php echo e($stock_entry->product_id == $product->id ? 'selected' : ''); ?>>
                                    <?php echo e($product->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="supplier_id" class="block text-gray-300 font-bold mb-2">Fornecedor</label>
                        <select name="supplier_id" id="supplier_id" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" required>
                            <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($supplier->id); ?>" <?php echo e($stock_entry->supplier_id == $supplier->id ? 'selected' : ''); ?>>
                                    <?php echo e($supplier->nome); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="quantity" class="block text-gray-300 font-bold mb-2">Quantidade</label>
                        <input type="number" name="quantity" id="quantity" value="<?php echo e($stock_entry->quantity); ?>" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" required min="1">
                    </div>
                    <div class="mb-4">
                        <label for="date" class="block text-gray-300 font-bold mb-2">Data</label>
                        <input type="date" name="date" id="date" value="<?php echo e($stock_entry->date); ?>" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" required>
                    </div>
                </div>
                <div class="flex justify-end gap-4 mt-8">
                    <a href="<?php echo e(route('stock-entries.index')); ?>" class="btn bg-gray-500 hover:bg-gray-600 text-white">Cancelar</a>
                    <button type="submit" class="btn bg-blue-500 hover:bg-blue-600 text-white">Salvar Alterações</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/admin/stock_entries/edit.blade.php ENDPATH**/ ?>