@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
  Modifier un produit
@endsection

@section('content')

  {!! Form::open(['route' => ['admin-edit-item-action', $item->id], 'method' => 'put', 'novalidate' => 'novalidate']) !!}

  <div class="form-group">
    {!! Form::label('comment', 'Description : ', ['class' => '']) !!}
    {!! Form::textarea('comment', $item->comment, ['placeholder' => 'Description', 'class' => 'form-control']) !!}
    {!! $errors->first('comment', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

  {!! Form::close() !!}
@endsection

@section('js')

@endsection
