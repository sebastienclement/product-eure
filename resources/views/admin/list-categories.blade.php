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
      <th>Nom de la catégorie</th>
      <th>Modifier</th>
      <th>Effacer</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td><a href="{{ route('admin-edit-category-view',['id' => $category->id ]) }}">update</a></td>
      <td>
        {!! Form::open(['route' => ['admin-delete-category', $category->id], 'method' => 'delete', 'novalidate' => 'novalidate']) !!}

          {!! Form::submit('Effacer', ['class' => 'btn btn-success']) !!}

      {!! Form::close() !!}
      </td>
    </tr>

  @endforeach

  </tbody>
  </table>
@endsection

@section('js')

@endsection
