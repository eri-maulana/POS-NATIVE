<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= $main_url ?>dasboard.php" class="brand-link">
    <img src="<?= $main_url ?>asset/image/sdm.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">POS - NATIVE</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= 'Seo Dal Mi' ?></a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= $main_url ?>dashboard.php" class="nav-link">
            <i class="nav-icon text-sm fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $main_url ?>dashboard.php" class="nav-link">
            <i class="nav-icon text-sm fas fa-folder"></i>
            <p>
              Master
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-truck-pickup nav-icon text-sm"></i>
                <p>Supplier</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-tags nav-icon text-sm"></i>
                <p>Pelanggan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-box nav-icon text-sm"></i>
                <p>Barang</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">Transaksi</li>
        <li class="nav-item">
          <a href="" class="nav-link">
          <i class="fas fa-shopping-cart nav-icon text-sm"></i>
          <p>Pembelian</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
          <i class="fas fa-file-invoice nav-icon text-sm"></i>
          <p>Penjualan</p>
          </a>
        </li>
        <li class="nav-header">Laporan</li>
        <li class="nav-item">
          <a href="" class="nav-link">
          <i class="fas fa-chart-pie nav-icon text-sm"></i>
          <p>Laporan Pembelian</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
          <i class="fas fa-chart-line nav-icon text-sm"></i>
          <p>Laporan Penjualan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
          <i class="fas fa-warehouse nav-icon text-sm"></i>
          <p>Laporan Stok</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $main_url ?>dashboard.php" class="nav-link">
            <i class="nav-icon text-sm fas fa-folder"></i>
            <p>
              Pengaturan
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-users nav-icon text-sm"></i>
                <p>Pengguna</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>