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
                        <a href="{{url('/managers')}}" class="btn btn-newPlayer">
                            <i class="ti-plus"></i>
                            Lista Managers
                        </a>
                    </div>
                </div>
            </div>
            {{----}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="page-header center">
                                CREAR MANAGER
                            </h2>
                        </div>
                        <div class="card-body formulario">
                            {!! Form::model($manager, ['role' => 'form','method' => 'PATCH', 'url' => 'managers/'.$manager->id]) !!}
                               @include('managers.formManager')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
