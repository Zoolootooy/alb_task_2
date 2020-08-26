<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    @include('partials.styles')
    <title>Conference</title>
{{--    <script src="{{ asset('js/phoneMask.js') }}"></script>--}}
</head>
<body>

<div class="bg-white">
    @if(Auth::check())
        @include('auth.navbar')
    @endif

    <main>
        @yield('content')
    </main>

</div>

</body>
<footer>
    @include('partials.scripts')
    <script src="https://cdn.rawgit.com/RobinHerbots/Inputmask/3.2.7/dist/min/jquery.inputmask.bundle.min.js"
            type="text/javascript"></script>
    <script src="https://cdn.rawgit.com/andr-04/inputmask-multi/1.2.0/js/jquery.inputmask-multi.min.js"
            type="text/javascript"></script>
</footer>
</html>