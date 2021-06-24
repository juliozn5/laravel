<a class="text-white tex-sm uppercase font-bold p-3 {{Request::is('vacantes') ? 'bg-green-500' : ''}}" href="{{ route('vacantes.index')}}">Mis Vacantes</a>
<a class="text-white tex-sm uppercase font-bold p-3 {{Request::is('vacantes/create') ? 'bg-green-500' : ''}}" href="{{ route('vacantes.create')}}">Nueva Vacante</a>
