<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Dosis|Fugaz+One" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/front/reset.css')}}">
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/front/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
<header>


    <div class="wrap">

        <ul class="nav navbar-nav navbar-right header_flex">
            <li><a href="{{ route('home') }}"><img src="{{ asset('img/logo.png')}}" width="100px" height="auto"></a></li>
            {{-- <li><a href="{{ route('list-producer') }}">Nos Producteurs</a></li> --}}
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
  </nav>
  <nav>

</header>
<main>
    @yield('content')
</main>
<footer>
  <ul class="wrap flex-footer" id="flex-footer">
    {{-- <li>
      <div><img src="{{ asset('img/personnage.png')}}" style="height:150px; width:auto;"alt=""></div>

    </li> --}}
    <li>
      <div><img src="{{ asset('img/Flag_of_Normandie.svg')}}" style="height:150px; width:auto;"alt=""></div>
    </li>
    <li>
      <div><img src="{{ asset('img/Eure_(27)_logo_2016.svg')}}" style="height:150px; width:auto;"alt=""></div>
    </li>
    <li id="list-footer">
      <ul>
        <li>
          <h4>
            Product'Eure  <?php echo date('Y') ; ?>
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
        <div><img src="{{ asset('img/facebook-3.svg')}}" style="height:40px; width:auto;"alt=""></div>
      </li>
      <li>
        <div><img src="{{ asset('img/twitter-3.svg')}}" style="height:40px; width:auto;"alt=""></div>
      </li>
      <li>
        <div><img src="{{ asset('img/instagram-2-1.svg')}}" style="height:40px; width:auto;"alt=""></div>
      </li>
      <li>
        <div><img src="{{ asset('img/github-icon.svg')}}" style="height:40px; width:auto;"alt=""></div>
      </li>
    </ul>
  </div>
</footer>
<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" charset="utf-8"></script>
<script src="{{ asset('js/jquery.sticky.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/front/main.js') }}" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function(){
  //$("#sticker").sticky({topSpacing:0});
});
</script>
@yield('js')
</body>
