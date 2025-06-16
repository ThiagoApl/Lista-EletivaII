

<?php $__env->startSection('title', 'Cadastrar Vendedor'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card max-w-lg w-full mx-auto mt-16">
        <h1 class="text-3xl font-extrabold mb-2 text-white drop-shadow-lg">Cadastrar Novo Vendedor</h1>
        <p class="mb-8 text-blue-200 text-base">Preencha os dados abaixo para adicionar um novo vendedor ao sistema.</p>
        <?php if($errors->any()): ?>
            <div class="alert alert-error mb-6">
                <ul class="list-disc ml-6">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('sellers.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-5">
                <label for="nome" class="label text-white">Nome do Vendedor</label>
                <input type="text" name="nome" id="nome" class="input" value="<?php echo e(old('nome', 'João Silva')); ?>" placeholder="Ex: João Silva" required>
            </div>
            <div class="mb-5">
                <label for="foto" class="label text-white">URL da Foto</label>
                <input type="text" name="foto" id="foto" class="input" value="<?php echo e(old('foto', 'https://randomuser.me/api/portraits/men/1.jpg')); ?>" placeholder="https://..." required>
            </div>
            <div class="mb-5">
                <label for="codigo_identificacao" class="label text-white">Código de Identificação</label>
                <input type="text" name="codigo_identificacao" id="codigo_identificacao" class="input" value="<?php echo e(old('codigo_identificacao', 'VEND123')); ?>" placeholder="Ex: VEND123" required>
            </div>
            <div class="mb-5">
                <label for="comissao" class="label text-white">Comissão (%)</label>
                <input type="number" step="0.01" name="comissao" id="comissao" class="input" value="<?php echo e(old('comissao', '5.00')); ?>" placeholder="Ex: 5.00" required>
            </div>
            <div class="mb-8">
                <label for="area_atuacao" class="label text-white">Área de Atuação</label>
                <input type="text" name="area_atuacao" id="area_atuacao" class="input" value="<?php echo e(old('area_atuacao', 'São Paulo, Interior')); ?>" placeholder="Ex: São Paulo, Interior" required>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="btn">Cadastrar Vendedor</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/sellers/create.blade.php ENDPATH**/ ?>