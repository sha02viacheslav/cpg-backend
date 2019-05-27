@extends('layouts.landing')

@section('content')
    <section class="appBg">
        <div class="succesBox col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 ">
            <div class="centerIt">
                <h1 class="doneHeader"> Felicitaciones</h1>
            </div>
            <div class="wrapIt">
                <h2> Tu perfíl ha sido enviádo exitosamente.</h2>
                <h2> Nos pondremos en contacto a la brevedad.</h2>
            </div>
            <div class="centerIt">
                <a href="{{url('/')}}"> <h2 class="logoSmall mgTop30"> Click <span> Pass</span> Goal    </h2></a>
            </div>
        </div>
    </section>
@stop