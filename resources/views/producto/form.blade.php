<div class="space-y-4">
    <!-- Name -->
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
        <input type="text" name="name" id="name" placeholder="Name"
               value="{{ old('name', $producto?->name) }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('name') border-red-500 @enderror">
        @error('name')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Description -->
    <div>
        <label for="description" class="block text-sm font-medium text-gray-700">{{ __('Description') }}</label>
        <input type="text" name="description" id="description" placeholder="Description"
               value="{{ old('description', $producto?->description) }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('description') border-red-500 @enderror">
        @error('description')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Price -->
    <div>
        <label for="price" class="block text-sm font-medium text-gray-700">{{ __('Price') }}</label>
        <input type="text" name="price" id="price" placeholder="Price"
               value="{{ old('price', $producto?->price) }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('price') border-red-500 @enderror">
        @error('price')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Stock -->
    <div>
        <label for="stock" class="block text-sm font-medium text-gray-700">{{ __('Stock') }}</label>
        <input type="text" name="stock" id="stock" placeholder="Stock"
               value="{{ old('stock', $producto?->stock) }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('stock') border-red-500 @enderror">
        @error('stock')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- State -->
    <div>
        <label for="state" class="block text-sm font-medium text-gray-700">{{ __('State') }}</label>
        <input type="text" name="state" id="state" placeholder="State"
               value="{{ old('state', $producto?->state) }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('state') border-red-500 @enderror">
        @error('state')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Submit Button -->
    <!-- <div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
            {{ __('Submit') }}
        </button>
    </div> -->
</div>
