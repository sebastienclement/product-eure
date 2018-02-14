@extends('front.layout.layout')
@section('css')
@endsection

@section('title')
  {{$producer->name}}
@endsection

@section('content')
  <h2>{{$producer->name}}</h2>

  <p>{{$producer->description}}</p>

  <p>{{$producer->adresse}}</p>

  <ul>
  @foreach ($producer->item as $a)
        <li>{{$a->name}}</li>
  @endforeach
  </ul>

  <img src="{{$producer->path_image}}" alt="Une photo de {{$producer->name}}">
@endsection

@section('js')

@endsection
