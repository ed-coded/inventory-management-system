
<!-- DASHBOARD -->
<main class="space-y-8">

  <!-- 🔹 Sales Summary -->
  <section>
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Sales Summary</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="bg-white p-5 rounded-md shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
          <p class="text-sm text-gray-500">Today's Sale</p>
          <p class="text-2xl font-semibold text-sky-600">₵143.3k</p>
        </div>
        <i class="fa-solid fa-chart-line text-sky-500 text-2xl"></i>
      </div>

      <div class="bg-white p-5 rounded-md shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
          <p class="text-sm text-gray-500">Yearly Total Sales</p>
          <p class="text-2xl font-semibold text-indigo-600">₵250,423</p>
        </div>
        <i class="fa-solid fa-coins text-indigo-500 text-2xl"></i>
      </div>

      <div class="bg-white p-5 rounded-md shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
          <p class="text-sm text-gray-500">Net Income</p>
          <p class="text-2xl font-semibold text-amber-600">₵68.9k</p>
        </div>
        <i class="fa-solid fa-chart-pie text-amber-500 text-2xl"></i>
      </div>

      <div class="bg-white p-5 rounded-md shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
          <p class="text-sm text-gray-500">Products</p>
          <p class="text-2xl font-semibold text-pink-600">343</p>
        </div>
        <i class="fa-solid fa-boxes-stacked text-pink-500 text-2xl"></i>
      </div>
    </div>
  </section>

  <!-- 📊 Stock Report -->
  <section class="bg-white p-6 rounded-md shadow-sm border border-gray-100">
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-lg font-semibold text-gray-800">Stock Report</h2>
      <div class="flex gap-4 text-sm">
        <div class="flex items-center gap-1 text-sky-500">
          <span class="w-3 h-3 rounded-full bg-sky-500"></span>Stock In
        </div>
        <div class="flex items-center gap-1 text-purple-500">
          <span class="w-3 h-3 rounded-full bg-purple-500"></span>Stock Out
        </div>
      </div>
    </div>

    <!-- Fixed height for chart -->
    <div class="relative h-72">
      <canvas id="stockChart"></canvas>
    </div>
  </section>

  <!-- 🧾 Sales Orders Summary -->
  <section class="bg-white p-6 rounded-md shadow-sm border border-gray-100">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-lg font-semibold text-gray-800">Sales Orders</h2>
      <button class="flex items-center gap-1 text-sky-500 font-medium hover:text-sky-600 transition">
        Last 7 Days <i class="fa-solid fa-chevron-down text-xs"></i>
      </button>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full border-collapse text-sm">
        <thead>
          <tr class="bg-gray-50 border-b border-gray-200">
            <th class="text-left py-3 px-4 font-semibold text-gray-500 uppercase tracking-wider">Channel</th>
            <th class="text-left py-3 px-4 font-semibold text-gray-500 uppercase tracking-wider">Draft</th>
            <th class="text-left py-3 px-4 font-semibold text-gray-500 uppercase tracking-wider">Confirmed</th>
            <th class="text-left py-3 px-4 font-semibold text-gray-500 uppercase tracking-wider">Packed</th>
            <th class="text-left py-3 px-4 font-semibold text-gray-500 uppercase tracking-wider">Shipped</th>
            <th class="text-left py-3 px-4 font-semibold text-gray-500 uppercase tracking-wider">Invoiced</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <tr class="border-b border-gray-100 hover:bg-gray-50">
            <td class="py-3 px-4 font-medium">Direct Sales</td>
            <td class="py-3 px-4">2</td>
            <td class="py-3 px-4">32</td>
            <td class="py-3 px-4">42</td>
            <td class="py-3 px-4">23</td>
            <td class="py-3 px-4">7</td>
          </tr>
          <tr class="border-b border-gray-100 hover:bg-gray-50">
            <td class="py-3 px-4 font-medium">Wholesale</td>
            <td class="py-3 px-4">0</td>
            <td class="py-3 px-4">41</td>
            <td class="py-3 px-4">33</td>
            <td class="py-3 px-4">11</td>
            <td class="py-3 px-4">14</td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="py-3 px-4 font-medium">Retail</td>
            <td class="py-3 px-4">2</td>
            <td class="py-3 px-4">12</td>
            <td class="py-3 px-4">25</td>
            <td class="py-3 px-4">16</td>
            <td class="py-3 px-4">21</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

</main>

<!-- 📈 Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('stockChart').getContext('2d');
  const stockChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [
        {
          label: 'Stock In',
          data: [8000, 7000, 9000, 6000, 4000, 7000, 9000, 11000, 8000, 9000, 7000, 6000],
          backgroundColor: 'rgba(59,130,246,0.8)',
          borderRadius: 5,
          barThickness: 14,
        },
        {
          label: 'Stock Out',
          data: [6000, 5000, 6000, 4000, 3000, 5000, 8000, 9000, 7000, 6000, 5000, 4000],
          backgroundColor: 'rgba(168,85,247,0.8)',
          borderRadius: 5,
          barThickness: 14,
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        x: {
          grid: { display: false },
          ticks: { color: '#6b7280' },
        },
        y: {
          beginAtZero: true,
          grid: { color: '#f3f4f6' },
          ticks: { color: '#6b7280', stepSize: 5000 },
        }
      },
      plugins: {
        legend: { display: false }
      }
    }
  });
</script>
