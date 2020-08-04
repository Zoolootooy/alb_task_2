<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}" />
    @include('partials/links')
    <title>Laravel</title>
    @stack('header')

</head>
<body>
<div class="bg-white">

{{--    <div class="container">--}}
{{--        <div class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">--}}

{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                <ul class="navbar-nav mr-auto">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/">Main</a>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            </div>--}}

{{--        </div>--}}



{{--    </div>--}}
    @yield('content')

</div>

<script src="https://cdn.rawgit.com/RobinHerbots/Inputmask/3.2.7/dist/min/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
<script src="https://cdn.rawgit.com/andr-04/inputmask-multi/1.2.0/js/jquery.inputmask-multi.min.js" type="text/javascript"></script>
<script src="{{ asset('js/phoneMask.js') }}"></script>
</body>
</html>
