@extends('master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h1 class="mb-0">Editar Proyecto</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('projecte.update', $projecte->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="nom" class="form-label">Nombre del Proyecto</label>
                                <input type="text" class="form-control" id="nom" name="nom" value="{{ $projecte->nom }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" value="{{ $projecte->slug }}" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
