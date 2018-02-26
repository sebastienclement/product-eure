<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="description" content="">

    <link href="https://fonts.googleapis.com/css?family=Roboto|Dosis|Permanent+Marker" rel="stylesheet">
    <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/home/logo.png')}}" >



    {{-- <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet"> --}}
    @yield('bootstrap-css')
    <link rel="stylesheet" href="{{asset('css/front/reset.css')}}"/>
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <link rel="stylesheet" href="{{asset('css/front/style.css')}}"/>
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
<header>


    <div class="wrap">

        <ul class="header_flex">

            <h1><a href="{{ route('home') }}">Pr<img src="{{ asset('img/home/logo.png')}}">duct<span>'Eure</span></a></h1>
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
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="{{ asset('js/front/main.js') }}" charset="utf-8"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js" charset="utf-8"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>

<script src="{{ asset('js/front/main.js') }}" charset="utf-8"></script>

@yield('js')
</body>
