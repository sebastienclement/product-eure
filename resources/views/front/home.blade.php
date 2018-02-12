@extends('front.layout.layout')
@section('css')
  <link rel="stylesheet" href="{{asset('css/front/flexslider.css')}}">
@endsection

@section('title')
    home
@endsection

@section('content')
    <div class="flexslider">
      <ul class="slides">
        <li>
          <img src="{{ asset('img/2.png') }}" />
        </li>
        <li>
          <img src="{{ asset('img/2.png') }}" />
        </li>
        <li>
          <img src="{{ asset('img/2.png') }}" />
        </li>
        <li>
          <img src="{{ asset('img/2.png') }}" />
        </li>
      </ul>
    </div>
    
@endsection

@section('js')
  <script src="{{ asset('js/jquery-1.9.1.min.js') }}" charset="utf-8"></script>
  <script src="{{ asset('js/jquery.flexslider.js') }}" charset="utf-8"></script>
  <script type="text/javascript">
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide"
    });
  });
  </script>
@endsection
