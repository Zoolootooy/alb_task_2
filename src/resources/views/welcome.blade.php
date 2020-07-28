@extends('partials/header')

@section('content')
    @include('map')

    @if(true)
        @include('firstForm')
    @else
        @include('secondForm')
    @endif


@endsection

@extends('partials/footer')
