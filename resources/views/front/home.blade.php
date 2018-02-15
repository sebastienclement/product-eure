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
      <div id="presentation">
        <div id="search-tag">
            <h2>N'hésitez pas à consultez la <span><a href="{{ route('list-producer') }}">liste de tous nos producteurs</a></span>
            <p>ou<br>trouvez celui qui vous convient.</p>
            {!!Form::open(['route' => 'home','method' => 'post']) !!}

              {!! Form::label('bovin', 'Bovins', ['class' => '']) !!}
              {!! Form::radio('bovin', 0, ['placeholder' => 'Nom de l\'entreprise', 'class' => 'form-control']) !!}
              {!! $errors->first('name', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}


              {!! Form::label('fruit', 'Fruits', ['class' => '']) !!}
              {!! Form::radio('fruit', 0, ['placeholder' => 'Nom de l\'entreprise', 'class' => 'form-control']) !!}
              {!! $errors->first('name', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}


              {!! Form::label('legume', 'Légumes', ['class' => '']) !!}
              {!! Form::radio('legume', 0, ['placeholder' => 'Nom de l\'entreprise', 'class' => 'form-control']) !!}
              {!! $errors->first('name', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}


              {!! Form::label('produit', 'Produits Fermiers', ['class' => '']) !!}
              {!! Form::radio('bovin', 0, ['placeholder' => 'Nom de l\'entreprise', 'class' => 'form-control']) !!}
              {!! $errors->first('name', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}


              {!! Form::label('lait', 'Produits Laitiers', ['class' => '']) !!}
              {!! Form::radio('bovin', 0, ['placeholder' => 'Nom de l\'entreprise', 'class' => 'form-control']) !!}
              {!! $errors->first('name', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}


              {!! Form::label('ovin', 'Ovins', ['class' => '']) !!}
              {!! Form::radio('ovin', 0, ['placeholder' => 'Nom de l\'entreprise', 'class' => 'form-control']) !!}
              {!! $errors->first('name', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}


              {!! Form::label('volaille', 'Volailles', ['class' => '']) !!}
              {!! Form::radio('volaille', 0, ['placeholder' => 'Nom de l\'entreprise', 'class' => 'form-control']) !!}
              {!! $errors->first('name', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}

            {!! Form::submit('Chercher', ['class' => 'btn']) !!}
            {!!Form::close()!!}









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
              <div class="img-svg"><?php include('img/eure-region-naturelle.svg'); ?></div>
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
