@extends('front.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  <h2>Tous nos produits</h2>
@php
  // dd($producers)
@endphp

<div class="wrap">
  <ul>
  @foreach ($categories as $key => $categorie)
      <div class="single_prod">
        <li><h3><a href="#">{{$categorie->name}}</a></h3></li>
        <li>{{$categorie->description}}</li>
        <li>{{$categorie->zone}}</li>
      </div>
  @endforeach
</ul>
</div>

<div class="clear">
@endsection

@section('js')

@endsection
