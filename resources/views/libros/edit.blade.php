@extends('layout.admin')
@section('content')

    <div class="container">
        <h1>Editar Libro</h1>

        <form action="{{ route('libros.update', $libro->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $libro->nombre }}" required>
            </div>

            <div class="mb-3">
                            <label for="isbn" class="form-label">ISBN</label>
                            <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $libro->isbn }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="autor" class="form-label">Autor</label>
                            <input type="text" class="form-control" id="autor" name="autor" value="{{ $libro->autor }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="editorial" class="form-label">Editorial</label>
                            <input type="text" class="form-control" id="editorial" name="editorial" value="{{ $libro->editorial }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoría</label>
                            <select name="categoria_id" id="categoria" class="form-select" required>
                                <option value="">Seleccione una categoría</option>
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}" {{ $libro->categoria_id == $categoria->id ? 'selected' : '' }}>
                                        {{ $categoria->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


            <button type="submit" class="btn btn-primary bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow-md">Actualizar libro</button>
                <a href="{{ route('homa') }}" class="btn btn-secondary bg-slate-500 hover:bg-slate-600 text-white px-4 py-2 rounded shadow-md">Cancelar
        </form>
    </div>
    @endsection