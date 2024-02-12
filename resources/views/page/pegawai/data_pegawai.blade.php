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
                <div class="button-action" style="margin-bottom: 20px">
                    {{-- DELETE --}}
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                        IMPORT
                    </button>
                    <!-- resources/views/users/index.blade.php atau halaman lainnya -->
                    <form action="{{ route('pegawai.deletePegawai') }}" method="post">
                        @csrf
                        @method('delete')
                        <div class="d-grid gap-2 d-md-flex mb-4 mt-3">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus semua data user?')">Delete</button>
                        </div>
                    </form>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered" id="example">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Total Pelanggaran</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($pegawais as $p)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->nip }}</td>
                        <td>{{ $p->nama_pegawai }}</td>
                        <td>{{ $p->nomor_wa }}</td>
                        <td>
                          <a href="/pegawai/detail-pegawai/{{ $p->nama_pegawai }}" class="btn btn-primary btn-sm">Detail</a>
                          <a href="/pegawai/edit-pegawai/{{ $p->nama_pegawai }}" class="btn btn-warning btn-sm">Edit</a>
                          <a href="/pegawai/hapus-pegawai/{{ $p->nama_pegawai}}" class="btn btn-danger btn-sm">Hapus</a>
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

    <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">IMPORT DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="loading-spinner" class="text-center" style="display: none;">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <p>Loading...</p>
                    </div>
                </div>

                <form action="{{ route('pegawai.importPegawai') }}" method="post" id="import-form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label>PILIH FILE</label>
                            <input type="file" name="file" class="form-control" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-success" id="import-button">IMPORT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>

<script>
    $(document).ready(function () {
        $('#import-button').click(function () {
            // Tampilkan spinner loading
            $('#loading-spinner').show();

            // Sembunyikan formulir dan nonaktifkan tombol impor
            $('#import-form').hide();
            $(this).prop('disabled', true);

            // Kirim formulir (simulasikan pengiriman formulir)
            $('#import-form').submit();
        });

        // Opsional: Tambahkan event listener untuk menyembunyikan spinner saat modal ditutup
        $('#import').on('hidden.bs.modal', function () {
            $('#loading-spinner').hide();
            $('#import-form').show();
            $('#import-button').prop('disabled', false);
        });
    });
</script>
    </main><!-- End #main -->




@include('themes.footer');
