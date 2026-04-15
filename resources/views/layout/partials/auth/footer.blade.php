<!-- FOOTER -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p class="text-sm">
            © 2026 Biblioteca | Panel de Administración
        </p>
    </footer>

    <!-- JS Vanilla (solo para el menú) -->
    <script>
        const menuBtn = document.getElementById('menuBtn');
        const sidebar = document.getElementById('sidebar');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
        });
    </script>

</body>
</html>