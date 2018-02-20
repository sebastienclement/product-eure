@extends('front.layout.layout')
@section('css')
  <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
@endsection

@section('title')
    Accueil
@endsection

@section('content')

  <section>
    <div id="parallax">
        <div id="presentation">
            <div class="wrap-s">
                <p> En facilitant la vente directe, et sans intermédiaire, nous souhaitons permettre le rapprochement entre les agriculteurs et les Eurois. Pour des produits de qualités et locals, cherchez votre futur dealer chez product'Eure !</p>
            </div>
        </div>

        <div id="search-tag" class="inside-search">
            @include ('front/form/search')
            <p><a class="scrollToMap" href="#map">Ou bien rechercher via notre carte.</a></p>
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

  <section id="map" class="wrap">
    <h2>La carte des producteurs de l'Eure</h2>
    <p> Trouver en un clic tous les producteurs proches de chez vous.</p>
          <div class="content">
              <div class="img-svg">
                {!! file_get_contents(asset('img/home/eure-region-naturelle.svg')) !!}
              </div>
          </div>
  </section>

  <section>
    <div id="parallax_2">
      <div id="news-box">
      <article class="box-1">
        {{-- <img src="{{$article->path_img_article}}" alt="Une photo de {{$article->title}}"> --}}
        <img src="upload/articles/2018/02/personnage.png" alt="Une photo de {{$article->title}}" width="350px">
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

  {{-- On fait passer nos variables php contenant le nombre de producteurs par zones
  dans des variables javascript --}}

  <script type="text/javascript">
  var roumois = <?php echo $nbProdRoumois; ?>;
  var neubourg = <?php echo $nbProdNeubourg; ?>;
  var vexin = <?php echo $nbProdVexin; ?>;
  var lieuvin = <?php echo $nbProdLieuvin; ?>;
  var ouche = <?php echo $nbProdOuche; ?>;
  var andre = <?php echo $nbProdAndre; ?>;

  // On injecte ainsi dynamiquement le nombre de producteurs par zone
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
