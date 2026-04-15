@extends('layout.admin')

@section('content')

<div class="container mx-auto px-4 py-6">
    <h3 class="text-2xl font-bold text-gray-800 mb-6">Crear Préstamos</h3>
    
    <div class="bg-white shadow-lg rounded-2xl p-6">
        <form action="{{ route('prestamos.buscar_usuario') }}" method="POST" class="space-y-6">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- ID Usuario -->
                <div>
                    <label for="usuario_id" class="block text-sm font-medium text-gray-700 mb-2">
                        ID Usuario
                    </label>
                    <input type="text" 
                           name="usuario_id" 
                           id="usuario_id"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                           placeholder="Ingrese el ID del usuario">
                </div>

                <!-- Nombre Usuario -->
                <div>
                    <label for="usuario_nombre" class="block text-sm font-medium text-gray-700 mb-2">
                        Nombre Usuario
                    </label>
                    <input type="text" 
                           name="usuario_nombre" 
                           id="usuario_nombre"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                           placeholder="Nombre del usuario">
                </div>
            </div>

            <!-- Botones de acción -->
            <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
                <button type="submit" 
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-lg shadow-sm transition duration-200 font-medium">
                    Buscar Usuario
                </button>
                <a href="{{ route('prestamos.index') }}" 
                   class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2.5 rounded-lg shadow-sm transition duration-200 font-medium">
                    Cancelar
                </a>
            </div>
        </form>

    @isset($usuario)
    <div class="md-4">
        <h2>Usuario Encontrado</h2>
        <p><strong>ID:</strong> {{ $usuario->id }}</p>
        <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
        <p><strong>Email:</strong> {{ $usuario->email }}</p>
    </div>

    <form action="{{ route('prestamos.select_libro') }}" method="POST">
        @csrf
        <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">
        <input type="submit" value="Seleccionar Libro" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2.5 rounded-lg shadow-sm transition duration-200 font-medium">
    </form>

@endisset
    </div>
</div>

@endsection