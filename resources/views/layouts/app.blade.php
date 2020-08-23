<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LA COMPAÑÍA DIGITAL') }}</title>
    @include('layouts.particals.header')

</head>
<body>
    <div class="wrapper" id="app">
      
        @include('layouts.particals.navbar')

        @yield('content')

    </div>

    @include('layouts.particals.footer')
    @include('layouts.particals.scripts')


</body>
</html>
