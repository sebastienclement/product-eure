@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  {!! Form::open(['route' => 'admin-new-producer-action', 'method' => 'post', 'novalidate' => 'novalidate']) !!}

    @include('front.formulaire-producer')

  {!! Form::close() !!}

@endsection

@section('js')

@endsection
