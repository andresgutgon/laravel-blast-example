@props([
    'variation' => 'primary',
    'icon' => false,
    'iconPosition' => 'after',
    'href' => false,
])

@if (isset($href) && !empty($href))
    <a href="{!! $href !!}" {{ $attributes }} class="blast-inline-flex blast-justify-center blast-items-center blast-py-4 blast-px-2 blast-border blast-border-gray-900 blast-text-gray-900 blast-text-base blast-text-center blast-whitespace-nowrap hover:blast-bg-gray-900 hover:blast-text-white">
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
