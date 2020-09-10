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
    {{-- <div aria-live="polite" aria-atomic="true" style="min-height: 200px; position: relative; z-index: 9999;">
        <div class="toast" style="position: absolute; top: 0; right: 0;">
          <div class="toast-header">
            <img src="..." class="rounded mr-2" alt="...">
            <strong class="mr-auto">Bootstrap</strong>
            <small>11 mins ago</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>
      </div> --}}
    <div class="wrapper" id="app">
      
        

        @include('layouts.particals.navbar')

        @yield('content')

          

    </div>

    @include('layouts.particals.footer')
    @include('layouts.particals.scripts')


</body>
</html>
