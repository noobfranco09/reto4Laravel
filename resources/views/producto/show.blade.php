<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-semibold text-gray-700">
            {{ $producto->name ?? __('Show') . ' ' . __('Producto') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg overflow-hidden">

                <!-- Card Header -->
                <div class="px-6 py-4 flex justify-between items-center border-b border-gray-200">
                    <span class="font-semibold text-gray-800">{{ __('Show') }} Producto</span>
                    <a href="{{ route('productos.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                        {{ __('Back') }}
                    </a>
                </div>

                <!-- Card Body -->
                <div class="px-6 py-4 space-y-4 bg-white">
                    <div>
                        <strong class="text-gray-700">{{ __('Name:') }}</strong>
                        <span class="text-gray-900">{{ $producto->name }}</span>
                    </div>

                    <div>
                        <strong class="text-gray-700">{{ __('Description:') }}</strong>
                        <span class="text-gray-900">{{ $producto->description }}</span>
                    </div>

                    <div>
                        <strong class="text-gray-700">{{ __('Price:') }}</strong>
                        <span class="text-gray-900">{{ $producto->price }}</span>
                    </div>

                    <div>
                        <strong class="text-gray-700">{{ __('Stock:') }}</strong>
                        <span class="text-gray-900">{{ $producto->stock }}</span>
                    </div>

                    <div>
                        <strong class="text-gray-700">{{ __('State:') }}</strong>
                        <span class="text-gray-900">{{ $producto->state }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
