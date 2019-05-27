<div class="content customSecondContainer">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <div class="slogan">
                    <h3>Donde los jugadores se convierten en <span class="stars">estrellas</span>  </h3>
                </div>
                @if(! Auth::user()->isAgente())
                    <div class="newPlayerBox">
                        <a href="{{url('/jugadores/crear-jugador')}}" class="btn btn-newPlayer">
                            <i class="ti-plus"></i>
                            Nuevo Jugador
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>