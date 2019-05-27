@extends('layouts.landing', [$noFooter = true, $noChat = true])

@section('content')

    <section>
        <div class="appBgImg zoomInOut">
            <div class="mask">

            </div>
        </div>
        <div class="centerIt welcomeMsg">
            {{--<h2 class="logoSmall ">Welcome to  C<span>P</span>G    </h2>--}}
            <h2 class="logoSmall ">Bienvenido a
                </br>
                Click<span>Pass</span>Goal
            </h2>
        </div>
        <div id="loginFormWrap" class="loginBox ">
            {{-- Show Notifications--}}
            {{--@include('partials.notifications')--}}

            <div class="centerIt boxHeader">
                <h2> Log in</h2>
            </div>

            <div class="navUserType">
               <h2 data-action="{{ route('jugadores.login.submit') }}"> <i></i>Jugador</h2>
               <h2 data-action="{{ route('managers.login.submit') }}" class="active">Agente</h2>
            </div>

            <form id="loginForm" method="POST" action="{{ route('managers.login.submit') }}">
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
                    {{ Form::submit('LOG IN', array('class'=>'btn btn-block btn-lg btn-form-submit '))}}
                </div>
            </form>

                {{-- Register--}}
                <div class="loginORegister">
                    <p>o</p>
                </div>

                <div class="regLinks">
                    <a href="{{url('quiero-ser-profesional')}}">Quiero ser Profesional</a>
                    <a href="{{url('intermediarios-y-clubs')}}"> Agentes y Clubs </a>
                    <a href="{{url('agentes-reclutadores')}}"> Agentes Reclutadores </a>
                </div>
        </div>
    </section>
@stop

@push('scripts')
<script>
$(function () {
    $('.navUserType h2').click(function () {
        var action = $(this).attr('data-action');
        $('#loginForm').attr('action',action);
        $('.navUserType h2').removeClass('active');
        $(this).addClass('active');
    });
});
</script>
@endpush