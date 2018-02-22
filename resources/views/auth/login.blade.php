@extends('front.layout.layout')
@section('bootstrap-css')
  <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet">
  {{-- <link rel="stylesheet" href="{{ asset('css/front/foundation.css') }}"> --}}
@endsection

@section('title')
  Connexion
@endsection
@section('content')

  <div class="formulaire-log-reg">

      <form  method="POST" action="{{ route('login') }}" novalidate>
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="">Adresse Courriel</label>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="">Mot de passe</label>
              <input id="password" type="password" class="form-control" name="password" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>

          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
              </label>
            </div>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-info">
              Se connecter
            </button>
            <a class="btn btn-link" href="{{ route('password.request') }}">
              Mot de passe oublié ?
            </a>
          </div>
      </form>
  </div>



@endsection
