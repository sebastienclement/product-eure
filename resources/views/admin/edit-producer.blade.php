@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
  Modifier un profil producteur
@endsection

@section('content')
  {!! Form::open(['route' => ['admin-edit-producer-action', $producer->id], 'method' => 'put', 'files' => true, 'novalidate' => 'novalidate']) !!}

  @include('front.form.form-edit-producer')

  {!! Form::close() !!}
@endsection

@section('js')

@endsection
