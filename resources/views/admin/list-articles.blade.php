@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
  Liste des articles
@endsection

@section('content')
  <div class="title_left">
    <h3>Listing des articles</h3>
  </div>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th>Titre de l'article</th>
      <th>Contenu de l'article</th>
      <th>Auteur</th>
      <th>Status</th>
      <th>Modifier</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($articles as $article)
    <tr>
      <th scope="row">{{$article->id}}</th>
      <td>{{$article->title}}</td>
      <td>{{$article->content}}</td>
      <td>{{$article->user->name}}</td>
      <td>{{$article->status}}</td>
      <td><a class="btn btn-success" href="{{ route('admin-edit-article-view',['id' => $article->id ]) }}">update</a></td>
    </tr>

  @endforeach

  </tbody>
  </table>
@endsection

@section('js')

@endsection
