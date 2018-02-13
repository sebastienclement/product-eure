@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  {!! Form::open(['route' => 'contact-action', 'method' => 'post', 'novalidate' => 'novalidate']) !!}

  <div class="form-group">
    {!! Form::label('name', 'Votre item : ', ['class' => '']) !!}
    {!! Form::text('name', null, ['placeholder' => 'votre item', 'class' => 'form-control']) !!}
    {!! $errors->first('name', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('comment', 'Description : ', ['class' => '']) !!}
    {!! Form::text('comment', null, ['placeholder' => 'Description', 'class' => 'form-control']) !!}
    {!! $errors->first('comment', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('categorie', 'Catégorie : ', ['class' => '']) !!}<br>
    {!! Form::select('categorie', [
        'Catégrories'  => [
            'Choix'  => 'Choix',
            'Légumes'  => 'Légumes',
            'Fruits'   => 'Fruits',
            'Viandes'  => 'Viandes',
            'Liquides' => 'Liquides',
            'Crèmerie' => 'Crèmerie',
            ]
        ]); !!}
    {!! $errors->first('categories', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>


    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

  {!! Form::close() !!}
@endsection

@section('js')

@endsection
