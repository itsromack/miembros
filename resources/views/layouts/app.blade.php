<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ env('APP_TITLE') }}</title>
        <link rel="stylesheet" href="/node_modules/uikit/dist/css/uikit.min.css">
        @yield('styles')
    </head>
    <body>

@yield('content')

@yield('scripts')

    </body>
</html>