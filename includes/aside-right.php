<!-- Font Awesome + Chart.js -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Right Aside -->
<aside 
  class="bg-white w-full md:w-80 p-6 fixed md:static right-0 top-0 h-full overflow-y-auto 
         scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 border-l hidden md:block"
  style="border-left: 1px solid #ccc;">


  <!-- Quick Actions -->
  <div>
    <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center gap-2">
      <i class="fa-solid fa-bolt text-yellow-500"></i> Quick Actions
    </h3>

    <ul class="space-y-4">
      <li class="flex justify-between items-center group cursor-pointer">
        <div class="flex items-center gap-3">
          <i class="fa-solid fa-plus border border-gray-300 rounded-lg p-2 group-hover:bg-sky-100 text-sky-600 transition"></i>
          <span class="font-medium text-gray-700 group-hover:text-gray-900">Create Order</span>
        </div>
        <span class="text-sm text-gray-400">Ctrl + N</span>
      </li>
      <li class="flex justify-between items-center group cursor-pointer">
        <div class="flex items-center gap-3">
          <i class="fa-solid fa-bag-shopping border border-gray-300 rounded-lg p-2 group-hover:bg-emerald-100 text-emerald-600 transition"></i>
          <span class="font-medium text-gray-700 group-hover:text-gray-900">Add Product</span>
        </div>
        <span class="text-sm text-gray-400">Ctrl + P</span>
      </li>
      <li class="flex justify-between items-center group cursor-pointer">
        <div class="flex items-center gap-3">
          <i class="fa-solid fa-truck border border-gray-300 rounded-lg p-2 group-hover:bg-amber-100 text-amber-600 transition"></i>
          <span class="font-medium text-gray-700 group-hover:text-gray-900">Add Supplier</span>
        </div>
        <span class="text-sm text-gray-400">Ctrl + K</span>
      </li>
      <li class="flex justify-between items-center group cursor-pointer">
        <div class="flex items-center gap-3">
          <i class="fa-solid fa-arrow-up-from-bracket border border-gray-300 rounded-lg p-2 group-hover:bg-purple-100 text-purple-600 transition"></i>
          <span class="font-medium text-gray-700 group-hover:text-gray-900">Export</span>
        </div>
        <span class="text-sm text-gray-400">Ctrl + S</span>
      </li>
    </ul>
  </div>

  <hr class="border-gray-200 my-4">

  <!-- Brand Share Chart -->
  <div>
    <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center gap-2">
      <i class="fa-solid fa-chart-pie text-indigo-500"></i> Brand Share
    </h3>

    <div class="flex justify-center">
      <canvas id="brandChart" class="max-w-[170px] h-[170px]"></canvas>
    </div>

    <div class="mt-6 space-y-2 text-sm">
      <div class="flex justify-between items-center">
        <div class="flex items-center gap-2">
          <span class="w-3 h-3 rounded-full bg-sky-500"></span>
          <span class="text-gray-700 font-medium">Apple</span>
        </div>
        <span class="text-sky-500 font-semibold">61%</span>
      </div>
      <div class="flex justify-between items-center">
        <div class="flex items-center gap-1">
          <span class="w-3 h-3 rounded-full bg-pink-600"></span>
          <span class="text-gray-700 font-medium">Samsung</span>
        </div>
        <span class="text-pink-600 font-semibold">15%</span>
      </div>
      <div class="flex justify-between items-center">
        <div class="flex items-center gap-2">
          <span class="w-3 h-3 rounded-full bg-lime-500"></span>
          <span class="text-gray-700 font-medium">Asus</span>
        </div>
        <span class="text-lime-500 font-semibold">13%</span>
      </div>
      <div class="flex justify-between items-center">
        <div class="flex items-center gap-2">
          <span class="w-3 h-3 rounded-full bg-purple-600"></span>
          <span class="text-gray-700 font-medium">Xiaomi</span>
        </div>
        <span class="text-purple-600 font-semibold">8%</span>
      </div>
    </div>
  </div>
</aside>

<script>
  // Pie Chart Setup
  const ctx = document.getElementById('brandChart').getContext('2d');
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Apple', 'Samsung', 'Asus', 'Xiaomi'],
      datasets: [{
        data: [61, 15, 13, 8],
        backgroundColor: ['#0ea5e9', '#db2777', '#84cc16', '#9333ea'],
        borderWidth: 0,
      }]
    },
    options: {
      cutout: '70%',
      plugins: {
        legend: { display: false },
        tooltip: { enabled: true }
      },
      maintainAspectRatio: false,
    }
  });
</script>
