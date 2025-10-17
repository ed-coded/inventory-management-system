<?php include dirname(__DIR__) . '/views/partials/tags.php'; ?>

<body class="bg-gray-50 flex items-center justify-center h-screen px-6">
  <div class="text-center max-w-md">
    
    <!-- Icon -->
    <div class="mb-8">
      <div class="mx-auto w-24 h-24 flex items-center justify-center rounded-full bg-gradient-to-tr from-red-500 to-rose-400 shadow-lg">
        <i class="fa-solid fa-triangle-exclamation text-white text-4xl"></i>
      </div>
    </div>

    <!-- Error Code -->
    <h1 class="text-6xl font-extrabold text-gray-800 tracking-tight">404</h1>
    <p class="text-lg text-gray-600 mt-3 font-medium">Oops! Page not found.</p>
    <p class="text-sm text-gray-500 mt-2">The page you’re looking for doesn’t exist or has been moved.</p>

    <!-- Action Buttons -->
    <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
      <a href="/dashboard"
         class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold rounded-xl transition shadow-md">
         <i class="fa-solid fa-house mr-2"></i> Back to Dashboard
      </a>
      <a href="javascript:history.back()"
         class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 hover:bg-gray-100 text-gray-700 text-sm font-semibold rounded-xl transition">
         <i class="fa-solid fa-arrow-left mr-2"></i> Go Back
      </a>
    </div>

</body>