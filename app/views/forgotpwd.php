<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php $title = 'Password Reset — Inventory Management' ?>
  <?php include __DIR__ . '/partials/tags.php'?>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    .floating-label {
      @apply absolute left-10 top-3 text-gray-500 text-sm transition-all;
    }
    input:focus + .floating-label,
    input:not(:placeholder-shown) + .floating-label {
      @apply -translate-y-4 scale-90 text-blue-600 bg-white px-1;
    }
    .spinner {
      width: 18px;
      height: 18px;
      border: 2px solid rgba(255,255,255,0.4);
      border-top-color: white;
      border-radius: 50%;
      animation: spin 0.7s linear infinite;
    }
    @keyframes spin { to { transform: rotate(360deg); } }
  </style>
</head>
<body class="min-h-screen bg-slate-800 from-gray-100 to-gray-200 flex items-center justify-center p-4">

  <main class="bg-white w-full max-w-md rounded-[5px] shadow-md p-6 border border-gray-100">
    <!-- Brand -->
    <div class="flex items-center gap-3 mb-6">
      <img src="/asset/img/inventory-logo-5.png" alt="Logo" class="logo w-10 h-15 flex items-center justify-center rounded-[5px]">
      <div>
        <h1 class="text-gray-800 font-semibold text-base">Inventory Management</h1>
        <p class="text-gray-500 text-xs">Reset your password</p>
      </div>
    </div>

    <!-- Heading -->
    <div class="mb-5">
      <h2 class="text-gray-800 text-lg font-semibold">Forgot Password?</h2>
      <p class="text-gray-500 text-sm mt-1">
        Enter your registered email address and we’ll send reset instructions.
      </p>
    </div>

    <!-- Form -->
    <form id="resetForm" method="POST" action="/AuthController" novalidate>
      <div class="relative mb-4">
        <i class="fa fa-envelope absolute left-3 top-3 text-gray-400"></i>
        <input 
          id="email" 
          name="email" 
          type="email" 
          placeholder=" " 
          class="w-full pl-10 pr-3 py-2 text-sm border border-gray-300 rounded-[5px] focus:ring-1 focus:ring-blue-500 focus:border-blue-500 outline-none"
          required 
        />
        <label for="email" class="floating-label">Email address</label>
      </div>

      <div class="flex items-center justify-between mt-4">
        <button 
          id="submitBtn" 
          type="submit" 
          class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 text-sm rounded-[5px] font-medium transition-all flex items-center gap-2"
        >
          <span id="btnContent">Send Reset Link</span>
        </button>
        <a href="/login" class="text-blue-600 text-sm hover:underline">Back to login</a>
      </div>

      <p id="formMessage" class="text-sm mt-3 text-center"></p>
    </form>

    <!-- Success -->
    <div id="successCard" class="hidden mt-6 p-4 border border-green-100 rounded-[5px] bg-green-50 text-sm">
      <div class="flex gap-3 items-start">
        <div class="bg-green-500 text-white w-8 h-8 flex items-center justify-center rounded-[5px]">
          <i class="fa-solid fa-check"></i>
        </div>
        <div>
          <p class="font-semibold text-green-800">Check your email</p>
          <p class="text-gray-600 mt-1">
            If an account exists for <span id="maskEmail" class="font-semibold"></span>,
            we’ve sent a reset link.
          </p>
          <div class="mt-2">
            <a id="gotoInbox" href="#" class="text-blue-600 hover:underline font-medium">Open Inbox</a>
            <span class="text-gray-400 mx-1">•</span>
            <a href="./" class="text-blue-600 hover:underline font-medium">Return to Login</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script>
    const form = document.getElementById("resetForm");
    const msgEl = document.getElementById("formMessage");
    const btn = document.getElementById("submitBtn");
    const btnContent = document.getElementById("btnContent");
    const successCard = document.getElementById("successCard");
    const maskEmail = document.getElementById("maskEmail");

    function setLoading(state) {
      btn.disabled = state;
      btnContent.innerHTML = state ? '<div class="spinner"></div>' : 'Send Reset Link';
    }

    form.addEventListener("submit", async (e) => {
      e.preventDefault();
      const formData = new FormData(form);
      const email = formData.get("email");

      if (!email) {
        msgEl.textContent = "Please enter your email address.";
        msgEl.className = "text-red-500";
        return;
      }

      setLoading(true);

      try {
        const res = await fetch(form.action, {
          method: "POST",
          body: formData,
        });
        const data = await res.json();

        if (data.status === "ok") {
          successCard.classList.remove("hidden");
          form.classList.add("hidden");
          maskEmail.textContent = email;
          msgEl.textContent = "";
        } else {
          msgEl.textContent = data.message || "Something went wrong.";
          msgEl.className = "text-red-500";
        }
      } catch {
        msgEl.textContent = "Server error. Try again later.";
        msgEl.className = "text-red-500";
      } finally {
        setLoading(false);
      }
    });
  </script>
</body>
</html>
