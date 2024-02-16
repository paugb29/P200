@extends('master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mb-0">Crear Proyecto</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('projecte.index') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="nom" class="form-label">Nombre del Proyecto</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>

                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Crear Proyecto</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
