@extends('layouts.landing', [$noFooter = true])

@section('content')
    <div class="appBg">
        <section>
            <div class="centerIt welcomeMsg">
                <h2 class="logoSmall ">Bienvenido a  C<span>P</span>G    </h2>
            </div>
            <div id="loginForm" class="loginBox ">
                {{-- Show Notifications--}}
                {{--@include('partials.notifications')--}}

                <div class="centerIt boxHeader">
                    <h2> ENTRAR</h2>
                </div>

                <form class="" method="POST" action="{{ route('jugadores.login.submit') }}">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                    <input id="username" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                </div>
                <div class="form-group" >
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                </div>
                {{--Remember True--}}
                {{ Form::hidden('remember',true) }}
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                       <span class="help-block has-error center">
                        <strong>  {{ $error }}</strong>
                      </span>
                    @endforeach
                @endif
                <div id="submitBox">
                    {{ Form::submit('LOG IN', array('class'=>'btn btn-block btn-lg btn-alt '))}}
                </div>

               </form>
            </div>
        </section>
    </div>
@stop