

<?php $__env->startSection('title', 'Nova Entrada no Estoque'); ?>

<?php $__env->startSection('content'); ?>
<div class="w-full flex flex-col items-center justify-center min-h-[60vh] mt-16">
    <div class="card w-full max-w-md p-8 flex flex-col items-start shadow-2xl border border-gray-700 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700">
        <h1 class="text-2xl font-extrabold mb-2 text-white drop-shadow-lg">Nova Entrada no Estoque</h1>
        <form method="POST" action="<?php echo e(route('stock-entries.store')); ?>" class="w-full">
            <?php echo csrf_field(); ?>
            <div class="mb-5 w-full">
                <label for="product_id" class="label text-white">Produto</label>
                <select name="product_id" id="product_id" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full">
                    <option value="">Selecione um produto</option>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($product->id); ?>" <?php echo e(old('product_id') == $product->id ? 'selected' : ''); ?>><?php echo e($product->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['product_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="text-red-400 text-sm mt-1"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-5 w-full">
                <label for="quantity" class="label text-white">Quantidade</label>
                <input type="number" name="quantity" id="quantity" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" value="<?php echo e(old('quantity')); ?>" min="1">
                <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="text-red-400 text-sm mt-1"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-5 w-full">
                <label for="date" class="label text-white">Data</label>
                <input type="date" name="date" id="date" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" value="<?php echo e(old('date')); ?>">
                <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="text-red-400 text-sm mt-1"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-8 w-full">
                <label for="supplier_id" class="label text-white">Fornecedor</label>
                <select name="supplier_id" id="supplier_id" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full">
                    <option value="">Selecione um fornecedor</option>
                    <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($supplier->id); ?>" <?php echo e(old('supplier_id') == $supplier->id ? 'selected' : ''); ?>><?php echo e($supplier->nome); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['supplier_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="text-red-400 text-sm mt-1"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="flex justify-end w-full gap-4">
                <a href="<?php echo e(route('stock-entries.index')); ?>" class="btn bg-gray-400 hover:bg-gray-500 text-gray-900">Cancelar</a>
                <button type="submit" class="btn">Salvar</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/admin/stock_entries/create.blade.php ENDPATH**/ ?>