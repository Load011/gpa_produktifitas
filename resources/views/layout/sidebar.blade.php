<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>
  
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Master Kebun -->
        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link @if (request()->routeIs('dashboard')) active @endif">
            <i class="nav-icon fas fa-desktop"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item @if (request()->routeIs('kebun.*') || request()->routeIs('afdeling.*'))) menu-open @endif">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>Perkebunan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('kebun.index') }}" class="nav-link @if (request()->routeIs('kebun.*')) active @endif">
                <i class="nav-icon fab fa-pagelines"></i>
                <p>Perkebunan Utama</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('afdeling.index') }}" class="nav-link @if (request()->routeIs('afdeling.*')) active @endif">
                <i class="nav-icon fas fa-campground"></i>
                <p>Afdeling Kebun</p>
              </a>
            </li>
          </ul>
        </li>


        <!-- Master Pegawai -->
        <li class="nav-item @if (request()->routeIs('jabatan.*') || request()->routeIs('supir.*'))) menu-open @endif">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Master Pegawai
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('jabatan.index') }}" class="nav-link @if (request()->routeIs('jabatan.*')) active @endif">
                <i class="nav-icon fas fa-id-badge"></i>
                <p>Jabatan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('karyawan.index') }}" class="nav-link @if (request()->routeIs('karyawan.*')) active @endif">
                <i class="nav-icon fas fa-id-card"></i>
                <p>Karyawan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('supir.index') }}" class="nav-link @if (request()->routeIs('supir.*')) active @endif">
                <i class="nav-icon fas fa-user-tie"></i>
                <p>Supir Mobil</p>
              </a>
            </li>
          </ul>
        </li>



        <!-- Master Mobil dan trip -->
        <li class="nav-item @if (request()->routeIs('mobil.*') || request()->routeIs('trip.*'))) menu-open @endif">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>Master Mobil dan Trip
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('mobil.index') }}" class="nav-link @if (request()->routeIs('mobil.*')) active @endif">
                <i class="nav-icon fas fa-car"></i>
                <p>Mobil</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('trip.index') }}" class="nav-link @if (request()->routeIs('trip.*')) active @endif">
                <i class="nav-icon fas fa-road"></i>
                <p>Perjalanan / Trip</p>
              </a>
            </li>
          </ul>
        </li>


        <!-- Transaksi -->
        <li class="nav-item @if (request()->routeIs('kendaraan.*') || request()->routeIs('perbaikan.*'))) menu-open @endif">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-money-check-alt"></i>
            <p>Transaksi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('kendaraan.index') }}" class="nav-link @if (request()->routeIs('kendaraan.*')) active @endif">
                <i class="nav-icon fas fa-truck"></i>
                <p>Kendaraan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('perbaikan.index') }}" class="nav-link @if (request()->routeIs('perbaikan.*')) active @endif">
                <i class="nav-icon fas fa-toolbox"></i>
                <p>Perbaikan</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
  