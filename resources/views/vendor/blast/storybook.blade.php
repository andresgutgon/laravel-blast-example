<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @vite('resources/css/app.css')
</head>

<body>
    @include('stories.'. $component)

    @if (!empty($js))
        @foreach ($js as $key => $asset)
            <script src="{{ $asset }}"></script>
        @endforeach
    @endif
</body>
</html>
