<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Laravel To Do</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Stay on top of your productivity with this cutting edge to do app!">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- CSS -->
    <link href="{{ asset('css/main.7b8d90424291b2bfe420.css') }}" rel="stylesheet">
    
</head>
<body>
<div class="app-container app-theme-white">
        <div class="app-top-bar bg-plum-plate top-bar-text-light">
            <div class="container fiori-container">
                <div class="top-bar-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" target="_blank" class="nav-link">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="nav">
                        
                        @guest
                        @if (Route::has('register'))
                        <li class="nav-item mr-1">
                            <a href="{{ route('register') }}" class="nav-link">
                                Create Account
                            </a>
                        </li>
                        @endif
                        <li class="nav-item mr-2">
                            <a href="{{ route('login') }}" class="nav-link">
                                Login
                            </a>
                        </li>
                        @else
                        <li class="nav-item mr-2">
                            <a href="javascript:void(0);" class="nav-link">
                                Welcome,  {{ Auth::user()->name }}
                            </a>
                        </li>
                         <li class="nav-item mr-2">
                           <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" class="nav-link">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
        <div class="container fiori-container">
             @yield('content')
        </div>



    </div>
    <script type="text/javascript" src="{{ asset('js/main.7b8d90424291b2bfe420.js') }}"></script>
    </body>
</html>