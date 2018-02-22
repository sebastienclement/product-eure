@extends('admin.layout.layout')
@section('css')
@endsection

@section('title')
  Profil Producteur
@endsection

@section('content')

  <div class="title_left">
    <h3>Profil de {{$producer->name}}</h3>
  </div>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th>User ID</th>
      <th>Nom</th>
      {{-- <th>Slug</th> --}}
      <th>Adresse</th>
      <th>Code postal</th>
      <th>Ville</th>
      <th>Zone</th>
      <th>Courriel</th>
      <th>Téléphone</th>
      <th>URL</th>
      {{-- <th>Description</th> --}}
      {{-- <th>Chemin img</th> --}}
      <th>Statut</th>
      <th>Créé le</th>
      <th>Modifié le</th>
      <th>Editer</th>
    </tr>
  </thead>
  <tbody>
    <td></td>
    <td>{{$producer['user']['id']}}</td>
    <td>{{$producer->name}}</td>
    {{-- <td>{{$producer->slug}}</td> --}}
    <td>{{$producer->adresse}}</td>
    <td>{{$producer->zipcode}}</td>
    <td>{{$producer->ville}}</td>
    <td>{{$producer->zone}}</td>
    <td>{{$producer->producer_email}}</td>
    <td>{{$producer->phone}}</td>
    <td>{{$producer->website}}</td>
    {{-- <td>{{$producer->description}}</td> --}}
    {{-- <td>{{$producer->path_img}}</td> --}}
    <td>{{$producer->status}}</td>
    <td>{{$producer->created_at}}</td>
    <td>{{$producer->updated_at}}</td>
    <td><a class="btn btn-info" href="{{ route('admin-edit-producer-view', ['id' => $producer->id ]) }}">Modifier</a></td>
  </tbody>
  </table>


  <div class="title_left">
    <h3>Item(s) de {{$producer->name}}</h3>
  </div>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th>Item ID</th>
      <th>Description du produit</th>
      <th>Créé le</th>
      <th>Modifié le</th>
      <th>Editer</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($producer->item as $item)
    <tr>
      <td></td>
      <td>{{$item->id}}</td>
      <td>{{$item->comment}}</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->updated_at}}</td>
      <td><a class="btn btn-info" href="{{ route('admin-edit-item-view', ['id' => $item->id ]) }}">Modifier</a></td>
    </tr>
    @endforeach
  </tbody>
  </table>

  <div class="title_left">
    <h3>Retail(s) de {{$producer->name}}</h3>
  </div>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th>Retail ID</th>
      <th>Description du lieu</th>
      <th>Créé le</th>
      <th>Modifié le</th>
      <th>Editer</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($producer->retail as $retail)
    <tr>
      <td></td>
      <td>{{$retail->id}}</td>
      <td>{{$retail->comment}}</td>
      <td>{{$retail->created_at}}</td>
      <td>{{$retail->updated_at}}</td>
      <td><a class="btn btn-info" href="{{ route('admin-edit-retail-view', ['id' => $retail->id ]) }}">Modifier</a></td>
    </tr>
    @endforeach
  </tbody>
  </table>

  <div class="title_left">
    <h3>Catégorie(s) de {{$producer->name}}</h3>
  </div>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th>Catégorie ID</th>
      <th>Nom</th>
      <th>Editer</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($producer->category as $category)
    <tr>
      <td></td>
      <td>{{$category->id}}</td>
      <td>{{$category->name}}</td>
      <td><a class="btn btn-info" href="{{ route('admin-edit-category-view', ['id' => $category->id ]) }}">Modifier</a></td>
    </tr>
    @endforeach
  </tbody>
  </table>



@endsection

@section('js')
@endsection
