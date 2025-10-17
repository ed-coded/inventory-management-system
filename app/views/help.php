
<main class="space-y-10">

  <!-- 🧭 Header Section -->
  <section class="bg-white rounded-lg shadow-sm border border-gray-100 p-8">
    <h1 class="text-3xl font-semibold text-gray-800 mb-3">Help & Support</h1>
    <p class="text-gray-500 text-sm">
      Find answers to your questions, learn how to use the system, or contact support.
    </p>
  </section>

  <!-- ❓ FAQ Section -->
  <section class="bg-white rounded-lg shadow-sm border border-gray-100 p-8">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Frequently Asked Questions</h2>

    <div class="divide-y divide-gray-100">
      <details class="group py-4">
        <summary class="flex justify-between items-center cursor-pointer text-gray-700 font-medium">
          <span>How do I add a new product to the inventory?</span>
          <i class="fa-solid fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
        </summary>
        <p class="mt-3 text-sm text-gray-600 leading-relaxed">
          Go to the <strong>Inventory</strong> page and click on the <em>Add Product</em> button.
          Fill out the product details and save. The new product will appear in your list instantly.
        </p>
      </details>

      <details class="group py-4">
        <summary class="flex justify-between items-center cursor-pointer text-gray-700 font-medium">
          <span>Can I track supplier details?</span>
          <i class="fa-solid fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
        </summary>
        <p class="mt-3 text-sm text-gray-600 leading-relaxed">
          Yes! Use the <strong>Suppliers</strong> section to add, edit, or remove supplier information.
          You can link suppliers to specific inventory items.
        </p>
      </details>

      <details class="group py-4">
        <summary class="flex justify-between items-center cursor-pointer text-gray-700 font-medium">
          <span>How do I generate inventory reports?</span>
          <i class="fa-solid fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
        </summary>
        <p class="mt-3 text-sm text-gray-600 leading-relaxed">
          Navigate to the <strong>Reports</strong> page and choose the date range or product category.
          You can download reports in PDF or Excel formats.
        </p>
      </details>
    </div>
  </section>

  <!-- 📘 Documentation Section -->
  <section class="bg-white rounded-lg shadow-sm border border-gray-100 p-8">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Documentation & Tutorials</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <a href="#" class="p-5 border border-gray-100 rounded-lg hover:shadow-md transition bg-gray-50 flex items-start gap-4">
        <i class="fa-solid fa-book-open text-sky-600 text-2xl"></i>
        <div>
          <h3 class="font-medium text-gray-800">Getting Started Guide</h3>
          <p class="text-sm text-gray-500 mt-1">Step-by-step instructions for new users.</p>
        </div>
      </a>

      <a href="#" class="p-5 border border-gray-100 rounded-lg hover:shadow-md transition bg-gray-50 flex items-start gap-4">
        <i class="fa-solid fa-database text-indigo-600 text-2xl"></i>
        <div>
          <h3 class="font-medium text-gray-800">Inventory Management</h3>
          <p class="text-sm text-gray-500 mt-1">Learn how to track and update your stock efficiently.</p>
        </div>
      </a>

      <a href="#" class="p-5 border border-gray-100 rounded-lg hover:shadow-md transition bg-gray-50 flex items-start gap-4">
        <i class="fa-solid fa-file-lines text-emerald-600 text-2xl"></i>
        <div>
          <h3 class="font-medium text-gray-800">Reports & Analytics</h3>
          <p class="text-sm text-gray-500 mt-1">Understand and interpret your business data.</p>
        </div>
      </a>
    </div>
  </section>

  <!-- 💬 Contact Support -->
  <section class="bg-white rounded-lg shadow-sm border border-gray-100 p-8">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Need More Help?</h2>
    <p class="text-gray-600 mb-4 text-sm">
      Can’t find what you’re looking for? Reach out to our support team below.
    </p>
    <form class="space-y-4 max-w-lg">
      <input 
        type="text" 
        placeholder="Your Name"
        class="w-full border border-gray-200 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-sky-400"
      >
      <input 
        type="email" 
        placeholder="Your Email"
        class="w-full border border-gray-200 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-sky-400"
      >
      <textarea 
        rows="4" 
        placeholder="Describe your issue..."
        class="w-full border border-gray-200 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-sky-400"
      ></textarea>
      <button 
        type="submit" 
        class="bg-sky-600 text-white px-5 py-2 rounded-md text-sm font-medium hover:bg-sky-700 transition">
        <i class="fa-solid fa-paper-plane mr-2"></i> Send Message
      </button>
    </form>
  </section>

</main>
