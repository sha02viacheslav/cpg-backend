@extends('layouts.landing')

@section('content')
    <section class="appBg">
        <div class="succesBox col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 ">
            <div class="centerIt">
                <h1 class="doneHeader"> Felicitaciones</h1>
            </div>
            <div class="wrapIt">
                <h2> Tu perfíl ha sido enviádo exitosamente.</h2>
                <h2> ¡Estamos trabajando para convertirte en un jugador profesional!</h2>
                <h2> Te hemos enviádo un <strong>correo</strong> con tu <strong>usuario</strong> y <strong> contraseña </strong></h2>
                <h2> Puedes editar tu perfl en el siguiente link: <strong> <a href="../editar-mi-perfil"> EDITAR MI PERFIL</a></strong></h2>
            </div>
            <div class="centerIt">
                <h2> Tu perfíl ha sido enviádo exitosamente. </h2>
               <a href="{{url('/')}}"> <h2 class="logoSmall mgTop30"> Click <span> Pass</span> Goal    </h2></a>
            </div>
        </div>
    </section>
@stop