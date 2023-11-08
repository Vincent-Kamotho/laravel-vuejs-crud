<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>CRUD-LARAVEL-VUEJS</title>
        <link href="{{ asset('css/app.css')}}" ref="stylesheet">
        <script src="{{ mix('js/app.js') }}"></script>
        {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
        
    </head>
    <body>
        <div id="app">
            
        </div>
    </body>
</html>
