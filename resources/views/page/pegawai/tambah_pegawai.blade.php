@include('themes.head');
@include('themes.header');
@include('themes.sidemenu');

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Pegawai</h1>
      <nav>
        <ol class="breadcrumb
        ">
          <li class="breadcrumb
            -item"><a href="index.html">Home</a></li>
            <li class="breadcrumb
                -item">Pegawai</li>
                <li class="breadcrumb
                    -item active" aria-current="page">Tambah Pegawai</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Pegawai</h4>
                        </div>
                        <div class="card-body">
                            <form action="/store-pegawai" method="post">
                            @csrf
                                <div class="form-group ">
                                    <label for="nama_pegawai">Nama Pegawai</label>
                                    <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_wa">Nomor WhatsApp</label>
                                    <input type="text" class="form-control" id="nomor_wa" name="nomor_wa" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->





@include('themes.footer');
