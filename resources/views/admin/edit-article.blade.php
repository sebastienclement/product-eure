@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
  Modifier un article
@endsection

@section('content')
  {{-- {{dd($article)}} --}}
  {!! Form::open(['route' => ['admin-edit-article-action', $article->id], 'method' => 'put', 'files' =>true, 'novalidate' => 'novalidate']) !!}

  <div class="form-group">
    {!! Form::label('image', 'Image de l\'article : ', ['class' => 'btn btn-default btn-file']) !!}
    {!! Form::file('image', ['class' => 'form-control', 'style' => 'display: none;']) !!}
    {!! $errors->first('image', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('title', 'Votre titre : ', ['class' => '']) !!}
    {!! Form::text('title', $article->title, ['placeholder' => 'votre titre', 'class' => 'form-control']) !!}
    {!! $errors->first('title', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('content', 'Description : ', ['class' => '']) !!}
    {!! Form::textarea('content', $article->content, ['placeholder' => 'Description', 'class' => 'form-control']) !!}
    {!! $errors->first('content', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>
  <div class="form-group">
    {!! Form::label('status', 'Choix du status : ', ['class' => '']) !!}<br>
    {!! Form::select('status', [
             ''     => 'choix',
      'brouillon'   => 'brouillon',
      'publié'      => 'publié'],$article->status);!!}
    {!! $errors->first('status', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

  {!! Form::close() !!}
@endsection

@section('js')

@endsection
