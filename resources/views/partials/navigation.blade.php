<div class="sidebar" data-background-color="black"  >
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ url('/dashboard') }}" class="simple-text">
                <h2 class="logoSmall"> C<span>P</span>G    </h2>
                <span class="sloganSmall"> Donde los jugadores se convierten en estrellas</span>
            </a>
        </div>
        {{--<ul class="nav">--}}
            {{--<li {{( in_array('dashboard', $url)  || Request::path() == '/'  )  ? 'class=active' : ''  }}>--}}
                {{--<a href="{{ url('/dashboard') }}">--}}
                    {{--<i class="ti-user"></i>--}}
                    {{--<p>Jugadores</p>--}}
                {{--</a>--}}
            {{--</li>--}}

            {{--@if(Auth::user()->isAdmin())--}}
            {{--<li {{(in_array('managers', $url)) ? 'class=active' : ''  }}>--}}
                {{--<a href="{{ url('/managers') }}">--}}
                    {{--<i class="ti-android"></i>--}}
                    {{--<p>Managers</p>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--@endif--}}
        {{--</ul>--}}

         <!-- Filtros -->
        @yield('filtros')

    </div>
</div>
