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
  {{-- <div id="presentation">
    <div class="wrap">
      <p> Bienvenue chez Product'eure. Trouvez tout ce que notre département peut vous offrir. Viandes, Légumes, Fromage, Produits Fabriqués...
          Et bien plus encore. Achetez des produits frais et locales et soutenez nos agriculteurs.</p>
    </div>
  </div> --}}
  <section id="para">
    <div id="parallax">
      <div>
        <div id="bandeau">
          <h2>hihgiugiugiugiugiug</h2>
        <div>
        <div id="search-tag">
            <h2>N'hésitez pas à consultez la <span><a href="{{ route('list-producer') }}">liste de tous nos producteurs</a></span>
            <p>ou<br>trouvez celui qui vous convient.</p>
            {!!Form::open(['route' => 'home','method' => 'post']) !!}

            <label for="bovins"class="btn btn-default m-r-mini">Bovins
                <input id="bovins" type="radio" name="category" >
            </label>
            <label for="volaille"class="btn btn-default m-r-mini">Volaille
                <input id="volaille" type="radio" name="category" >
            </label>
            <label for="Ovins"class="btn btn-default m-r-mini">Ovins
                <input id="Ovins" type="radio" name="category" >
            </label>
            <label for="Lait"class="btn btn-default m-r-mini">Lait
                <input id="Lait" type="radio" name="category" >
            </label>
            <label for="fruit"class="btn btn-default m-r-mini">Fruit
                <input id="fruit" type="radio" name="category" >
            </label>
            <label for="fruit"class="btn btn-default m-r-mini">Légumes
                <input id="fruit" type="radio" name="category" >
            </label>
            <label for="porc"class="btn btn-default m-r-mini">Porcs
                <input id="porc" type="radio" name="category" >
            </label>
            <label for="miel"class="btn btn-default m-r-mini">Miel
                <input id="miel" type="radio" name="category" >
            </label>
            <label for="prod"class="btn btn-default m-r-mini">Produits Fermiers
                <input id="prod" type="radio" name="category" >
            </label>

            {{Form::submit('Envoyer', array('class' => ''))}}
            {{Form::close()}}









        </div>
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
          <li>Votre profil sera accessible à tous les visiteurs de Product'eur.com</li>
          <li>Et c'est entièrement gratuit</li>
        </ul>
      </div>
      <div id="info-abo">
        <h2>Vous êtes Locavores ?</h2>
        <ul>
          <li>Trouvez rapidement les producteurs du département</li>
          <li>Rechercher par catégories ou par zone géographique</li>
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
