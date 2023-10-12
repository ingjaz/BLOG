<header>
    <h1>Jaz Code</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
                {{--Esto srive para hacer pruebas con codigo, en este caso ver el resultado de request
                    @dump(request()->routeIs('home')) --}}
            </li>
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>
            </li>
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a>
            </li>
        </ul>
    </nav>
</header>