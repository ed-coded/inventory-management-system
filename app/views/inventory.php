<main class="space-y-8">

  <!-- 📦 Inventory Summary -->
  <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-100 flex justify-between items-center">
      <div>
        <p class="text-sm text-gray-500">Total Products</p>
        <p class="text-2xl font-bold text-sky-600"><?= count($inventoryData) ?></p>
      </div>
      <i class="fa-solid fa-box text-sky-500 text-2xl"></i>
    </div>
    <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-100 flex justify-between items-center">
      <div>
        <p class="text-sm text-gray-500">Low Stock</p>
        <p class="text-2xl font-bold text-amber-500">
          <?= count(array_filter($inventoryData, fn($i) => $i['stock'] < 20 && $i['stock'] > 0)) ?>
        </p>
      </div>
      <i class="fa-solid fa-triangle-exclamation text-amber-500 text-2xl"></i>
    </div>
    <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-100 flex justify-between items-center">
      <div>
        <p class="text-sm text-gray-500">Out of Stock</p>
        <p class="text-2xl font-bold text-red-500">
          <?= count(array_filter($inventoryData, fn($i) => $i['stock'] <= 0)) ?>
        </p>
      </div>
      <i class="fa-solid fa-circle-xmark text-red-500 text-2xl"></i>
    </div>
    <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-100 flex justify-between items-center">
      <div>
        <p class="text-sm text-gray-500">Suppliers</p>
        <p class="text-2xl font-bold text-indigo-600">18</p>
      </div>
      <i class="fa-solid fa-truck text-indigo-500 text-2xl"></i>
    </div>
  </section>

  <!-- 🔍 Search + Add Product -->
  <section class="flex flex-col sm:flex-row justify-between items-center bg-white p-5 rounded-lg border border-gray-100 shadow-sm">
    <div class="flex items-center w-full sm:w-1/2 gap-3">
      <i class="fa-solid fa-search text-gray-400"></i>
      <input 
        type="text" 
        placeholder="Search product name or SKU..."
        class="w-full border border-gray-200 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-sky-400"
      >
    </div>

    <button class="mt-4 sm:mt-0 bg-sky-600 text-white px-5 py-2 rounded-md text-sm font-medium hover:bg-sky-700 transition flex items-center gap-2">
      <i class="fa-solid fa-plus"></i> Add Product
    </button>
  </section>

  <!-- 📋 Inventory Table -->
  <section class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 overflow-x-auto">
    <table class="w-full text-sm border-collapse">
      <thead class="bg-gray-50 text-gray-600 uppercase text-xs">
        <tr>
          <th class="py-3 px-4 text-left">Product</th>
          <th class="py-3 px-4 text-left">SKU</th>
          <th class="py-3 px-4 text-left">Category</th>
          <th class="py-3 px-4 text-left">Stock</th>
          <th class="py-3 px-4 text-left">Supplier</th>
          <th class="py-3 px-4 text-right">Actions</th>
        </tr>
      </thead>
      <tbody class="text-gray-700">
        <?php foreach ($inventoryData as $item): ?>
        <tr class="border-b hover:bg-gray-50">
          <td class="py-3 px-4 font-medium"><?= htmlspecialchars($item['product']) ?></td>
          <td class="py-3 px-4"><?= htmlspecialchars($item['sku']) ?></td>
          <td class="py-3 px-4"><?= htmlspecialchars($item['category']) ?></td>
          <td class="py-3 px-4 <?= $item['stock'] == 0 ? 'text-red-600' : ($item['stock'] < 20 ? 'text-amber-600' : 'text-green-600') ?>">
            <?= $item['stock'] ?> pcs
          </td>
          <td class="py-3 px-4"><?= htmlspecialchars($item['supplier']) ?></td>
          <td class="py-3 px-4 text-right space-x-2">
            <button class="text-sky-500 hover:text-sky-600"><i class="fa-solid fa-pen"></i></button>
            <button class="text-red-500 hover:text-red-600"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </section>

</main>


