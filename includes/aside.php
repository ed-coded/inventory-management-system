<aside class="sidebar">
  <nav class="sidebar-nav">
    <p class="sidebar-section">General</p>
    <ul>
      <li>
        <a id="dashboard" 
           class="<?= $page === 'dashboard' ? 'active' : '' ?>" 
           href="<?= '/dashboard' ?>">
          <i class="fa-solid fa-grip"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a id="inventory" 
           class="<?= $page === 'inventory' ? 'active' : '' ?>" 
           href="<?= '/inventory' ?>">
          <i class="fa-solid fa-box"></i>
          <span>Inventory</span>
        </a>
      </li>

      <li>
        <a id="salesOrder" 
           class="<?= $page === 'SalesOrder' ? 'active' : '' ?>" 
           href="<?= '/salesOrder' ?>">
          <i class="fa-solid fa-cart-shopping"></i>
          <span>Sales Orders</span>
        </a>
      </li>

      <li>
        <a id="suppliers" 
           class="<?= $page === 'suppliers' ? 'active' : '' ?>" 
           href="<?= '/suppliers' ?>">
          <i class="fa-solid fa-truck"></i>
          <span>Suppliers</span>
        </a>
      </li>

      <li>
        <a id="reports" 
           class="<?= $page === 'report' ? 'active' : '' ?>" 
           href="<?= '/report' ?>">
          <i class="fa-solid fa-chart-line"></i>
          <span>Reports</span>
        </a>
      </li>
    </ul>

    <p class="sidebar-section">Support</p>
    <ul>
      <li>
        <a id="help" 
           class="<?= $page === 'help' ? 'active' : '' ?>" 
           href="/help">
          <i class="fa-solid fa-circle-info"></i>
          <span>Help</span>
        </a>
      </li>

      <li>
        <a id="settings" 
           class="<?= $page === 'settings' ? 'active' : '' ?>" 
           href="/settings">
          <i class="fa-solid fa-gear"></i>
          <span>Settings</span>
        </a>
      </li>
    </ul>
  </nav>
</aside>
