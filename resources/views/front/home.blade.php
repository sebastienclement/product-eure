@extends('front.layout.layout')
@section('css')
  <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
@endsection

@section('title')
    Product'Eure
@endsection

@section('content')

  <section>
    <div id="parallax">
        <div id="presentation">
            <div class="wrap-s">
                <p> En facilitant la vente directe, et sans intermédiaire, nous souhaitons permettre le rapprochement entre les Eurois et Leurs agriculteurs. Pour des produits de qualités et locaux, cherchez votre futur dealer chez product'Eure !</p>
            </div>
        </div>

        <div id="search-tag" class="inside-search">
            @include ('front/form/search')
            <p><a class="scrollToMap" href="#map">Ou bien rechercher via notre carte.</a></p>
        </div>
        {{-- <div id="scene" class="animals" style="position:absolute;top:550px;left:40px;">
            <div id="mouton" data-depth="0.1" style="width:200px;height:auto;">{!! file_get_contents(asset('img/home/mouton.svg')) !!}
            </div>
        </div>
        <div id="scenev" class="animals" style="position:absolute;top:450px;right:40px;">
            <div id="vache" data-depth="0.2" style="width:200px;height:auto;">{!! file_get_contents(asset('img/home/vache.svg')) !!}
            </div>
        </div>
        <div id="abeilles" class="animals bees" style="position:absolute;top:-20px;width:400px;height:400px;">
            <div id="lottie" class="animals bees" style="width:100%;height:100%; overflow: hidden;      display:block;
                transform: translate3d(0,0,0);
                text-align: center;
                opacity: 1;" >
            </div>
        </div> --}}
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
          @if(!isset(Auth::user()->id))
            <li><button id="register-prod" class="register-btn"><a href="{{ route('register') }}">Inscrivez vous gratruitement</a></button></li>
          @endif
        </ul>
      </div>
      <div id="info-abo">
        <h2>Vous êtes Locavores ?</h2>
        <ul>
          <li>Trouvez rapidement les producteurs du département</li>
          <li>Rechercher par catégorie ou par zone géographique</li>
          <li>Inscrivez vous pour accéder à notre newsletter</li>
          <li>Et c'est entièrement gratuit, aussi</li>
          <li><button id="register-prod" class="register-btn">Inscription bientôt disponible</button></li>
        </ul>
      </div>
    </div>
  </section>

  <section id="map">
    <div class="wrap border-map">
      <h2>La carte des producteurs de l'Eure</h2>
      <p> Trouver en un clic tous les producteurs proches de chez vous.</p>
            <div class="content">
                <div class="img-svg">
                  {!! file_get_contents(asset('img/home/eure-region-naturelle.svg')) !!}
                </div>
            </div>
    </div>
    {{-- <div id="scenep" class="animals" style="position:absolute;bottom:0;right:0;">
        <div id="poule" data-depth="0.08" style="width:500px;height:auto;">{!! file_get_contents(asset('img/home/poules.svg')) !!}
        </div>
    </div> --}}
  </section>

  <section>
    <div id="parallax_2">
      <div id="news-box">
      <article class="box-1">
        <img src="<?php echo Image::url( route('home') . '/'. $article->path_img_article, 400, 300, array('crop') ); ?>" alt="Une photo de {{ $article->title }}"  />
      </article>
      <article class="box-2">
        <h3>{{$article->title}}</h3>
        <p>{{$article->content}}</p>
      </article>
      </div>
    </div>

  </section>

@endsection

@section('js')


{{-- <script src="{{ asset('js/amim/anim_un.js') }}" type="text/javascript" charset="utf-8"></script> --}}


  {{-- On fait passer nos variables php contenant le nombre de producteurs par zones
  dans des variables javascript --}}
<script type="text/javascript">
  var roumois = {{ $nbProdRoumois }}
  var neubourg = {{ $nbProdNeubourg }}
  var vexin = {{ $nbProdVexin }}
  var lieuvin = {{ $nbProdLieuvin }}
  var ouche = {{ $nbProdOuche }}
  var andre = {{ $nbProdAndre }}  // On injecte ainsi dynamiquement le nombre de producteurs par zone
  // dans un attribut data définit dans les path de la zone en question du svg
  // qu'on affiche également en javascript +css (voir main.js)
  $('#svg-roumois').data('info', roumois + ' producteurs dans cette zone');
  $('#svg-neubourg').data('info', neubourg + ' producteurs dans cette zone');
  $('#svg-vexin').data('info', vexin + ' producteurs  dans cette zone dans cette zone');
  $('#svg-lieuvin').data('info', lieuvin + ' producteurs dans cette dans cette zone');
  $('#svg-ouche').data('info', ouche + ' producteurs dans cette zone');
  $('#svg-andre').data('info', andre + ' producteurs dans cette zone');
</script>


@endsection
