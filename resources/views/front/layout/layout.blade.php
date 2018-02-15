<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Dosis|Fugaz+One" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/front/reset.css')}}">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/front/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
<header>

<a href="{{ route('home') }}"><img src="{{ asset('img/logo.png')}}" width="200px" height="auto"></a>
    <div class="wrap">

        <ul class="header_flex">

            <h1>Product'Eure</h1>
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
<footer style="background-color: cyan;">
  <ul class="wrap">
    <div>
    <li>Product'Eure  <?php echo date('Y') ; ?></li>
      <li><a href="{{ route('contact-view') }}">Nous Contacter</a></li>
      <li><a href="{{ route('contact-view') }}">Mentions Légales</a></li>
      <li>Product'Eure  <?php echo date('Y') ; ?></li>
    </div>
    <div><img src="{{ asset('img/personnage.png')}}" style="height:200px; width:auto;"alt=""></div>
  </ul>
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
