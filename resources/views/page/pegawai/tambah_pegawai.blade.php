@include('themes.head');
@include('themes.header');
@include('themes.sidemenu');

<main id="main" class="main">
{{--
    <div class="pagetitle">
      <h1>Tambah Pegawai</h1>
      <nav>
        <ol class="breadcrumb
        ">
          <li class="breadcrumb
            -item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Pegawai</li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Pegawai</li>
        </ol>
        </nav>
    </div><!-- End Page Title --> --}}

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title text-center">Tambah Pegawai</h1>
                            <p class="text-center">Badan Pengawasan Keuangan dan Pembangunan Jawa Tengah</p>
                        </div>
                        <div class="card-body">
                            <form action="/store-pegawai" method="post">
                            @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nip" class="fw-bold">NIP</label>
                                            <input type="text" class="form-control" id="nip" name="nip" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nama_pegawai" class="fw-bold">Nama Pegawai</label>
                                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="golongan" class="fw-bold">Golongan</label>
                                            <input type="text" class="form-control" id="golongan" name="golongan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="jabatan" class="fw-bold">Jabatan</label>
                                            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nomor_wa" class="fw-bold">Nomor WA</label>
                                            <input type="text" class="form-control" id="nomor_wa" name="nomor_wa" required>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary">Simpan</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->





@include('themes.footer');
