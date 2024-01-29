@include('themes.head');
@include('themes.header');
@include('themes.sidemenu');

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- PC Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card pc-card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Pulang Cepat</h4>

                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-house-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        @foreach($users as $user)
                                            <h3 class="fw-bold text-center">{{ $user->total_PC_count_all }}</h3>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="button">Kirim Peringatan</button>
                                </div>
                            </div>
                        </div><!-- End Sales Card -->
                    </div><!-- End Revenue Card -->

                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card pc-card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Pulang Cepat Izin</h4>

                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-house-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        @foreach($users as $user)
                                            <h3 class="fw-bold text-center">{{ $user->total_PCI_count_all }}</h3>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="button">Kirim Peringatan</button>
                                </div>
                            </div>
                        </div><!-- End Sales Card -->
                    </div><!-- End Revenue Card -->


                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card pc-card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Alfa</h4>

                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-house-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        @foreach($users as $user)
                                            <h3 class="fw-bold text-center">{{ $user->total_DT_count_all }}</h3>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="button">Kirim Peringatan</button>
                                </div>
                            </div>
                        </div><!-- End Sales Card -->
                    </div><!-- End Revenue Card -->

                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card pc-card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Datang Terlambat</h4>

                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-house-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        @foreach($users as $user)
                                            <h3 class="fw-bold text-center">{{ $user->total_A_count_all }}</h3>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="button">Kirim Peringatan</button>
                                </div>
                            </div>
                        </div><!-- End Sales Card -->
                    </div><!-- End Revenue Card -->

                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card pc-card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Datang Terlambat Izin</h4>

                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-house-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        @foreach($users as $user)
                                            <h3 class="fw-bold text-center">{{ $user->total_DTI_count_all }}</h3>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="button">Kirim Peringatan</button>
                                </div>
                            </div>
                        </div><!-- End Sales Card -->
                    </div><!-- End Revenue Card -->

                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card pc-card">
                            <div class="card-body">
                                <h4 class="card-title text-center">DTPC</h4>

                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-house-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        @foreach($users as $user)
                                            <h3 class="fw-bold text-center">{{ $user->total_DTPC_count_all }}</h3>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="button">Kirim Peringatan</button>
                                </div>
                            </div>
                        </div><!-- End Sales Card -->
                    </div><!-- End Revenue Card -->

                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card pc-card">
                            <div class="card-body">
                                <h4 class="card-title text-center">DTIPC</h4>

                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-house-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        @foreach($users as $user)
                                            <h3 class="fw-bold text-center">{{ $user->total_DTIPC_count_all }}</h3>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="button">Kirim Peringatan</button>
                                </div>
                            </div>
                        </div><!-- End Sales Card -->
                    </div><!-- End Revenue Card -->

                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card pc-card">
                            <div class="card-body">
                                <h4 class="card-title text-center">DTPCI</h4>

                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-house-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        @foreach($users as $user)
                                            <h3 class="fw-bold text-center">{{ $user->total_DTPCI_count_all }}</h3>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="button">Kirim Peringatan</button>
                                </div>
                            </div>
                        </div><!-- End Sales Card -->
                    </div><!-- End Revenue Card -->







                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->

@include('themes.footer');
