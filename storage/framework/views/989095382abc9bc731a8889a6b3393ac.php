

<?php $__env->startSection('title', 'Editar Saída'); ?>

<?php $__env->startSection('content'); ?>
<div class="w-full flex flex-col items-center justify-center min-h-[60vh] mt-16">
    <div class="card w-full max-w-md p-8 flex flex-col items-start shadow-2xl border border-gray-700 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700">
        <h1 class="text-2xl font-extrabold mb-2 text-white drop-shadow-lg">Editar Saída</h1>
        <form method="POST" action="<?php echo e(route('stock-outputs.update', $output->id)); ?>" class="w-full">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-5 w-full">
                <label for="product_id" class="label text-white">Produto</label>
                <select name="product_id" id="product_id" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($product->id); ?>" <?php echo e($output->product_id == $product->id ? 'selected' : ''); ?>><?php echo e($product->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-5 w-full">
                <label for="quantity" class="label text-white">Quantidade</label>
                <input type="number" name="quantity" id="quantity" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" value="<?php echo e($output->quantity); ?>" min="1">
            </div>
            <div class="mb-5 w-full">
                <label for="date" class="label text-white">Data</label>
                <input type="date" name="date" id="date" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" value="<?php echo e($output->date); ?>">
            </div>
            <div class="mb-8 w-full">
                <label for="reason" class="label text-white">Motivo</label>
                <input type="text" name="reason" id="reason" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" value="<?php echo e($output->reason); ?>">
            </div>
            <div class="flex justify-end w-full gap-4">
                <a href="<?php echo e(route('stock-outputs.index')); ?>" class="btn bg-gray-400 hover:bg-gray-500 text-gray-900">Cancelar</a>
                <button type="submit" class="btn">Salvar</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/stock_outputs/edit.blade.php ENDPATH**/ ?>