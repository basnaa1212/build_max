        <main class="content">
            <h1>Welcome to the Admin Dashboard</h1>
            <p>Select an option from the sidebar to get started.</p>
        </main>
    </div>
    <script>
        function toggleSubmenu(menuId) {
            const submenu = document.getElementById(menuId);
            if (submenu.style.display === "block") {
                submenu.style.display = "none";
            } else {
                submenu.style.display = "block";
            }
        }
    </script>
</body>
</html>