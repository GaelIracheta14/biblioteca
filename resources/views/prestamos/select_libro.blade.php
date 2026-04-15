@extends('layout.admin')
@section('content')

    <div class="container mx-auto px-4 py-6">
        <h1>Seleccionar Libro</h1>

        <div class="bg-white shadow-lg rounded-2xl p-6">
            <div class="md-4">
        <h2>Usuario</h2>
        <p><strong>ID:</strong> {{ $usuario->id }}</p>
        <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
        <p><strong>Email:</strong> {{ $usuario->email }}</p>
    </div>
            <form action="{{ route('prestamos.store') }}" method="POST" class="space-y-6">
                @csrf
                <label for="libro_id" class="block text-sm font-medium text-gray-700 mb-2">
                    ID Libro
                </label>
                <select name="libro_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                    <option value="">Seleccione un libro</option>
                    @foreach($libros as $libro)
                        <option value="{{ $libro->id }}">{{ $libro->nombre }}</option>
                    @endforeach
                </select>
                <input type="hidden" name="usuario_id" value="{{ $usuario_id }}"    >


                <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
                    <input type="submit" value="Prestar" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-lg shadow-sm transition duration-200 font-medium">
                    <a href="{{ route('prestamos.index') }}" 
                       class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2.5 rounded-lg shadow-sm transition duration-200 font-medium">
                        Cancelar
                </form>
        </div>
    </div>



@endsection