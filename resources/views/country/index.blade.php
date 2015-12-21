@extends('layout')
@section('content')
    <h1>Paises Registrados</h1>

    @include('errors.messages')

    <article class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td><strong>Id</strong></td>
                    <td><strong>País</strong></td>
                    <td><strong>Fecha y Hora de creación</strong></td>
                    <td><strong>Operaciones</strong></td>
                </tr>
                </thead>
                <tbody>
                @foreach($countries as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td>{{ $country->country }}</td>
                        <td>{{ $country->created_at }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('paises.edit',$country) }}">Editar</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="#">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </article>

    <article class="row">
        <div class="col-lg-12">
            {!! Form::open(['route'=>'paises.store','method'=>'POST','class'=>'form-horizontal','id'=>'form-country']) !!}
            <div class="form-group">
                <div class="col-lg-5">
                    {!! Form::text('country', null ,['class'=>'form-control','id'=>'','placeholder'=>'Ingrese el nombre del país']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-5">
                    <input type="submit" class="btn btn-primary" value="Ingresar Nuevo País"/>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </article>

    <!--
        route('paises.create') => apunta al controlador => CountryController
        seguido del método create dentro de CountryController
    -->
@endsection