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

      <div class="wrap containerpulic" >
        <div class="photo">
          @if (($producer->path_img != '/img/icons/040-farmer.svg'))
            <img src="{{asset($producer->path_img)}}" alt="Une photo de {{$producer->name}}" width="500">
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
        <h3 class="itemRetailTile">Une petite description</h3>
        <p><i class="fa fa-comment"></i> :{{ $producer->description}}</p>
      </div>
    </section>
    <section id="itemRetailProfil" >

      <div class="itemRetailProfil wrap">

        <div class="itemProfil ">
          @if (isset(Auth::user()->id))
            @if (Auth::user()->id == $producer->user_id)
              <p><a href="{{ route('home') }}" class="btn btn-success">Ajouter un produit</a></p>
            @endif
          @endif
          <h3 class="itemRetailTile">Voici les articles que nous proposons</h3>
          <ul>
            @foreach ($producer->item as $a)
              <li>{{$a->name}} {{ $a->comment }}</li>
            @endforeach
          </ul>
        </div>
        <div class="retailProfil wrap">
          @if (isset(Auth::user()->id))
            @if (Auth::user()->id == $producer->user_id)
              <p><a href="{{ route('home') }}" class="btn btn-success">Ajouter un lieu de vente</a></p>
            @endif
          @endif
          <h3 class="itemRetailTile">Les Points de vente pour nos produits</h3>
          <ul>
            @foreach ($producer->retail as $b)
              <li>{{$b->name}} à {{$b->lieu}}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </section>
    <section>

      <div class="mapProfil wrap">
        <iframe width="1200" height="250" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?q={{$producer->adresse.' '.$producer->ville}}&key=AIzaSyDgxCPbY9e8WpR9KdkOyew_FdlmaDSCK1s" allowfullscreen>
        </iframe>

      </div>
      {{--keyApiGoogleMap// AIzaSyDgxCPbY9e8WpR9KdkOyew_FdlmaDSCK1s --}}
    </section>
  </div>

@endsection

@section('js')

@endsection
