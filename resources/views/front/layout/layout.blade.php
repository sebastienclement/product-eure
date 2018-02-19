<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Dosis|Permanent+Marker" rel="stylesheet">
    {{-- <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet"> --}}
    @yield('bootstrap-css')
    <link rel="stylesheet" href="{{asset('css/front/reset.css')}}">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <link rel="stylesheet" href="{{asset('css/front/style.css')}}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
<header>

  <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png')}}" width="200px" height="auto"></a>
    <div class="wrap">

        <ul class="header_flex">

            <h1>Product<span>'Eure</span></h1>
            <div id="header_right">
              <nav class="menu-co" id="sticker">
                    @if (Auth::guest())
                        <li><a href="{{ route('register') }}">Inscription</a></li>
                        <li><a href="{{ route('login') }}">Connexion</a></li>
                    @else
                    <li><a href="">{{ ucfirst(Auth::user()->name) }}</a></li>
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
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
              </nav>
            </div>
        @endif
        </ul>
    </div>
</header>
<main>
  @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif

  @if (session('danger'))
      <div class="alert alert-danger">
          {{ session('danger') }}
      </div>
  @endif
  @yield('content')
</main>
<footer>
  <ul class="wrap flex-footer" id="flex-footer">
    {{-- <li>
      <div><img src="{{ asset('img/personnage.png')}}" style="height:150px; width:auto;"alt=""></div>

    </li> --}}
    <li>
      <div>{!! file_get_contents(asset('img/drapeau_normandie.svg')) !!}</div>
    </li>
    <li>
      <div>{!! file_get_contents(asset('img/eure_2016.svg')) !!}</div>
    </li>
    <li id="list-footer">
      <ul>
        <li>
          <h4>
            <span>Product</span>'<span>Eure</span><?php echo date('Y') ; ?>
          </h4>
        </li>
        <li class="list-footer"><a href="{{ route('contact-view') }}">Nous Contacter</a></li>
        <li class="list-footer"><a href="{{ route('mentions') }}">Mentions Légales</a></li>
        <li class="list-footer"><a href="{{ route('conditions') }}">CGU</a></li>
      </ul>
    </li>
    <div id="nouveauté">
      <h4>Nouveautés</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

  </ul>
  <div class="wrap">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
  </div>
  <div class="sprite">
    <ul>
      <li>
        <div>{!! file_get_contents(asset('img/facebook-3.svg')) !!}</div>
      </li>
      <li>
        <div>{!! file_get_contents(asset('img/twitter-3.svg')) !!}</div>
      </li>
      <li>
        <div>{!! file_get_contents(asset('img/instagram-2-1.svg')) !!}</div>
      </li>
      <li>
        <div>{!! file_get_contents(asset('img/github-icon.svg')) !!}</div>
      </li>
    </ul>
  </div>
</footer>
<div id="toHidden">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js" charset="utf-8"></script>
<script src="{{ asset('js/front/jquery.sticky.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/front/main.js') }}" charset="utf-8"></script>
@yield('js')
</body>
