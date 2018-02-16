@extends('front.layout.layout')
@section('css')
@endsection

@section('title')
  Inscrivez-vous
@endsection

@section('content')
  <div class="formulaire-prod">

    {!! Form::open(['route' => 'new-profil-action', 'method' => 'post','files' => true, 'novalidate' => 'novalidate']) !!}

    @include('front.formulaire-producer')
    {!! Form::close() !!}
  </div>

@endsection

@section('js')

@endsection
