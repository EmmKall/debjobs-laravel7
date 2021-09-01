<a class="text-white text-sm uppercase font-bold p-3 no-underline hover:underline {{ Request::is('vacantes') ? 'bg-green-700' : '' }} " href="{{ route('vacantes.index') }}">Ver Vacantes</a>
<a class="text-white text-sm uppercase font-bold p-3 no-underline hover:underline {{ Request::is('vacantes/create') ? 'bg-green-700' : '' }} " href="{{ route('vacantes.create') }}">Nueva Vacante</a>
