

<?php $__env->startSection('title', 'Cadastrar Fornecedor'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card max-w-lg w-full mx-auto mt-16">
        <h1 class="text-3xl font-extrabold mb-2 text-white drop-shadow-lg">Cadastrar Novo Fornecedor</h1>
        <p class="mb-8 text-blue-200 text-base">Preencha os dados abaixo para adicionar um novo fornecedor ao sistema.</p>
        <?php if($errors->any()): ?>
            <div class="alert alert-error mb-6">
                <ul class="list-disc ml-6">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('suppliers.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-5">
                <label for="nome" class="label text-white">Nome do Fornecedor</label>
                <input type="text" name="nome" id="nome" class="input" value="<?php echo e(old('nome', 'Fornecedor Exemplo')); ?>" placeholder="Ex: Papelaria Central" required>
            </div>
            <div class="mb-5">
                <label for="documento" class="label text-white">CNPJ/CPF</label>
                <input type="text" name="documento" id="documento" class="input" value="<?php echo e(old('documento', '11.111.111/1111-11')); ?>" placeholder="Ex: 00.000.000/0001-00" required>
            </div>
            <div class="mb-5">
                <label for="email" class="label text-white">E-mail</label>
                <input type="email" name="email" id="email" class="input" value="<?php echo e(old('email', 'exemplo@fornecedor.com')); ?>" placeholder="Ex: contato@fornecedor.com" required>
            </div>
            <div class="mb-5">
                <label for="telefone" class="label text-white">Telefone</label>
                <input type="text" name="telefone" id="telefone" class="input" value="<?php echo e(old('telefone', '(11) 99999-9999')); ?>" placeholder="Ex: (11) 99999-9999" required>
            </div>
            <div class="mb-5">
                <label for="endereco" class="label text-white">Endereço</label>
                <input type="text" name="endereco" id="endereco" class="input" value="<?php echo e(old('endereco', 'Rua das Flores, 123, Centro')); ?>" placeholder="Ex: Rua das Flores, 123, Centro" required>
            </div>
            <div class="mb-8">
                <label for="categoria" class="label text-white">Categoria (opcional)</label>
                <input type="text" name="categoria" id="categoria" class="input" value="<?php echo e(old('categoria', 'Papelaria')); ?>" placeholder="Ex: Papelaria, Limpeza, etc">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="btn">Cadastrar Fornecedor</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/admin/suppliers/create.blade.php ENDPATH**/ ?>