@extends('layout.admin')

@section('content')


    <div class="container py-4">

    <div class="flex justify-between items-center mb-6">
        <h3 class="text-xl font-semibold m-0">Prestamos</h3>

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif


        <a href="{{ route('prestamos.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow-sm transition">
            Crear Prestamo
        </a>

        <div class="bg-white shadow-sm rounded-2xl p-4">

        <table class="w-full text-sm">
            <thead>
                <tr class="text-slate-500 border-b">
                    <th class="text-left py-3">ID</th>
                    <th class="text-left">Libro</th>
                    <th class="text-left">Usuario</th>
                    <th class="text-left">Fecha</th>
                    <th class="text-left">Estatus</th>
                    <th class="text-left">Fecha de Entrega</th>
                    <th class="text-right">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($prestamos as $prestamo)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3">{{ $prestamo->id }}</td>
                        <td>{{ $prestamo->libro->nombre }}</td>
                        <td>{{ $prestamo->usuario->name }}</td>
                        <td>{{ $prestamo->created_at->format('d/m/Y') }}</td>
                        <td>
                         @if($prestamo->estado=='pendiente')
                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-green-800 bg-red-200 rounded-full">
                                    Pendiente
                                </span>
                                @else
                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-800 bg-green-200 rounded-full">
                                    Entregado
                                </span>
                                @endif
                                <td>{{ $prestamo->fecha_entrega ? $prestamo->fecha_entrega : '' }}</td>
</td>
                        <td class="text-right">
                            @if($prestamo->estado=='pendiente')
                            <a href="{{ route('prestamos.entregar', $prestamo->id) }}" class="bg-green-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow-sm transition">entregar</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                       
             </tbody>
            </table>
        </div>
    </div>



@endsection