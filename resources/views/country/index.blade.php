<h1>Paises Registrados</h1>

<ul>
    @foreach($countries as $country)
        <li>{{ $country->country }} - {{ $country->created_at }}</li>
    @endforeach
</ul>

<!--
    route('paises.create') => apunta al controlador => CountryController
    seguido del método create dentro de CountryController
-->
<p><a href="{{ route('paises.create') }}">Ingresar Nuevo País</a></p>