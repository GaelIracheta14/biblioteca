 
 
 @extends('layout.admin')
 
 
 
 
 
 
 <!--contenido principal-->
    <main>
        <section class="relative pt-32 pb-16 lg:pt-48 lg:pb-32 overflow-hidden bg-slate-50">
            <div class="absolute top-0 right-0 -translate-y-12 translate-x-12 blur-3xl opacity-30 pointer-events-none">
                <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
                    
                    <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 mb-6 border border-blue-100">
                            <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                            Nueva Colección 3
                        </span>
                        <h1 class="text-4xl tracking-tight font-extrabold text-slate-900 sm:text-5xl md:text-6xl mb-6">
                            Tu conocimiento, <br class="hidden lg:block">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">organizado y digital</span>.
                        </h1>
                        <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                            Accede a miles de libros, recursos académicos y archivos históricos. La plataforma de gestión bibliotecaria diseñada para la era moderna.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 sm:justify-center lg:justify-start">
                            <a href="{{ route('libros.create') }}" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-2xl text-white bg-blue-600 hover:bg-blue-700 shadow-xl shadow-blue-200 transition-all hover:-translate-y-1">
                                Agregar Libro
                            </a>
                            <a href="#" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-2xl text-slate-700 bg-white border border-slate-200 hover:bg-slate-50 transition-all hover:-translate-y-1">
                                Ver catálogo
                            </a>
                        </div>
                    </div>

                    <div class="mt-16 lg:mt-0 lg:col-span-6">
                        <div class="relative rounded-3xl bg-slate-900/5 p-2 ring-1 ring-inset ring-slate-900/10 lg:m-4 lg:rounded-[2rem] shadow-2xl">
                            <img class="w-full rounded-2xl shadow-sm ring-1 ring-slate-900/10 object-cover aspect-[4/3]" 
                                 src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                                 alt="Biblioteca moderna">
                        </div>
                    </div>

                </div>
            </div>
        </section>

       <section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4">

        <h2 class="text-2xl font-bold text-slate-800 mb-6">
            Libros registrados
        </h2>

        <div class="overflow-x-auto rounded-2xl shadow border border-slate-200">
            <table class="min-w-full text-sm text-left text-slate-600">

                <thead class="bg-slate-100 text-slate-700 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3">Nombre</th>
                        <th class="px-6 py-3">Autor</th>
                        <th class="px-6 py-3">ISBN</th>
                        <th class="px-6 py-3">Categoría</th>
                        <th class="px-6 py-3">Editorial</th>
                        <th class="px-6 py-3">Acciones</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-200 bg-white">
                    @foreach($libros as $libro)
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-6 py-4 font-medium text-slate-900">{{ $libro->nombre }}</td>
                            <td class="px-6 py-4">{{ $libro->autor }}</td>
                            <td class="px-6 py-4">{{ $libro->isbn }}</td>
                            <td class="px-6 py-4">{{ $libro->categoria->nombre }}</td>
                            <td class="px-6 py-4">{{ $libro->editorial }}</td>
                            <td class="px-6 py-4">
                                @if($libro->estatus==0)
                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-green-800 bg-green-200 rounded-full">
                                    Disponible
                                </span>
                                @else
                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-800 bg-red-200 rounded-full">
                                    No disponible
                                </span>
                                @endif
                            </td>
                                <td class="px-6 py-4">
                                <a href="{{ route('libros.edit', $libro->id) }}" class="text-blue-600 hover:text-blue-800 font-semibold mr-4">
                                    Editar
                                </a>
                                <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded shadow-md" onclick="return confirm('¿Estás seguro de eliminar este libro?')">Eliminar</button>
                            </form>
                        </tr>

                      

    
                    @endforeach
                </tbody>

            </table>
        </div>
        <div class="mt-4" >
            {{ $libros->links() }}
        </div>
        


    </div>
</section>
    </main>
