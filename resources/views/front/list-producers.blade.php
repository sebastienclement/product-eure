@extends('front.layout.layout')
@section('css')
@endsection

@section('title')
  Nos producteurs
@endsection

@section('content')

@php
  // dd($producers)
@endphp

<div class="wrap listing-all">
    <h2>Tous nos producteurs</h2>
  @foreach ($producers as $key => $producer)
      <div class="single-prod">
              <div class="img-producer">
                @if (($producer->path_img != '/img/icons/040-farmer.svg') && ($producer->path_img != null))
                  <a href="{{ route('profil-public', ['slug' => $producer->slug]) }}">
                    <img src="{{ Image::url(route('home') . '/' . $producer->path_img, 300, 180, array('crop'))}}" alt="Une photo de {{$producer->name}}">
                  </a>
                @else
                  <a href="{{ route('profil-public', ['slug' => $producer->slug]) }}">
                    {!! file_get_contents(asset('/img/icons/040-farmer.svg')) !!}
                  </a>
                @endif
              </div>
              <div class="detail-prod">
                <h3><a href="{{ route('profil-public', ['slug' => $producer->slug]) }}">{{$producer->name}}</a></h3>
                <p>{{$producer->adresse}} {{$producer->zipcode}} {{$producer->ville}}</p>
                <p>@foreach($producer->category as $cat)
                    {{ucfirst($cat->name)}}
                @endforeach</p>
                <p>{{ substr($producer->description, 0, 200) }}</p>
              </div>
        </div>
  @endforeach

</div>

<div class="clear">
@endsection

@section('js')

@endsection
