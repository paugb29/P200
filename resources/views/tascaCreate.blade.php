@extends('master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h1 class="mb-0">Crear Tarea</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('projecte.tascas.store', ['projecte' => $projecte]) }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="nom" class="form-label">Nombre de la Tarea</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>

                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" required>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="completada" name="completada" value="1">
                                <label class="form-check-label" for="completada">Completada</label>
                            </div>

                            <div class="mb-3">
                                <label for="descripcio" class="form-label">Descripción de la Tarea</label>
                                <textarea class="form-control" id="descripcio" name="descripcio" required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Crear Tarea</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
