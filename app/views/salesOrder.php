
<!-- Sales Orders Section -->
<div class="bg-white rounded-xl shadow-sm p-6 mb-4">
<div class="flex flex-col md:flex-row md:items-center justify-between mb-4 gap-4">
    <h2 class="text-lg font-bold text-gray-900">Sales Orders</h2>

    <div class="flex items-center gap-3 w-full md:w-auto">
    <div class="relative w-full md:w-64">
        <input type="text" placeholder="Search"
        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-sky-500 focus:outline-none">
        <i class="fa-solid fa-search absolute left-3 top-3 text-gray-400"></i>
    </div>

    <button class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-xl flex items-center gap-2">
        <i class="fa-solid fa-plus"></i>
        <span>Place Order</span>
    </button>
    </div>
</div>

<!-- Table -->
<div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
    <thead>
        <tr class="text-gray-500 border-b text-sm">
        <th class="py-3 px-4"><input type="checkbox"></th>
        <th class="py-3 px-4">Product Name</th>
        <th class="py-3 px-4">Order Code</th>
        <th class="py-3 px-4">Category</th>
        <th class="py-3 px-4">Quantity</th>
        <th class="py-3 px-4">Total Price</th>
        <th class="py-3 px-4 text-sky-500 cursor-pointer">Last 7 Days <i class="fa-solid fa-chevron-down text-xs ml-1"></i></th>
        </tr>
    </thead>
    <tbody class="text-gray-700">
        <!-- Example Rows -->
        <tr class="border-b hover:bg-gray-50">
        <td class="py-3 px-4"><input type="checkbox"></td>
        <td class="py-3 px-4">Macbook Pro</td>
        <td class="py-3 px-4">#0001</td>
        <td class="py-3 px-4">Laptop</td>
        <td class="py-3 px-4">1</td>
        <td class="py-3 px-4">$1,241</td>
        <td class="py-3 px-4 text-sky-500 font-medium cursor-pointer">View Invoice</td>
        </tr>
        <tr class="border-b hover:bg-gray-50">
        <td class="py-3 px-4"><input type="checkbox"></td>
        <td class="py-3 px-4">Macbook Pro</td>
        <td class="py-3 px-4">#0002</td>
        <td class="py-3 px-4">Laptop</td>
        <td class="py-3 px-4">1</td>
        <td class="py-3 px-4">$1,241</td>
        <td class="py-3 px-4 text-sky-500 font-medium cursor-pointer">View Invoice</td>
        </tr>
        <tr class="border-b hover:bg-gray-50">
        <td class="py-3 px-4"><input type="checkbox"></td>
        <td class="py-3 px-4">Macbook Pro</td>
        <td class="py-3 px-4">#0003</td>
        <td class="py-3 px-4">Laptop</td>
        <td class="py-3 px-4">1</td>
        <td class="py-3 px-4">$1,241</td>
        <td class="py-3 px-4 text-sky-500 font-medium cursor-pointer">View Invoice</td>
        </tr>
    </tbody>
    </table>
</div>

<!-- Pagination -->
<div class="flex justify-center items-center mt-6 gap-2">
    <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-100">
    <i class="fa-solid fa-chevron-left"></i>
    </button>
    <button class="px-3 py-1 bg-sky-500 text-white rounded-lg">1</button>
    <button class="px-3 py-1 border rounded-lg hover:bg-gray-100">2</button>
    <button class="px-3 py-1 border rounded-lg hover:bg-gray-100">3</button>
    <button class="px-3 py-1 border rounded-lg hover:bg-gray-100">4</button>
    <button class="px-3 py-1 border rounded-lg hover:bg-gray-100">5</button>
    <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-100">
    <i class="fa-solid fa-chevron-right"></i>
    </button>
</div>
</div>

<!-- Sales Report Section -->
<div class="bg-white rounded-2xl shadow-sm p-6">
<div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
    <h2 class="text-lg font-bold text-gray-900">Sales Report</h2>
    <div class="flex gap-6 text-sm">
    <div class="flex items-center gap-2">
        <span class="w-3 h-3 bg-sky-500 rounded-full"></span> <span class="text-gray-600">Direct Sales</span>
    </div>
    <div class="flex items-center gap-2">
        <span class="w-3 h-3 bg-purple-600 rounded-full"></span> <span class="text-gray-600">Retail</span>
    </div>
    <div class="flex items-center gap-2">
        <span class="w-3 h-3 bg-pink-600 rounded-full"></span> <span class="text-gray-600">Wholesale</span>
    </div>
    </div>
</div>

<div class="w-full h-80">
    <canvas id="salesReportChart"></canvas>
</div>
</div>

<script>
const ctx = document.getElementById('salesReportChart');
new Chart(ctx, {
    type: 'line',
    data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [
        {
        label: 'Direct Sales',
        data: [10000, 12000, 9000, 11000, 7000, 9000, 8000, 14000, 9000, 15000, 17000, 21000],
        borderColor: '#0ea5e9',
        backgroundColor: '#0ea5e9',
        tension: 0.4,
        borderWidth: 2
        },
        {
        label: 'Retail',
        data: [5000, 7000, 8000, 9500, 6000, 8000, 5000, 9000, 10000, 7000, 6000, 8000],
        borderColor: '#7c3aed',
        backgroundColor: '#7c3aed',
        tension: 0.4,
        borderWidth: 2
        },
        {
        label: 'Wholesale',
        data: [8000, 10000, 8500, 9000, 5000, 6000, 4000, 10000, 7000, 9000, 13000, 15000],
        borderColor: '#db2777',
        backgroundColor: '#db2777',
        tension: 0.4,
        borderWidth: 2
        }
    ]
    },
    options: {
    plugins: { legend: { display: false } },
    scales: {
        y: { beginAtZero: true, ticks: { stepSize: 5000 } },
        x: { grid: { display: false } }
    }
    }
});
</script>