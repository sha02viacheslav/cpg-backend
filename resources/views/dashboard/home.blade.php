@extends('layouts.master')

@section('filtros')
    @include('partials.filtrosJugadores')
@stop

@section('content')
    @include('jugadores.listaJugadores')
@stop
