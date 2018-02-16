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
    <li>{{$a->comment}}</li>
  @endforeach
  </ul>
  <ul>
  @foreach ($producer->retail as $b)
        <li>{{$b->name}}</li>
        <li>{{$b->lieu}}</li>
  @endforeach
  </ul>
  <img src="{{$producer->path_image}}" alt="Une photo de {{$producer->name}}">
@endsection

@section('js')

@endsection
