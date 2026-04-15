@extends('layout.admin')

@section('content')

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Crear nuevo libro</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('libros.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre del libro</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>

                        <div class="mb-3">
                            <label for="isbn" class="form-label">ISBN</label>
                            <input type="text" class="form-control" id="isbn" name="isbn" required>
                        </div>

                        <div class="mb-3">
                            <label for="autor" class="form-label">Autor</label>
                            <input type="text" class="form-control" id="autor" name="autor" required>
                        </div>

                        <div class="mb-3">
                            <label for="editorial" class="form-label">Editorial</label>
                            <input type="text" class="form-control" id="editorial" name="editorial" required>
                        </div>

                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoría</label>
                            <select name="categoria_id" id="categoria" class="form-select" required>
                                <option value="">Seleccione una categoría</option>
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">
                                        {{ $categoria->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('homa') }}" class="btn btn-secondary">
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-success">
                                Guardar libro
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ---    ME QUEDE EN EL MINUTO 25 DEL VIDEO 9 --- -->

@endsection