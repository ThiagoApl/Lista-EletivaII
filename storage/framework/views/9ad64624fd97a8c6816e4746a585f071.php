<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="main-content flex flex-col items-center justify-center min-h-screen w-full">
    <h1 class="text-4xl font-extrabold mb-8 text-white drop-shadow-lg page-title">Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 w-full mb-12">
        <div class="card flex flex-col items-center justify-center text-center shadow-xl animate-fade-in">
            <span class="text-5xl mb-2">📦</span>
            <span class="text-3xl font-bold text-blue-400"><?php echo e($products); ?></span>
            <span class="text-lg text-gray-200 mt-1">Produtos</span>
        </div>
        <div class="card flex flex-col items-center justify-center text-center shadow-xl animate-fade-in">
            <span class="text-5xl mb-2">🏢</span>
            <span class="text-3xl font-bold text-cyan-400"><?php echo e($suppliers); ?></span>
            <span class="text-lg text-gray-200 mt-1">Fornecedores</span>
        </div>
        <div class="card flex flex-col items-center justify-center text-center shadow-xl animate-fade-in">
            <span class="text-5xl mb-2">🧑‍💼</span>
            <span class="text-3xl font-bold text-pink-400"><?php echo e($sellers); ?></span>
            <span class="text-lg text-gray-200 mt-1">Vendedores</span>
        </div>
        <div class="card flex flex-col items-center justify-center text-center shadow-xl animate-fade-in">
            <span class="text-5xl mb-2">📥</span>
            <span class="text-3xl font-bold text-green-400"><?php echo e($stockEntries); ?></span>
            <span class="text-lg text-gray-200 mt-1">Entradas no Estoque</span>
        </div>
    </div>
    <div class="w-full bg-white/10 rounded-2xl shadow-2xl p-4 mb-8 glass animate-fade-in">
        <h2 class="text-2xl font-bold text-white mb-4">Visão Geral</h2>
        <div class="flex flex-col md:flex-row gap-8 items-center justify-between">
            <div class="w-full flex justify-center">
                <div class="w-64">
                    <canvas id="dashboardChart" height="80"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full flex flex-col md:flex-row gap-8">
        <div class="card flex-1 animate-fade-in">
            <h3 class="text-xl font-bold text-white mb-2">Bem-vindo!</h3>
            <p class="text-gray-200">Gerencie produtos, fornecedores, vendedores e entradas de estoque com facilidade. Use o menu lateral para navegar entre os módulos.</p>
        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('dashboardChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Produtos', 'Fornecedores', 'Vendedores', 'Entradas'],
                datasets: [{
                    data: [<?php echo e($products); ?>, <?php echo e($suppliers); ?>, <?php echo e($sellers); ?>, <?php echo e($stockEntries); ?>],
                    backgroundColor: [
                        'rgba(59, 130, 246, 0.9)',
                        'rgba(6, 182, 212, 0.9)',
                        'rgba(236, 72, 153, 0.9)',
                        'rgba(34, 197, 94, 0.9)'
                    ],
                    borderWidth: 6,
                    borderColor: '#23243a',
                    hoverOffset: 16,
                    cutout: '70%',
                    borderJoinStyle: 'round',
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: '#fff',
                            font: { size: 16 }
                        }
                    },
                    tooltip: {
                        backgroundColor: '#23243a',
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        borderColor: '#00adb5',
                        borderWidth: 2,
                        padding: 12,
                        caretSize: 8,
                        cornerRadius: 8
                    }
                },
                animation: {
                    animateRotate: true,
                    animateScale: true
                }
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/dashboard.blade.php ENDPATH**/ ?>