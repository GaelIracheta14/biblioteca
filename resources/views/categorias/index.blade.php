@extends('layout.admin')
@section('content')



    <div class="container">
        <h1>Categorias</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow-md ">Agregar Categoria</a>
        <br> <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombre }}</td>
                        <td>
                            <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-sm btn-warning bg-yellow-500 hover:bg-yellow-600 text-white px-2 py-1 rounded shadow-md">Editar</a>
                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded shadow-md" onclick="return confirm('¿Estás seguro de eliminar esta categoria?')">Eliminar</button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $categorias->links() }}
        </div>
    </div>

    @endsection