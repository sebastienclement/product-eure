<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="stylesheet" href="{{asset('css/front/reset.css')}}">
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/front/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
<header>
<div class="" style="background-color:cyan; height:100px;">

</div>
  <nav id="sticker">
    <div class="wrap">
        <ul class="nav navbar-nav navbar-right menu-co">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('contact-view') }}">Contact</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
        </ul>
    </div>
  </nav>

</header>
<main>
    @yield('content')
</main>
<footer>
  <ul class="wrap">
    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
  </ul>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" charset="utf-8"></script>
<script src="{{ asset('js/jquery.sticky.js') }}" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#sticker").sticky({topSpacing:0});
});
</script>
@yield('js')
</body>
