<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/front/reset.css')}}">
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/front/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
<header>


    <div class="wrap">

        <ul class="nav navbar-nav navbar-right flex">
            <li><a href="{{ route('home') }}"><img src="{{ asset('img/logo.png')}}"></a></li>
            <nav class="menu-co" id="sticker">
            <li><a href="{{ route('list-item') }}">Produits</a></li>
            <li><a href="{{ route('list-producer') }}">Producteurs</a></li>
            @if (Auth::guest())
                {{-- <li><a href="{{ route('login') }}">Nos Producteurs</a></li> --}}
                <li><a href="{{ route('login') }}">Connexion</a></li>
                <li><a href="{{ route('register') }}">Inscription</a></li>
                {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
            @else
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
  <ul class="wrap">
    <li>Product'Eure  <?php echo date('Y') ; ?></li>
    <li><a href="{{ route('contact-view') }}">Nous Contacter</a></li>
    <li><a href="{{ route('contact-view') }}">Mentions Légales</a></li>
  </ul>
</footer>
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
