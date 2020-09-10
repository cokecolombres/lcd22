@extends('layouts.app')
@section('content')
<section class="">
  <div class="">
    <div class="jumbotron jumbotron-fluid bg-dark">
      <div class="container">
        <h3 class="text-white display-5 mt-50">No son sólo noticias, <br> es la posta de la <span class="theme-color">tecnología</span>.</h3>
        <p class="text-white lead">Brindamos información útil sobre los medios digitales y su uso.</p>
        <a href="{{route('login')}}" type="button" class="btn btn-warning text-dark">Ingresar</a>
      </div>
    </div>
  </div>
</section>


@endsection