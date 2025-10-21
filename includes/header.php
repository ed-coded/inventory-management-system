<header class="header">
  <div class="header-left">
    <img src="/asset/img/inventory-logo-5.png" alt="Logo" class="logo">
    <p>Warsor Ltd.</p>
  </div>

  <div class="header-right">
    <!-- Search bar -->
    <div class="search-box">
      <input type="search" placeholder="Search..." class="search-input">
    </div>

    <!-- Profile section -->
    <div class="user-profile">
      <button id="profileBtn" class="profile-btn">
        <p>Profile</p>
        <img src="/asset/img/landing.jpg" alt="User Image" class="profile-img">
      </button>

      <!-- Dropdown menu -->
      <div id="profileDropdown" class="dropdown">
        <form action="/logout" method="POST">
          <button type="submit" class="dropdown-item logout">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
          </button>
        </form>
      </div>
    </div>
  </div>
</header>

<script>
  // Dropdown toggle logic
  const profileBtn = document.getElementById("profileBtn");
  const dropdown = document.getElementById("profileDropdown");

  profileBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    dropdown.classList.toggle("show");
  });

  // Hide dropdown when clicking outside
  document.addEventListener("click", (e) => {
    if (!profileBtn.contains(e.target) && !dropdown.contains(e.target)) {
      dropdown.classList.remove("show");
    }
  });
</script>
