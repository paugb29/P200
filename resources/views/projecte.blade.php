@extends('master')

@section('content')
    <div class="container mt-5">
        <h1>Detalles del Proyecto</h1>
        <a href="{{ route('projecte.create') }}" class="btn btn-primary">Crear Proyecto</a>
        

        @foreach($projectes as $projecte)
            <div class="card mb-3">
                <div class="card-header">
                    <h2>{{ $projecte->nom }}</h2>
                    <p>Slug: {{ $projecte->slug }}</p>
                    <p>Updated: {{ $projecte->updated_at }}</p>
                    <p>Created: {{ $projecte->created_at }}</p> 
                    <p>Id: {{ $projecte->id }}</p>
                </div>
                <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre de la Tarea</th>
                                    <th>Slug</th>
                                    <th>Creado</th>
                                    <th>Actualizado</th>
                                    <th>Completada</th>
                                    <th>Descripción</th>
                                    <a href="{{ route('projecte.tascas.create', $projecte->id) }}" class="btn btn-primary">Crear Tasca</a>
                                    <th>Acciones</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projecte->tasca as $tasca)
                                    <tr>
                                        <td>{{ $tasca->id }}</td>
                                        <td>{{ $tasca->nom }}</td>
                                        <td>{{ $tasca->slug }}</td>
                                        <td>{{ $tasca->created_at }}</td>
                                        <td>{{ $tasca->updated_at }}</td>
                                        <td>{{ $tasca->completada ? 'Sí' : 'No' }}</td>
                                        <td>{{ $tasca->descripcio }}</td>
                                        <td>
    <a href="{{ route('projecte.tascas.edit', ['projecte' => $projecte, 'tasca' => $tasca]) }}" class="btn btn-primary">Editar</a>
    <a href="{{ route('projecte.tascas.show', ['projecte' => $projecte->id, 'tasca' => $tasca]) }}" class="btn btn-info">Ver Detalles de la tasca</a>
    <form action="{{ route('projecte.tascas.destroy', ['projecte' => $projecte, 'tasca' => $tasca]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta tarea?')">Eliminar</button>
    </form>
</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        
                    <form action="{{ route('projecte.destroy', $projecte->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Eliminar Proyecto</button>
                    </form>

                    <a href="{{ route('projecte.edit', $projecte->id) }}" class="btn btn-primary">Editar Proyecto</a>
                    <a href="{{ route('projecte.show', ['projecte' => $projecte->id]) }}" class="btn btn-info">Ver Detalles del Proyecto</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
