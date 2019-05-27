@extends('layouts.landing', [$noFooter = true])

@section('content')
    <div class="appBg">
        <section>
            <div class="centerIt welcomeMsg">
                <h2 class="logoSmall ">Welcome to  C<span>P</span>G    </h2>
            </div>
            <div id="loginForm" class="loginBox appBox">
                <div class="centerIt">
                    <h3> MEMBERS ACCESS</h3>
                </div>
                <div class="form-group">
                    <a href="{{url('/editar-mi-perfil')}}" class="btn btn-block btn-lg btn-primary"> PLAYERS </a>
                    <br>
                    <a href="{{url('/login')}}" class="btn btn-block btn-lg btn-alt"> AGENTS </a>
                </div>
                <br>
                <div class="centerIt">
                    <h3> NEW TO CPG?</h3>
                </div>
                <div class="form-group">
                    <a href="{{url('/quiero-ser-profesional')}}" class="btn btn-block btn-lg btn-default"> QUIERO SER PROFESIONAL </a>
                    <br>
                    <a href="{{url('/nuevos-miembros')}}" class="btn btn-block btn-lg btn-default"> QUIERO SER RECLUTADOR </a>
                </div>
            </div>

        </section>
    </div>
@stop