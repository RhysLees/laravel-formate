@props(['name', 'helper'])

@if($helper)
    <p class="mt-2 text-xs text-gray-500" id="{{ $name .'-description'  }}">
        {{ $helper }}
    </p>
@endif
