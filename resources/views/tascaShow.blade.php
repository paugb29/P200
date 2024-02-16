@extends('master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h1 class="mb-0">Detalles de la Tarea</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID:</th>
                                <td>{{ $tasca->id }}</td>
                            </tr>
                            <tr>
                                <th>Nombre de la Tarea:</th>
                                <td>{{ $tasca->nom }}</td>
                            </tr>
                            <tr>
                                <th>Slug:</th>
                                <td>{{ $tasca->slug }}</td>
                            </tr>
                            <tr>
                                <th>Fecha de Creación:</th>
                                <td>{{ $tasca->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Última Actualización:</th>
                                <td>{{ $tasca->updated_at }}</td>
                            </tr>
                            <tr>
                                <th>Completada:</th>
                                <td>{{ $tasca->completada ? 'Sí' : 'No' }}</td>
                            </tr>
                            <tr>
                                <th>Descripción:</th>
                                <td>{{ $tasca->descripcio }}</td>
                            </tr>
                        </table>

                        <a href="{{ route('projecte.index') }}" class="btn btn-primary">Volver a la Lista de Tareas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
