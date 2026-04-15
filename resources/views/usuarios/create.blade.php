@extends('layout.admin')
@section('content')

    <div class="container">
        <h1>Crear nuevo Usuario</h1>

        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre Del Usuario:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('nombre')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Contraseña:</label>
                    <input type="password" name="password" id="password" value="{{ old('password') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirmar Contraseña:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

            <div class="mb-4">
                <label for="user_type" class="block text-gray-700 font-bold mb-2">Tipo de Usuario:</label>
                <select name="user_type" id="user_type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="">Seleccione un tipo</option>
                    <option value="admin">Administrador</option>
                    <option value="user">Usuario</option>
                </select>
                @error('user_type')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
</form>
    </div>

@endsection