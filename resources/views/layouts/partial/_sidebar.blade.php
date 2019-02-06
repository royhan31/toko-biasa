<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
      <a class="nav-link" href="{{ route('home') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#kategori" aria-expanded="false" aria-controls="kategori">
          <i class="mdi  mdi-bookmark menu-icon"></i>
          <span class="menu-title">Kelola Kategori</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="kategori">
          <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('category.categories') }}"> Kategori</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('category.sub_category') }}"> Sub Kategori</a></li>
          </ul>
          </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#produk" aria-expanded="false" aria-controls="produk">
            <i class="mdi mdi-table-large menu-icon"></i>
            <span class="menu-title">Produk</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="produk">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('product.add_product') }}">Tambah Produk</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('product.product') }}">Data Produk</a></li>
            </ul>
        </div>
       </li>

      <li class="nav-item">
      <a class="nav-link" href="{{ route('customer.user') }}">
          <i class=" mdi mdi-account-multiple menu-icon"></i>
          <span class="menu-title">Users</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('order.order') }}">
          <i class="mdi mdi-message menu-icon"></i>
          <span class="menu-title">Orders</span>
        </a>
      </li>

    </ul>
  </nav>
