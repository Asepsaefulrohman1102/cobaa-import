<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      {{-- Pegawai ada tambah pegawai dan daftar pelanggaran --}}
        <li class="nav-item ">
            <a class="nav-link collapsed" data-bs-target="#pegawai-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person"></i><span>Pegawai</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="pegawai-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="">
                <i class="bi bi-circle"></i><span>Tambah Pegawai</span>
                </a>
            </li>
            <li>
                <a href="/data_pegawai">
                <i class="bi bi-circle" ></i><span>Daftar Pegawai</span>
                </a>
            </li>
            <li>
                <a href="/pelanggaran">
                <i class="bi bi-circle" ></i><span>Daftar Pelanggaran</span>
                </a>
            </li>
            {{-- <li>
                <a href="/hitung">
                <i class="bi bi-circle" ></i><span>Daftar </span>
                </a>
            </li> --}}
            </ul>
        </li><!-- End Pegawai Nav -->

        {{-- Pelanggaran ada tambah pelanggaran dan daftar pelanggaran --}}
        {{-- <li class="nav-item ">
            <a class="nav-link collapsed" data-bs-target="#pelanggaran-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-exclamation-triangle"></i><span>Pelanggaran</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="pelanggaran-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="">
                <i class="bi bi-circle"></i><span>Tambah Pelanggaran</span>
                </a>
            </li>
            <li>
                <a href="/pelanggaran">
                <i class="bi bi-circle" ></i><span>Daftar Pelanggaran</span>
                </a>
            </li>
            </ul>
        </li><!-- End Pelanggaran Nav --> --}}


        {{-- Logout --}}
        <li class="nav-item">
            <a class="nav-link" href="" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i><span>Logout</span>
            </a>
        </li><!-- End Logout Nav -->
    </ul>

  </aside><!-- End Sidebar-->
