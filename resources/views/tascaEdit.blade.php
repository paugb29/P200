@extends('master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h1 class="mb-0">Editar Tarea</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('projecte.tascas.update', ['projecte' => $projecte , 'tasca' => $tasca]) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="nom" class="form-label">Nombre de la Tarea:</label>
                                <input type="text" class="form-control" id="nom" name="nom" value="{{ $tasca->nom }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug:</label>
                                <input type="text" class="form-control" id="slug" name="slug" value="{{ $tasca->slug }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="completada" class="form-label">Completada:</label>
                                <select class="form-control" id="completada" name="completada" required>
                                    <option value="1" {{ $tasca->completada ? 'selected' : '' }}>Sí</option>
                                    <option value="0" {{ !$tasca->completada ? 'selected' : '' }}>No</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="descripcio" class="form-label">Descripción:</label>
                                <textarea class="form-control" id="descripcio" name="descripcio" rows="3" required>{{ $tasca->descripcio }}</textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                        </form>

                        <a href="{{ route('projecte.index') }}" class="btn btn-secondary mt-3">Volver a la Lista de Tareas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
