<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-orange shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/dashboard') }}">
                    <strong><img src="{{ URL::to('images/exam7.png') }}" alt="exam" width="130" height="50"></strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar
                    <ul class="navbar-nav mr-auto">
                    </ul>-->

                        <!-- Authentication Links -->
                        @guest

                            @if (Route::has('register'))

                            @endif
                        @else

                        <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <button type="submit" class="btn btn-outline-secondary mr-2">{{ __('School') }}</button>
                                <button type="submit" class="btn btn-outline-secondary mr-2" >{{ __('Class') }}</button>
                                <a href="{{ url('tests/create') }}" class="btn btn-outline-secondary mr-2">{{ __('Create a test') }}</a>
                                <button type="submit" class="btn btn-outline-secondary mr-2">{{ __('Publish') }}</button>
                                <button type="submit" class="btn btn-outline-secondary mr-4">{{ __('Reports') }}</button>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <!-- pridane mnou -->
                                    <a class="dropdown-item" href="{{ url('/dashboard/settings') }}">
                                        {{ __('User Settings') }}
                                    </a>
                                    <!-- pridane mnou -->

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>
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
</body>
</html>
