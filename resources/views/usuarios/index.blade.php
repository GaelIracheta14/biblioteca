@extends('layout.admin')

@section('content')

<div class="container py-4">

    <div class="flex justify-between items-center mb-6">
        <h3 class="text-xl font-semibold m-0">Usuarios</h3>
        <a href="{{ route('usuarios.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow-sm transition">
            Crear
        </a>
    </div>

    <div class="bg-white shadow-sm rounded-2xl p-4">

        <table class="w-full text-sm">
            <thead>
                <tr class="text-slate-500 border-b">
                    <th class="text-left py-3">ID</th>
                    <th class="text-left">Nombre</th>
                    <th class="text-left">Email</th>
                    <th class="text-left">Tipo</th>
                    <th class="text-right">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($usuarios as $usuario)
                <tr class="border-b hover:bg-slate-50 transition">
                    <td class="text-slate-400 py-3">{{$usuario->id}}</td>

                    <td class="font-medium">{{$usuario->name}}</td>

                    <td class="text-slate-500">{{$usuario->email}}</td>

                    <td>
                        <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-medium">
                            {{$usuario->user_type}}
                        </span>
                    </td>

                    <td class="text-right">
                        <a href="{{ route('usuarios.edit', $usuario->id) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium mr-4">
                            Editar
                        </a>

                        <a href="{{ route('usuarios.delete-confirm', $usuario->id) }}" class="text-red-600 hover:text-red-800 text-sm font-medium">Eliminar</a>

<!--
                        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:text-red-800 text-sm font-medium">
                                Eliminar
                            </button>
                        </form>
-->
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</div>

@endsection