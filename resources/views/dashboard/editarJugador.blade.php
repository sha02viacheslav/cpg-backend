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
                            {{ Form::model($jugador, ['role' => 'form','method' => 'PATCH', 'route' => ['jugadores.update', $jugador->id], 'class' => 'fs-form fs-form-overview fs-show','files'=>true]) }}
                             @include('dashboard.formManagerCreateJugador')
                            {{ Form::close() }}

                            @if(Auth::user()->isAdmin())
                                    <div class="col-lg-12 clear mt20">
                                        <h3>ADMIN ONLY</h3>
                                        <!-- Enviar -->
                                        {{ Form::open(array('route' => 'cambiarEstadoJugador')) }}
                                        {{ Form::hidden('jugador_id', $jugador->id) }}
                                        <div class="col-lg-12">
                                            <div class="form-group" >
                                                <label>Estado</label>
                                                {{Form::select('estado', $estados, $jugador->estado, ['class' => 'form-control', 'id' => 'estado'])}}
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group" >
                                                <label>Enviar Mensaje (Via Email)</label>
                                                    <!-- Mensaje -->
                                                {{Form::textarea('mensaje', $jugador->mensaje, ['id' => 'mensaje', 'class' => 'form-control smallerTa', 'placeholder' => 'Notifiación Jugador'])}}
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group center clear submitForm">
                                                <button  type="submit" class="btn btn-success btn-fill"> ENVIAR CAMBIOS</button>
                                            </div>
                                        </div>
                                        {{ Form::close() }}
                                    </div>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
