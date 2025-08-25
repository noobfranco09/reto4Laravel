<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-semibold text-gray-700">
            {{ __('Update') }} Producto
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <!-- Card Body -->
                <div class="px-6 py-4 bg-white">
                    <form method="POST" action="{{ route('productos.update', $producto->id) }}" role="form" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf

                        @include('producto.form')

                        <!-- Botón Submit -->
                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                                {{ __('Update') }}
                            </button>
                            <a href="{{ route('productos.index') }}" class="ml-2 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded">
                                {{ __('Cancel') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
