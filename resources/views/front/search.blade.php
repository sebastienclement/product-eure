@extends('front.layout.layout')
@section('css')
    <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
@endsection

@section('title')
  Résultat de recherche
@endsection

@section('content')


<section class="wrap search_content">
    <div id="result-search">
        @if($countsearch == 1)
        <h2>Nous avons trouvé {{$countsearch}} producteur correspondant à votre recherche</h2>
        @elseif($countsearch > 1)
        <h2>Nous avons trouvé {{$countsearch}} producteurs correspondant à votre recherche</h2>
        @else
        <h2>Nous n'avons pas trouvé de producteur correspondant à votre recherche</h2>
        @endif
        <div><i class="fa fa-search"></i><a href="" id="toggle-search">  Effectuer une autre recherche</a></div>
    </div>

    <div>
        <div id="search-tag-2" class="inside-search">
            @include ('front/form/search')
        </div>
    </div>


    <div class="list-prod">
        @foreach($producers as $producer)
        <div class="single-prod">
            <div class="img-producer">
              @if (($producer->path_img != '/img/icons/040-farmer.svg') && ($producer->path_img != null))
                <a href="{{ route('profil-public', ['slug' => $producer->slug]) }}">
                  <img src="{{ Image::url(route('home') . '/' . $producer->path_img, 300, 180, array('crop'))}}" alt="Une photo de {{$producer->name}}">
                </a>
              @else
                <div class="image-default">
                  <a href="{{ route('profil-public', ['slug' => $producer->slug]) }}">
                    {!! file_get_contents(asset('/img/icons/040-farmer.svg')) !!}
                  </a>  
                </div>
              @endif
            </div>
            <div class="detail-prod">
              <div class="title-category-producer">
                <h3>
                    @if (!empty($producer->prod_name))
                      <a href="{{ route('profil-public', ['slug' => $producer->slug]) }}">{{ucfirst($producer->prod_name)}}</a>
                    @else
                      <a href="{{ route('profil-public', ['slug' => $producer->slug]) }}">{{ucfirst($producer->name)}}</a>
                    @endif
                </h3>
                <p>@foreach($producer->category as $cat)
                    {{ucfirst($cat->name)}}
                @endforeach</p>
              </div>

                <p>{{$producer->adresse}} {{$producer->zipcode}} {{$producer->ville}}</p>
                <p>{{ substr($producer->description, 0, 200) }}<a href="{{ route('profil-public', ['slug' => $producer->slug]) }}"><span class="excerpt-end"> [<span class="dots">...</span>] </span></a></p>

            </div>
        </div>
        @endforeach
    </div>
</section>



@endsection

@section('js')

@endsection
