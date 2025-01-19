<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ asset_path('_assets/css/main.css') }}">
    </head>
    <body class="text-gray-900 font-sans antialiased">
        @yield('body')
        <script src="{{ asset_path('_assets/js/main.js') }}"></script>
    </body>
</html>
