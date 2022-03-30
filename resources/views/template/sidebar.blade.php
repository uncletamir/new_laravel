<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('home.index')}}" class="brand-link">
    <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SERMA</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{auth()->user()->name}}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <!-- Sidebar kelola buku -->
        <li class="nav-item menu-close">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fas fa-book"></i>
            <p>
              Kelola Buku
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @if(auth()->user()->level=="admin")
            <!-- <li class="nav-item">
              <a href="{{route('halaman-satu')}}" class="nav-link active">
              <a href="#" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Halaman 1</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="{{route('kategori.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Kategori</p>
              </a>
            </li>
            @endif
            <li class="nav-item">
              <a href="{{route('buku.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Buku</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Sidebar kelola buku -->

        <!-- kelola data pinjaman -->
        <li class="nav-item menu-close">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fas fa-copy"></i>
            <p>
              Kelola Pinjaman
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @if(auth()->user()->level=="admin")
            <li class="nav-item">
              <a href="{{route('peminjaman.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Peminjam</p>
              </a>
            </li>
            @endif
            <li class="nav-item">
              <a href="{{route('pengajuan.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pinjam Buku</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('buku.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>History Peminjaman</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- End kelola data pinjaman -->

        <!-- kelola user -->
        <li class="nav-item menu-close">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Kelola User
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @if(auth()->user()->level=="admin")
            <li class="nav-item">
              <a href="{{route('halaman-satu')}}" class="nav-link active">
              <!-- <a href="#" class="nav-link active"> -->
                <i class="far fa-circle nav-icon"></i>
                <p>Halaman 1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('user.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Pengguna</p>
              </a>
            </li>
            @endif
            <li class="nav-item">
              <a href="{{route('buku.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Admin Sistem</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- end kelola user -->
        <li class="nav-item">
          <a href="{{route('logout')}}" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
              Logout
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
