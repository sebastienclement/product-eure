@extends('front.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  <h2>Tous nos producteurs</h2>
@php
  // dd($producers)
@endphp

<div class="wrap">

  @foreach ($producers as $key => $producer)
      <div class="single-prod">
              <div class="img">
                  {!! file_get_contents(asset('img/icons/040-farmer.svg')) !!}
              </div>
              <div class="detail-prod">
                <h3>{{$producer->name}}</a></h3>
                <p>{{$producer->description}}</p>
                <p>{{$producer->zipcode}} {{$producer->ville}}</p>
                <p><a href="{{ route('profil-public', ['slug' => $producer->slug]) }}">Voir le Profil</a></p>
              </div>
        </div>
  @endforeach

</div>

<div class="clear">
@endsection

@section('js')

@endsection
