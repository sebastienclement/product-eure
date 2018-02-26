@extends('front.layout.layout')

@section('content')
    <div class="" >
        <div id="lottie" class="" style="width:100%;height:100%; overflow: hidden; display:block;
            transform: translate3d(0,0,0);
            text-align: center;
            opacity: 1;" >
        </div>
    </div>
@endsection

@section('js')
<script src="{{ asset('js/amim/anim_deux.js') }}" type="text/javascript" charset="utf-8"></script>
<script>

    var params = {
        container: document.getElementById('lottie'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        animationData: animationData
    };

    var anim;

    anim = lottie.loadAnimation(params);

</script>
@endsection
