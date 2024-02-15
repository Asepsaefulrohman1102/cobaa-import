@include('themes.head');
@include('themes.header');
@include('themes.sidemenu');

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Pegawai</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Pelanggaran</li>
              <li class="breadcrumb-item active" aria-current="page">Daftar Pulang Cepat</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                  <h5 class="card-title text-center">Pelanggaran Pulang Cepat</h5>
                  <p class="text-center">Halaman Daftar Pelanggaran Pulang Cepat</p>
                  <div class="button-action" style="margin-bottom: 20px">
                      {{-- Tombol Kirim Peringatan --}}
                      <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#kirimPeringatan">
                          KIRIM PERINGATAN
                      </button>
                  </div>
                  <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th class="text-center">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pulangcepat as $data)
                            @if ($data->total_PulangCepat > 0)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>
                                        <ul>
                                            @for ($tgl = 1; $tgl <= 31; $tgl++)
                                                @if ($data->{'tgl_'.$tgl} == 'PC')
                                                    <li>Tanggal {{ $tgl }}</li>
                                                @endif
                                            @endfor
                                        </ul>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->
              </div>
            </div>
          </div>
        </div>
      </section>

    <div class="modal fade" id="kirimPeringatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Kirim Peringatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data" id="import-form">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="fw-bold mb-3">Daftar Pegawai beserta Tanggal Pelanggaran</label>
                                {{-- bentuk tabel --}}
                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th class="text-center">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $isTableActive = false;
                                    @endphp

                                    @foreach ($pulangcepat as $data)
                                        @if ($data->total_PulangCepat > 0)
                                            <tr class="{{ $isTableActive ? 'table-active' : '' }}">
                                                <td>{{ $data->name }}</td>
                                                <td>
                                                    <ul>
                                                        @for ($tgl = 1; $tgl <= 31; $tgl++)
                                                            @if ($data->{'tgl_'.$tgl} == 'PC')
                                                                <li>Tanggal {{ $tgl }}</li>
                                                            @endif
                                                        @endfor
                                                    </ul>
                                                </td>
                                            </tr>

                                            @php
                                                $isTableActive = !$isTableActive; // Toggle the value for each data
                                            @endphp
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                                {{-- <select class="form-control" name="pegawai" id="pegawai">
                                    <option value="">Pilih Pegawai</option>
                                    @foreach ($pulangcepat as $data)
                                        @if ($data->total_PulangCepat > 0)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endif
                                    @endforeach
                                </select> --}}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                            <button type="button" class="btn btn-success" id="kirim-button">Kirim</button>
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
          $('#kirim-button').click(function () {
              // Tampilkan spinner loading
              $('#loading-spinner').show();

              // Sembunyikan formulir dan nonaktifkan tombol impor
              $('#kirim-form').hide();
              $(this).prop('disabled', true);

              // Kirim formulir (simulasikan pengiriman formulir)
              $('#kirim-form').submit();
          });

          // Opsional: Tambahkan event listener untuk menyembunyikan spinner saat modal ditutup
          $('#kirim').on('hidden.bs.modal', function () {
              $('#loading-spinner').hide();
              $('#kirim-form').show();
              $('#kirim-button').prop('disabled', false);
          });
      });
  </script>

</main><!-- End #main -->

@include('themes.footer');
