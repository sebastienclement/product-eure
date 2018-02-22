@extends('front.layout.layout')
@section('bootstrap-css')
  <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('css')
@endsection

@section('title')
  Modifier mon profil
@endsection

@section('content')
  <div class="formulaire-prod">
  <p>Les champs suivis d'un <span class="requis-ast">*</span> sont obligatoires</p>
    {!! Form::open(['route' => ['edit-profil-action', $producer->id], 'method' => 'put', 'files' => true, 'novalidate' => 'novalidate']) !!}

        @include('front.form.form-edit-producer')

    {!! Form::close() !!}
  </div>
<p>biubviubv</p>
@endsection

@section('js')

@endsection
