@extends('layouts.form-layout')

@section('content')
    <div class="formWrap">
        <div class="cover escondido">
        </div>
        <div class="container">
            <div class="fs-form-wrap" id="fs-form-wrap">
                <div class="fs-title">
                    <h1>¡Conviértete en un jugador profesional!</h1>
                </div>
                @include('jugadores.formCreateStep1')
            </div><!-- /fs-form-wrap -->
        </div><!-- /container -->
    </div>
@stop

@push('scripts')
@if(isset($review))
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
        })();
    </script>
    @if($errors->any())
        <script>
            (function() {
                // Fix Select headers
                var realValuePais = $('#pais_id :selected').text();
                $('#pli').find('.cs-placeholder').text(realValuePais);

                if(realValuePais.trim() == 'Argentina'){
                    var realValueProv = $('#provincia_id :selected').text();
                    $('#provLi').find('.cs-placeholder').text(realValueProv);
                }
            })();
        </script>
    @endif
@else
    <script>
        $(function () {
            var formWrap = document.getElementById( 'fs-form-wrap' );
            [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
                new SelectFx( el, {
                    stickyPlaceholder: false,
                    onChange: function(val){
                        document.querySelector('span.cs-placeholder').style.backgroundColor = val;
                    }
                });
            } );
            new FForm( formWrap, {
                onReview : function() {
                    classie.add( document.body, 'overview' ); // for demo purposes only
                    // Hide Provincia if not argentina
                    var paisSelected = $('#pais_id :selected').text();

                    if(paisSelected.trim() != 'Argentina'){
                        $("#provincia_id").val(null);
                        $('#provLi').hide();
                    }else{
                        $('#provLi').show();
                    }
                }
            } );
        });
    </script>
@endif

@endpush


