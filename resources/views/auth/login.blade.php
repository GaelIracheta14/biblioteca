@extends('layout.auth')

@section('content')

<!-- HEADER -->
<header class="bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Bibliotecad - Administración</h1>
        <nav class="hidden md:flex space-x-6">
            <a href="#" class="hover:text-gray-200">Inicio</a>
            <a href="#" class="hover:text-gray-200">Usuarios</a>
            <a href="#" class="hover:text-gray-200">Libros</a>
            <a href="#" class="hover:text-gray-200">Préstamos</a>
            <a href="#" class="hover:text-gray-200">Salir</a>
        </nav>
        <button id="menuBtn" class="md:hidden focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
</header>

<div class="flex flex-1">
    <aside id="sidebar" class="bg-white w-64 p-5 border-r hidden md:block fixed md:static inset-y-0 left-0 z-40">
        <nav class="space-y-4">
            <a href="#" class="block text-gray-700 font-medium hover:text-blue-600">Inicio</a>
            <a href="#" class="block text-gray-700 font-medium hover:text-blue-600">Libros</a>
            <a href="#" class="block text-gray-700 font-medium hover:text-blue-600">Préstamos</a>
            <a href="#" class="block text-red-600 font-medium hover:text-red-800">Salir</a>
        </nav>
    </aside>

    <main class="flex-1 p-6 md:ml-64">
        <section class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold mb-6">Acceso al Sistema</h2>

            <!-- FORMULARIO DE LOGIN -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h3 class="text-xl font-semibold mb-4">Iniciar Sesión</h3>
                <form id="loginForm"  class="space-y-4" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                        <input type="password" id="password" name="password" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <button type="submit" 
                            class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
                        Iniciar Sesión
                    </button>
                </form>
            </div>

            <!-- FORMULARIO DE REGISTRO -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Registrar Nuevo Usuario</h3>
                <form class="space-y-4" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                        <input type="text" id="name" name="name" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                            <input type="password" id="password" name="password" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Repetir Contraseña</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <button type="submit" 
                            class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 transition duration-200">
                        Registrar Usuario
                    </button>
                </form>
            </div>
        </section>
    </main>
</div>

@endsection