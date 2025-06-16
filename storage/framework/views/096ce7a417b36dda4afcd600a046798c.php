<?php $__env->startSection('title', 'Relatórios'); ?>

<?php $__env->startSection('content'); ?>
<div class="main-content w-full max-w-full flex flex-col items-center justify-start min-h-screen p-0" style="background: none;">
    <div class="w-full max-w-7xl mx-auto flex flex-col gap-8 mt-8">
        <h1 class="text-3xl font-extrabold mb-2 text-white drop-shadow-lg">📊 Relatórios de Movimentação</h1>
        <div class="flex flex-row gap-6 mb-6">
            <div class="flex-1 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-700 rounded-2xl shadow-xl p-6 flex flex-col items-center">
                <span class="text-2xl font-bold text-white">Total de Entradas</span>
                <span class="text-4xl font-extrabold text-green-400 mt-2"><?php echo e($entries->sum('quantity')); ?></span>
            </div>
            <div class="flex-1 bg-gradient-to-br from-red-900 via-red-800 to-red-700 rounded-2xl shadow-xl p-6 flex flex-col items-center">
                <span class="text-2xl font-bold text-white">Total de Saídas</span>
                <span class="text-4xl font-extrabold text-red-400 mt-2"><?php echo e($exits->sum('quantity')); ?></span>
            </div>
            <div class="flex-1 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 rounded-2xl shadow-xl p-6 flex flex-col items-center">
                <span class="text-2xl font-bold text-white">Saldo Atual</span>
                <span class="text-4xl font-extrabold text-cyan-400 mt-2"><?php echo e($entries->sum('quantity') - $exits->sum('quantity')); ?></span>
            </div>
        </div>
        <form method="GET" class="flex flex-row gap-4 items-end mb-8">
            <div>
                <label class="text-white font-bold">De:</label>
                <input type="date" name="from" value="<?php echo e(request('from')); ?>" class="input bg-white/80 text-gray-900 w-full">
            </div>
            <div>
                <label class="text-white font-bold">Até:</label>
                <input type="date" name="to" value="<?php echo e(request('to')); ?>" class="input bg-white/80 text-gray-900 w-full">
            </div>
            <button type="submit" class="btn bg-blue-600 hover:bg-blue-700 text-white">Filtrar</button>
            <a href="<?php echo e(route('reports.index')); ?>" class="btn bg-gray-500 hover:bg-gray-600 text-white">Limpar</a>
        </form>
        <div class="flex flex-row gap-8 w-full">
            <div class="flex-1">
                <h2 class="text-xl font-bold mb-2 text-white">Entradas no Estoque</h2>
                <div class="overflow-x-auto">
                    <table class="table mb-8" style="background: rgba(30,32,48,0.98);">
                        <thead>
                            <tr>
                                <th style="color: #111; background: #fff; font-weight: bold;">Produto</th>
                                <th style="color: #111; background: #fff; font-weight: bold;">Fornecedor</th>
                                <th style="color: #111; background: #fff; font-weight: bold;">Quantidade</th>
                                <th style="color: #111; background: #fff; font-weight: bold;">Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="color: #fff; font-weight: 500;"><?php echo e($entry->product->name ?? '-'); ?></td>
                                    <td style="color: #fff; font-weight: 500;"><?php echo e($entry->supplier->nome ?? '-'); ?></td>
                                    <td style="color: #fff; font-weight: 500;"><?php echo e($entry->quantity); ?></td>
                                    <td style="color: #fff; font-weight: 500;"><?php echo e($entry->date); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex-1">
                <h2 class="text-xl font-bold mb-2 text-white">Saídas no Estoque</h2>
                <div class="overflow-x-auto">
                    <table class="table mb-8" style="background: rgba(30,32,48,0.98);">
                        <thead>
                            <tr>
                                <th style="color: #111; background: #fff; font-weight: bold;">Produto</th>
                                <th style="color: #111; background: #fff; font-weight: bold;">Motivo</th>
                                <th style="color: #111; background: #fff; font-weight: bold;">Quantidade</th>
                                <th style="color: #111; background: #fff; font-weight: bold;">Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $exits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="color: #fff; font-weight: 500;"><?php echo e($exit->product->name ?? '-'); ?></td>
                                    <td style="color: #fff; font-weight: 500;"><?php echo e($exit->reason); ?></td>
                                    <td style="color: #fff; font-weight: 500;"><?php echo e($exit->quantity); ?></td>
                                    <td style="color: #fff; font-weight: 500;"><?php echo e($exit->date); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/reports/index.blade.php ENDPATH**/ ?>