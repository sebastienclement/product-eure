@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
  Nouveau producteur
@endsection

@section('content')
  {!! Form::open(['route' => 'admin-new-producer-action','files' => true, 'method' => 'post', 'novalidate' => 'novalidate']) !!}

    @include('front.form.formulaire-producer')

  {!! Form::close() !!}

@endsection

@section('js')

@endsection
