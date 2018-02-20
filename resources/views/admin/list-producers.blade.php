@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
@endsection

@section('content')
  <div class="title_left">
    <h3>Listing des Producteurs</h3>
  </div>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom de la société</th>
      <th scope="col">Nom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Zone</th>
      <th scope="col">Crée le</th>
      <th scope="col">Modifer</th>
      <th scope="col">Effacer</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($producers as $producer)
    <tr>
      <th scope="row">{{$producer->id}}</th>
      <td>{{$producer->name}}</td>
      <td>{{$producer->user->name}}</td>
      <td>{{$producer->adresse}}</td>
      <td>{{$producer->siret}}</td>
      <td>{{$producer->zone}}</td>
      <td>{{$producer->created_at}}</td>
      <td><a class="btn btn-success" href="{{ route('admin-edit-producer-view',['id' => $producer->id ]) }}">update</a></td>
      <td>
        {!! Form::open(['route' => ['admin-delete-producer', $producer->id], 'method' => 'delete', 'novalidate' => 'novalidate']) !!}

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
