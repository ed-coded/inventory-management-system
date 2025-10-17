<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reset Password — Inventory Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
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
<body class="min-h-screen bg-gray-100 flex items-center justify-center p-4">

  <main class="bg-white w-full max-w-sm rounded-[5px] shadow-md p-6 border border-gray-100">
    <!-- Brand -->
    <div class="flex items-center gap-3 mb-6">
      <img class="bg-blue-600 text-white font-bold text-lg w-10 h-10 flex items-center justify-center rounded-[5px]" src="../../public/asset/img/inventory-logo-5.png">
      <div>
        <h1 class="text-gray-800 font-semibold text-base">Inventory Management</h1>
        <p class="text-gray-500 text-xs">Reset your password</p>
      </div>
    </div>
    <!-- Title -->
    <div class="mb-5">
      <h2 class="text-gray-800 text-lg font-semibold">Set a new password</h2>
      <p class="text-gray-500 text-sm mt-1">
        Your new password must be different from previous passwords.
      </p>
    </div>

    <!-- Reset Form -->
    <form id="resetForm" method="POST" action="/app/controllers/AuthController.php">
      <input type="hidden" name="token" value="<?= htmlspecialchars($_GET['token'] ?? '') ?>">

      <div class="mb-4">
        <label class="block text-sm text-gray-600 mb-1">New Password</label>
        <div class="relative">
          <input 
            type="password" 
            name="password" 
            id="password" 
            placeholder="Enter new password"
            class="w-full border border-gray-300 rounded-[5px] px-3 py-2 text-sm focus:ring-1 focus:ring-blue-500 focus:border-blue-500"
            required
          />
          <i id="togglePass" class="fa fa-eye absolute right-3 top-3 text-gray-400 cursor-pointer"></i>
        </div>
      </div>

      <div class="mb-5">
        <label class="block text-sm text-gray-600 mb-1">Confirm Password</label>
        <div class="relative">
          <input 
            type="password" 
            name="confirm_password" 
            id="confirm_password" 
            placeholder="Confirm new password"
            class="w-full border border-gray-300 rounded-[5px] px-3 py-2 text-sm focus:ring-1 focus:ring-blue-500 focus:border-blue-500"
            required
          />
          <i id="toggleConfirm" class="fa fa-eye absolute right-3 top-3 text-gray-400 cursor-pointer"></i>
        </div>
      </div>

      <button 
        id="submitBtn"
        type="submit" 
        class="bg-blue-600 hover:bg-blue-700 text-white w-full py-2 text-sm rounded-[5px] font-medium flex justify-center items-center gap-2"
      >
        <span id="btnContent">Reset Password</span>
      </button>

      <p id="formMessage" class="text-sm text-center mt-3"></p>
    </form>

    <!-- Success Message -->
    <div id="successCard" class="hidden mt-6 p-4 border border-green-100 rounded-[5px] bg-green-50 text-sm">
      <div class="flex gap-3 items-start">
        <div class="bg-green-500 text-white w-8 h-8 flex items-center justify-center rounded-[5px]">
          <i class="fa-solid fa-check"></i>
        </div>
        <div>
          <p class="font-semibold text-green-800">Password successfully reset</p>
          <p class="text-gray-600 mt-1">
            You can now log in with your new password.
          </p>
          <div class="mt-2">
            <a href="/app/views/login.php" class="text-blue-600 hover:underline font-medium">Go to Login</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script>
    const form = document.getElementById("resetForm");
    const btn = document.getElementById("submitBtn");
    const msgEl = document.getElementById("formMessage");
    const btnContent = document.getElementById("btnContent");
    const successCard = document.getElementById("successCard");

    // Toggle password visibility
    const toggle = (inputId, iconId) => {
      const input = document.getElementById(inputId);
      const icon = document.getElementById(iconId);
      icon.addEventListener("click", () => {
        input.type = input.type === "password" ? "text" : "password";
        icon.classList.toggle("fa-eye-slash");
      });
    };
    toggle("password", "togglePass");
    toggle("confirm_password", "toggleConfirm");

    const setLoading = (state) => {
      btn.disabled = state;
      btnContent.innerHTML = state ? '<div class="spinner"></div>' : 'Reset Password';
    };

    form.addEventListener("submit", async (e) => {
      e.preventDefault();
      const formData = new FormData(form);
      setLoading(true);
      msgEl.textContent = "";

      try {
        const res = await fetch(form.action, { method: "POST", body: formData });
        const data = await res.json();

        if (data.status === "ok") {
          form.classList.add("hidden");
          successCard.classList.remove("hidden");
        } else {
          msgEl.textContent = data.message || "Something went wrong.";
          msgEl.className = "text-sm text-red-500 text-center mt-3";
        }
      } catch {
        msgEl.textContent = "Server error. Try again later.";
        msgEl.className = "text-sm text-red-500 text-center mt-3";
      } finally {
        setLoading(false);
      }
    });
  </script>

</body>
</html>
