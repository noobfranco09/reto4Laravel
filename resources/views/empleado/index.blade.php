<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-semibold text-gray-700">
            {{ __('Empleados') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">

            <!-- Mensaje de éxito -->
            @if ($message = Session::get('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <!-- Card -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <!-- Card Header -->
                <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                    <span class="text-lg font-semibold">{{ __('Empleados') }}</span>
                    <a href="{{ route('empleados.create') }}" 
                       class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded">
                        {{ __('Create New') }}
                    </a>
                </div>

                <!-- Card Body -->
                <div class="px-6 py-4">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Second Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Lastname</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Second Lastname</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">State</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($empleados as $index => $empleado)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $empleado->first_name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $empleado->second_name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $empleado->first_lastname }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $empleado->second_lastname }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $empleado->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $empleado->state }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex space-x-2">
                                                <a href="{{ route('empleados.show', $empleado->id) }}"
                                                   class="bg-blue-500 hover:bg-blue-700 text-white text-xs font-semibold py-1 px-2 rounded">
                                                    {{ __('Show') }}
                                                </a>
                                                <a href="{{ route('empleados.edit', $empleado->id) }}"
                                                   class="bg-green-500 hover:bg-green-700 text-white text-xs font-semibold py-1 px-2 rounded">
                                                    {{ __('Edit') }}
                                                </a>
                                                <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-500 hover:bg-red-700 text-white text-xs font-semibold py-1 px-2 rounded">
                                                        {{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Paginación -->
                <div class="px-6 py-4">
                    {!! $empleados->withQueryString()->links() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
