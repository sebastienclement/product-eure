@extends('front.layout.layout')
@section('css')
  <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
@endsection

@section('title')
    home
@endsection

@section('content')

  <section id="para">
    <div id="parallax">
        <div id="presentation">
            <div class="wrap-s">
                <p> En facilitant la vente directe, et sans intermédiaire, nous souhaitons permettre le rapprochement entre les agriculteurs et les Eurois. Pour des produits de qualités et locals, cherchez votre futur dealer chez product'Eure !</p>
            </div>
        </div>

<<<<<<< HEAD
        <div id="search-tag" class="inside-search">
            @include ('front/search/search')
            <p><a class="scrollToMap" href="#search_map">Ou bien rechercher via notre carte.</a></p>
=======
        <div id="search-tag">
            <h2>N'hésitez pas à consultez la <span><a href="{{ route('list-producer') }}">liste de tous nos producteurs</a></span>
            <p>ou<br>Trouvez celui qui vous convient en fonction de votre envie.</p>
            {!!Form::open(['route' => 'search-result','method' => 'get']) !!}
            <div id="icon-flex">

                <input id="bovin"  value="1" type="radio" name="category" >
                <div class="icon">
                    <label for="bovin" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/024-cow.svg')) !!}
                    </label>
                </div>
                <input id="porc" type="radio"  value="2" name="category" >
                <div class="icon">
                    <label for="porc" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/022-pig.svg')) !!}
                    </label>
                </div>
                <input id="volaille" type="radio"  value="3" name="category" >
                <div class="icon">
                    <label for="volaille" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/041-chicken.svg')) !!}
                    </label>
                </div>
                <input id="Ovin" type="radio" value="4" name="category" >
                    <div class="icon">
                    <label for="Ovin" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/sheep.svg')) !!}
                    </label>
                </div>
                <input id="Lait" type="radio" value="5" name="category" >
                <div class="icon">
                    <label for="Lait" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/020-milk.svg')) !!}
                    </label>
                </div>
                <input id="fruit" type="radio"  value="6" name="category" >
                <div class="icon">
                    <label for="fruit" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/023-tomato.svg')) !!}
                    </label>
                </div>
                <input id="legume" type="radio"  value="7" name="category" >
                <div class="icon">
                    <label for="legume" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/013-vegetable.svg')) !!}
                    </label>
                </div>
                <input id="plante" type="radio"  value="8" name="category" >
                <div class="icon">
                    <label for="plante" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/030-tree.svg')) !!}
                    </label>
                </div>
                <input id="miel" type="radio"  value="9" name="category" >
                <div class="icon">
                    <label for="miel" class="btn btn-default m-r-mini">{!!     file_get_contents(asset('img/icons/010-bee.svg')) !!}
                    </label>
                </div>
                <input id="prod" type="radio"  value="10" name="category" >
                <div class="icon">
                    <label for="prod" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/beer.svg')) !!}
                    </label>
                </div>
            </div>

            <p>Un produit ? Un Producteur ? Dites le nous ici, et nous ferons de notre mieux pour le trouver.</p>
            <div class="form-group">
              <i class="fa fa-search"></i>
              {!! Form::text('search', null, ['placeholder' => 'Votre recherche', 'class' => 'form-control']) !!}
              {!! $errors->first('search', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
            </div>


            {{Form::submit('Envoyer', array('class' => ''))}}
            {{Form::close()}}

            <p><a class="scrollToMap" href="#map">Ou bien rechercher via notre carte.</a></p>


>>>>>>> 74fade154e7d208523aa2d3e3d06558ae62ecec2
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
    {{-- {!! file_get_contents(asset('img/grain.svg')) !!} --}}

    <h2>La carte des producteurs de l'Eure</h2>
    <p> Trouver en un clic tous les producteurs proches de chez vous.</p>
          <div class="content">
              <div class="img-svg">
                {!! file_get_contents(asset('img/eure-region-naturelle.svg')) !!}
              </div>
          </div>
  </section>

  <section>
    <div id="parallax_2">
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
