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
                <p> En facilitant la vente direct, et sans intermédiaire, nous souhaitons permettre le rapprochement entre les agriculteurs et les Eurois. Pour des produits de qualités et locales, cherchez votre futur dealer chez product'Eure !</p>
            </div>
        </div>

        <div id="search-tag">
            <h2>N'hésitez pas à consultez la <span><a href="{{ route('list-producer') }}">liste de tous nos producteurs</a></span>
            <p>ou<br>Trouvez celui qui vous convient en fonction de votre envie.</p>
            {!!Form::open(['route' => 'search-result','method' => 'get']) !!}
            <div id="icon-flex">

                <input id="bovin"  value="Bovin" type="radio" name="category" >
                <div class="icon">
                    <label for="bovin"class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/024-cow.svg')) !!}
                    </label>
                </div>
                <input id="porc" type="radio"  value="Porc" name="category" >
                <div class="icon">
                    <label for="porc"class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/022-pig.svg')) !!}
                    </label>
                </div>
                <input id="volaille" type="radio"  value="Volaille" name="category" >
                <div class="icon">
                    <label for="volaille"class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/041-chicken.svg')) !!}
                    </label>
                </div>
                <input id="Ovin" type="radio" value="Ovin" name="category" >
                    <div class="icon">
                    <label for="Ovin"  class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/sheep.svg')) !!}
                    </label>
                </div>
                <input id="Lait" type="radio" value="Produit Laitier" name="category" >
                <div class="icon">
                    <label for="Lait"  class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/020-milk.svg')) !!}
                    </label>
                </div>
                <input id="fruit" type="radio"  value="Fruit" name="category" >
                <div class="icon">
                    <label for="fruit"class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/023-tomato.svg')) !!}
                    </label>
                </div>
                <input id="legume" type="radio"  value="Légume" name="category" >
                <div class="icon">
                    <label for="legume"class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/013-vegetable.svg')) !!}
                    </label>
                </div>
                <input id="plante" type="radio"  value="Plante" name="category" >
                <div class="icon">
                    <label for="plante"class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/030-tree.svg')) !!}
                    </label>
                </div>
                <input id="miel" type="radio"  value="Miel" name="category" >
                <div class="icon">
                    <label for="miel"class="btn btn-default m-r-mini">{!!     file_get_contents(asset('img/icons/010-bee.svg')) !!}
                    </label>
                </div>
                <input id="prod" type="radio"  value="Prod" name="category" >
                <div class="icon">
                    <label for="prod"class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/beer.svg')) !!}
                    </label>
                </div>
            </div>

            <p>Un produit ? Un Producteur ? Un code postal ? Dites le nous ici, et nous ferons de notre mieux pour le trouver.</p>
            <div class="form-group">
              <i class="fa fa-search"></i>
              {!! Form::text('search', null, ['placeholder' => 'Votre recherche', 'class' => 'form-control']) !!}
              {!! $errors->first('search', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
            </div>


            {{Form::submit('Envoyer', array('class' => ''))}}
            {{Form::close()}}




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
