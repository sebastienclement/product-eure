@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
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
      <th>Modifier</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($articles as $article)
    <tr>
      <th scope="row">{{$article->id}}</th>
      <td>{{$article->title}}</td>
      <td>{{$article->content}}</td>
      <td><a href="{{ route('admin-edit-article-view',['id' => $article->id ]) }}">update</a></td>
    </tr>

  @endforeach

  </tbody>
  </table>
@endsection

@section('js')

@endsection
