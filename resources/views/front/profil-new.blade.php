@extends('front.layout.layout')
@section('css')
@endsection

@section('title')
  Inscrivez-vous
@endsection

@section('content')
  {!! Form::open(['route' => 'new-profil-action', 'method' => 'post', 'novalidate' => 'novalidate']) !!}

  @include('front.formulaire-producer')
  {!! Form::close() !!}
  
@endsection

@section('js')

@endsection
