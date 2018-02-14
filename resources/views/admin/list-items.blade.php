@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  {{-- {{ dd($items)}} --}}
  <div class="title_left">
    <h3>Listing des Produits par Catégories</h3>
  </div>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produit</th>
      <th scope="col">Comment</th>
      <th scope="col">Categorie</th>
      <th scope="col">Modifier</th>
      <th scope="col">Effacer</th>

    </tr>
  </thead>
  <tbody>

  @foreach ($items as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->comment}}</td>
      <td>{{$item->category->name}}</td>
      <td><a href="{{ route('admin-edit-item-view',['id' => $item->id ]) }}">update</a></td>
      <td>
        {!! Form::open(['route' => ['admin-delete-item', $item->id], 'method' => 'delete', 'novalidate' => 'novalidate']) !!}

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
