@extends('layout')
@section('content')

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                @include('partials.menu')
            </div>
        </div>
    </nav>



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