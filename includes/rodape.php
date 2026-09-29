</main>
    <footer class="main-footer">
        <p>&copy; <?= date('Y'); ?> - Sistema do Churrasco Farroupilha</p>
    </footer>
    <script src="../js/script.js"></script>
    <script>
        if (window.location.pathname.endsWith('index.php') || window.location.pathname.endsWith('/')) {
            document.write('<script src="js/script.js"><\/script>');
        }
    </script>
</body>
</html>