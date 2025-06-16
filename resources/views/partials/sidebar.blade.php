<aside class="relative w-64 bg-white shadow-lg h-screen flex flex-col justify-between p-4 sidebar">
    <div>
        <h2 class="text-2xl font-extrabold mb-8 text-white text-center tracking-widest" style="font-family: 'Poppins', sans-serif; letter-spacing: 0.15em;">Menu</h2>
        <ul class="space-y-2">
            <li><a href="/dashboard" class="block px-4 py-2 rounded hover:bg-blue-600 hover:text-white transition text-white">🏠 Dashboard</a></li>
            <li><a href="/admin/products" class="block px-4 py-2 rounded hover:bg-blue-600 hover:text-white transition text-white">📦 Produtos</a></li>
            <li><a href="/admin/suppliers" class="block px-4 py-2 rounded hover:bg-blue-600 hover:text-white transition text-white">🏭 Fornecedores</a></li>
            <li><a href="/admin/sellers" class="block px-4 py-2 rounded hover:bg-blue-600 hover:text-white transition text-white">🧑‍💼 Vendedores</a></li>
            <li><a href="/admin/stock-entries" class="block px-4 py-2 rounded hover:bg-blue-600 hover:text-white transition text-white">➕ Entradas no Estoque</a></li>
            <li><a href="/admin/stock-outputs" class="block px-4 py-2 rounded hover:bg-blue-600 hover:text-white transition text-white">➖ Saídas no Estoque</a></li>
            <li><a href="/relatorios" class="block px-4 py-2 rounded hover:bg-blue-600 hover:text-white transition text-white">📊 Relatórios</a></li>
        </ul>
    </div>

    <div class="mt-6 pt-4 border-t border-gray-200">
        <div class="text-sm text-gray-100">
            <p class="font-semibold">👤 {{ Auth::user()->name }}</p>
            <p class="text-xs text-gray-300">{{ Auth::user()->email }}</p>

            <form method="POST" action="{{ route('logout') }}" class="mt-2">
                @csrf
                <button type="submit" class="text-red-400 hover:underline text-xs">
                    Sair da conta
                </button>
            </form>
        </div>
    </div>
</aside>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
