@extends('layouts.master')

@section('filtros')
    @include('partials.filtrosJugadores')
@stop

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="openBox">
            <div class="row">
                <div class="col-md-2">
                    <i class="material-icons">
                        info
                    </i>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Perfil</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Ubicación</h4>
                            <span> {{ $jugador->ubicacion }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Pasaporte</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Fecha de Nacimiento:</h4>
                            <span> {{ $jugador->fecha_nacimiento }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Edad:</h4>
                            <span> {{ $jugador->edad }}</span>
                        </div>
                        <div class="col-md-4">
                            <h4>Altura:</h4>
                            <span> {{ $jugador->altura }}</span>
                        </div>
                        <div class="col-md-4">
                            <h4>Peso:</h4>
                            <span> {{ $jugador->peso }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="closedBox">
            <div class="iconBox">
                <img src="}}">
            </div>
        </div>
    </div>
</div>
@stop
