<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ env('APP_TITLE') }}</title>
        <link rel="stylesheet" href="/node_modules/uikit/dist/css/uikit.min.css">
        <link rel="stylesheet" href="/node_modules/opentip/css/opentip.css">
        @yield('styles')
    </head>
    <body>

@yield('content')


<script src="/node_modules/uikit/dist/js/uikit-icons.min.js"></script>
<script src="/node_modules/opentip/downloads/opentip-native.js"></script>

@yield('scripts')

    </body>
</html>