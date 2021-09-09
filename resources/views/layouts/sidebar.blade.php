<aside class="main-sidebar sidebar-dark-primary main-sidebar-custom elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('home')}}" class="brand-link">
    <span class="brand-text font-weight-light">Unicare Hirings</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('assets/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{route('home')}}" class="nav-link {{request()->routeIs('home') ? 'active' : '' }}">
            <i class="nav-icon fas fa-desktop"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('karyawans.index')}}" class="nav-link {{request()->routeIs('karyawans.index') ? 'active' : '' }}">
            <i class="nav-icon fas fa-sticky-note"></i>
            <p>
              Data Karyawan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('registerkaryawans.index')}}" class="nav-link {{request()->routeIs('registerkaryawans.index') ? 'active' : ''}}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Calon Karyawan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-friends"></i>
            <p>
              Interview
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
  <div class="sidebar-custom">
    <a class="btn btn-success" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementByIdt('logout-form').submit();">
    {{ __('Logout') }}
    <i class="fas fa-sign-out-alt"></i>
  </a>
</i>
<form id="logout-form" action="{{route('logout')}}" method="POST">
  @csrf
</form>
</div>
</aside>
