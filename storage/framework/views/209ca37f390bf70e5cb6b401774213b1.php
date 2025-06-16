

<?php $__env->startSection('title', 'Vendedores'); ?>

<?php $__env->startSection('content'); ?>
<div class="main-content w-full max-w-full flex flex-col items-center justify-start min-h-screen p-0" style="background: none;">
    <div class="w-full max-w-7xl mx-auto flex flex-col gap-6">
        <div class="flex flex-row items-center justify-between mt-8 mb-4">
            <div class="flex items-center gap-3" style="align-items: flex-start; min-height: 48px;">
                <span class="inline-block flex items-start pt-1" style="height: 38px;"><svg width="38" height="38" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: block;"><circle cx="8.5" cy="10" r="4" fill="#3b82f6"/><circle cx="17" cy="11" r="3" fill="#06b6d4"/><rect x="3" y="16" width="11" height="5" rx="2" fill="#3b82f6"/><rect x="13" y="15" width="8" height="6" rx="2" fill="#06b6d4"/></svg></span>
                <h1 class="page-title m-0 flex items-center" style="line-height: 1;">Vendedores</h1>
            </div>
            <a href="<?php echo e(route('sellers.create')); ?>" class="btn">+ Novo Vendedor</a>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success mb-4">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 rounded-2xl shadow-2xl p-6">
            <?php if($sellers->count()): ?>
                <table class="table" style="background: rgba(30,32,48,0.98);">
                    <thead>
                        <tr>
                            <th style="color: #111; background: #fff; font-weight: bold;">Nome</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Código</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Comissão (%)</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Área de Atuação</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Foto</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="color: #fff; font-weight: 500;"><?php echo e($seller->nome); ?></td>
                                <td style="color: #fff; font-weight: 500;"><?php echo e($seller->codigo_identificacao); ?></td>
                                <td style="color: #fff; font-weight: 500;"><?php echo e($seller->comissao); ?></td>
                                <td style="color: #fff; font-weight: 500;"><?php echo e($seller->area_atuacao); ?></td>
                                <td>
                                    <?php if($seller->foto): ?>
                                        <img src="<?php echo e($seller->foto); ?>" alt="Foto" class="w-12 h-12 rounded-full object-cover border border-blue-300 shadow">
                                    <?php else: ?>
                                        <span class="text-gray-400">-</span>
                                    <?php endif; ?>
                                </td>
                                <td class="flex flex-row gap-2">
                                    <a href="<?php echo e(route('sellers.show', $seller->id)); ?>" class="table-action no-bg view">Ver</a>
                                    <a href="<?php echo e(route('sellers.edit', $seller->id)); ?>" class="table-action no-bg edit">Editar</a>
                                    <form action="<?php echo e(route('sellers.destroy', $seller->id)); ?>" method="POST" class="inline-block" onsubmit="return confirm('Confirma exclusão do vendedor?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="table-action no-bg delete">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="text-gray-400 text-lg mt-8">Nenhum vendedor cadastrado.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/sellers/index.blade.php ENDPATH**/ ?>