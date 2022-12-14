@props([
    'type' => 'text',
    'label' => '',
    'required' => false,
    'placeholder' => '',
])

    <div {{ $attributes->merge(['class' => 'bg-white flex px-0 py-2']) }}>
    <div class="w-full max-w-xs">

        <div>
            <label for="{{$attributes->wire('model')->value}}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input
                    {{ $attributes->whereStartsWith('wire:model') }}
                    type={{ $type }}
                    name="{{$attributes->wire('model')->value}}"
                    id="{{$attributes->wire('model')->value}}"

                    @error($attributes->wire('model')->value)
                        class="block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md"
                        aria-invalid="true"
                        aria-describedby="email-error"
                    @else
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                    @enderror

                    placeholder="{{ $placeholder }}"
                    required="{{ $required }}"
                    />

                    @error($attributes->wire('model')->value)
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" x-description="Heroicon name: solid/exclamation-circle"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    @enderror
            </div>
            @error($attributes->wire('model')->value)
                <p
                class="mt-2 text-sm text-red-600" id="">{{ $message }}</p>
            @enderror
        </div>

    </div>
</div>
