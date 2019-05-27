@extends('layouts.master')

@section('content')
    <div class="content customSecondContainer">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    <div class="slogan">
                        <h3>Donde los jugadores se convierten en <span class="stars">estrellas</span>  </h3>
                    </div>
                    <div class="newPlayerBox">
                        <a href="{{url('/dashboard')}}" class="btn btn-newPlayer">
                            <i class="ti-user"></i>
                            Mis Jugadores
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="page-header center">
                                CREAR JUGADOR
                            </h2>
                            </div>
                        <div class="card-body formulario">
                            {!! Form::model($jugador = new \App\Jugador, ['route' => 'dashboard.storeJugador', 'autocomplete' => 'off', 'files'=>true]) !!}
                                @include('dashboard.formManagerCreateJugador')
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
