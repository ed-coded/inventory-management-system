<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $title = 'Inventory Management System'; ?>
        <?php require __DIR__ .  "/partials/tags.php"; ?>
        <?php require_once dirname(__DIR__). '/functions.php'; ?>
        <link rel="stylesheet" href="/asset/css/styles.css">

    </head>
    <body>
        <header>
            <img src="/asset/img/inventory-logo-5.png" alt="logo image">
            <nav>
                <ul>
                    <a href="https://www.linkedin.com/in/edwin-agyemang/" target="_blank"><li><i class="fa-brands fa-linkedin fa-lg"></i></li></a>
                    <a href="#"><li><i class="fa-brands fa-facebook fa-lg"></i></li></a>
                    <a href="#"><li><i class="fa-brands fa-github fa-lg"></i></li></a>
                    <a href="#"><li><i class="fa-brands fa-twitter fa-lg"></i></li></a>
                </ul>
            </nav>
            <a href="/login" class="login-anchor"><li>login&nbsp;<i class="fa-solid fa-arrow-right-to-bracket"></i></li></a>
        </header>
        <main>
            <section class="left-side">
                <div class="divider top">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#F2F4F8" d="M38.8,-64C49.2,-53.6,55.9,-41.1,58.7,-28.6C61.5,-16.2,60.4,-3.8,58.8,8.6C57.1,20.9,55,33.4,46.6,37C38.2,40.7,23.6,35.6,13,34.1C2.4,32.5,-4.1,34.4,-12.7,35.4C-21.2,36.4,-31.8,36.6,-40.2,32C-48.6,27.4,-54.9,18.1,-54.2,9.1C-53.5,0.1,-45.8,-8.7,-38,-13.9C-30.2,-19.1,-22.3,-20.7,-15.9,-32.9C-9.6,-45.1,-4.8,-67.9,4.7,-75.1C14.2,-82.4,28.3,-74.3,38.8,-64Z" transform="translate(100 100)" />
                    </svg>
                </div>
                <div class="divider bottom">
                    <h1 id="hero-text"><span>Inventory, </span>Simplified. <br> Business, <span>Amplified.</span></h1>
                    <p>Stay ahead by turning real-time insights into smarter decisions, while effortless inventory control ensures you never miss a sale or lose track of stock.</p>
                    <div class="btn-container" id="input-btn">
                        <button onclick="showSignUp">GET STARTED</button>
                    </div>
                </div>
            </section>
            <section>
                <img src="/asset/img/landing.jpg" alt="landing page image" width="300" height="250">
            </section>
        </main>
        <footer>
            <p>&copy; 2025 | Inventory Management System | All Rights Reserved.</p>
        </footer>
        <script>
            const getStartedBtn = document.getElementById("input-btn");
            getStartedBtn.addEventListener('click', showSignUp);

            function showSignUp() {
                window.location.href="/signup";
            }
        </script>
    </body>
</html>