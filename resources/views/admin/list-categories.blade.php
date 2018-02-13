@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  <div class="title_left">
    <h3>Listing des Catégories</h3>
  </div>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom de la catégorie</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
    </tr>

  @endforeach

  </tbody>
  </table>
@endsection

@section('js')

@endsection
