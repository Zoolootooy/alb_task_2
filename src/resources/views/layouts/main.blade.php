<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    @include('partials.styles')
    <title>Conference</title>
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
</footer>
</html>
