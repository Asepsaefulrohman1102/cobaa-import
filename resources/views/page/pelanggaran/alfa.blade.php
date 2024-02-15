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
              <li class="breadcrumb-item active" aria-current="page">Daftar Alfa</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Pelanggaran Alfa</h5>
                <p>Halaman Daftar Pelanggaran Alfa</p>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>Nama Lengkap</th>
                      <th class="text-center">Total Alfa</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                    <tbody>
                        {{-- @foreach ($alfa as $user)
                            <tr>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->total_Alfa ?: '-' }}</td>
                                <td>
                                    <a href="/detail-pelanggaran/{{ $user->id }}" class="btn btn-primary btn-sm">Detail</a>
                                    <a href="/kirim-broadcast/{{ $user->id }}" class="btn btn-success btn-sm">Kirim Broadcast</a>
                                </td>
                            </tr>
                        @endforeach --}}

                        @foreach ($alfa as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>
                                    @if ($data->total_Alfa > 0)
                                        <ul>
                                            @for ($tgl = 1; $tgl <= 31; $tgl++)
                                                @if ($data->{'tgl_'.$tgl} == 'A')
                                                    <li>Tanggal {{ $tgl }}</li>
                                                @endif
                                            @endfor
                                        </ul>
                                    @else
                                        Tidak ada pelanggaran Alfa.
                                    @endif
                                </td>
                                <td>
                                    <a href="/detail-pelanggaran/{{ $data->id }}" class="btn btn-primary btn-sm">Detail</a>
                                    <a href="/kirim-broadcast/{{ $data->id }}" class="btn btn-success btn-sm">Kirim Broadcast</a>
                                </td>
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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <script>
          $(document).ready( function () {
              $('#table').DataTable();
          } );
      </script>


</main><!-- End #main -->

@include('themes.footer');


</main><!-- End #main -->

@include('themes.footer');
