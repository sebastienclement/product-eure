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
            {{-- <img src="{{asset($producer->path_img)}}" alt="Une photo de {{$producer->name}}"> --}}
            <img src="{!! Image::url( route('home') . '/'. $producer->path_img, 500, 280, array('crop') );!!}" alt="Une photo de {{ $producer->name }} "  />
          @else
            {!! file_get_contents(asset('/img/icons/040-farmer.svg')) !!}
          @endif
        </div>

        <div class="descriptionProfil" >

          <div class="listDescriptionProfil">
            <h2 id="nameProducteurProfil">{{$producer->name}}</h2>
            <p><i class="fa fa-home"></i> :{{ $producer->adresse}},{{$producer->zipcode}}</p>
            <p><i class="fa fa-home"></i> :{{ $producer->ville}}</p>
            <p><i class="fa fa-phone-square"></i> :{{ $producer->phone}}</p>
            @if (!empty($producer->website))
              <p><i class="fa fa-phone-square"></i> :{{ $producer->website}}</p>
            @endif
            @if (!empty($producer->producer_email))
              <p><i class="fa fa-envelope"></i> :{{ $producer->producer_email}}</p>
            @endif
            @if (isset(Auth::user()->id))
              @if (Auth::user()->id == $producer->user_id)
                <p><a href="{{ route('edit-profil-view') }}" class="btn btn-success">Modifier mon profil</a></p>
              @endif
            @endif
          </div>
        </div>
      </div>
    </section>
    <section id="descriptionProfil">
      <div class="wrap ">
        <h3 class="itemRetailTitle">Une petite description</h3>
        <p>{{ $producer->description}}</p>
      </div>
    </section>
    <section id="itemRetailProfil" >

      <div class="itemRetailProfil wrap">

        <div class="itemProfil ">
          @if (isset(Auth::user()->id))
            @if (Auth::user()->id == $producer->user_id)
              <p><a id="add-item" class="btn btn-info">Ajouter un produit</a></p>
            @endif
          @endif
          <h3 class="itemRetailTitle">Voici les articles que nous proposons</h3>
          <ul>
            @foreach ($producer->item as $a)
              <li class="display-item">{{ $a->comment }}</li>
            @endforeach
          </ul>
          <div id="form-item" class="">
            @include('front.form.form-item')
          </div>
        </div>
        <div class="retailProfil ">
          @if (isset(Auth::user()->id))
            @if (Auth::user()->id == $producer->user_id)
              <p><a id="add-retail" class="btn btn-info">Ajouter un lieu de vente</a></p>
            @endif
          @endif
          <h3 class="itemRetailTitle">Les Points de vente pour nos produits</h3>
          <ul>
            @foreach ($producer->retail as $b)
              <li class="display-retail">{{$b->lieu}}</li>
            @endforeach
          </ul>
          <div id="form-retail" class="">
            @include('front.form.form-retail')
          </div>
        </div>
      </div>
    </section>
    <section>

      <div class="mapProfil wrap">
        <iframe width="100%" height="250" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?q={{$producer->name.' '.$producer->adresse.' '.$producer->ville.' '.$producer->zipcode}}&key=AIzaSyDgxCPbY9e8WpR9KdkOyew_FdlmaDSCK1s" allowfullscreen>
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


    $('#item-submit').on('submit', function(e) {
      e.preventDefault();
      var form = $('#item-submit');

      $.ajax({
        type: 'POST',
        url: "{{ route('add-item') }}",
        data: form.serialize(),
        dataType: "json",

        beforeSend: function(){
          console.log('dis moi ok');
          console.log(form.serialize());
        },

        success: function(response) {
          console.log(response);
          $('.display-item').html(response);
        },

        error: function(){
          console.log('error');
        }
      });


    });
  </script>
@endsection
