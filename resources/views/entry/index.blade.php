@extends('layout')
@section('content')
    <article class="row">
        <div class="col-lg-12">
            <h1>Entradas del Sitio</h1>
        </div>
    </article>

    <article class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td><strong>Título de la Entrada</strong></td>
                        <td><strong>Descripción Corta</strong></td>
                        <td><strong>Categoría</strong></td>
                        <td><strong>Estado</strong></td>
                        <td><strong>Acciones</strong></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Título de la Entrada</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam aspernatur aut commodi deleniti dignissimos.</td>
                        <td>Categoria</td>
                        <td>Defecto</td>
                        <td>M - M</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>

@endsection