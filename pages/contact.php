<?php

$pageTitle = 'Contact Us';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';
?>

<main>

    <!-- PAGE HERO -->
    <section class="page-hero">

        <div class="container">

            <span class="eyebrow">
                Get In Touch
            </span>

            <h1>Contact Us</h1>

            <p>
                Have a question? We would love to hear from you.
            </p>

        </div>

    </section>


    <!-- CONTACT -->
    <section class="contact-section">

        <div class="container contact-grid">


            <!-- CONTACT INFORMATION -->

            <div class="contact-info">

                <span class="eyebrow">
                    Contact Information
                </span>

                <h2>
                    Let's Talk
                </h2>

                <p>
                    Get in touch with Galkacyo Café for questions,
                    reservations or general information.
                </p>


                <div class="contact-item">

                    <div class="contact-icon">
                        📍
                    </div>

                    <div>
                        <h3>Location</h3>
                        <p>
                            <?= e($site['address']) ?>
                        </p>
                    </div>

                </div>


                <div class="contact-item">

                    <div class="contact-icon">
                        📞
                    </div>

                    <div>
                        <h3>Phone</h3>
                        <p>
                            <?= e($site['phone']) ?>
                        </p>
                    </div>

                </div>


                <div class="contact-item">

                    <div class="contact-icon">
                        ✉️
                    </div>

                    <div>
                        <h3>Email</h3>
                        <p>
                            <?= e($site['email']) ?>
                        </p>
                    </div>

                </div>


                <div class="contact-item">

                    <div class="contact-icon">
                        🕒
                    </div>

                    <div>
                        <h3>Opening Hours</h3>

                        <p>
                            Saturday – Thursday
                            <br>
                            8:00 AM – 11:00 PM
                        </p>

                    </div>

                </div>

            </div>


            <!-- CONTACT FORM -->

            <div class="contact-form-wrapper">

                <form class="contact-form">

                    <div class="form-row">

                        <div class="form-group">

                            <label for="name">
                                Your Name
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Enter your name"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label for="email">
                                Email Address
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Enter your email"
                                required
                            >

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="phone">
                            Phone Number
                        </label>

                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="Enter your phone number"
                        >

                    </div>


                    <div class="form-group">

                        <label for="message">
                            Message
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            placeholder="Write your message..."
                            required
                        ></textarea>

                    </div>


                    <button
                        type="submit"
                        class="btn btn-primary form-submit"
                    >
                        Send Message
                    </button>

                </form>

            </div>

        </div>

    </section>

</main>


<script>

const contactForm =
    document.querySelector('.contact-form');

if (contactForm) {

    contactForm.addEventListener('submit', function(event) {

        event.preventDefault();

        alert(
            'Thank you! Your message has been received.'
        );

        contactForm.reset();

    });

}

</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>