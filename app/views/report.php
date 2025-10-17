<!-- REPORTS PAGE -->
<div class="p-4 sm:p-6 md:p-8 bg-gray-50 min-h-screen">

  <!-- HEADER -->
  <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
    <h1 class="text-2xl font-bold text-gray-900">Reports</h1>
    <div class="flex flex-wrap items-center gap-3">
      <select
        class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-sky-500 outline-none bg-white transition">
        <option>Last 7 Days</option>
        <option>Last 30 Days</option>
        <option>Last Quarter</option>
        <option>This Year</option>
      </select>
      <button
        class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 text-sm font-medium shadow-md transition">
        <i class="fa-solid fa-download"></i>
        Export Report
      </button>
    </div>
  </div>

  <!-- METRIC CARDS -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
    <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm flex items-center justify-between">
      <div>
        <h2 class="text-gray-500 text-sm">Total Sales</h2>
        <p class="text-2xl font-semibold text-gray-800">$84,210</p>
      </div>
      <i class="fa-solid fa-chart-line text-sky-500 text-3xl"></i>
    </div>

    <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm flex items-center justify-between">
      <div>
        <h2 class="text-gray-500 text-sm">Stock Value</h2>
        <p class="text-2xl font-semibold text-gray-800">$45,800</p>
      </div>
      <i class="fa-solid fa-boxes-stacked text-amber-500 text-3xl"></i>
    </div>

    <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm flex items-center justify-between">
      <div>
        <h2 class="text-gray-500 text-sm">Orders</h2>
        <p class="text-2xl font-semibold text-gray-800">317</p>
      </div>
      <i class="fa-solid fa-receipt text-pink-500 text-3xl"></i>
    </div>

    <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm flex items-center justify-between">
      <div>
        <h2 class="text-gray-500 text-sm">Suppliers</h2>
        <p class="text-2xl font-semibold text-gray-800">12</p>
      </div>
      <i class="fa-solid fa-truck text-green-500 text-3xl"></i>
    </div>
  </div>

  <!-- CHARTS GRID -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    
    <!-- SALES TREND -->
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
      <h2 class="text-lg font-bold text-gray-900 mb-4">Sales Trend</h2>
      <div class="h-64 sm:h-72">
        <canvas id="salesChart"></canvas>
      </div>
    </div>

    <!-- REVENUE GROWTH -->
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
      <h2 class="text-lg font-bold text-gray-900 mb-4">Revenue Growth</h2>
      <div class="h-64 sm:h-72">
        <canvas id="revenueChart"></canvas>
      </div>
    </div>

    <!-- CATEGORY DISTRIBUTION -->
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
      <h2 class="text-lg font-bold text-gray-900 mb-4">Product Category Distribution</h2>
      <div class="h-64 sm:h-72 flex items-center justify-center">
        <canvas id="categoryChart"></canvas>
      </div>
    </div>

    <!-- STOCK LEVELS -->
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
      <h2 class="text-lg font-bold text-gray-900 mb-4">Stock Level Comparison</h2>
      <div class="h-64 sm:h-72 flex items-center justify-center">
        <canvas id="stockChart"></canvas>
      </div>
    </div>
  </div>
</div>

<!-- CHART.JS SCRIPTS -->
<script>
  // Chart 1: Sales Trend
  new Chart(document.getElementById('salesChart'), {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [
        {
          label: 'Direct Sales',
          data: [12000, 15000, 11000, 13000, 9000, 16000, 14000, 17000, 18000, 21000, 24000, 26000],
          backgroundColor: '#0ea5e9',
          borderRadius: 4
        },
        {
          label: 'Wholesale',
          data: [9000, 10000, 8000, 9500, 7000, 11000, 12000, 13000, 15000, 17000, 18000, 20000],
          backgroundColor: '#ec4899',
          borderRadius: 4
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: { y: { beginAtZero: true } },
      plugins: { legend: { display: true, position: 'bottom' } }
    }
  });

  // Chart 2: Revenue Growth
  new Chart(document.getElementById('revenueChart'), {
    type: 'line',
    data: {
      labels: ['Q1', 'Q2', 'Q3', 'Q4'],
      datasets: [{
        label: 'Revenue ($)',
        data: [30000, 45000, 52000, 68000],
        borderColor: '#0ea5e9',
        backgroundColor: 'rgba(14,165,233,0.1)',
        tension: 0.4,
        fill: true
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: { y: { beginAtZero: true } },
      plugins: { legend: { position: 'bottom' } }
    }
  });

  // Chart 3: Category Distribution
  new Chart(document.getElementById('categoryChart'), {
    type: 'pie',
    data: {
      labels: ['Laptops', 'Phones', 'Accessories', 'Networking'],
      datasets: [{
        data: [40, 25, 20, 15],
        backgroundColor: ['#0ea5e9', '#ec4899', '#22c55e', '#a855f7'],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: { legend: { position: 'bottom' } }
    }
  });

  // Chart 4: Stock Level Comparison
  new Chart(document.getElementById('stockChart'), {
    type: 'radar',
    data: {
      labels: ['Warehouse A', 'Warehouse B', 'Warehouse C', 'Warehouse D'],
      datasets: [{
        label: 'Stock Level',
        data: [80, 65, 90, 70],
        backgroundColor: 'rgba(14,165,233,0.2)',
        borderColor: '#0ea5e9',
        pointBackgroundColor: '#0ea5e9'
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        r: {
          angleLines: { color: '#e5e7eb' },
          grid: { color: '#e5e7eb' },
          suggestedMin: 0,
          suggestedMax: 100
        }
      },
      plugins: { legend: { position: 'bottom' } }
    }
  });
</script>
