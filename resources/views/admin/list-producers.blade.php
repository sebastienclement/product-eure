@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
  Liste des producteurs
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
      <th scope="col">Statut</th>
      <th scope="col">Crée le</th>
      <th scope="col">Modifer</th>
      <th scope="col">Effacer</th>
      <th scope="col">Voir profil</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($producers as $producer)
    <tr>
      <th scope="row">{{$producer->id}}</th>
      <td>{{$producer->name}}</td>
      <td>{{$producer->user->name}}</td>
      <td>{{$producer->adresse}}</td>
      <td>{{$producer->zone}}</td>
      <td>{{$producer->status}}

      {!! Form::open(['route' => ['confirm-prod', $producer->id], 'method' => 'put', 'novalidate' => 'novalidate']) !!}
        {!! Form::submit('Confirm', ['class' => '']) !!}
      {!! Form::close() !!}
      {!! Form::open(['route' => ['refuse-prod', $producer->id], 'method' => 'put', 'novalidate' => 'novalidate']) !!}
        {!! Form::submit('Refuse', ['class' => '']) !!}
      {!! Form::close() !!}


      </td>
      <td>{{$producer->created_at}}</td>
      <td><a class="btn btn-success" href="{{ route('admin-edit-producer-view',['id' => $producer->id ]) }}">update</a></td>
      <td>
        {!! Form::open(['route' => ['admin-delete-producer', $producer->id], 'method' => 'delete', 'novalidate' => 'novalidate']) !!}

          {!! Form::submit('Effacer', ['class' => 'btn btn-danger']) !!}

      {!! Form::close() !!}
      </td>
      <td><a class="btn btn-info" href="{{ route('admin-profil-producer',['id' => $producer->id ]) }}">Voir profil</a></td>
    </tr>

  @endforeach

  </tbody>
</table>
@endsection

@section('js')

@endsection
