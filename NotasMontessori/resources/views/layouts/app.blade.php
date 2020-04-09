<!doctype html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Horarios</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script language="JavaScript" src="resources/views/java/Lunes.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../normalize.css">
    <link rel="stylesheet" type="text/css" href="../skeleton.css">

    <style type="text/css">
    body {
        background: linear-gradient(-45deg, #fdfdfd, #a9e9f3, #6acff3, #f5f5f5);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    </style>
    



</head>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm bg-info navbar-dark">
            <div class="container">
                    <img src="https://lh3.googleusercontent.com/eoKk1Df-VfTAwDX3SMM4i8BJApp6ZjxXfLzg95tuUd2AjG8bDj773N0x46PrITTHhgMmKQbUvJWaJr9Cb_KdA2DMXRlhq8mm5SBQlEG20uCJ8dE8aJqIh_1_w6V6XdhEv0Ov9In8TaT7hh1tMGGiFlhyRReETSwB3rFU5klPTCSB_Eq6CUWs6BYqZkF9envF85HKKvyIiB2bLHj19jIEyOlrf2ajREn32ffwKRkk3JVomwTn0fSrGTTm0tX7i5v0lJlJ-uzLq7zRSP5mnjxY1pR7nV1jGWteLaXDWwSSXyefrS4TarDe0EDfDdf53Q25BHqPDSc61QPY_AOo1hF0f5-2E0CD5wICbDj8msa6vvT4s_-jWbYCx42Qgmwil44yOx0hfGCDbHaTUR4741vX3v5hPXM0SYfl7-ZqtSYSlnCm98SYyxNpINCyw0KiAmbjPdC6WDtvvfnpHstevf0eqxxD5o69dQ1k22X569_0I_vBePOukHxd5fDyyEYlxFLespyJNt7nJjGX8MFsuTZRHMAdb-EmtwxiEPpb6kLAyvTnLdc8ZwHwrpu-vzxEx58HrTE02opRQwQhb45wYJGuG83dX2HKVJiHVYrC8bKHFPf1rwfkUiVAqTgHX1TikrXiys44-qLBoqMMbh7B9WnarFE7QW_1eNS5qtZpaUKaVw0Iyw6UI6lGNa5iLWd4ZQ=w204-h194-no" class="navbar-brand" style="height: 45px; width: 45px">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: black">
                    Colegio Montessori
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: black">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: black">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
