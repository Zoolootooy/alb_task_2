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
                <ul class="navbar-nav ml-auto list-group-horizontal">
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
{{--                        <li>--}}
{{--                            <a class="nav-link" href="{{ route('members_list_admin') }}">--}}
{{--                                {{ __('Home') }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li>
                            <a class="nav-link" href="{{ route('admin') }}">
                                {{ __('Admin panel') }}
                            </a>
                        </li>
                        <li>
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

</div>
