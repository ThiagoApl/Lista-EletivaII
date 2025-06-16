

<?php $__env->startSection('title', 'Cadastrar Produto'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card max-w-lg w-full mx-auto mt-16">
        <h1 class="text-3xl font-extrabold mb-2 text-white drop-shadow-lg">Cadastrar Novo Produto</h1>
        <p class="mb-8 text-blue-200 text-base">Preencha os dados abaixo para adicionar um novo produto ao sistema.</p>
        <?php if($errors->any()): ?>
            <div class="alert alert-error mb-6">
                <ul class="list-disc ml-6">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('products.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-5">
                <label for="name" class="label text-white">Nome do Produto</label>
                <input type="text" name="name" id="name" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="<?php echo e(old('name', 'Caneta Azul')); ?>" placeholder="Ex: Caneta Azul" required>
            </div>
            <div class="mb-5">
                <label for="code" class="label text-white">Código</label>
                <input type="text" name="code" id="code" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="<?php echo e(old('code', 'PROD001')); ?>" placeholder="Ex: PROD001" required>
            </div>
            <div class="mb-5">
                <label for="photo" class="label text-white">URL da Foto (opcional)</label>
                <input type="text" name="photo" id="photo" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="<?php echo e(old('photo', 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=facearea&w=400&h=400&q=80')); ?>" placeholder="https://...">
            </div>
            <div class="mb-5">
                <label for="stock" class="label text-white">Estoque Inicial</label>
                <input type="number" name="stock" id="stock" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="<?php echo e(old('stock', 100)); ?>" min="0" placeholder="0">
            </div>
            <div class="mb-8">
                <label for="access_count" class="label text-white">Contagem de Acessos</label>
                <input type="number" name="access_count" id="access_count" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="<?php echo e(old('access_count', 0)); ?>" min="0" placeholder="0">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="btn">Cadastrar Produto</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/products/create.blade.php ENDPATH**/ ?>