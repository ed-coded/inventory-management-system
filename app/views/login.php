<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__ . "/partials/tags.php"; ?>
        <link rel="stylesheet" href="/asset/css/login.css" />
    </head>
    <body>
        <main>
            <section class="container-left">
                <img
                    
                    src="/asset/img/inventory-logo-7.jpg"
                    alt="site image"
                />
            </section>

            <section class="container-right">
                <div class="wrapper">
                    <h1>Welcome Back👋!</h1>
                    <p id="welcome-text">
                        Access your account to manage your inventory
                    </p>

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
                        data-text="login_with"
                        data-shape="rect"
                        data-logo_alignment="center"
                    ></div>

                    <!-- Divider -->
                    <div class="divider">OR</div>

                    <!-- Signup Form -->
                    <form
                        id="signupForm"
                        action="/login"
                        method="post"
                        novalidate
                    >
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
                        
                        <p id="forgotten-text">
                            <span
                                ><a href="/forgotpassword"
                                    ><i class="fa-solid fa-lock"></i
                                    >&nbsp;Forgotten Password?</a
                                ></span
                            ><span
                                ><a href="/contactUs"
                                    ><i class="fa-solid fa-compass"></i
                                    >&nbsp;Need help?</a
                                ></span
                            >
                        </p>
                        <div class="btn">
                            <button type="submit" class="btn">
                                Login&nbsp;<i
                                    class="fa-solid fa-arrow-right-to-bracket"
                                ></i>
                            </button>
                        </div>
                        <p>
                            Don't have an account?
                            <a href="/signup"
                                ><span
                                    >Sign Up
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
                /*     if (password.value !== confirmPassword.value) {
        document.querySelector('#confirmPassword + .error').textContent = "Passwords do not match";
        valid = false;
    } */

                // If invalid, prevent submission
                if (!valid) {
                    e.preventDefault();
                }
            });

            function moveBackFunc() {
                // Replace with your actual landing page URL
                const landingPage = "/";

                // Detect back button (popstate event fires when user navigates back/forward)
                window.addEventListener("popstate", function () {
                    window.location.href = landingPage;
                });

                // Push a dummy state into history so back button triggers popstate
                history.pushState(null, "", window.location.href);
            }

            moveBackFunc();
        </script>
    </body>
</html>