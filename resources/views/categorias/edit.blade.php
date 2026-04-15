@extends('layout.admin')
@section('content')

    <div class="container">
        <h1>Editar Categoria</h1>

        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $categoria->nombre }}" required>
            </div>
            <button type="submit" class="btn btn-primary bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow-md">Actualizar Categoria</button>
        </form>
    </div>
    @endsection