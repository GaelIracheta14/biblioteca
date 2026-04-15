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
                        BiblissoTech es una plataforma de gestión bibliotecaria moderna diseñada para facilitar el acceso al conocimiento de forma rápida, segura y accesible para todos.
                    </p>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Navegación</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-sm hover:text-white transition-colors">Inicio</a></li>
                        <li><a href="#" class="text-sm hover:text-white transition-colors">Catálogo</a></li>
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