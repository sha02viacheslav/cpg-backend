@extends('layouts.form-layout')

@section('content')
    <div class="formWrap">
        <div class="cover escondido">
        </div>
        <div class="container">
            <div class="fs-form-wrap" id="fs-form-wrap">
                <div class="fs-title">
                    <h1>¡Conviertete en un jugador profesional!</h1>
                </div>
                @include('jugadores.formEdit')
            </div><!-- /fs-form-wrap -->
        </div><!-- /container -->
    </div>
@stop

@push('scripts')

<script>
    (function() {

        document.getElementsByTagName('body')[0].className+='overview';

        var formWrap = document.getElementById('fs-form-wrap');

        [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
            new SelectFx( el, {
                stickyPlaceholder: false,
                onChange: function(val){
                    document.querySelector('span.cs-placeholder').style.backgroundColor = val;
                }
            });
        } );
        // Fix Select headers
        var realValuePais = $('#pais_id :selected').text();
        $('#pli').find('.cs-placeholder').text(realValuePais);

        if(realValuePais.trim() == 'Argentina'){
            var realValueProv = $('#provincia_id :selected').text();
                $('#provLi').find('.cs-placeholder').text(realValueProv);
        }
    })();
</script>

@endpush


