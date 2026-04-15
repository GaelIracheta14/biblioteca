<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca4</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
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
                    <span class="text-xl font-bold tracking-tight">Biblio<span class="text-blue-600">Tech</span></span>
                </a>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors">Inicio</a>
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
                <a href="#" class="block px-4 py-3 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-blue-600 transition-colors">Inicio</a>
                <a href="#" class="block px-4 py-3 text-center text-base font-bold text-white bg-blue-600 rounded-xl shadow-lg shadow-blue-200 hover:bg-blue-700 transition-colors">Login</a>
            </div>
        </div>
    </header>

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
                            Nueva Colección 20226
                        </span>
                        <h1 class="text-4xl tracking-tight font-extrabold text-slate-900 sm:text-5xl md:text-6xl mb-6">
                            Tu conocimiento, <br class="hidden lg:block">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">organizado y digital</span>.
                        </h1>
                        <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                            Accede a miles de libros, recursos académicos y archivos históricos. La plataforma de gestión bibliotecaria diseñada para la era moderna.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 sm:justify-center lg:justify-start">
                            <a href="#" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-2xl text-white bg-blue-600 hover:bg-blue-700 shadow-xl shadow-blue-200 transition-all hover:-translate-y-1">
                                Empezar a leer
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

        <section class="bg-white py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Explora nuestras categorías</h2>
                    <p class="mt-4 text-lg text-slate-500">Seleccionamos cuidadosamente el contenido para potenciar tu aprendizaje.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="group relative bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-lg shadow-slate-200/50 hover:shadow-xl hover:shadow-blue-100 transition-all duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Literatura">
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2 text-slate-900">Literatura Clásica</h3>
                            <p class="text-slate-500 text-sm mb-4">Obras maestras que han resistido la prueba del tiempo.</p>
                            <a href="#" class="text-blue-600 font-semibold text-sm hover:underline">Ver colección &rarr;</a>
                        </div>
                    </div>

                    <div class="group relative bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-lg shadow-slate-200/50 hover:shadow-xl hover:shadow-blue-100 transition-all duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Ciencia">
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2 text-slate-900">Ciencias y Tecnología</h3>
                            <p class="text-slate-500 text-sm mb-4">Recursos actualizados para investigación y desarrollo.</p>
                            <a href="#" class="text-blue-600 font-semibold text-sm hover:underline">Ver colección &rarr;</a>
                        </div>
                    </div>

                    <div class="group relative bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-lg shadow-slate-200/50 hover:shadow-xl hover:shadow-blue-100 transition-all duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Historia">
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2 text-slate-900">Historia y Arte</h3>
                            <p class="text-slate-500 text-sm mb-4">Documentos visuales y crónicas del pasado humano.</p>
                            <a href="#" class="text-blue-600 font-semibold text-sm hover:underline">Ver colección &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-slate-900 text-slate-300 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 lg:gap-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </div>
                        <span class="text-xl font-bold text-white">BiblioTech</span>
                    </div>
                    <p class="text-sm leading-relaxed text-slate-400 max-w-sm">
                        BiblioTech es una plataforma de gestión bibliotecaria moderna diseñada para facilitar el acceso al conocimiento de forma rápida, segura y accesible para todos.
                    </p>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Navegación</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-sm hover:text-white transition-colors">Inicio</a></li>
                        <li><a href="#" class="text-sm hover:text-white transition-colors">Categorias</a></li>
                        <li><a href="#" class="text-sm hover:text-white transition-colors">Préstamos</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Legal</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-sm hover:text-white transition-colors">Privacidad</a></li>
                        <li><a href="#" class="text-sm hover:text-white transition-colors">Términos</a></li>
                        <li><a href="#" class="text-sm hover:text-white transition-colors">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-slate-800 text-center">
                <p class="text-xs text-slate-500">&copy; 2026 BiblioTech Inc. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const body = document.body;

        menuToggle.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            
            if (isHidden) {
                // Abrir menú
                mobileMenu.classList.remove('hidden');
                menuIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>`;
                body.classList.add('overflow-hidden-important'); // Bloquear scroll
            } else {
                // Cerrar menú
                mobileMenu.classList.add('hidden');
                menuIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>`;
                body.classList.remove('overflow-hidden-important'); // Desbloquear scroll
            }
        });

        // Cerrar menú automáticamente si la pantalla crece (al girar tablet/móvil)
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                mobileMenu.classList.add('hidden');
                body.classList.remove('overflow-hidden-important');
                menuIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>`;
            }
        });
    </script>
</body>
</html>