
    <h1>Crear País</h1>
    {!! Form::open(['route' => 'country.store', 'method' => 'POST', 'class' => '' ]) !!}
        {!! Form::text( 'country', null ['class' => '', 'id' => '', 'placeholder' => 'Ingrese el País'] ) !!}
    {!! Form::close() !!}
