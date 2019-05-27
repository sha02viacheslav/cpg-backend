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
            <h2 class="logoSmall ">
                ¿Querés formar parte del equipo de CPG?
            </h2>
        </div>
        <div class="innerBox busquedaBox col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 ">

            <div class="wrapIt">
                <p>Estamos buscando jóvenes carismáticos y proactivos para incorporarse a nuestro equipo de trabajo mediante el nuevo <strong> Programa de Referidos de CPG</strong>.</p>
                <p>Cada miembro dispone de un usuario y contraseña con el que puede ingresar a la <strong> Plataforma de CPG</strong>. En tu panel, podrás ver un listado de tus <strong> jugadores referidos</strong> y el estado actual de los mismos, así como agregar <strong> nuevos perfiles </strong> a tu nombre.</p>
                <p>Hay sólo <strong> 10 vacantes disponibles. </strong> </p>
                <p>¿Tenés amigos que jueguen bien a la pelota? ¿Que la rompen? </p>
                <p>Completá el siguiente<strong> formulario</strong> y empezá a<strong> ganar dinero </strong> convirtiendo a jóvenes talentosos en <strong> profesionales</strong>. </p>
            </div>
            <div class="formBusqueda">
                {!! Form::open(['url' => 'agentes-reclutadores', 'autocomplete' => 'off', 'files'=>true]) !!}
                <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                    <label for="username" >Nombre completo</label>
                    {{Form::text('nombre', null, ['id' => 'nombre', 'class' => 'form-control', 'placeholder' => 'Lionel Messi', 'required'])}}

                    @if ($errors->has('nombre'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('pregunta') ? ' has-error' : '' }}">
                    <label>¿Por qué querés pertenecer al equipo de CPG?</label>
                    {{Form::textarea('pregunta', old('pregunta'), ['id' => 'pregunta', 'class' => 'form-control', 'placeholder' => 'Contanos por qué deseas pertenecer al staff de CPG'])}}

                    @if ($errors->has('pregunta'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pregunta') }}</strong>
                        </span>
                    @endif
                </div>
                <!-- Email -->
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="username" >Email </label>
                    {{Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'reclutador@mail.com', 'required'])}}

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group busquedaImg {{ $errors->has('cv') ? ' has-error' : '' }}">
                    <label>Envianos tu CV <span>(no obligatorio)</span></label>
                    <input type="file" id="cv" name="cv" placeholder="Imagen" class=" nice nicefileinput"  />
                    @if ($errors->has('cv'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cv') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group center clear submitForm">
                    <button  type="submit" class="btn btn-success btn-fill btn-submit"> ENVIAR SOLICITUD</button>
                </div>

                {{ Form::close() }}
                {{--<h2> Tu perfíl ha sido enviádo exitosamente. </h2>--}}
                <div class="center">
                    {{--<h2 class="logoSmall mgTop30"> Click <span> Pass</span> Goal    </h2>--}}
                </div>
            </div>
        </div>
    </section>
@stop
@push('scripts')
<script>
$(function () {
    // Image Upload
    $(".nicefileinput").nicefileinput({
        label : 'BUSCAR ARCHIVO' // Spanish label
    });
});
</script>
@endpush