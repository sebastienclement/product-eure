@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
  Panneau d'administration
@endsection

@section('content')
  <div>
    <div class="row">

      <a href="{{route('admin-list-producer')}}"><div class="col col-lg-6" style="border:1px solid black;">
        <h2>{{$countusers}} Utilisateurs, dont {{$countproducers}} Producteurs</h2>
      </div></a>

      <a href="{{route('admin-list-item')}}"><div class="col col-lg-6" style="border:1px solid black;">
        <h2>{{$countitems}} Items, dans {{$countcategories}} Catégories</h2>
      </div></a>
    </div>

    <div class="row">
      <a href="{{route('admin-list-retail')}}"><div class="col col-lg-6" style="border:1px solid black;">
        <h2>{{$countretails}} Lieux de ventes</h2></a>
      </div>
      <a href="{{route('admin-list-article')}}"><div class="col col-lg-6" style="border:1px solid black;">
        <h2>{{$countarticles}} Fabuleux articles</h2></a></a>
      </div>
    </div>
  </div>
@endsection

@section('js')
@endsection
