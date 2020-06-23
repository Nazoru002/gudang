<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('') }}dist/img/assets/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Aplikasi Gudang</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.main') }}" class="nav-link {{ Request::is('Administrator') ? 'active':'' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Halaman Utama</p>
                    </a>
                </li>

                <li class="nav-header">
                    Administrator Menu
                </li>

                <li class="nav-item">
                    <a href="{{ route('User.index') }}" class="nav-link {{ Request::is('Administrator/User*') ? 'active':'' }}">
                        <i class="nav-icon fa fa-user"></i>
                        <p>Data User</p>
                    </a>
                </li>

                <li class="nav-header">
                    Menu Utama
                </li>

                <li class="nav-item has-treeview {{ Request::is('Administrator/Category*') || Request::is('Administrator/Storage*') || Request::is('Administrator/Stuff*') ? 'menu-open':'' }}">
                    <a href="#" class="nav-link {{ Request::is('Administrator/Category*') || Request::is('Administrator/Storage*') || Request::is('Administrator/Stuff*') ? 'active':'' }}">
                      <i class="nav-icon fa fa-table"></i>
                      <p>
                        Master Data
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="" class="nav-link">
                          <i class="fa fa-caret-right nav-icon"></i>
                          <p>Data Kategori</p>
                        </a>
                      </li> 
                      <li class="nav-item">
                        <a href="" class="nav-link">
                          <i class="fa fa-caret-right nav-icon"></i>
                          <p>Data Gudang</p>
                        </a>
                      </li> 
                      <li class="nav-item">
                        <a href="" class="nav-link">
                          <i class="fa fa-caret-right nav-icon"></i>
                          <p>Data Barang</p>
                        </a>
                      </li> 
                    </ul>
                  </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>