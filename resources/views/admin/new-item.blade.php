@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
  Nouveau produit
@endsection

@section('content')

  {!! Form::open(['route' => 'admin-new-item-action', 'method' => 'post', 'novalidate' => 'novalidate']) !!}

  <div class="form-group">
    {!! Form::label('comment', 'Description : ', ['class' => '']) !!}
    {!! Form::textarea('comment', null, ['placeholder' => 'Description', 'class' => 'form-control']) !!}
    {!! $errors->first('comment', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

  {!! Form::close() !!}
@endsection

@section('js')

@endsection
