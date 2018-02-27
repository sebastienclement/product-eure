<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="description" content="">

    <link href="https://fonts.googleapis.com/css?family=Dosis|Permanent+Marker" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{asset('img/home/logo.png')}}" >




    @yield('bootstrap-css')
    <link rel="stylesheet" href="{{asset('css/front/reset.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/front/style.css')}}"/>
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
<header>


    <div class="wrap">

        <div class="header_flex">
          <h1><a href="{{ route('home') }}">Pr<img src="{{ asset('img/home/logo.png')}}" alt="Notre logo">duct<span>'Eure</span></a></h1>

            <button id="menu">Menu</button>
            <div id="header_right">
              <nav class="menu-co" id="sticker">

                <ul>
                    @if (Auth::guest())
                        <li><a href="{{ route('register') }}">Inscription</a></li>
                        <li><a href="{{ route('login') }}">Connexion</a></li>

                    @else
                    <li><p>{{ ucfirst(Auth::user()->name) }}</p></li>
                    @if (Auth::user()->role == 'admin')
                      <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    @endif
                    @if (Auth::user()->role == 'abonne')
                      <li><a href="{{ route('profil-perso') }}">Votre Profil</a></li>
                    @endif
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
                  @endif
                </ul>
              </nav>
            </div>
        </div>
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
    <li class="logoFlexfooter">
      <div>{!! file_get_contents(asset('img/footer/drapeau_normandie.svg')) !!}</div>
    </li>
    <li class="logoFlexfooter">
      <div>{!! file_get_contents(asset('img/footer/eure_2016.svg')) !!}</div>
    </li>
    <li id="list-footer">
      <ul>
        <li>
          <h4>
            <span>Product'</span><span class="eureh4">Eure</span>
          </h4>
        </li>
        <li class="list-footer"><a href="{{ route('contact-view') }}">Nous Contacter</a></li>
        <li class="list-footer"><a href="{{ route('mentions') }}">Mentions Légales</a></li>
        <li class="list-footer"><a href="{{ route('relax') }}">Relaxez Vous</a></li>
      </ul>
    </li>
    <li id="nouveauté">
      <h4>Nouveautés</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </li>

  </ul>
  <div class="wrap">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
  </div>
  <div class="sprite">
    <ul>
      <li>
        <div>{!! file_get_contents(asset('img/footer/facebook.svg')) !!}</div>
      </li>
      <li>
        <div>{!! file_get_contents(asset('img/footer/twitter.svg')) !!}</div>
      </li>
      <li>
        <div>{!! file_get_contents(asset('img/footer/instagram.svg')) !!}</div>
      </li>
      <li>
        <div>{!! file_get_contents(asset('img/footer/github.svg')) !!}</div>
      </li>
    </ul>
  </div>

</footer>
<div class="toHide"><a href='https://fr.freepik.com/vecteurs-libre/paysage-meadow-avec-grange_849856.htm'>Designed by Freepik</a></div>
<div class="toHide">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="{{ asset('js/front/main.js') }}" charset="utf-8"></script>

@yield('js')
</body>
