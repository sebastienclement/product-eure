@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  {!! Form::open(['route' => ['admin-edit-retail-action', $retail->id], 'method' => 'put', 'novalidate' => 'novalidate']) !!}

  <div class="form-group">
    {!! Form::label('name', 'Nom : ', ['class' => '']) !!}
    {!! Form::text('name', $retail->name, ['placeholder' => 'Nom', 'class' => 'form-control']) !!}
    {!! $errors->first('name', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('lieu', 'Lieu : ', ['class' => '']) !!}
    {!! Form::text('lieu', $retail->lieu, ['placeholder' => 'Lieu', 'class' => 'form-control']) !!}
    {!! $errors->first('lieu', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('zone', 'Zone : ', ['class' => '']) !!}
    {!! Form::text('zone', $retail->zone, ['placeholder' => 'Zone', 'class' => 'form-control']) !!}
    {!! $errors->first('zone', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

  {!! Form::close() !!}
@endsection

@section('js')

@endsection
