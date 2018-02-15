@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  {!! Form::open(['route' => 'admin-new-retail-action', 'method' => 'post', 'novalidate' => 'novalidate']) !!}

  <div class="form-group">
    {!! Form::label('name', 'Nom : ', ['class' => '']) !!}
    {!! Form::text('name', null, ['placeholder' => 'Nom', 'class' => 'form-control']) !!}
    {!! $errors->first('name', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('lieu', 'Lieu : ', ['class' => '']) !!}
    {!! Form::text('lieu', null, ['placeholder' => 'Lieu', 'class' => 'form-control']) !!}
    {!! $errors->first('lieu', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('zone', 'Zone : ', ['class' => '']) !!}
    {!! Form::text('zone', null, ['placeholder' => 'Zone', 'class' => 'form-control']) !!}
    {!! $errors->first('zone', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

  {!! Form::close() !!}
@endsection

@section('js')

@endsection
