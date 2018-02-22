@extends('front.layout.layout')
@section('bootstrap-css')
  <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('css')
@endsection

@section('title')
  Inscrivez-vous
@endsection

@section('content')
  <div class="formulaire-prod">
    <p>Les champs suivis d'un <span class="requis-ast">*</span> sont obligatoires</p>

    {!! Form::open(['route' => 'new-profil-action', 'method' => 'post','files' => true, 'novalidate' => 'novalidate']) !!}

    @include('front.form.formulaire-producer')
    {!! Form::close() !!}
  </div>

@endsection

@section('js')

@endsection
