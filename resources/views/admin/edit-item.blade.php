@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  {{-- {{ dd($select)}} --}}
  {!! Form::open(['route' => ['admin-edit-item-action', $item->id], 'method' => 'put', 'novalidate' => 'novalidate']) !!}

  <div class="form-group">
    {!! Form::label('name', 'Votre produit : ', ['class' => '']) !!}
    {!! Form::text('name', $item->name, ['placeholder' => 'votre item', 'class' => 'form-control']) !!}
    {!! $errors->first('name', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('comment', 'Description : ', ['class' => '']) !!}
    {!! Form::text('comment', $item->comment, ['placeholder' => 'Description', 'class' => 'form-control']) !!}
    {!! $errors->first('comment', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('categorie', 'Catégorie : ', ['class' => '']) !!}<br>
    {!! Form::select('categorie', $select, $item->category_id, ['class'=>'']) !!}
    {{-- {{ Form::select('categorie', $categories->pluck('name','id'), null, ['class'=>'']) }} --}}
    {!! $errors->first('categorie', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

  {!! Form::close() !!}
@endsection

@section('js')

@endsection
