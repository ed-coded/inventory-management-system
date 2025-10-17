
<main class="space-y-10">

  <!-- ⚙️ Page Header -->
  <section class="bg-white p-8 rounded-lg shadow-sm border border-gray-100">
    <h1 class="text-3xl font-semibold text-gray-800 mb-2">Settings</h1>
    <p class="text-gray-500 text-sm">
      Manage your profile, system preferences, and company details.
    </p>
  </section>

  <!-- 👤 Profile Settings -->
  <section class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 space-y-6">
    <h2 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
      <i class="fa-solid fa-user-cog text-sky-500"></i> Profile Settings
    </h2>

    <form class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-3xl">
      <div>
        <label class="block text-sm text-gray-600 mb-1">Full Name</label>
        <input type="text" value="John Doe" class="w-full border border-gray-200 rounded-md px-4 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:outline-none">
      </div>
      <div>
        <label class="block text-sm text-gray-600 mb-1">Email Address</label>
        <input type="email" value="john@example.com" class="w-full border border-gray-200 rounded-md px-4 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:outline-none">
      </div>
      <div>
        <label class="block text-sm text-gray-600 mb-1">Change Password</label>
        <input type="password" placeholder="New Password" class="w-full border border-gray-200 rounded-md px-4 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:outline-none">
      </div>
      <div>
        <label class="block text-sm text-gray-600 mb-1">Confirm Password</label>
        <input type="password" placeholder="Confirm Password" class="w-full border border-gray-200 rounded-md px-4 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:outline-none">
      </div>
      <div class="col-span-2 flex justify-end">
        <button type="submit" class="bg-sky-600 text-white px-5 py-2 rounded-md text-sm font-medium hover:bg-sky-700 transition">
          <i class="fa-solid fa-save mr-2"></i> Save Changes
        </button>
      </div>
    </form>
  </section>

  <!-- ⚙️ System Preferences -->
  <section class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 space-y-6">
    <h2 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
      <i class="fa-solid fa-sliders text-indigo-500"></i> System Preferences
    </h2>

    <form class="space-y-4 max-w-xl">
      <div class="flex justify-between items-center">
        <label class="text-gray-700 text-sm">Dark Mode</label>
        <input type="checkbox" class="toggle-checkbox h-5 w-10 bg-gray-300 rounded-full appearance-none cursor-pointer focus:ring-2 focus:ring-sky-400">
      </div>

      <div class="flex justify-between items-center">
        <label class="text-gray-700 text-sm">Email Notifications</label>
        <input type="checkbox" class="toggle-checkbox h-5 w-10 bg-gray-300 rounded-full appearance-none cursor-pointer focus:ring-2 focus:ring-sky-400" checked>
      </div>

      <div class="flex justify-between items-center">
        <label class="text-gray-700 text-sm">Enable Auto Backup</label>
        <input type="checkbox" class="toggle-checkbox h-5 w-10 bg-gray-300 rounded-full appearance-none cursor-pointer focus:ring-2 focus:ring-sky-400">
      </div>
    </form>
  </section>

  <!-- 🏢 Company Details -->
  <section class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 space-y-6">
    <h2 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
      <i class="fa-solid fa-building text-amber-500"></i> Company Information
    </h2>

    <form class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-3xl">
      <div>
        <label class="block text-sm text-gray-600 mb-1">Company Name</label>
        <input type="text" value="BlueTech Distributors" class="w-full border border-gray-200 rounded-md px-4 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:outline-none">
      </div>
      <div>
        <label class="block text-sm text-gray-600 mb-1">Business Email</label>
        <input type="email" value="info@bluetech.com" class="w-full border border-gray-200 rounded-md px-4 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:outline-none">
      </div>
      <div>
        <label class="block text-sm text-gray-600 mb-1">Phone Number</label>
        <input type="text" value="+233 555 123 456" class="w-full border border-gray-200 rounded-md px-4 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:outline-none">
      </div>
      <div>
        <label class="block text-sm text-gray-600 mb-1">Address</label>
        <input type="text" value="14 Spintex Rd, Accra" class="w-full border border-gray-200 rounded-md px-4 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:outline-none">
      </div>
      <div class="col-span-2 flex justify-end">
        <button type="submit" class="bg-sky-600 text-white px-5 py-2 rounded-md text-sm font-medium hover:bg-sky-700 transition">
          <i class="fa-solid fa-save mr-2"></i> Update Info
        </button>
      </div>
    </form>
  </section>

</main>

