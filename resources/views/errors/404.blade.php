@extends('front.layout.layout')
@section('title')
  page 404
@endsection
@section('content')
  <section class="wrap">
    <div class="page-404">
      <h2>Page 404</h2>
      <p>Nous sommes désolés mais cette page n'existe pas.</p>
      <p>Dans votre malh'eure, vous pouvez retourner sur la page principale et retrouver le bonh'eure.</p>

      <div class="img-404">
        <img src="{{ asset('img/404/personnage2.png') }}" alt="personnages tenant des pommes" >
      </div>
      <div class="panneau-404">
        <div>
          <img src="{{ asset('img/404/panneau.png') }}" alt="panneau avec lien de retour vers la page principale" >
        </div>
        <div class="lien-404">
          <a href="{{ route('home') }}">Retour</a>
         </div>
      </div>
    </div>

  </section>
@endsection
