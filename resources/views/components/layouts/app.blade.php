<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Author: Kılıç Ali Temiz katemiz@gmail.com">

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite('resources/css/app.css')

    </head>

    <body class='bg-gray-200'>
        @include('components.layouts.navbar')


        {{ $slot }}


        @include('components.layouts.footer')

    </body>

</html>
