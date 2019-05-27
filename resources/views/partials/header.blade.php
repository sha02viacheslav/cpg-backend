<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class=" navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <div class="user">
                    <div class="photo">
                        @if(Auth::user()->link_img)
                            <img src="{{Storage::disk('local')->url($jugador->link_img)}}">
                        @else
                            <img src="{{url('/img/cool_kid.png')}}">
                        @endif
                    </div>
                    <div class="info">
                        <div class="dropbox">
                            <a class="dropdown-toggle" id="userActions3" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->nombre }}
                            </a>
                            <div class="dropdown-menu"  aria-labelledby="userActions3">
                                <a class="dropdown-item" href="{{ url('managers/edit/'.Auth::user()->slug) }}">
                                    {{--<span class="sidebar-mini">Ed</span>--}}
                                    <span class="sidebar-normal">Editar Perfil</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>