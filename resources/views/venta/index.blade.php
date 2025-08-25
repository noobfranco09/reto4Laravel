<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-semibold text-gray-700">
            {{ __('Ventas') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Mensaje de éxito -->
            @if ($message = Session::get('success'))
                <div class="mb-4 p-4 bg-green-100 border border-green-300 text-green-700 rounded">
                    {{ $message }}
                </div>
            @endif
            <div class="px-6 py-4 flex justify-between items-center border-b border-gray-200">
                <span class="font-semibold text-gray-800">{{ __('Ventas') }}</span>
                <a href="{{ route('ventas.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                    {{ __('Create New') }}
                </a>
            </div>
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="px-6 py-4 flex justify-between items-center border-b border-gray-200">
                    <span class="font-semibold text-gray-800">{{ __('Ventas') }}</span>
                </div>

                <div class="px-6 py-4 overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 table-auto">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    No</th>
                                <th
                                    class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Description</th>
                                <th
                                    class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Total</th>
                                <th
                                    class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Empleado Id</th>
                                <th
                                    class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    State</th>
                                <th
                                    class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($ventas as $venta)
                                <tr>
                                    <td class="px-4 py-2">{{ ++$i }}</td>
                                    <td class="px-4 py-2">{{ $venta->description }}</td>
                                    <td class="px-4 py-2">{{ $venta->total }}</td>
                                    <td class="px-4 py-2">{{ $venta->user_id }}</td>
                                    <td class="px-4 py-2">{{ $venta->state }}</td>
                                    <td class="px-4 py-2 flex space-x-2">
                                        <a href="{{ route('ventas.show', $venta->id) }}"
                                            class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-1 px-2 rounded">
                                            {{ __('Show') }}
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Paginación -->
            <div class="mt-4">
                {!! $ventas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>