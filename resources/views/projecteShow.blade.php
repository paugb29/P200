@extends('master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h1 class="mb-0">Detalles del Proyecto</h1>
                    </div>
                    <div class="card-body">
                        <h2>ID: {{ $projecte->id }}</h2>
                        <h2>Nombre: {{ $projecte->nom }}</h2>
                        <p>Fecha de Creación: {{ $projecte->created_at }}</p>
                        <p>Última Actualización: {{ $projecte->updated_at }}</p>
                        <p>Slug: {{ $projecte->slug }}</p>
                        <a href="{{ route('projecte.index') }}" class="btn btn-primary">Volver a la Lista de Proyectos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
