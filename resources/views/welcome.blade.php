@extends('layouts.app')
@section('content')
    @component('layouts.particals.section')
        @slot('slot1')
            Forbidden
        @endslot
    @endcomponent
@endsection
