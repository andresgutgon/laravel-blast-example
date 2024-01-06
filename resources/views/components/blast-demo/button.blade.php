@props([
    'variation' => 'primary',
    'icon' => false,
    'iconPosition' => 'after',
    'href' => false,
])

@if (isset($href) && !empty($href))
    <a href="{!! $href !!}" {{ $attributes }} class="inline-flex justify-center items-center py-4 px-2 border border-gray-900 text-gray-900 text-base text-center whitespace-nowrap hover:bg-gray-900 hover:text-white">
        @if (isset($icon) && !empty($icon) && $iconPosition ==='before')
            @include('components.blast-demo.'. $icon)
        @endif

        @if (isset($slot) && !empty($slot) && $slot != '')
            <span>{{ $slot }}</span>
        @endisset

        @if (isset($icon) && !empty($icon) && $iconPosition ==='after')
            @include('components.blast-demo.'. $icon)
        @endif
    </a>
@else
    <button {{ $attributes }}>
        @if (isset($icon) && !empty($icon) && $iconPosition ==='before')
            @include('components.blast-demo.'. $icon)
        @endif

        @if (isset($slot) && !empty($slot) && $slot != '')
            <span>{{ $slot }}</span>
        @endisset

        @if (isset($icon) && !empty($icon) && $iconPosition ==='after')
            @include('components.blast-demo.'. $icon)
        @endif
    </button>
@endif
