

<?php $__env->startSection('title', 'Editar Vendedor'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card max-w-lg w-full mx-auto mt-16">
        <h1 class="text-3xl font-extrabold mb-2 text-white drop-shadow-lg">Editar Vendedor</h1>
        <p class="mb-8 text-blue-200 text-base">Altere os dados do vendedor e clique em atualizar.</p>
        <?php if($errors->any()): ?>
            <div class="alert alert-error mb-6">
                <ul class="list-disc ml-6">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('sellers.update', $seller->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-5">
                <label for="nome" class="label text-white">Nome do Vendedor</label>
                <input type="text" name="nome" id="nome" class="input" value="<?php echo e(old('nome', $seller->nome)); ?>" placeholder="Ex: João Silva" required>
            </div>
            <div class="mb-5">
                <label for="foto" class="label text-white">URL da Foto</label>
                <input type="text" name="foto" id="foto" class="input" value="<?php echo e(old('foto', $seller->foto)); ?>" placeholder="https://..." required>
            </div>
            <div class="mb-5">
                <label for="codigo_identificacao" class="label text-white">Código de Identificação</label>
                <input type="text" name="codigo_identificacao" id="codigo_identificacao" class="input" value="<?php echo e(old('codigo_identificacao', $seller->codigo_identificacao)); ?>" placeholder="Ex: VEND123" required>
            </div>
            <div class="mb-5">
                <label for="comissao" class="label text-white">Comissão (%)</label>
                <input type="number" step="0.01" name="comissao" id="comissao" class="input" value="<?php echo e(old('comissao', $seller->comissao)); ?>" placeholder="Ex: 5.00" required>
            </div>
            <div class="mb-8">
                <label for="area_atuacao" class="label text-white">Área de Atuação</label>
                <input type="text" name="area_atuacao" id="area_atuacao" class="input" value="<?php echo e(old('area_atuacao', $seller->area_atuacao)); ?>" placeholder="Ex: São Paulo, Interior" required>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="btn bg-yellow-400 hover:bg-yellow-500 text-gray-900">Atualizar Vendedor</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/sellers/edit.blade.php ENDPATH**/ ?>