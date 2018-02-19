@extends('front.layout.layout')
@section('css')
  <link rel="stylesheet" href="{{asset('css/front/flexslider.css')}}">
  <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
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

  <section id="para">
    <div id="parallax">
        <div id="presentation">
            <div class="wrap-s">
                <p> En facilitant la vente directe, et sans intermédiaire, nous souhaitons permettre le rapprochement entre les agriculteurs et les Eurois. Pour des produits de qualités et locals, cherchez votre futur dealer chez product'Eure !</p>
            </div>
        </div>

        <div id="search-tag" class="inside-search">
            @include ('front/search/search')
            <p><a class="scrollToMap" href="#search_map">Ou bien rechercher via notre carte.</a></p>
        </div>
    </div>
  </section>

  <section id="info-contener">
    <div id="info" class="wrap info_flex">
      <div id="info-prod">
        <h2>Vous êtes Producteur ?</h2>
        <ul>
          <li>Gagnez En visibilité</li>
          <li>Présentez vos produits</li>
          <li>Renseignez vos différents point de ventes</li>
          <li>Votre profil sera accessible à tous les visiteurs de Product'eur.fr</li>
          <li>Et c'est entièrement gratuit</li>
        </ul>
      </div>
      <div id="info-abo">
        <h2>Vous êtes Locavores ?</h2>
        <ul>
          <li>Trouvez rapidement les producteurs du département</li>
          <li>Rechercher par catégorie ou par zone géographique</li>
          <li>Inscrivez vous pour accéder à notre newsletter</li>
          <li>Et c'est entièrement gratuit, aussi</li>
        </ul>
      </div>
    </div>
  </section>

  <section id="map">
    <h1>Map de recherche.</h1>
    <div class="carte">
      <div class="full_width" id="search_map">
          <div class="content">
              <div class="img-svg">
                {!! file_get_contents(asset('img/eure-region-naturelle.svg')) !!}
              </div>
          </div>
      </div>
    </div>
  </section>

  <section>
    <div id="parallax_2">
    </div>
  </section>

@endsection

@section('js')
  {{-- <script src="{{ asset('js/jquery.min.js') }}" charset="utf-8"></script> --}}

  <script src="{{ asset('js/front/jquery.flexslider.js') }}" charset="utf-8"></script>


@endsection
