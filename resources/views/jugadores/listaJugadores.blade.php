<div class="row clear">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="page-header center">
                    @if(Auth::user()->isReclutador())
                        Mis Jugadores
                    @else
                        Jugadores
                    @endif
                </h2>
            </div>
            <div class="card-body">
                <div class="listaJugadores">
                @forelse($jugadores as $jugador)
                    <div class="jugador hasLink" data-href="{{url('players/'.$jugador->slug)}}">
                        <div class="perfilImagen">
                            {{--@if(Storage::disk('local')->exists($jugador->link_img))--}}
                                {{--<img src="{{Storage::disk('local')->url($jugador->link_img)}}" class="profileTableImg">--}}
                            {{--@else--}}
                                {{--<img src="{{url('/img/default.png') }}" class="profileTableImg">--}}
                            {{--@endif--}}

                            <img src="{{url($jugador->imagen)}}" class="profileTableImg">

                            <div class="mediaIcons">
                                @if($jugador->tiene_video)
                                    <i class="material-icons">
                                        play_circle_filled
                                    </i>
                                @endif
                            </div>
                        </div>
                        <div class="perfilDetalle">
                            <div class="col-md-12 nombreBox">
                                <h2> {{ $jugador->nombre }}</h2>
                            </div>
                            <div class="col-md-6 npPdRight ">
                                <span class="posicion {{ $jugador->posicion->colorClass }}"> {{ $jugador->posicion->posicion }}</span>
                            </div>
                            <div class="col-md-6 smallPdLeft npPdRight">
                                <span class="ubicacion lightBlue"> {{ $jugador->ubicacion }}</span>
                            </div>
                            <div class="col-md-4 npPdRight">
                                <span class="subHeader"> Edad</span>
                                <span class="detalle"> {{ $jugador->edad }}</span>
                            </div>
                            <div class="col-md-4  smallPdLeft npPdRight">
                                <span class="subHeader"> Altura</span>
                                <span class="detalle"> {{ $jugador->altura }}</span>
                            </div>
                            <div class="col-md-4 smallPdLeft ">
                                <span class="subHeader"> Peso</span>
                                <span class="detalle"> {{ $jugador->peso }}</span>
                            </div>
                            {{--<div class="col-md-3 smallPdLeft">--}}
                                {{--<span class="subHeader "> Pasaporte</span>--}}
                                {{--<span class="detalle"> {{ $jugador->pasaporte }}</span>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    @empty
                    <h3>No se encontraron jugadores.</h3>
                @endforelse
                </div>

            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
$(function () {
    $('.hasLink').click(function () {
        var link = $(this).attr('data-href');

        if(link){
            console.log(link);
            // similar behavior as an HTTP redirect
            // window.location.replace(link);

        // similar behavior as clicking on a link
            window.location.href = link;
        }
    })
});
</script>
@endpush
