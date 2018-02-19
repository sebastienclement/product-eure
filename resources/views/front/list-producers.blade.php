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
  <ul>
  @foreach ($producers as $key => $producer)
      <div class="single_prod">
        <li><h3><a href="{{ route('profil-public', ['slug' => $producer->slug]) }}">{{$producer->name}}</a></h3></li>
        <li>{{$producer->description}}</li>
        <li>{{$producer->zone}}</li>
      </div>
  @endforeach
</ul>
</div>

<div class="clear">
@endsection

@section('js')

@endsection
