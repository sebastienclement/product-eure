@extends('front.layout.layout')
@section('bootstrap-css')
  <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('css')
@endsection

@section('title')
  Modifier mon profil
@endsection

@section('content')
  {{-- {{dd($producer)}} --}}
  <div class="formulaire-prod">

    {!! Form::open(['route' => ['edit-profil-action', $producer->id], 'method' => 'put', 'files' => true, 'novalidate' => 'novalidate']) !!}

        @include('front.form.form-edit-producer')

    {!! Form::close() !!}
  </div>
<p>biubviubv</p>
@endsection

@section('js')

@endsection
