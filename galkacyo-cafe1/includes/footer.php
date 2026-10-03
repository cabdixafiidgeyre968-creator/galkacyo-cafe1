<footer class="site-footer">

    <div class="container footer-content">

        <div>
            <h3>Galkacyo Café</h3>
            <p>
                Fresh food, great coffee and a place to enjoy.
            </p>
        </div>

        <div>
            <h4>Quick Links</h4>

            <a href="<?= page_url('home') ?>">Home</a>
            <a href="<?= page_url('menu') ?>">Menu</a>
            <a href="<?= page_url('gallery') ?>">Gallery</a>
            <a href="<?= page_url('contact') ?>">Contact</a>
        </div>

        <div>
            <h4>Contact</h4>

            <p><?= e($site['address']) ?></p>
            <p><?= e($site['phone']) ?></p>
            <p><?= e($site['email']) ?></p>
        </div>

    </div>

    <div class="footer-bottom">
        <p>
            © <?= date('Y') ?> Galkacyo Café. All rights reserved.
        </p>
    </div>

</footer>

<script>
const menuToggle = document.getElementById('menuToggle');
const mainNav = document.getElementById('mainNav');

if (menuToggle && mainNav) {
    menuToggle.addEventListener('click', () => {
        mainNav.classList.toggle('active');
    });
}
</script>

</body>
</html>