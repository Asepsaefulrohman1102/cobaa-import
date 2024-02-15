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
                    <a href="/tambah-pegawai">
                    <i class="bi bi-circle"></i><span>Tambah Pegawai</span>
                    </a>
                </li>
                <li>
                    <a href="/data_pegawai">
                    <i class="bi bi-circle" ></i><span>Daftar Pegawai</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Pegawai Nav -->



        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-exclamation-octagon"></i><span>Pelanggaran</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="/pelanggaran">
                  <i class="bi bi-circle"></i><span>Daftar Pelanggaran Lengkap</span>
                </a>
              </li>
              <li>
                <a href="/pelanggaran/alfa-pelanggaran">
                  <i class="bi bi-circle"></i><span>Alfa</span>
                </a>
              </li>
              <li>
                <a href="/pelanggaran/pc-pelanggaran">
                  <i class="bi bi-circle"></i><span>Pulang Cepat</span>
                </a>
              </li>
              <li>
                <a href="/pelanggaran/dt-pelanggaran">
                  <i class="bi bi-circle"></i><span>Datang Terlambat</span>
                </a>
              </li>
              <li>
                <a href="/pelanggaran/dtpc-pelanggaran">
                  <i class="bi bi-circle"></i><span>DTPC</span>
                </a>
              </li>
              <li>
                <a href="/pelanggaran/dtipc-pelanggaran">
                  <i class="bi bi-circle"></i><span>DTIPC</span>
                </a>
              </li>
              <li>
                <a href="/pelanggaran/dtpci-pelanggaran">
                  <i class="bi bi-circle"></i><span>DTPCI</span>
                </a>
              </li>

            </ul>
          </li><!-- End Components Nav -->


        {{-- Logout --}}
        <li class="nav-item">
            <a class="nav-link" href="" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i><span>Logout</span>
            </a>
        </li><!-- End Logout Nav -->
    </ul>


  </aside><!-- End Sidebar-->
