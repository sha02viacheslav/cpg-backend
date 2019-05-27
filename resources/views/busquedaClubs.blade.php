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
               Acceso
                <br> Clubes e Intermediarios
            </h2>
        </div>
        <div class="innerBox busquedaBox col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 ">
            <div class="wrapIt">
                <p>
                    <strong>Clickpassgoal </strong> es una Agencia de Talento y Scouting de jugadores de fútbol.
                </p>
                <p>
                    Disponemos de Agentes Reclutadores en todo el mundo buscando los <strong>atletas más talentosos del planeta. </strong>
                </p>
                <p>
                    Luego nos encargamos de encontrar oportunidades y seleccionar los mejores perfiles para darlos de alta en nuestro sistema.
                </p>
                <p>
                    Solo <strong>intermediarios y representante</strong>  de clubes e instituciones pueden acceder a la plataforma.
                </p>
                <p>
                    Por favor, completá el siguiente formulario para solicitar acceso:
                </p>
            </div>
            <div class="formBusqueda">
                {!! Form::open(['url' => 'intermediarios-y-clubs', 'autocomplete' => 'off', 'files'=>true]) !!}
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
                    <label>Clubs y Experiencia</label>
                    {{Form::textarea('pregunta', old('pregunta'), ['id' => 'pregunta', 'class' => 'form-control', 'placeholder' => 'Contanos por qué deseas acceder a la plataforma de CPG'])}}

                    @if ($errors->has('pregunta'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pregunta') }}</strong>
                        </span>
                    @endif
                </div>
                <!-- Email -->
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="username" >Email </label>
                    {{Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'agente@mail.com', 'required'])}}

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label for="username" >Teléfono</label>
                    {{Form::text('phone', null, ['id' => 'phone', 'class' => 'form-control', 'placeholder' => '+54 9 11 5111-1111', 'required'])}}

                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
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