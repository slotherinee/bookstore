<footer class="container mx-auto p-4 flex justify-center">
    <p>&copy; <?= date('Y'); ?> Bookstore. All Rights Reserved.</p>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        // Mobile menu toggle
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking outside
        mobileMenu.addEventListener('click', function(e) {
            if (e.target === mobileMenu) {
                mobileMenu.classList.remove('active');
            }
        });
    });
</script>