@extends('front.layout.layout')
@section('bootstrap-css')

@endsection

@section('title')
  Contactez-nous
@endsection

@section('content')


<div id="contact" class="wrap">


  <p>Product'Eure est le projet de trois étudiants en développement Web, interessés et préoccupés par le devenir de l'agriculture et de la production locale
    nous souhaitons pouvoir recenser le plus exhaustivement possible tous les producteur du département.<p>

  <p>N'étant pas producteurs nous mêmes, nous sommes à l'écoute de toutes idées et suggestions, nous permettant d'améliorer le site et de répondre au mieux
    aux besoins des producteurs et de leur clients</p>

  <h2>Pour nous contacter, c'est ici !</h2>

  <h3><a href="mailto:mabasewf3@gmail.com">contact@producteure.com</a></h3>

  {!! file_get_contents(asset('img/home/poules.svg')) !!}

</div>

@endsection

@section('js')

@endsection
