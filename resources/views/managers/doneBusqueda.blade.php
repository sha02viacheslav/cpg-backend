@extends('layouts.landing')

@section('content')
    {{-- Navigation--}}
    <div class="wrapper " id="inicio">
        <!-- Navigation -->
        @include('landing-partials.navigation')
    </div>

    <section class="appBg">
        <div class="centerIt welcomeMsg welcomeAgents">
            {{--<h2 class="logoSmall ">Welcome to  C<span>P</span>G    </h2>--}}
            <h2 class="logoSmall doneHeader">
                Felicitaciones
            </h2>
        </div>
        <div class="innerBox busquedaBox successBox col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 ">
            <div class="wrapIt">
                <h3> Tus datos han sido enviádos exitosamente.</h3>
                <h3> Nos pondremos en contacto a la brevedad.</h3>
            </div>
            <div class="centerIt">
                <a href="{{url('/')}}"> <h2 class="logoSmall mgTop30"> Click <span> Pass</span> Goal    </h2></a>
            </div>
        </div>
    </section>
@stop
