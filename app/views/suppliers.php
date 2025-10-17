<main class="space-y-8">

  <!-- 🔹 Header & Actions -->
  <section class="flex flex-col sm:flex-row sm:items-center justify-between">
    <h1 class="text-2xl font-semibold text-gray-800">Suppliers</h1>

    <div class="flex items-center gap-3 mt-4 sm:mt-0">
      <input type="text" placeholder="Search supplier..."
             class="border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
      <button class="bg-sky-600 hover:bg-sky-700 text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2">
        <i class="fa-solid fa-plus"></i> Add Supplier
      </button>
    </div>
  </section>

  <!-- 🔹 Stats Overview -->
  <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="bg-white p-5 rounded-md shadow-sm border border-gray-100">
      <p class="text-sm text-gray-500">Total Suppliers</p>
      <p class="text-2xl font-semibold text-sky-600 mt-1">56</p>
    </div>

    <div class="bg-white p-5 rounded-md shadow-sm border border-gray-100">
      <p class="text-sm text-gray-500">Verified</p>
      <p class="text-2xl font-semibold text-green-600 mt-1">42</p>
    </div>

    <div class="bg-white p-5 rounded-md shadow-sm border border-gray-100">
      <p class="text-sm text-gray-500">Pending Approval</p>
      <p class="text-2xl font-semibold text-amber-600 mt-1">8</p>
    </div>

    <div class="bg-white p-5 rounded-md shadow-sm border border-gray-100">
      <p class="text-sm text-gray-500">New This Month</p>
      <p class="text-2xl font-semibold text-indigo-600 mt-1">6</p>
    </div>
  </section>

  <!-- 🔹 Supplier Table -->
  <section class="bg-white p-6 rounded-md shadow-sm border border-gray-100">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Supplier Directory</h2>

    <div class="overflow-x-auto">
      <table class="w-full border-collapse text-sm">
        <thead>
          <tr class="bg-gray-50 border-b border-gray-200 text-gray-600 uppercase text-xs">
            <th class="text-left py-3 px-4">Name</th>
            <th class="text-left py-3 px-4">Email</th>
            <th class="text-left py-3 px-4">Phone</th>
            <th class="text-left py-3 px-4">Company</th>
            <th class="text-left py-3 px-4">Status</th>
            <th class="text-left py-3 px-4">Actions</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <tr class="border-b hover:bg-gray-50">
            <td class="py-3 px-4 font-medium">Kwame Boateng</td>
            <td class="py-3 px-4">kwameb@example.com</td>
            <td class="py-3 px-4">+233 24 555 1234</td>
            <td class="py-3 px-4">Boateng & Sons Ltd</td>
            <td class="py-3 px-4">
              <span class="text-green-700 bg-green-100 text-xs font-medium px-3 py-1 rounded-full">Verified</span>
            </td>
            <td class="py-3 px-4 flex items-center gap-3">
              <button class="text-sky-500 hover:text-sky-600"><i class="fa-solid fa-eye"></i></button>
              <button class="text-amber-500 hover:text-amber-600"><i class="fa-solid fa-pen-to-square"></i></button>
              <button class="text-red-500 hover:text-red-600"><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>
          <tr class="border-b hover:bg-gray-50">
            <td class="py-3 px-4 font-medium">Ama Kusi</td>
            <td class="py-3 px-4">amakusi@example.com</td>
            <td class="py-3 px-4">+233 20 333 9876</td>
            <td class="py-3 px-4">Kusi Enterprise</td>
            <td class="py-3 px-4">
              <span class="text-yellow-700 bg-yellow-100 text-xs font-medium px-3 py-1 rounded-full">Pending</span>
            </td>
            <td class="py-3 px-4 flex items-center gap-3">
              <button class="text-sky-500 hover:text-sky-600"><i class="fa-solid fa-eye"></i></button>
              <button class="text-amber-500 hover:text-amber-600"><i class="fa-solid fa-pen-to-square"></i></button>
              <button class="text-red-500 hover:text-red-600"><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- (Optional) Supplier Growth Chart -->
  <section class="bg-white p-6 rounded-md shadow-sm border border-gray-100">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Supplier Growth</h2>
    <div class="relative h-72">
      <canvas id="supplierChart"></canvas>
    </div>
  </section>

</main>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('supplierChart').getContext('2d');
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
      datasets: [{
        label: 'Suppliers Added',
        data: [3, 4, 6, 5, 8, 9, 7, 11, 13],
        borderColor: 'rgb(59,130,246)',
        backgroundColor: 'rgba(59,130,246,0.2)',
        fill: true,
        tension: 0.4
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: { beginAtZero: true, grid: { color: '#f3f4f6' } },
        x: { grid: { display: false } }
      },
      plugins: { legend: { display: false } }
    }
  });
</script>
