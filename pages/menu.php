<?php

$pageTitle = 'Our Menu';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';
?>

<main>

    <!-- PAGE HERO -->
    <section class="page-hero">

        <div class="container">

            <span class="eyebrow">
                Galkacyo Café
            </span>

            <h1>Our Menu</h1>

            <p>
                Discover our delicious selection of fresh food,
                coffee and refreshing drinks.
            </p>

        </div>

    </section>


    <!-- MENU -->
    <section class="full-menu-section">

        <div class="container">

            <div class="menu-categories">

                <button class="category-btn active" data-category="all">
                    All
                </button>

                <button class="category-btn" data-category="Food">
                    Food
                </button>

                <button class="category-btn" data-category="Drinks">
                    Drinks
                </button>

            </div>


            <div class="menu-grid menu-page-grid">

                <?php foreach ($menuItems as $item): ?>

                    <article
                        class="menu-card menu-filter-item"
                        data-category="<?= e($item['category']) ?>"
                    >

                        <div class="menu-image">

                            <span>
                                <?= e($item['category']) ?>
                            </span>

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

                            <button class="add-order-btn">
                                Add to Order
                            </button>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

</main>


<script>

const categoryButtons =
    document.querySelectorAll('.category-btn');

const menuItems =
    document.querySelectorAll('.menu-filter-item');

categoryButtons.forEach(button => {

    button.addEventListener('click', () => {

        categoryButtons.forEach(btn => {
            btn.classList.remove('active');
        });

        button.classList.add('active');

        const category =
            button.dataset.category;

        menuItems.forEach(item => {

            if (
                category === 'all' ||
                item.dataset.category === category
            ) {

                item.style.display = '';

            } else {

                item.style.display = 'none';

            }

        });

    });

});

</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>