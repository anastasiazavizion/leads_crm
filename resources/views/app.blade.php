<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/js/app.js','resources/css/app.css'])
        @inertiaHead
        @routes
    </head>
    <body>
      @inertia
    </body>
</html>
