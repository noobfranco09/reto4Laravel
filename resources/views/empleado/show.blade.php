<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-semibold text-gray-700">
            {{ $empleado->first_name ?? __('Show') . ' ' . __('Empleado') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <!-- Card Header -->
                <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                    <span class="text-lg font-semibold">{{ __('Show') }} Empleado</span>
                    <a href="{{ route('empleados.index') }}" 
                       class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded">
                        {{ __('Back') }}
                    </a>
                </div>

                <!-- Card Body -->
                <div class="px-6 py-4 space-y-3 bg-white">
                    <div><strong>First Name:</strong> {{ $empleado->first_name }}</div>
                    <div><strong>Second Name:</strong> {{ $empleado->second_name }}</div>
                    <div><strong>First Lastname:</strong> {{ $empleado->first_lastname }}</div>
                    <div><strong>Second Lastname:</strong> {{ $empleado->second_lastname }}</div>
                    <div><strong>Email:</strong> {{ $empleado->email }}</div>
                    <div><strong>State:</strong> {{ $empleado->state }}</div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

