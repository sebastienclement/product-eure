@extends('front.layout.layout')
@section('css')
@endsection

@section('title')

@endsection

@section('content')

    <style>



        .search_content{
            position: relative;
        }
        #result-search{
            padding:10px;
            display: flex;
            justify-content: space-between;
            border-bottom: 5px solid #46879B;
            font-family: 'Dosis',sans-serif;
        }
        #result-search a{
        color:#3E8022;
        }

        .list-prod{
            padding:10px;
            margin:4% 0;

        }

        .single-prod{
            display: flex;
            padding:2% 0;
            background-color: #Fff;

        }

        .single-prod:nth-child(2n+1){
            background-color: #FAFAFA;
        }

        .single-prod .img{
            width:150px;
        }

        .detail-prod{
            width: 80%;
            padding-left: 10px;

        }
        .detail-prod h3,
        .detail-prod p{
            font-family: 'Dosis',sans-serif;
        }

        .detail-prod h3{
            font-weight: bold;
            font-size:1.3rem;
            line-height: 2rem;
            text-transform: uppercase;
        }
        .detail-prod p{
            line-height: 1.3rem;
        }

        .detail-prod p{
            line-height: 1.3rem;
        }


        #search-tag-2{
            position: absolute;
            top:40px;
            width:100%;
            background-color: #FAFAFA;
            display:none;
            z-index:1000;
        }

    </style>

<section class="wrap search_content">
    <div id="result-search">
        @if($countsearch == 1)
        <h2>Nous avons trouvé {{$countsearch}} producteur correspondant à votre recherche</h2>
        @elseif($countsearch > 1)
        <h2>Nous avons trouvé {{$countsearch}} producteurs correspondant à votre recherche</h2>
        @else
        <h2>Nous n'avons pas trouvé de producteur correspondant à votre recherche</h2>
        @endif
        <div><a href="" id="toggle-search">Effectuer une autre recherche</a></div>
    </div>

    <div>
        <div id="search-tag-2" class="inside-search">
            @include ('front/search/search')
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
                <p>{{$producer->adresse}} {{$producer->zipcode}}</p>
                {{-- <p>{{ucfirst($producer->description)}}</p> --}}
                {{-- <p> @if  (!empty($producer->item_name)) {{ucfirst($producer->item_name)}} {{ucfirst($producer->comment)}}
                    @endif
                </p> --}}
                <p><a href="{{ route('profil-public', ['slug' => $producer->slug, 'id' => $producer->id]) }}">Voir le Profil</a></p>

            </div>
        </div>
        @endforeach
    </div>
</section>



@endsection

@section('js')

@endsection
