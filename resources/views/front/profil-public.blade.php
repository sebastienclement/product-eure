@extends('front.layout.layout')
@section('bootstrap-css')
  <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('css')
  <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
@endsection

@section('title')
  {{$producer->name}}
@endsection

@section('content')
  <div class="profilPublic">

    <section id="topContent">

      <div class="wrap containerpulic">
        <div class="profil-photo">
          @if (($producer->path_img != '/img/icons/040-farmer.svg') && ($producer->path_img != null))
            <img src="{!! Image::url( route('home') . '/'. $producer->path_img, 500, 280, array('crop') );!!}" alt="Une photo de {{ $producer->name }} "  />
          @else
            {!! file_get_contents(asset('/img/icons/040-farmer.svg')) !!}
          @endif
        </div>

        <div class="descriptionProfil" >

          <div class="listDescriptionProfil">
            <h2 id="nameProducteurProfil">{{$producer->name}}</h2>
            <p><i class="fa fa-home"></i> : {{ $producer->adresse}}</p>
            <p><i class="fa fa-crosshairs"></i> : {{$producer->zipcode}}, {{ $producer->ville}}</p>
            <p><i class="fa fa-phone-square"></i> : {{ $producer->phone}}</p>
            @if (!empty($producer->website))
              <p><a id="website" href="{{ $producer->website}}"><i class="fa fa-globe"></i> : Voir mon site web</a></p>
            @endif
            @if (!empty($producer->producer_email))
              <p><i class="fa fa-envelope"></i> : {{ $producer->producer_email}}</p>
            @endif
            @if (isset(Auth::user()->id))
              @if (Auth::user()->id == $producer->user_id)
                <p><a href="{{ route('edit-profil-view') }}" class="btn btn-success edit-btn-profil">Modifier mon profil</a></p>
              @endif
            @endif
          </div>
        </div>
      </div>
    </section>
    <section id="descriptionProfil">
      <div class="wrap ">
        <div class="badge">
          @foreach($producer->category as $cat)
            <span class="badge-secondary">{{ucfirst($cat->name)}}</span>
          @endforeach
        </div>
        <h3 class="descriptionTitle">Une petite description</h3>
        <p class="descriptionProducer">{{ ucfirst($producer->description) }}</p>
      </div>
    </section>
    <section id="itemRetailProfil" >

      <div class="itemRetailProfil wrap">

        <div class="itemProfil ">
          <h3 class="itemRetailTitle">Les produits que je propose</h3>
          @if (isset(Auth::user()->id))
            @if (Auth::user()->id == $producer->user_id)
              <p class="add-item-label">Ajouter un produit à mon profil : <a id="add-item" class="modify-element-producer btn btn-info">+</a></p>
            @endif
          @endif
          <span class="error-item-added"></span>
          <div id="form-item" class="toHide">
            @include('front.form.form-item')
          </div>
          <ul id="item-list-added">
            @foreach ($producer->item as $a)
              <li class="display-item">{{ $a->comment }}{{$a->id}}</li>
            @endforeach
          </ul>

        </div>
        <div class="retailProfil ">
          <h3 class="itemRetailTitle">Les lieux où trouver mes produits</h3>
          @if (isset(Auth::user()->id))
            @if (Auth::user()->id == $producer->user_id)
              <p class="add-retail-label">Ajouter un lieu où retrouver mes produits : <a id="add-retail" class="modify-element-producer btn btn-info">+</a></p>
            @endif
          @endif
          <span class="error-retail-added"></span>
          <div id="form-retail" class="toHide">
            @include('front.form.form-retail')
          </div>
          <ul id="retail-list-added">
            @foreach ($producer->retail as $b)
              <li class="display-retail">{{$b->lieu}}{{$b->id}}</li>
            @endforeach
          </ul>

        </div>
      </div>
    </section>
    <section>

      <div class="mapProfil wrap">
        <iframe width="100%" height="250" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?q={{$producer->adresse.' '.$producer->zipcode.' '.$producer->ville}}&key=AIzaSyDgxCPbY9e8WpR9KdkOyew_FdlmaDSCK1s" allowfullscreen>
        </iframe>

      </div>
      {{--keyApiGoogleMap// AIzaSyDgxCPbY9e8WpR9KdkOyew_FdlmaDSCK1s --}}
    </section>
  </div>

@endsection

@section('js')
  <script type="text/javascript">

    $.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    });

    // Traitement de l'insertion en BDD d'un nouvel item / à un producteur

    $('#item-submit').on('submit', function(e) {
      e.preventDefault();
      var form = $('#item-submit');

      $.ajax({
        type: 'POST',
        url: "{{ route('add-item') }}",
        data: form.serialize(),
        dataType: "json",

        beforeSend: function(){
          console.log(form.serialize());
        },

        success: function(response) {
          console.log(response);

          if (response.err !== true) {

            $('.error-item-added').html('');
            $(':input','#item-submit').not(':submit').val('');
            $('.help-block').html('');
            $('#item-list-added').append(response);

          } else {

            $('.error-item-added').html('');
            $('.error-item-added').html(response.error.comment);
          }

        },

        error: function(){
          console.error('erreur');
        }
      });
    });

    // Traitement de l'insertion en BDD d'un nouveau retail / à un producteur

    $('#retail-submit').on('submit', function(e) {
      e.preventDefault();
      var form = $('#retail-submit');

      $.ajax({
        type: 'POST',
        url: "{{ route('add-retail') }}",
        data: form.serialize(),
        dataType: "json",

        beforeSend: function(){
          console.log(form.serialize());
        },

        success: function(response) {
          console.log(response);

          if (response.err !== true) {

            $('.error-retail-added').html('');
            $(':input','#retail-submit').not(':submit').val('');
            $('.help-block').html('');
            $('#retail-list-added').append(response);

          } else {

            $('.error-retail-added').html('');
            $('.error-retail-added').html(response.error.lieu);

          }
        },

        error: function(){
          console.error('erreur');
        }
      });
    });

  </script>
@endsection
