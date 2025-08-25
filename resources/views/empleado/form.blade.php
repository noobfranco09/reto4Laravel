<div class="space-y-4">
    <!-- First Name -->
    <div>
        <label for="first_name" class="block text-sm font-medium text-gray-700">{{ __('First Name') }}</label>
        <input type="text" name="first_name" id="first_name" placeholder="First Name"
            value="{{ old('first_name', $empleado?->first_name) }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('first_name') border-red-500 @enderror">
        @error('first_name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Second Name -->
    <div>
        <label for="second_name" class="block text-sm font-medium text-gray-700">{{ __('Second Name') }}</label>
        <input type="text" name="second_name" id="second_name" placeholder="Second Name"
            value="{{ old('second_name', $empleado?->second_name) }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('second_name') border-red-500 @enderror">
        @error('second_name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- First Lastname -->
    <div>
        <label for="first_lastname" class="block text-sm font-medium text-gray-700">{{ __('First Lastname') }}</label>
        <input type="text" name="first_lastname" id="first_lastname" placeholder="First Lastname"
            value="{{ old('first_lastname', $empleado?->first_lastname) }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('first_lastname') border-red-500 @enderror">
        @error('first_lastname')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Second Lastname -->
    <div>
        <label for="second_lastname" class="block text-sm font-medium text-gray-700">{{ __('Second Lastname') }}</label>
        <input type="text" name="second_lastname" id="second_lastname" placeholder="Second Lastname"
            value="{{ old('second_lastname', $empleado?->second_lastname) }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('second_lastname') border-red-500 @enderror">
        @error('second_lastname')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Email -->
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
        <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email', $empleado?->email) }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('email') border-red-500 @enderror">
        @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- State -->
    <div>
        <label for="state" class="block text-sm font-medium text-gray-700">{{ __('State') }}</label>
        <input type="text" name="state" id="state" placeholder="State" value="{{ old('state', $empleado?->state) }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('state') border-red-500 @enderror">
        @error('state')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Submit Button -->
    <!-- <div class="mt-4">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
            {{ __('Submit') }}
        </button>

    </div> -->
</div>