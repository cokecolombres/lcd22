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

        <section class="page-section-ptb bg-dark">
            <div class="container">
            <div class="row pt-40">
                <div class="col-md-6 sm-mt-30">
                <h3 class="text-white l-height-32">Noticias, opiniones y consejos sobre <i class="theme-color">los medios digitales y su uso</i></h3>
                <b>Somos tu compañía, queremos ayudarte a mejorar tu vida con tecnología. </b>
                
                <div class="col-md-10">
                <p class="mt-30">Having clarity of purpose and a clear picture of what you desire, is probably the single most important factor in achievement. Why is Clarity so important?</p>
                    <a class="button btn-block" href="#"> Comenzar ahora </a>
                    <a class="button small btn-block bg-dark" href="#"> Quiero saber más </a>
                </div>
                </div>
            </div>    
            </div>
        </section>
    </div>

    @include('layouts.particals.footer')
    @include('layouts.particals.scripts')


</body>
</html>
