<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    @include('partials/links')
    <title>Conference</title>
    @stack('header')

</head>
<body>
<div class="bg-white">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
{{--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                                </a>--}}
{{--                                --}}
{{--                                --}}

{{--                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                                   --}}
{{--                                </div>--}}
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    {{--    @yield('content')--}}

</div>

<script src="https://cdn.rawgit.com/RobinHerbots/Inputmask/3.2.7/dist/min/jquery.inputmask.bundle.min.js"
        type="text/javascript"></script>
<script src="https://cdn.rawgit.com/andr-04/inputmask-multi/1.2.0/js/jquery.inputmask-multi.min.js"
        type="text/javascript"></script>
<script src="{{ asset('js/phoneMask.js') }}"></script>
</body>
</html>
