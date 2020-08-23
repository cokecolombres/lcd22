@extends('layouts.app')
@section('content')
    @include('layouts.particals.header_section')
    
    @component('layouts.particals.section')
        @slot('slot1')
            Forbidden
        @endslot
    @endcomponent
@endsection
