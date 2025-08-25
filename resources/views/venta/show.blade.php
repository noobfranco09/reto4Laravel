<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-semibold text-gray-700">
            {{ $venta->name ?? __('Show') . ' ' . __('Venta') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg overflow-hidden">

                <!-- Card Header -->
                <div class="px-6 py-4 flex justify-between items-center border-b border-gray-200">
                    <span class="font-semibold text-gray-800">{{ __('Show') }} Venta</span>
                    <a href="{{ route('ventas.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                        {{ __('Back') }}
                    </a>
                </div>

                <!-- Card Body -->
                <div class="px-6 py-4 space-y-4 bg-white">
                    <div>
                        <strong class="text-gray-700">{{ __('Description:') }}</strong>
                        <span class="text-gray-900">{{ $venta->description }}</span>
                    </div>

                    <div>
                        <strong class="text-gray-700">{{ __('Total:') }}</strong>
                        <span class="text-gray-900">{{ $venta->total }}</span>
                    </div>

                    <div>
                        <strong class="text-gray-700">{{ __('Empleado Id:') }}</strong>
                        <span class="text-gray-900">{{ $venta->empleado_id }}</span>
                    </div>

                    <div>
                        <strong class="text-gray-700">{{ __('State:') }}</strong>
                        <span class="text-gray-900">{{ $venta->state }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
