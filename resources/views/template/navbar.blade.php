<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('home.index')}}" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Terjadi Kendala Hubungi Admin</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <!-- <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li> -->

    <!-- Cart Dropdown Menu -->

    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-copy"></i>
        <span class="badge badge-danger navbar-badge">{{ count((array) session('cart')) }}</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">{{ count((array) session('cart')) }} Buku</span>
        <div class="dropdown-divider"></div>
        @if(session('cart'))
          @foreach(session('cart') as $id => $details)
        <a href="#" class="dropdown-item">
          <div class="media">
          <i class="fas fa-book mr-2"></i>
            <div class="media-body">
              <h3 class="dropdown-item-title">{{ $details['name'] }}</h3>
              <p class="text-sm">{{ $details['price'] }}</p>
              <p class="text-sm text-muted">{{ $details['image'] }}</p>
            </div>
              
          </div>
        </a>
        <div class="dropdown-divider"></div>
          @endforeach
        @endif        
        <div class="dropdown-divider"></div>
        <a href="{{ route('cart') }}" class="dropdown-item dropdown-footer">See All List</a>
      </div>
    </li>

    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="nav-icon fas fas fa-user"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                {{auth()->user()->name}}
              </h3>
              <p class="text-sm">{{auth()->user()->email}}</p>
              <p class="text-sm text-muted">{{ucfirst(auth()->user()->level)}}</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <!-- Profie -->
        <a href="#" class="dropdown-item">
          <i class="nav-icon fas fa-user"></i> Profile
        </a>
        <!-- End of Profie -->
        <div class="dropdown-divider"></div>
        <!-- History -->
        <a href="#" class="dropdown-item">
          <i class="nav-icon fas fas fa-copy"></i> History Peminjaman
        </a>
        <!-- End of History -->
        <div class="dropdown-divider"></div>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link" href="{{route('logout')}}">
        <i class="nav-icon fas fa-power-off"></i>
      </a>
    </li>
  </ul>
</nav>
