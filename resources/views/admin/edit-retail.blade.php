@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
  Modifier un lieu de vente
@endsection

@section('content')
  {!! Form::open(['route' => ['admin-edit-retail-action', $retail->id], 'method' => 'put', 'novalidate' => 'novalidate']) !!}

  <div class="form-group">
    {!! Form::label('lieu', 'Lieu : ', ['class' => '']) !!}
    {!! Form::textarea('lieu', $retail->lieu, ['placeholder' => 'Lieu', 'class' => 'form-control']) !!}
    {!! $errors->first('lieu', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

  {!! Form::close() !!}
@endsection

@section('js')

@endsection
