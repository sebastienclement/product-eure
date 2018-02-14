@extends('front.layout.layout')
@section('css')
  <link rel="stylesheet" href="{{asset('css/front/flexslider.css')}}">
@endsection

@section('title')
    home
@endsection

@section('content')
  {{-- <section id="carousel">
    <div class="flexslider">
      <ul class="slides">
        <li>
          <img src="{{ asset('img/2.png') }}" />
        </li>
        <li>
          <img src="{{ asset('img/2.png') }}" />
        </li>
        <li>
          <img src="{{ asset('img/2.png') }}" />
        </li>
        <li>
          <img src="{{ asset('img/2.png') }}" />
        </li>
      </ul>
    </div>
  </section> --}}
  <div id="presentation">
    <div class="wrap">
      <p> Bienvenue chez Product'eure. Trouvez tout ce que notre département peut vous offrir. Viandes, Légumes, Fromage, Produits Fabriqués...
          Et bien plus encore. Achetez des produits frais et locales et soutenez nos agriculteurs.</p>
    </div>
  </div>
  <section id="para">
    <div id="parallax"></div>
  </section>

  <section id="map">
    <h1>Map de recherche.</h1>
    <div class="carte">
      <img src="{{ asset('img/4607.jpg')}}" style="height:800px; width:800px;"alt="">

    </div>
  </section>

@endsection

@section('js')
  {{-- <script src="{{ asset('js/jquery.min.js') }}" charset="utf-8"></script> --}}

  <script src="{{ asset('js/front/jquery.flexslider.js') }}" charset="utf-8"></script>


@endsection
