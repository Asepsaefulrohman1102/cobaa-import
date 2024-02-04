@include('themes.head');
@include('themes.header');
@include('themes.sidemenu');

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Pegawai</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pegawai</li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Pegawai</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Daftar Pegawai</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered" id="example">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nomor WhatsApp</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($pegawais as $p)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->nama_pegawai }}</td>
                        <td>{{ $p->nomor_wa }}</td>
                        <td>
                          <a href="/data_pegawai/edit-pegawai {{ $p->id }}" class="btn btn-warning btn-sm">Edit</a>
                          <a href="/data_pegawai/hapus-pegawai/ {{ $p->id }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </main><!-- End #main -->




@include('themes.footer');
