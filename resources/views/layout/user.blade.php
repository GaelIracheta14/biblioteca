<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin Bibliotecsfa - Login & Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        /* Evita el scroll cuando el menú móvil está abierto */
        .overflow-hidden-important { overflow: hidden !important; }
    </style>
</head>
<body class="bg-white text-slate-900 antialiased">




  

    

    <header class="fixed top-0 left-0 w-full z-50 bg-white/90 backdrop-blur-md border-b border-slate-200">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="#" class="flex-shrink-0 flex items-center gap-2 group">
                    <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-blue-200 group-hover:bg-blue-700 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <span class="text-xl font-bold tracking-tight">Biblwio<span class="text-blue-600">Tech</span></span>
                </a>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('homa') }}" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors">Inicaio</a>
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-semibold text-white bg-slate-900 rounded-full hover:bg-slate-800 transition-all shadow-md hover:shadow-lg">Login</a>
                    

                    
                </div>

                <div class="md:hidden">
                    <button id="menu-toggle" class="p-2 text-slate-600 hover:text-blue-600 focus:outline-none transition-colors">
                        <svg id="menu-icon" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    </button>
                </div>
            </div>
        </nav>

        <div id="mobile-menu" class="hidden md:hidden absolute top-20 left-0 w-full bg-white border-b border-slate-100 shadow-2xl z-40 transition-all duration-300 ease-in-out">
            <div class="px-4 py-6 space-y-4">
                <a href="{{ route('homa') }}" class="block px-4 py-3 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-blue-600 transition-colors">Inicaiao</a>
                <a href="{{ route('login') }}" class="block px-4 py-3 text-center text-base font-bold text-white bg-blue-600 rounded-xl shadow-lg shadow-blue-200 hover:bg-blue-700 transition-colors">Login</a>
            </div>
        </div>
    </header>

    <div class="flex pt-20"> <!-- pt-20 para que no choque con el header fijo -->

    <!-- SIDEBAR -->
    <aside class="w-64 h-screen fixed top-20 left-0 bg-slate-900 text-white shadow-xl">
        <div class="p-6">
            <h2 class="text-lg font-bold tracking-wide text-blue-400">Panel Admin</h2>
        </div>

        <nav class="px-4 space-y-2">

            <a href="{{ route('homa') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-800 transition">
                <!-- icon -->
                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"/>
                </svg>
                Inicio
            </a>

           

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-800 transition">
                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2V11H3v8a2 2 0 002 2z"/>
                </svg>
                Préstamos
            </a>

           

        </nav>
    </aside>

    <!-- CONTENIDO -->
    <main class="ml-64 p-8 w-full">
        @yield('content')
    </main>

</div>

    
    @yield('content')

     <!-- HEADER -->

@includeIf('partials.auth.admin.footer')







    