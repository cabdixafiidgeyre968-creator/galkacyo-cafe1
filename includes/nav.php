<header class="site-header">

    <div class="container navbar">

        <a href="<?= page_url('home') ?>" class="logo">
            Galkacyo<span>Café</span>
        </a>

        <button
            class="menu-toggle"
            id="menuToggle"
            type="button"
            aria-label="Open navigation"
        >
            ☰
        </button>

        <nav class="main-nav" id="mainNav">

            <a href="<?= page_url('home') ?>">Home</a>

            <a href="<?= page_url('menu') ?>">Menu</a>

            <a href="<?= page_url('gallery') ?>">Gallery</a>

            <a href="<?= page_url('about') ?>">About</a>

            <a href="<?= page_url('contact') ?>">Contact</a>

            <a
                href="<?= page_url('menu') ?>"
                class="nav-button"
            >
                Order Now
            </a>

        </nav>

    </div>

</header>