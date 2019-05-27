<div class="row">
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
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <tr>
                            <th class="center"><i class="ti-camera"></i></th>
                            <th>Nombre</th>
                            <th class="center">Pais</th>
                            <th>Ciudad</th>
                            <th class="center">Posicion</th>
                            <th>Altura</th>
                            <th>Peso</th>
                            <th>Edad</th>
                            <th class="center"><i class="ti-video-camera"></i></th>
                            <th class="center">Estado</th>
                            @if(Auth::user()->isAdmin() )
                                <th class="center">Manager</th>
                            @endif
                            <th class="center"><i class="ti-panel"></i></th>
                        </tr></thead>
                        <tbody>
                        @forelse($jugadores as $jugador)
                            <tr>
                                <td class="center imgCol">
                                    @if(Storage::disk('local')->exists($jugador->link_img))
                                        <img src="{{Storage::disk('local')->url($jugador->link_img)}}" class="profileTableImg">
                                    @else
                                        <img src="{{url('/img/default.png') }}" class="profileTableImg">
                                    @endif
                                </td>
                                <td>{{ $jugador->nombre }}</td>
                                <td class="center">
                                    @if($jugador->pais->img)
                                        <img src="/img/flags/{{$jugador->pais->img}}" class="posTableImg">
                                    @else
                                        {{ $jugador->pais->code }}
                                    @endif
                                </td>
                                <td>{{ $jugador->provincia ? $jugador->provincia->nombre :'-' }}</td>
                                <td class="center"> <img src="/img/{{$jugador->posicion->img}}" class="posTableImg"> </td>
                                <td>{{ $jugador->altura /100 }}</td>
                                <td>{{ $jugador->peso }}</td>
                                <td>{{ $jugador->edad }}</td>
                                <td class="center">
                                    <i class="{{ $jugador->tiene_video ? 'ti-check success': 'ti-close error'}}"></i>
                                </td>
                                <td class="center"> <span class="label {{$jugador->estado_label}}">{{ $jugador->estado_formated }}</span></td>
                                @if(Auth::user()->isAdmin() )
                                    <td class="center"> <span class=" {{ $jugador->manager_formated() != 'CPG' ?: 'label label-primary' }}"> {{ $jugador->manager_formated() }}</span></td>
                                @endif
                                <td class="center actionsCol">
                                    {{--Edit--}}
                                    @if(Auth::user()->isAdmin() || Auth::user()->nivel < 5)
                                        <a rel="tooltip"  class="btn btn-simple btn-warning btn-icon table-action edit" href="{{url('jugadores/'.$jugador->slug.'/editar-jugador')}}" data-original-title="Editar Jugador" >
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr class="noPlayers">
                                <td colspan="13">No encontramos ningun Jugador asociado a tu nombre. Haz click <a href="{{url('jugadores/crear-jugador')}}"> aquí</a> para ingresar un  <a href="{{url('jugadores/crear-jugador')}}"> Nuevo Jugador</a></td>
                            </tr>
                        @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
