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
                                EDITAR PERFIL
                            </h2>
                        </div>
                        <div class="card-body formulario">
                            {!! Form::model($manager, ['role' => 'form','method' => 'PATCH', 'url' => 'managers/'.$manager->id]) !!}
                            <!-- Errors -->

                            @if($errors->any() || session()->get('error'))
                                <div class="col-lg-12">
                                    <label class="errorNot" >Errores</label>
                                    <div id="error-box">
                                        @if(session()->get('error'))
                                            <span class="col-lg-6">{{ session()->get('error') }}</span>
                                        @else
                                            @foreach ($errors->all() as $error)
                                                <span class="col-lg-6">{{ $error }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="clear mt20">     </div>
                            @endif
                            <div class="col-lg-6">
                                <div class="form-group formHeader">
                                    <h3> General</h3>
                                </div>
                                <!-- Zona -->
                                <div class="form-group{{ $errors->has('zona') ? ' has-error' : '' }}">
                                    <label for="username" >Zona </label>
                                    {{Form::text('zona', $manager->zona, ['id' => 'zona', 'class' => 'form-control', 'placeholder' => 'Belgrano, Capital'])}}
                                </div>
                                <!-- Telefono -->
                                <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                    <label for="username" >Telefono </label>
                                    {{Form::text('telefono', $manager->telefono, ['id' => 'telefono', 'class' => 'form-control', 'placeholder' => '+54 011 155894466'])}}
                                </div>
                                {{-- Password--}}
                                <div class="form-group">
                                    <label for="a" > Password Anterior</label>
                                    <input id="clave_vieja" name="clave_vieja" type="password" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="clave" > New Password</label>
                                    <input value=""  id="clave" name="clave" type="password" class="form-control"/>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group formHeader">
                                    <h3> Redes</h3>
                                </div>
                                <div class="form-group{{ $errors->has('instagram') ? ' has-error' : '' }}">
                                    <label for="username" >Instagram </label>
                                    {{Form::text('instagram', $manager->instagram, ['id' => 'instagram', 'class' => 'form-control', 'placeholder' => 'Usuario Instagram'])}}
                                </div>
                                <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
                                    <label for="username" >Facebook </label>
                                    {{Form::text('facebook', $manager->facebook, ['id' => 'facebook', 'class' => 'form-control', 'placeholder' => 'Usuario Facebook'])}}
                                </div>
                                <div class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }}">
                                    <label for="username" >Twitter </label>
                                    {{Form::text('twitter', $manager->twitter, ['id' => 'twitter', 'class' => 'form-control', 'placeholder' => 'Usuario Twitter'])}}
                                </div>
                            </div>
                            <div class="col-lg-12 clear">
                                <div class="form-group center  mt20">
                                    <a href="{{ url()->previous() }}" class="btn btn-danger btn-fill moveRight">CANCELAR</a>
                                    <button  type="submit" class="btn btn-info btn-fill"> GUARDAR</button>
                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
