@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  {{-- {{dd($article)}} --}}
  {!! Form::open(['route' => ['admin-edit-article-action', $article->id], 'method' => 'put', 'novalidate' => 'novalidate']) !!}

  <div class="form-group">
    {!! Form::label('title', 'Votre titre : ', ['class' => '']) !!}
    {!! Form::text('title', $article->title, ['placeholder' => 'votre titre', 'class' => 'form-control']) !!}
    {!! $errors->first('title', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('content', 'Description : ', ['class' => '']) !!}
    {!! Form::text('content', $article->content, ['placeholder' => 'Description', 'class' => 'form-control']) !!}
    {!! $errors->first('content', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

  {!! Form::close() !!}
@endsection

@section('js')

@endsection
