@extends('front.layout.layout')
@section('title')
  Inscription
@endsection
@section('bootstrap-css')
  {{-- <link rel="stylesheet" href="{{ asset('css/front/foundation.css') }}"> --}}
  <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">S'inscrire</div> --}}

                <div class="formulaire-log-reg">

                    <p>Tous les champs sont obligatoires</p>
                    <form class="form-horizontal" method="POST" novalidate action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} ">
                            <label for="name" class="">Nom</label>

                            {{-- <div class="columns col-md-6"> --}}
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            {{-- </div> --}}
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="">Adresse Courriel</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            {{-- </div> --}}
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="">Mot de passe</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            {{-- </div> --}}
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="">Confirmer mot de passe</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            {{-- </div> --}}
                        </div>

                        <div class="form-group">
                            {{-- <div class="col-md-6 col-md-offset-4"> --}}
                                <button type="submit" class="btn btn-primary">
                                    S'inscrire
                                </button>
                            {{-- </div> --}}
                        </div>
                    </form>
                </div>
            {{-- </div>
        </div>
    </div>
</div> --}}
@endsection
