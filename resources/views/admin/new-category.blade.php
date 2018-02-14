@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  {!! Form::open(['route' => 'admin-new-category-action', 'method' => 'post', 'novalidate' => 'novalidate']) !!}

  <div class="form-group">
    {!! Form::label('name', 'Nom de la catégorie : ', ['class' => '']) !!}
    {!! Form::text('name', null, ['placeholder' => 'Nom de la catégorie', 'class' => 'form-control']) !!}
    {!! $errors->first('name', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

  {!! Form::close() !!}
@endsection

@section('js')

@endsection
