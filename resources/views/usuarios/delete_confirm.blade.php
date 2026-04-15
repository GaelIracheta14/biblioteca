@extends('layout.admin')

@section('content')

    <h1>Eliminar Usuario</h1>

    <div class="container py-4">
    <p>¿Estás seguro de que quieres eliminar este usuario?</p>

    <table class="w-full text-sm">
        <thead>
            <tr class="text-slate-500 border-b">
                <th class="text-left py-3">ID</th>
                <th class="text-left">Nombre</th>
                <th class="text-left">Email</th>
                <th class="text-left">Tipo</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b hover:bg-slate-50 transition">
                <td class="text-slate-400 py-3">{{$usuario->id}}</td>
                <td class="font-medium">{{$usuario->name}}</td>
                <td class="text-slate-500">{{$usuario->email}}</td>
                <td>
                    <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-medium">
                        {{$usuario->user_type}}
                    </span>
                </td>
            </tr>
        </tbody>
    </table>

    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-lg shadow-sm transition">
            Eliminar
        </button>
    </form>
    </div>

@endsection