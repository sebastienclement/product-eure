@extends('front.layout.layout')
@section('css')
    <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
@endsection

@section('title')

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
            <div class="img">
                {!! file_get_contents(asset('img/icons/040-farmer.svg')) !!}
            </div>
            <div class="detail-prod">
                <h3>@if (!empty($producer->prod_name)) {{ucfirst($producer->prod_name)}}
                    @else {{ucfirst($producer->name)}}
                    @endif</h3>
                <p>{{$producer->adresse}} {{$producer->zipcode}} {{$producer->ville}}</p>
                <p>@foreach($producer->category as $cat)
                    {{ucfirst($cat->name)}}
                @endforeach</p>
                <p><a href="{{ route('profil-public', ['slug' => $producer->slug, 'id' => $producer->id]) }}">Voir le Profil</a></p>

            </div>
        </div>
        @endforeach
    </div>
</section>



@endsection

@section('js')

@endsection
