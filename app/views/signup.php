<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__ . "/partials/tags.php"; ?>
        <link rel="stylesheet" href="/asset/css/signup.css" />
    </head>
    <body>
        <main>
            <section class="container-left">
                <img src="/asset/img/signup.jpg" alt="site image" />
            </section>

            <section class="container-right">
                <div class="wrapper">
                    <h1>Create an account</h1>

                    <!-- Google Sign Up -->
                    <div
                        id="g_id_onload"
                        data-client_id="861961544746-6ltr6ts9mqhj6j2b8q7qabbvkcm7cila.apps.googleusercontent.com"
                        data-login_uri="https://yourdomain.com/auth/google"
                        data-auto_prompt="false"
                    ></div>
                    <div
                        class="g_id_signin"
                        data-type="standard"
                        data-size="large"
                        data-theme="outline"
                        data-text="signup_with"
                        data-shape="rect"
                        data-logo_alignment="center"
                    ></div>

                    <!-- Divider -->
                    <div class="divider">OR</div>

                    <!-- Signup Form -->
                    <form
                        id="signupForm"
                        action="/signup.php"
                        method="post"
                        novalidate
                    >
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input
                                type="text"
                                id="fullname"
                                name="fullname"
                                required
                                placeholder="Kwame Ato"
                            />
                            <small class="error"></small>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                placeholder="example@mail.com"
                            />
                            <small class="error"></small>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                required
                                minlength="6"
                                placeholder="Enter password"
                            />
                            <small class="error"></small>
                        </div>

                        <div class="form-group">
                            <label for="confirmPassword"
                                >Confirm Password</label
                            >
                            <input
                                type="password"
                                id="confirmPassword"
                                name="confirmPassword"
                                required
                                placeholder="Re-enter password"
                            />
                            <small class="error"></small>
                        </div>
                        <div class="btn">
                            <button type="submit" class="btn">Sign Up</button>
                        </div>
                        <p>
                            Already have an account?
                            <a href="/login"
                                ><span
                                    >Login
                                    <i
                                        class="fa-solid fa-arrow-up fa-rotate-by"
                                        style="--fa-rotate-angle: 45deg"
                                    ></i></span
                            ></a>
                        </p>
                    </form>
                </div>
            </section>
        </main>

        <footer>
            <p>
                &copy; 2025 | Inventory Management System | All Rights Reserved.
            </p>
        </footer>

        <script
            src="https://accounts.google.com/gsi/client"
            async
            defer
        ></script>

        <script>
            const form = document.getElementById("signupForm");
            const password = document.getElementById("password");
            const confirmPassword = document.getElementById("confirmPassword");

            form.addEventListener("submit", function (e) {
                let valid = true;

                // Clear old errors
                document
                    .querySelectorAll(".error")
                    .forEach((el) => (el.textContent = ""));

                // Check password match
                if (password.value !== confirmPassword.value) {
                    document.querySelector(
                        "#confirmPassword + .error"
                    ).textContent = "Passwords do not match";
                    valid = false;
                }

                // If invalid, prevent submission
                if (!valid) {
                    e.preventDefault();
                }
            });

            // Replace with your actual landing page URL
            const landingPage = "../index.php";

            // Detect back button (popstate event fires when user navigates back/forward)
            window.addEventListener("popstate", function () {
                window.location.href = landingPage;
            });

            // Push a dummy state into history so back button triggers popstate
            history.pushState(null, "", window.location.href);
        </script>
    </body>
</html>