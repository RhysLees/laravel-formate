@props([
	'attributes',
	'label',
	'name',
	'helper' => null,
	'required' => false,
	'autofocus' => false,
	'disabled' => false,
	'readonly' => false,
	'showLabel' => true,
	'showBadge' => true,
	'wire' => null,
])

<div {{ $attributes->merge(['class' => '']) }}>
    <x-formate::form.elements.badge :label="$label" :name="$name" :showLabel="$showLabel" :showBadge="$showBadge" :required="$required" :lightLabel="$lightLabel" />

    <div class="relative mt-2 rounded-md shadow-sm">
        <select
                id="{{ $name }}"
                name="{{ $name }}"
                dusk="{{ $name }}"

                @if($wire) wire:model.live="{{ $wire }}" @endif

                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6
                @error($name) text-red-900 ring-red-300 placeholder:text-red-300 focus:ring-red-500 @enderror"
                @error($name) aria-invalid="true" aria-describedby="{{ $name . '-error' }}" @enderror
                @if($required) required @endif
                @if($autofocus) autofocus @endif
                @if($disabled) disabled @endif
                @if($readonly) readonly @endif
        >
            {{ $slot }}
        </select>

        <x-formate::form.elements.error-icon :name="$name" />
    </div>

    <x-formate::form.elements.helper :name="$name" :helper="$helper" />

    <x-formate::form.elements.error :name="$name" />
</div>
