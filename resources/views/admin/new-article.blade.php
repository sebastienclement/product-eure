@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  {!! Form::open(['route' => 'admin-new-article-action', 'method' => 'post', 'novalidate' => 'novalidate']) !!}

  <div class="form-group">
    {!! Form::label('title', 'Votre titre : ', ['class' => '']) !!}
    {!! Form::text('title', null, ['placeholder' => 'votre titre', 'class' => 'form-control']) !!}
    {!! $errors->first('title', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('content', 'Description : ', ['class' => '']) !!}
    {!! Form::textarea('content', null, ['placeholder' => 'Description', 'class' => 'form-control']) !!}
    {!! $errors->first('content', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>
  <div class="form-group">
    {!! Form::label('status', 'Choix du status : ', ['class' => '']) !!}<br>
    {!! Form::select('status', ['' => ' choix',
      'brouillon'   => 'brouillon',
      'publié' => 'publié']);!!}
    {!! $errors->first('status', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

  {!! Form::close() !!}
@endsection

@section('js')

@endsection
