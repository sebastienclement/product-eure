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
      <th scope="col">Nom de l'utilisateur</th>
      <th scope="col">Adresse</th>
      <th scope="col">Siret</th>
      <th scope="col">Zone</th>
      <th scope="col">Crée le</th>
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
    </tr>

  @endforeach

  </tbody>
</table>
@endsection

@section('js')

@endsection
