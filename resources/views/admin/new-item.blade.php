@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  {!! Form::open(['route' => 'contact-action', 'method' => 'post', 'novalidate' => 'novalidate']) !!}

  <div class="form-group">
    {!! Form::label('nom', 'Votre nom : ', ['class' => '']) !!}
    {!! Form::text('nom', null, ['placeholder' => 'votre nom', 'class' => 'form-control']) !!}
    {!! $errors->first('nom', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('email', 'Votre e-mail : ', ['class' => '']) !!}
    {!! Form::email('email', null,['placeholder' => 'example@gmail.com', 'class' => 'form-control']) !!}
    {!! $errors->first('email', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('sujet', 'Sujet : ', ['class' => '']) !!}
    {!! Form::text('sujet', null, ['placeholder' => 'Sujet', 'class' => 'form-control']) !!}
    {!! $errors->first('sujet', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('message', 'Votre message : ', ['class' => '']) !!}
    {!! Form::textarea('message', null, ['placeholder' => 'Votre message', 'class' => 'form-control']) !!}
    {!! $errors->first('message', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>


    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

  {!! Form::close() !!}
@endsection

@section('js')

@endsection
