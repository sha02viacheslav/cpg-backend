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
                            {!! Form::model($user = new \App\Manager, ['action' => 'ManagerController@store']) !!}

                            <!-- Page Location -->
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="username" >Nombre Usuario</label>
                                {{Form::text('nombre', $user->nombre, ['class' => 'form-control', 'required'])}}

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" >E-Mail </label>
                                {{Form::email('email', $user->email, ['class' => 'form-control', 'required'])}}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" >Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            <div class="form-group">
                                <label for="nivel" >Nivel</label>
                                {{Form::select('nivel', [
                                      '1' => 'Recluatador',
                                      '2' => 'Recluatador Nivel 2',
                                      '6' => 'Agente / Club',
                                      ]
                                      , $user->nivel, ['class' => 'form-control'])}}
                            </div>

                            <div class="form-group center">
                                <a href="{{ url()->previous() }}" class="btn btn-danger btn-fill moveRight">CANCELAR</a>
                                <button  type="submit" class="btn btn-info btn-fill"> GUARDAR</button>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
