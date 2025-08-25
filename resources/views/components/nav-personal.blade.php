<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo / Título -->
            <div class="flex-shrink-0">
                <a href="{{ route('productos.index') }}" class="text-white font-bold text-xl">Gestión de Ventas
            </div>

            <!-- Menú de enlaces -->
            <div class="hidden md:flex space-x-4">
                <a href="{{ route('productos.index') }}" 
                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    Inicio
                </a>
                <a href="{{ route('empleados.index') }}" 
                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    Empleados
                </a>
                <a href="{{ route('productos.index') }}" 
                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    Productos
                </a>
                <a href="{{ route('ventas.index') }}" 
                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    Ventas
                </a>
            </div>

            <!-- Menú hamburguesa para móviles -->
            <div class="md:hidden flex items-center">
                <button id="menu-button" class="text-gray-300 hover:text-white focus:outline-none">
                    <!-- Icono hamburguesa -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menú móvil -->
    <div id="mobile-menu" class="hidden md:hidden px-2 pt-2 pb-3 space-y-1">
        <a href="{{ url('/') }}" 
           class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">
            Inicio
        </a>
        <a href="{{ route('empleados.index') }}" 
           class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">
            Empleados
        </a>
        <a href="{{ route('productos.index') }}" 
           class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">
            Productos
        </a>
        <a href="{{ route('ventas.index') }}" 
           class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">
            Ventas
        </a>
    </div>

    <script>
        const btn = document.getElementById('menu-button');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</nav>
