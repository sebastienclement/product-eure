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

      <div class="wrap containerpulic" style>
        <div class="photo">
          <img src="{{asset($producer->path_img)}}" alt="Une photo de {{$producer->name}}">
        </div>

        <div class="descriptionProfil" >

          <div class="listDescriptionProfil">
            <h2 id="nameProducteurProfil">{{$producer->name}}</h2>
            <p><i class="fa fa-comment"></i> :{{ $producer->description}}</p>
            <p><i class="fa fa-home"></i> :{{ $producer->adresse}},{{$producer->zipcode}}</p>
            <p><i class="fa fa-home"></i> :{{ $producer->ville}}</p>
            <p><i class="fa fa-phone-square"></i> :{{ $producer->phone}}</p>
            @if (!empty($producer->website))
              <p><i class="fa fa-phone-square"></i> :{{ $producer->website}}</p>
            @endif
            @if (!empty($producer->producer_email))
              <p><i class="fa fa-envelope"></i> :{{ $producer->producer_email}}</p>
            @endif
            @if (Auth::user()->id == $producer->user_id)
                <p><a href="{{ route('edit-profil-view') }}" class="btn btn-success">Modifier mon profil</a></p>
            @endif
          </div>
        </div>
      </div>
    </section>
    <section id="itemRetailProfil">

      <div class="itemRetailProfil wrap">

        <div class="itemProfil ">
          @if (Auth::user()->id == $producer->user_id)
              <p><a href="{{ route('home') }}" class="btn btn-success">Ajouter un produit</a></p>
          @endif
          <h3 class="itemRetailTile">Voici les articles que nous proposons</h3>
          <ul>
            @foreach ($producer->item as $a)
              <li>{{$a->name}} {{ $a->comment }}</li>
            @endforeach
          </ul>
        </div>
        <div class="retailProfil wrap">
          @if (Auth::user()->id == $producer->user_id)
              <p><a href="{{ route('home') }}" class="btn btn-success">Ajouter un lieu de vente</a></p>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41651.04067695274!2d0.41647020817906083!3d49.2727960842916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e1b144a91c933f%3A0x40c14484fbba710!2s27260+%C3%89paignes!5e0!3m2!1sfr!2sfr!4v1518857584360" width="1200" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </section>
  </div>

@endsection

@section('js')

@endsection
