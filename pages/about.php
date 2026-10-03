<?php

$pageTitle = 'About Us';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';
?>

<main>

    <!-- PAGE HERO -->
    <section class="page-hero">

        <div class="container">

            <span class="eyebrow">
                Get to Know Us
            </span>

            <h1>About Galkacyo Café</h1>

            <p>
                A place created for great food, good coffee
                and memorable moments.
            </p>

        </div>

    </section>


    <!-- ABOUT -->
    <section class="about-section">

        <div class="container about-grid">

            <div class="about-image">

                <div class="about-image-inner">
                    <span>Galkacyo Café</span>
                </div>

            </div>


            <div class="about-content">

                <span class="eyebrow">
                    Our Story
                </span>

                <h2>
                    More Than Just a Café
                </h2>

                <p>
                    Galkacyo Café is a welcoming place where
                    people can come together to enjoy delicious
                    food, fresh drinks and quality coffee.
                </p>

                <p>
                    Our goal is simple: to create a comfortable
                    café experience with great service, fresh
                    ingredients and food that people love.
                </p>

                <p>
                    Whether you are meeting friends, enjoying
                    coffee, having a meal or simply relaxing,
                    Galkacyo Café is here for you.
                </p>

                <a
                    href="<?= page_url('menu') ?>"
                    class="btn btn-primary"
                >
                    Explore Our Menu
                </a>

            </div>

        </div>

    </section>


    <!-- VALUES -->
    <section class="values-section">

        <div class="container">

            <div class="section-heading">

                <span class="eyebrow">
                    What Matters to Us
                </span>

                <h2>
                    Our Values
                </h2>

            </div>


            <div class="values-grid">

                <div class="value-card">

                    <div class="value-icon">
                        ✨
                    </div>

                    <h3>Quality</h3>

                    <p>
                        We focus on fresh ingredients and
                        quality preparation.
                    </p>

                </div>


                <div class="value-card">

                    <div class="value-icon">
                        ❤️
                    </div>

                    <h3>Hospitality</h3>

                    <p>
                        Every guest should feel welcomed,
                        respected and comfortable.
                    </p>

                </div>


                <div class="value-card">

                    <div class="value-icon">
                        ☕
                    </div>

                    <h3>Great Taste</h3>

                    <p>
                        We want every meal and drink to be
                        something worth coming back for.
                    </p>

                </div>

            </div>

        </div>

    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>