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

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pegawai</h5>
              <p>Halaman daftar pegawai beserta keterangan pelanggaran</p>
              <div class="button-action" style="margin-bottom: 20px">

                {{-- DELETE --}}
                <!-- resources/views/users/index.blade.php atau halaman lainnya -->

                <form action="{{ route('users.deleteAll') }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                        IMPORT
                    </button>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus semua data user?')">Delete</button>
                    <a href="/hitung" class="btn btn-info">Info Pelanggaran</a>
                </form>
            </div>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Nama Lengkap</th>
                    <th class="text-center">Total PC</th>
                    <th>Total A</th>
                    <th>Total DT</th>
                    <th>Total DTPC</th>
                    <th>Total DTIPC</th>
                    <th>Total DTPCI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data_files as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            {{-- @php
                                            dd($user);
                                        @endphp --}}
                            <td>{{ $user->total_PC_count ?: '-' }}</td>
                            <td>{{ $user->total_A_count ?: '-' }}</td>
                            <td>{{ $user->total_DT_count ?: '-' }}</td>
                            <td>{{ $user->total_DTPC_count ?: '-' }}</td>
                            <td>{{ $user->total_DTIPC_count ?: '-' }}</td>
                            <td>{{ $user->total_DTPCI_count ?: '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

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

                <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data" id="import-form">
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

