<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin-lte-3/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tugas Akhir</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin-lte-3/dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('/dashboard')}}" class="nav-link {{ $title=='Dashboard' ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if (auth()->user()->level=="admin")
            <li class="nav-item">
              <a href="{{route('/dosen')}}" class="nav-link {{ $title=='Dosen' ? 'active' : '' }}">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                  Dosen
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('/mahasiswa')}}" class="nav-link {{ $title=='Mahasiswa' ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                  Mahasiswa
                </p>
              </a>
            </li>
          @endif
          @if (auth()->user()->level=="dosen")
            <li class="nav-item">
              <a href="{{route('input-judul')}}" class="nav-link {{ $title=='Input Judul' ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Input Judul
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('status-judul')}}" class="nav-link {{ $title=='Status Judul' ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Status Judul
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link {{ $title=='Revisi' ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Revisi
                </p>
              </a>
            </li>
          @endif
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a onclick="
              event.preventDefault();
              document.getElementById('logout').submit();" href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log out
              </p>
            </a>
            <form id="logout" action="{{route('logout')}}" method="post" class="d-inline border-0">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>