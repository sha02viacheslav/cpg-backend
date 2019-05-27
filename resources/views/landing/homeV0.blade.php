@extends('layouts.landing')

@section('content')
    <div class="wrapper " id="inicio">
        <div class="container cpgHead">
            <div class="row">
                <div class="col-xs-12">
                    <div class="logo">
                        <h1>
                            Click<span class="cpgPass">Pass</span>Goal
                        </h1>
                    </div>
                    <div class="logInLink">
                        <a class=" btn-login btn-small-blue"  href="{{url('editar-mi-perfil')}}">Entrar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navBox">
            <div class="container">
                <nav class="navMenu" id="nav">
                    <ul class="menu">
                        <li>
                            <a href="/quiero-ser-profesional"><h2> Cumplí tu sueño </h2></a>
                        </li>
                        <li>
                            <a class="workslink"  href="#como-funciona"><h2 > ¿Cómo funciona?</h2></a>
                        </li>

                        {{--<li>--}}
                        {{--<a id="dreamlink" href="#"><h2> Sueños cumplidos</h2></a>--}}
                        {{--</li>--}}
                        {{--<li id="camigosli">--}}
                        {{--<a id="clublink" href="#"> <h2>  Clubs amigos</h2></a>--}}
                        {{--</li>--}}
                    </ul>
                </nav>
            </div>
        </div>
        <div class="main">
            <div class="col-xs-12 intro">
                <h1 class="helement">
                    Donde los jugadores se convierten en <span class="stars"> estrellas</span>
                </h1>
                <h3>
                    En Clickpassgoal, buscamos jovenes futbolistas para convertirlos en profesionales.
                </h3>
                <div class="btn btn-block btn-lg btn-info btn-pelo-1">
                    <a href="/quiero-ser-profesional">
                        <h1>
                            <div class="peloBox">
                                <img src="/img/pelota2.png">
                            </div>
                            Cumplí tu sueño
                        </h1>
                    </a>
                </div>
            </div>
        </div>
        <div class="works" id="como-funciona">
            <div class="container">
                <div class="row" >
                    <div class="inner col-xs-12">
                        <h1>¿Cómo Funciona?</h1>
                        <h2>Es facil. Subi tus datos con un video en hd y cruza los dedos. Nuestros representantes asociados buscaran oportunidades en cientos de clubs en todo el mundo. </br>
                            Cuando algun equipo ponga su ojo en ti, nos pondremos en contacto para ofrecerte la oportunidad de ser un jugador profesional.
                        </h2>
                        <ul class="howitworks">
                            <li><img src="/img/icon-foot.png"></li>
                            <li><img src="/img/icon-mas.png"></li>
                            <li><img src="/img/icon-manager.png"></li>
                            <li><img src="/img/icon-equal.png"></li>
                            <li><img src="/img/icon-deal.png"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="final">
            <div class="container">
                <div class="inner row">
                    <div class="inner col-xs-12 ">
                        <h2>
                            Vos también podés tener la oportunidad de triunfar. ¿Te lo vas a perder? Subí tus datos en nuestra plataforma y dejá que nuestros managers te descubran.
                        </h2>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="btn btn-block btn-lg btn-info alt btn-pelota">
                    <a href="/quiero-ser-profesional">
                        <h1>
                            <div class="peloBox">
                                <img src="/img/pelota3.png">
                            </div>
                            Cumplí tu sueño
                        </h1>
                    </a>
                </div>
                <div class="row final2">
                    <div class="inner col-xs-12 ">
                        <h2> Animate a ser parte del grupo de jugadores que llegaron
                            exactamente donde querían</h2>
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
            isWindows = navigator.platform.indexOf('Win') > -1 ? true : false;

            if (isWindows){
                // if we are on windows OS we activate the perfectScrollbar function
                $('.container').perfectScrollbar();
                $('html').addClass('perfect-scrollbar-on');
            } else {
                $('html').addClass('perfect-scrollbar-off');
            }

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