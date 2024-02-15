@include('themes.head');
@include('themes.header');
@include('themes.sidemenu');

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Detail Data Pegawai</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Pegawai</li>
                <li class="breadcrumb-item active" aria-current="page">Detail Pegawai</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title text-center">Detail Data Pegawai</h1>
                            <p class="text-center">Badan Pengawasan Keuangan dan Pembangunan Jawa Tengah</p>
                        </div>
                        @foreach($pegawai as $p)
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="nama_pegawai" value=": {{ $p->nama_pegawai }}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="nip" value=": {{ $p->nip }}">
                                    </div>
                                </div>
                                {{-- jabatan --}}
                                <div class="mb-3 row">
                                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="jabatan" value=": {{ $p->jabatan }}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nomor_wa" class="col-sm-2 col-form-label">Nomor WA</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="nomor_wa" value=": {{ $p->nomor_wa }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        <div class="d-grip gap-2 d-md-flex justify-content-md-end mb-5" style="padding-right: 10%">
                            {{-- {{ $user->id }} --}}
                            <a href="/kirim-peringatan/" class="btn btn-danger ">Kirim Peringatan</a>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Lihat Pelanggaran
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar Pelanggaran Pegawai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- tabel pelanggaran --}}
                <div class="modal-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jenis Pelanggaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pelanggar as $pelanggaran)
                            <tr>
                                <td>
                                    @if ($pelanggaran->total_PulangCepat > 0 && $pelanggaran->total_Alfa > 0)
                                        <ul>
                                            @for ($tgl = 1; $tgl <= 31; $tgl++)
                                                @if ($pelanggaran->{'tgl_'.$tgl} == 'PC' || $pelanggaran->{'tgl_'.$tgl} == 'A')
                                                    <li>Tanggal {{ $tgl }}</li>
                                                @endif
                                            @endfor
                                        </ul>
                                    @else
                                        Tidak ada pelanggaran.
                                    @endif
                                </td>
                                <td>
                                    @if ($pelanggaran->total_PulangCepat > 0)
                                        Jenis Pelanggaran: PC
                                    @elseif ($pelanggaran->total_Alfa > 0)
                                        Jenis Pelanggaran: A
                                    @elseif ($pelanggaran->total_DT > 0)
                                        Jenis Pelanggaran: DT
                                    @elseif ($pelanggaran->total_DTIPC > 0)
                                        Jenis Pelanggaran: DTIPC
                                    @elseif ($pelanggaran->total_DTPC > 0)
                                        Jenis Pelanggaran: DTPC
                                    @elseif ($pelanggaran->total_DTPCI > 0)
                                        Jenis Pelanggaran: DTPCI
                                    @else
                                        Tidak ada pelanggaran.
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>




</main><!-- End #main -->

@include('themes.footer');
