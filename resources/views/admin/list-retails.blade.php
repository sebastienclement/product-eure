@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  <div class="title_left">
    <h3>Listing des Lieux de ventes</h3>
  </div>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Lieu</th>
      <th scope="col">Zone</th>
      <th scope="col">Modifier</th>
      <th scope="col">Effacer</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($retails as $retail)
    <tr>
      <th scope="row">{{$retail->id}}</th>
      <td>{{$retail->name}}</td>
      <td>{{$retail->lieu}}</td>
      <td>{{$retail->zone}}</td>
      <td><a class="btn btn-success" href="{{ route('admin-edit-retail-view',['id' => $retail->id ]) }}">update</a></td>
      <td>
        {!! Form::open(['route' => ['admin-delete-retail', $retail->id], 'method' => 'delete', 'novalidate' => 'novalidate']) !!}

          {!! Form::submit('Effacer', ['class' => 'btn btn-danger']) !!}

      {!! Form::close() !!}
      </td>
    </tr>

  @endforeach

  </tbody>
  </table>

@endsection

@section('js')

@endsection
