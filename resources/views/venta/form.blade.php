<div class="space-y-4">
    <!-- Description -->
    <div>
        <label for="description" class="block text-sm font-medium text-gray-700">{{ __('Description') }}</label>
        <input type="text" name="description" id="description" placeholder="Description"
            value="{{ old('description', $venta?->description) }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('description') border-red-500 @enderror">
        @error('description')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>


    <!-- State -->
    <div>
        <label for="state" class="block text-sm font-medium text-gray-700">{{ __('State') }}</label>
        <input type="text" name="state" id="state" placeholder="State" value="{{ old('state', $venta?->state) }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('state') border-red-500 @enderror">
        @error('state')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="productos" class="block text-sm font    -medium text-gray-700">{{ __('Productos') }}</label>
        <select name="productos[]" multiple
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            @foreach($productos as $producto)
                <option value="{{ $producto->id }}">
                    {{ $producto->name }} - ${{ $producto->price }}
                </option>
            @endforeach
        </select>
        @error('productos')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

</div>