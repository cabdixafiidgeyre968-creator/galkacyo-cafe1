<?php

$pageTitle = 'Home';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';
?>

<main>

    <section class="hero">

        <div class="container hero-content">

            <div class="hero-text">

                <span class="eyebrow">
                    Welcome to Galkacyo Café
                </span>

                <h1>
                    Good Food.
                    <br>
                    Good Coffee.
                    <br>
                    <span>Good Moments.</span>
                </h1>

                <p>
                    Enjoy delicious meals, fresh drinks and
                    a warm café experience in Galkacyo.
                </p>

                <div class="hero-actions">

                    <a
                        href="<?= page_url('menu') ?>"
                        class="btn btn-primary"
                    >
                        Explore Our Menu
                    </a>

                    <a
                        href="<?= page_url('contact') ?>"
                        class="btn btn-secondary"
                    >
                        Contact Us
                    </a>

                </div>

            </div>

            <div class="hero-image">

                <div class="hero-image-card">
                    <span>Galkacyo Café</span>
                </div>

            </div>

        </div>

    </section>


    <section class="features">

        <div class="container features-grid">

            <div class="feature-card">
                <div class="feature-icon">☕</div>
                <h3>Fresh Coffee</h3>
                <p>
                    Carefully prepared coffee for every moment.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🍔</div>
                <h3>Delicious Food</h3>
                <p>
                    Quality meals prepared with fresh ingredients.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">✨</div>
                <h3>Great Atmosphere</h3>
                <p>
                    A comfortable place to relax and enjoy.
                </p>
            </div>

        </div>

    </section>


    <section class="menu-preview">

        <div class="container">

            <div class="section-heading">

                <span class="eyebrow">
                    Our Menu
                </span>

                <h2>
                    Popular Choices
                </h2>

                <p>
                    Discover some of our favorite food and drinks.
                </p>

            </div>

            <div class="menu-grid">

                <?php foreach (array_slice($menuItems, 0, 4) as $item): ?>

                    <article class="menu-card">

                        <div class="menu-image">
                            <span>Galkacyo Café</span>
                        </div>

                        <div class="menu-info">

                            <div class="menu-title">

                                <h3>
                                    <?= e($item['name']) ?>
                                </h3>

                                <strong>
                                    <?= e($item['price']) ?>
                                </strong>

                            </div>

                            <p>
                                <?= e($item['description']) ?>
                            </p>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

            <div class="center-button">

                <a
                    href="<?= page_url('menu') ?>"
                    class="btn btn-primary"
                >
                    View Full Menu
                </a>

            </div>

        </div>

    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>