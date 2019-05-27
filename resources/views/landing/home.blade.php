@extends('layouts.landing')

@section('content')
    <!-- Content -->
    <div class="wrapper " id="inicio">

        <!-- Navigation -->
        @include('landing-partials.navigation')
        <div class="firstPage">
            <div class="main" id="main" data-image="{{asset('/img/bg3.jpg')}}" data-scale="1.1">
                <h1 class="helement">
                    Donde los jugadores se convierten en <span class="stars"> estrellas</span>
                </h1>
                <h3>En<span> Click<span class="spanBlue">pass</span>goal</span>, buscamos jóvenes futbolistas para convertirlos en profesionales.
                </h3>
                <div class="btn btn-block btn-lg btn-info btn-dream ">
                    <a href="{{ url('/quiero-ser-profesional') }}">
                        <div class="peloBox"> <img src="img/pelota3.png"> </div>
                        <h1>
                            Cumplí tu sueño
                        </h1>
                    </a>
                </div>

                {{-- Bg Image--}}
                <div class="mainBgAnimation"> </div>
            </div>
        </div>
        <div class="secondPage works" id="como-funciona">
            <div class="inner animate2">
                <h1 class="revealator-fade">¿Cómo Funciona?</h1>
                <div class="text">
                    <h2>Es fácil. Subí tus datos con un video en HD y cruzá los dedos. Nuestros representantes asociados buscarán oportunidades en cientos de clubs en todo el mundo. </h2>
                    <h2>Cuando algún equipo ponga su ojo en ti, nos pondremos en contacto para ofrecerte la oportunidad de ser un jugador profesional.</h2>
                </div>
                <ul class="howitworks">
                    <li class="li1 revealator-zoomin revealator-duration15 revealator-delay1"><img src="img/icon-foot.png"></li>
                    <li class="li2 revealator-zoomin revealator-duration15 revealator-delay2"><img src="img/icon-mas.png"></li>
                    <li class="li3 revealator-zoomin revealator-duration15 revealator-delay1"><img src="img/icon-manager.png"></li>
                    <li class="li4 revealator-zoomin revealator-duration15 revealator-delay2"><img src="img/icon-equal.png"></li>
                    <li class="li5 revealator-zoomin revealator-duration15 revealator-delay3"><img src="img/icon-deal.png"></li>
                </ul>
            </div>
        </div>
        <div class="thirdPage">
            <div class="final">
                <div class="finalText">
                    <h2>
                        Vos también podés tener la oportunidad de triunfar. ¿Te lo vas a perder? Subí tus datos en nuestra plataforma y dejá que nuestros managers te descubran.
                    </h2>
                </div>
                <div class="btn btn-block btn-lg btn-info btn-dream ">
                    <a href="/quiero-ser-profesional">
                        <div class="peloBox"> <img src="img/pelota3.png"> </div>
                        <h1>

                            Cumplí tu sueño
                        </h1>
                    </a>
                </div>
                <div class="row final2">
                    <div class="finalText">
                        <h2> Animate a ser parte del grupo de jugadores que llegaron
                            exactamente a donde querían.</h2>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

        </div>
    </div>

@stop
@push('scripts')
<script>
$(function () {
    // Service Worker
    if ('serviceWorker' in navigator ) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/sw.js').then(function(registration) {
                // Registration was successful
                console.log('ServiceWorker registration successful with scope: ', registration.scope);
            }, function(err) {
                // registration failed :(
                console.log('ServiceWorker registration failed: ', err);
            });
        });
    }else{
        console.log('no Service worker in navigator')
    }
});
</script>
@endpush