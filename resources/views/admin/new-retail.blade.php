@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
  Nouveau lieu de vente
@endsection

@section('content')
  {!! Form::open(['route' => 'admin-new-retail-action', 'method' => 'post', 'novalidate' => 'novalidate']) !!}

  <div class="form-group">
    {!! Form::label('lieu', 'Lieu : ', ['class' => '']) !!}
    {!! Form::textarea('lieu', null, ['placeholder' => 'Lieu', 'class' => 'form-control']) !!}
    {!! $errors->first('lieu', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

  {!! Form::close() !!}
@endsection

@section('js')

@endsection
