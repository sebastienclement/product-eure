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
  <ul>
  @foreach ($producers as $key => $producer)
      <li><a href="{{ route('profil-public', ['slug' => $producer->slug]) }}">{{$producer->name}}</a></li>
      <li>{{$producer->description}}</li>
      <li>{{$producer->zone}}</li>
  @endforeach
</ul>
@endsection

@section('js')

@endsection
