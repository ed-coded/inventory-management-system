<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__ . "/partials/tags.php"; ?>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: "Roboto", sans-serif;
                background: #f4f7fb;
                color: #333;
            }

            main {
                width: 100%;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }

            /* Header Section */
            .header {
                background: linear-gradient(135deg, #0b2b43, #163c5c);
                color: white;
                text-align: center;
                padding: 4rem 1rem;
            }

            .header h1 {
                font-size: 2.2rem;
                font-weight: 700;
            }

            .header p {
                font-size: 1rem;
                margin-top: 0.8rem;
                line-height: 1.6;
                color: #e2e8f0;
            }

            /* Card Section */
            .card {
                background: white;
                border-radius: 0.5rem;
                max-width: 600px;
                width: 90%;
                margin: -2rem auto 2rem;
                padding: 2rem;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
                animation: fadeInUp 0.8s ease;
            }

            .card h2 {
                text-align: center;
                margin-bottom: 1.5rem;
                font-weight: 600;
                color: #0b2b43;
            }

            /* Form */
            form {
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            /*     label {
        font-weight: 500;
        margin-bottom: .3rem;
    } */

            input,
            textarea {
                padding: .8rem 1rem !important;
                border: 1px solid #cbd5e1;
                border-radius: 0.5rem;
                outline: none;
                font-size: 1rem;
                transition: 0.3s;
                width: 100%;
                /* min-height: 3rem; */
            }

            input:focus,
            textarea:focus {
                border-color: #0b2b43;
                box-shadow: 0 0 5px rgba(11, 43, 67, 0.3);
            }

            textarea {
                resize: none;
                min-height: 130px;
            }

            button {
                background: #0b2b43;
                color: white;
                border: none;
                padding: 0.9rem 1.2rem;
                border-radius: 0.5rem;
                font-size: 1rem;
                font-weight: 600;
                cursor: pointer;
                transition: background 0.3s ease;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 0.5rem;
            }

            button:hover {
                background: #163c5c;
            }

            /* Animations */
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* Responsive */
            @media (max-width: 600px) {
                .header h1 {
                    font-size: 1.8rem;
                }

                .card {
                    padding: 1.5rem;
                }
            }
        </style>
    </head>
    <body>
        <main>
            <div class="header">
                <h1>Contact Support</h1>
                <p>
                    From stock management to system setup, our dedicated support
                    team is here to guide you <br />
                    and ensure your inventory runs without a hitch.
                </p>
            </div>

            <div class="card">
                <h2>Send us a Message</h2>
                <form method="POST">
                    <div>
                        <!-- <label for="name">Full Name</label> -->
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Enter your full name"
                            required
                        />
                    </div>

                    <div>
                        <!-- <label for="email">Email Address</label> -->
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email"
                            required
                        />
                    </div>

                    <div>
                        <!-- <label for="message">Your Message</label> -->
                        <textarea
                            id="message"
                            name="message"
                            placeholder="Write your message here..."
                            required
                        ></textarea>
                    </div>

                    <button type="submit">
                        <i class="fa-solid fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </main>
    </body>
</html>