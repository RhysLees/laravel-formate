@props([
    'name',
    'label',
    'showLabel' => true,
    'showBadge' => true,
    'required' => false,
    'lightLabel' => false,
])

<label for="{{ $name }}" class="flow-root text-sm font-medium leading-6 text-gray-900 {{ $showLabel ? '' : 'sr-only'}} {{ $lightLabel ? 'text-white' : 'text-black'}}">
    {{ $label }}
    <span class="float-left"></span>
    @if($showBadge && !$required)
        <span class="float-right inline-flex items-center rounded-md bg-green-100 px-2 py-1 text-xs font-medium text-green-700">
                  {{ __('optional') }}
            </span>
    @endif
    @if($showBadge && $required)
        <span class="float-right inline-flex items-center rounded-md bg-red-100 px-2 py-1 text-xs font-medium text-red-700">
                  {{ __('required') }}
            </span>
    @endif
</label>
