@include('themes.head');
@include('themes.header');
@include('themes.sidemenu');

<main id="main" class="main">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                                <h1 class="card-title text-center">Informasi Pelanggaran</h1>
                                <p class="text-center">Badan Pengawasan Keuangan dan Pembangunan Jawa Tengah</p>

                                <div class="button-action" style="margin-bottom: 20px">
                                    {{-- DELETE --}}
                                    <!-- resources/views/users/index.blade.php atau halaman lainnya -->
                                    <form action="{{ route('pelanggaran.deleteAllData') }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <div class="d-grid gap-2 d-md-flex mb-4 mt-3">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                                                IMPORT
                                            </button>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus semua data user?')">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            <!-- Bordered Tabs Justified -->
                            <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                                <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="true">28 HARI</button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">30 HARI</button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">31 HARI</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                                <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered" id="example">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Jenis Pelanggaran</th>
                                                        <th>Total Pelanggaran</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $all_pelanggaran = collect();
                                                        $all_pelanggaran = $all_pelanggaran->concat($pelanggaran_28);
                                                    @endphp
                                                    @foreach($all_pelanggaran as $index => $pelanggaran)
                                                        <tr>
                                                            <td>1</td>
                                                            <td>PC (Pulang Cepat)</td>
                                                            <td>
                                                                @if($pelanggaran->total_PC_count_all_28 > 0)
                                                                    {{ $pelanggaran->total_PC_count_all_28 }}
                                                                @else
                                                                    Tidak Ada Pelanggaran
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_PC_count_all_28 <= 0) disabled @endif" data-toggle="modal" data-target="#modalPC_28">Detail</button>
                                                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_PC_count_all_28 <= 0) disabled @endif">Kirim Peringatan</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>A (Absen)</td>
                                                            <td>
                                                                @if($pelanggaran->total_A_count_all_28 > 0)
                                                                    {{ $pelanggaran->total_A_count_all_28 }}
                                                                @else
                                                                    Tidak Ada Pelanggaran
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_A_count_all_28 <= 0) disabled @endif" data-toggle="modal" data-target="#modalAlfa_28">Detail</button>
                                                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_A_count_all_28 <= 0) disabled @endif">Kirim Peringatan</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>DT (Datang Terlambat)</td>
                                                            <td>
                                                                @if($pelanggaran->total_DT_count_all_28 > 0)
                                                                    {{ $pelanggaran->total_DT_count_all_28 }}
                                                                @else
                                                                    Tidak Ada Pelanggaran
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_DT_count_all_28 <= 0) disabled @endif" data-toggle="modal" data-target="#modalDT_28">Detail</button>
                                                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DT_count_all_28 <= 0) disabled @endif">Kirim Peringatan</a>
                                                            </td>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>DTPC (Datang Terlambat dan Pulang Cepat)</td>
                                                            <td>
                                                                @if($pelanggaran->total_DTPC_count_all_28 > 0)
                                                                    {{ $pelanggaran->total_DTPC_count_all_28 }}
                                                                @else
                                                                    Tidak Ada Pelanggaran
                                                                @endif

                                                            <td>
                                                                <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_DTPC_count_all_28 <= 0) disabled @endif" data-toggle="modal" data-target="#modalDTPC_28">Detail</button>
                                                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DTPC_count_all_28 <= 0) disabled @endif">Kirim Peringatan</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>DTIPC (Datang Terlambat Izin dan Pulang Cepat Belum Izin)</td>
                                                            <td>
                                                                @if($pelanggaran->total_DTIPC_count_all_28 > 0)
                                                                    {{ $pelanggaran->total_DTIPC_count_all_28 }}
                                                                @else
                                                                    Tidak Ada Pelanggaran
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_DTIPC_count_all_28 <= 0) disabled @endif" data-toggle="modal" data-target="#modalDTIPC_28">Detail</button>
                                                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DTIPC_count_all_28 <= 0) disabled @endif">Kirim Peringatan</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>DTPCI (Datang Terlambat Belum Izin dan Pulang Cepat Izin)</td>
                                                            <td>
                                                                @if($pelanggaran->total_DTPCI_count_all_28 > 0)
                                                                    {{ $pelanggaran->total_DTPCI_count_all_28 }}
                                                                @else
                                                                    Tidak Ada Pelanggaran
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_DTPCI_count_all_28 <= 0) disabled @endif" data-toggle="modal" data-target="#modalDTPCI_28">Detail</button>
                                                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DTPCI_count_all_28 <= 0) disabled @endif">Kirim Peringatan</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>

                                </div>
                                <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered" id="example">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Jenis Pelanggaran</th>
                                                            <th>Total Pelanggaran</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $all_pelanggaran = collect();
                                                            $all_pelanggaran = $all_pelanggaran->concat($pelanggaran_30);
                                                        @endphp
                                                            @foreach($all_pelanggaran as $pelanggaran)
                                                            {{-- {{ dd($all_pelanggaran->toArray()) }} --}}

                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>PC (Pulang Cepat)</td>
                                                                    <td>
                                                                        @if($pelanggaran->total_PC_count_all_30 > 0)
                                                                            {{ $pelanggaran->total_PC_count_all_30 }}
                                                                        @else
                                                                            Tidak Ada Pelanggaran
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-info btn-sm @if($pelanggaran->total_PC_count_all_30 <= 0) disabled @endif" data-toggle="modal" data-target="#modalPC_30">Detail</button>
                                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_PC_count_all_30 <= 0) disabled @endif">Kirim Peringatan</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>A (Absen)</td>
                                                                    <td>
                                                                        @if($pelanggaran->total_A_count_all_30 > 0)
                                                                            {{ $pelanggaran->total_A_count_all_30 }}
                                                                        @else
                                                                            Tidak Ada Pelanggaran
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_A_count_all_30 <= 0) disabled @endif" data-toggle="modal" data-target="#modalAlfa_30">Detail</button>
                                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_A_count_all_30 <= 0) disabled @endif">Kirim Peringatan</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>DT (Datang Terlambat)</td>
                                                                    <td>
                                                                        @if($pelanggaran->total_DT_count_all_30 > 0)
                                                                            {{ $pelanggaran->total_DT_count_all_30 }}
                                                                        @else
                                                                            Tidak Ada Pelanggaran
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_DT_count_all_30 <= 0) disabled @endif" data-toggle="modal" data-target="#modalDT_30">Detail</button>
                                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DT_count_all_30 <= 0) disabled @endif">Kirim Peringatan</a>
                                                                    </td>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>DTPC (Datang Terlambat dan Pulang Cepat)</td>
                                                                    <td>
                                                                        @if($pelanggaran->total_DTPC_count_all_30 > 0)
                                                                            {{ $pelanggaran->total_DTPC_count_all_30 }}
                                                                        @else
                                                                            Tidak Ada Pelanggaran
                                                                        @endif

                                                                    <td>
                                                                        <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_DTPC_count_all_30 <= 0) disabled @endif" data-toggle="modal" data-target="#modalDTPC_30">Detail</button>
                                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DTPC_count_all_30 <= 0) disabled @endif">Kirim Peringatan</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>DTIPC (Datang Terlambat Izin dan Pulang Cepat Belum Izin)</td>
                                                                    <td>
                                                                        @if($pelanggaran->total_DTIPC_count_all_30 > 0)
                                                                            {{ $pelanggaran->total_DTIPC_count_all_30 }}
                                                                        @else
                                                                            Tidak Ada Pelanggaran
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_DTIPC_count_all_30 <= 0) disabled @endif" data-toggle="modal" data-target="#modalDTIPC_30">Detail</button>
                                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DTIPC_count_all_30 <= 0) disabled @endif">Kirim Peringatan</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>DTPCI (Datang Terlambat Belum Izin dan Pulang Cepat Izin)</td>
                                                                    <td>
                                                                        @if($pelanggaran->total_DTPCI_count_all_30 > 0)
                                                                            {{ $pelanggaran->total_DTPCI_count_all_30 }}
                                                                        @else
                                                                            Tidak Ada Pelanggaran
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_DTPCI_count_all_30 <= 0) disabled @endif" data-toggle="modal" data-target="#modalDTPCI_30">Detail</button>
                                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DTPCI_count_all_30 <= 0) disabled @endif">Kirim Peringatan</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered" id="example">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Jenis Pelanggaran</th>
                                                            <th>Total Pelanggaran</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $all_pelanggaran = collect();
                                                            $all_pelanggaran = $all_pelanggaran->concat($pelanggaran_31);
                                                        @endphp
                                                            @foreach($all_pelanggaran as $pelanggaran)
                                                            {{-- {{ dd($all_pelanggaran->toArray()) }} --}}

                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>PC (Pulang Cepat)</td>
                                                                    <td>
                                                                        @if($pelanggaran->total_PC_count_all > 0)
                                                                            {{ $pelanggaran->total_PC_count_all }}
                                                                        @else
                                                                            Tidak Ada Pelanggaran
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-info btn-sm @if($pelanggaran->total_PC_count_all <= 0) disabled @endif" data-toggle="modal" data-target="#modalPC">Detail</button>
                                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_PC_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>A (Absen)</td>
                                                                    <td>
                                                                        @if($pelanggaran->total_A_count_all > 0)
                                                                            {{ $pelanggaran->total_A_count_all }}
                                                                        @else
                                                                            Tidak Ada Pelanggaran
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_A_count_all <= 0) disabled @endif" data-toggle="modal" data-target="#modalAlfa">Detail</button>
                                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_A_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>DT (Datang Terlambat)</td>
                                                                    <td>
                                                                        @if($pelanggaran->total_DT_count_all > 0)
                                                                            {{ $pelanggaran->total_DT_count_all }}
                                                                        @else
                                                                            Tidak Ada Pelanggaran
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_DT_count_all <= 0) disabled @endif" data-toggle="modal" data-target="#modalDT">Detail</button>
                                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DT_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                                                                    </td>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>DTPC (Datang Terlambat dan Pulang Cepat)</td>
                                                                    <td>
                                                                        @if($pelanggaran->total_DTPC_count_all > 0)
                                                                            {{ $pelanggaran->total_DTPC_count_all }}
                                                                        @else
                                                                            Tidak Ada Pelanggaran
                                                                        @endif

                                                                    <td>
                                                                        <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_DTPC_count_all <= 0) disabled @endif" data-toggle="modal" data-target="#modalDTPC">Detail</button>
                                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DTPC_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>DTIPC (Datang Terlambat Izin dan Pulang Cepat Belum Izin)</td>
                                                                    <td>
                                                                        @if($pelanggaran->total_DTIPC_count_all > 0)
                                                                            {{ $pelanggaran->total_DTIPC_count_all }}
                                                                        @else
                                                                            Tidak Ada Pelanggaran
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_DTIPC_count_all <= 0) disabled @endif" data-toggle="modal" data-target="#modalDTIPC">Detail</button>
                                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DTIPC_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>DTPCI (Datang Terlambat Belum Izin dan Pulang Cepat Izin)</td>
                                                                    <td>
                                                                        @if($pelanggaran->total_DTPCI_count_all > 0)
                                                                            {{ $pelanggaran->total_DTPCI_count_all }}
                                                                        @else
                                                                            Tidak Ada Pelanggaran
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-info btn-sm detail-btn @if($pelanggaran->total_DTPCI_count_all <= 0) disabled @endif" data-toggle="modal" data-target="#modalDTPCI">Detail</button>
                                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DTPCI_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                                                                    </td>
                                                                </tr>


                                                            @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Bordered Tabs Justified -->

                            </div>
                        </div>
                </div>
            </div>
        </div>

        {{-- IMPORT DATA FILE --}}
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

                    <form action="" method="POST" enctype="multipart/form-data" id="import-form">
                        @csrf
                        <div class="modal-body">

                            <div class="form-group">
                                <label>PILIH FILE</label>
                                <input type="file" name="file" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>PILIH JUMLAH HARI</label>
                                <select name="jumlah_hari" class="form-control" id="jumlah-hari">
                                    <option value="30">30 Hari</option>
                                    <option value="31">31 Hari</option>
                                    <option value="28">28 Hari</option>
                                </select>
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

        <script>
            document.getElementById('import-button').addEventListener('click', function() {
                var jumlahHari = document.getElementById('jumlah-hari').value;
                if (jumlahHari === '30') {
                    document.getElementById('import-form').action = "{{ route('users.import_30_days') }}";
                } else if (jumlahHari === '31') {
                    document.getElementById('import-form').action = "{{ route('users.import_31_days') }}";
                } else if (jumlahHari === '28') {
                    document.getElementById('import-form').action = "{{ route('users.import_28_days') }}";
                }
                document.getElementById('import-form').submit();
            });
        </script>

        {{-- END IMPORT DATA FILE --}}


        <!-- Modal PC 28-->
        <div class="modal fade" id="modalPC_28" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
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
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>Nama Pegawai</th>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Tanggal</th>
                                            <th>Nomor WhatsApp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pulangcepat_28 as $result)
                                            <tr>
                                                <td>{{ $result->name }}</td>
                                                <td>
                                                    Pulang Cepat
                                                </td>

                                                <td>
                                                    @php
                                                        $tanggal_pelanggaran = [];
                                                        if($result->tgl_21 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 21');
                                                        if($result->tgl_22 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 22');
                                                        if($result->tgl_23 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 23');
                                                        if($result->tgl_24 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 24');
                                                        if($result->tgl_25 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 25');
                                                        if($result->tgl_26 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 26');
                                                        if($result->tgl_27 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 27');
                                                        if($result->tgl_28 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 28');
                                                        if($result->tgl_1 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 1');
                                                        if($result->tgl_2 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 2');
                                                        if($result->tgl_3 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 3');
                                                        if($result->tgl_4 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 4');
                                                        if($result->tgl_5 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 5');
                                                        if($result->tgl_6 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 6');
                                                        if($result->tgl_7 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 7');
                                                        if($result->tgl_8 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 8');
                                                        if($result->tgl_9 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 9');
                                                        if($result->tgl_10 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 10');
                                                        if($result->tgl_11 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 11');
                                                        if($result->tgl_12 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 12');
                                                        if($result->tgl_13 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 13');
                                                        if($result->tgl_14 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 14');
                                                        if($result->tgl_15 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 15');
                                                        if($result->tgl_16 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 16');
                                                        if($result->tgl_17 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 17');
                                                        if($result->tgl_18 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 18');
                                                        if($result->tgl_19 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 19');
                                                        if($result->tgl_20 === 'PC') array_push($tanggal_pelanggaran, 'Tanggal 20');
                                                    @endphp
                                                    @if(count($tanggal_pelanggaran) > 0)
                                                        <ul>
                                                            @foreach($tanggal_pelanggaran as $tanggal)
                                                                <li>{{ $tanggal }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @else
                                                        Tidak ada pelanggaran
                                                    @endif
                                                </td>
                                                <td>{{ $result->nomor_wa }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                            <button type="button" class="btn btn-success" id="kirim-button_pc_28">
                                <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

    <script>
    document.getElementById('kirim-button_pc_28').addEventListener('click', function() {
        var button = this;
        button.disabled = true; // Menonaktifkan tombol saat mengirim

        var spinner = button.querySelector('.spinner-border');
        spinner.classList.remove('d-none'); // Menampilkan animasi loading

        var tableRows = document.querySelectorAll("#example tbody tr");
        var requestData = {};

        tableRows.forEach(function(row) {
            var name = row.cells[0].innerText.trim();
            var violationType = row.cells[1].innerText.trim();
            var date = row.cells[2].innerText.trim();
            var phoneNumber = row.cells[3].innerText.trim();

            if (violationType.toLowerCase() === 'pulang cepat') {
                if (!requestData.hasOwnProperty(name)) {
                    requestData[name] = {
                        name: name,
                        violationTypes: [], // Menyimpan jenis pelanggaran untuk setiap tanggal
                        dates: [],
                        phoneNumber: phoneNumber
                    };
                }
                requestData[name].dates.push(date);
                requestData[name].violationTypes.push(violationType);
            }
        });


        Object.values(requestData).forEach(function(data) {
            var message = "Yth, Bapak/Ibu " + data.name + ",\n\n" +
                "Sesuai dengan data presensi *Aplikasi GDN Integrated*, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n";

                data.dates.forEach(function(date, index) {
                    var violationType = data.violationTypes[index];
                    if (index === 0) {
                        message += "- " + date + ": " + violationType + "\n";
                    } else {
                        message += "  - Tanggal " + date + ": " + violationType + "\n";
                    }
                });

            message += "\nMohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n" +
                "Terima Kasih\n-Tim GDN BPKP Jateng-";

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            var params = "token=56FHtWJ3qFM4Mwyz7EY39GxTJxKtKSdD8doxzVqwGpjNnRsUpX" +
                "&number=" + encodeURIComponent(data.phoneNumber) +
                "&message=" + encodeURIComponent(message) +
                "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0]) +
                "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                    } else {
                        alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                    }
                }
            };

            xhr.send(params);
        });
    });
        </script>
        {{-- END MODAL PC 28 --}}


        <!-- Modal Alfa 28-->
        <div class="modal fade" id="modalAlfa_28" tabindex="-1" >
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Kirim Peringatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data" id="import-form">
                        @csrf
                        <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                            <div class="form-group">
                                <label class="fw-bold mb-3">Daftar Pegawai beserta Tanggal Pelanggaran</label>
                                {{-- bentuk tabel --}}
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>Nama Pegawai</th>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Tanggal</th>
                                            <th>Nomor WhatsApp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($alfa_28 as $result)

                                        <tr>
                                            <td>{{ $result->name }}</td>
                                            <td>
                                                @if($result->tgl_21 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_22 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_23 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_24 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_25 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_26 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_27 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_28 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_1 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_2 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_3 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_4 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_5 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_6 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_7 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_8 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_9 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_10 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_11 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_12 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_13 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_14 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_15 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_16 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_17 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_18 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_19 === 'A')
                                                    Alfa
                                                @elseif($result->tgl_20 === 'A')
                                                    Alfa
                                                @endif
                                            </td>
                                            <td>
                                                @if($result->tgl_21 === 'A')
                                                    Tanggal 21
                                                @elseif($result->tgl_22 === 'A')
                                                    Tanggal 22
                                                @elseif($result->tgl_23 === 'A')
                                                    Tanggal 23
                                                @elseif($result->tgl_24 === 'A')
                                                    Tanggal 24
                                                @elseif($result->tgl_25 === 'A')
                                                    Tanggal 25
                                                @elseif($result->tgl_26 === 'A')
                                                    Tanggal 26
                                                @elseif($result->tgl_27 === 'A')
                                                    Tanggal 27
                                                @elseif($result->tgl_28 === 'A')
                                                    Tanggal 28
                                                @elseif($result->tgl_1 === 'A')
                                                    Tanggal 1
                                                @elseif($result->tgl_2 === 'A')
                                                    Tanggal 2
                                                @elseif($result->tgl_3 === 'A')
                                                    Tanggal 3
                                                @elseif($result->tgl_4 === 'A')
                                                    Tanggal 4
                                                @elseif($result->tgl_5 === 'A')
                                                    Tanggal 5
                                                @elseif($result->tgl_6 === 'A')
                                                    Tanggal 6
                                                @elseif($result->tgl_7 === 'A')
                                                    Tanggal 7
                                                @elseif($result->tgl_8 === 'A')
                                                    Tanggal 8
                                                @elseif($result->tgl_9 === 'A')
                                                    Tanggal 9
                                                @elseif($result->tgl_10 === 'A')
                                                    Tanggal 10
                                                @elseif($result->tgl_11 === 'A')
                                                    Tanggal 11
                                                @elseif($result->tgl_12 === 'A')
                                                    Tanggal 12
                                                @elseif($result->tgl_13 === 'A')
                                                    Tanggal 13
                                                @elseif($result->tgl_14 === 'A')
                                                    Tanggal 14
                                                @elseif($result->tgl_15 === 'A')
                                                    Tanggal 15
                                                @elseif($result->tgl_16 === 'A')
                                                    Tanggal 16
                                                @elseif($result->tgl_17 === 'A')
                                                    Tanggal 17
                                                @elseif($result->tgl_18 === 'A')
                                                    Tanggal 18
                                                @elseif($result->tgl_19 === 'A')
                                                    Tanggal 19
                                                @elseif($result->tgl_20 === 'A')
                                                    Tanggal 20
                                                @endif
                                            </td>
                                            <td>{{ $result->nomor_wa }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                            <button type="button" class="btn btn-success" id="kirim-button_alfa_28">Kirim</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('kirim-button_alfa_28').addEventListener('click', function() {
                var tableRows = document.querySelectorAll("#example tbody tr");
                var requestData = [];

                tableRows.forEach(function(row) {
                    var name = row.cells[0].innerText;
                    var violationType = row.cells[1].innerText;
                    var date = row.cells[2].innerText;
                    var phoneNumber = row.cells[3].innerText;

                    // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                    if (violationType.trim().toLowerCase() === 'alfa') {
                        requestData.push({
                            name: name,
                            violationType: violationType,
                            date: date,
                            phoneNumber: phoneNumber
                        });
                    }
                });

                requestData.forEach(function(data) {
                    // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                    var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                                + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                                + "- " + data.date + ": " + data.violationType + "\n\n"
                                + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                                + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                    var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                                + "&number=" + encodeURIComponent(data.phoneNumber)
                                + "&message=" + encodeURIComponent(message)
                                + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                                + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4) {
                            if (xhr.status == 200) {
                                alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                            } else {
                                alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                            }
                        }
                    };

                    xhr.send(params);
                });
            });

        </script>
        {{-- END MODAL ALFA 28 --}}

        <!-- Modal DT 28-->
        <div class="modal fade" id="modalDT_28" tabindex="-1" >
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Kirim Peringatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data" id="import-form">
                        @csrf
                        <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                            <div class="form-group">
                                <label class="fw-bold mb-3">Daftar Pegawai beserta Tanggal Pelanggaran</label>
                                {{-- bentuk tabel --}}
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>Nama Pegawai</th>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Tanggal</th>
                                            <th>Nomor WhatsApp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($datangterlambat_28 as $result)

                                        <tr>
                                            <td>{{ $result->name }}</td>
                                            <td>
                                                @if($result->tgl_21 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_22 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_23 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_24 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_25 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_26 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_27 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_28 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_1 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_2 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_3 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_4 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_5 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_6 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_7 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_8 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_9 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_10 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_11 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_12 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_13 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_14 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_15 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_16 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_17 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_18 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_19 === 'DT')
                                                    Datang Terlambat
                                                @elseif($result->tgl_20 === 'DT')
                                                    Datang Terlambat
                                                @endif
                                            </td>
                                            <td>
                                                @if($result->tgl_21 === 'DT')
                                                    Tanggal 21
                                                @elseif($result->tgl_22 === 'DT')
                                                    Tanggal 22
                                                @elseif($result->tgl_23 === 'DT')
                                                    Tanggal 23
                                                @elseif($result->tgl_24 === 'DT')
                                                    Tanggal 24
                                                @elseif($result->tgl_25 === 'DT')
                                                    Tanggal 25
                                                @elseif($result->tgl_26 === 'DT')
                                                    Tanggal 26
                                                @elseif($result->tgl_27 === 'DT')
                                                    Tanggal 27
                                                @elseif($result->tgl_28 === 'DT')
                                                    Tanggal 28
                                                @elseif($result->tgl_1 === 'DT')
                                                    Tanggal 1
                                                @elseif($result->tgl_2 === 'DT')
                                                    Tanggal 2
                                                @elseif($result->tgl_3 === 'DT')
                                                    Tanggal 3
                                                @elseif($result->tgl_4 === 'DT')
                                                    Tanggal 4
                                                @elseif($result->tgl_5 === 'DT')
                                                    Tanggal 5
                                                @elseif($result->tgl_6 === 'DT')
                                                    Tanggal 6
                                                @elseif($result->tgl_7 === 'DT')
                                                    Tanggal 7
                                                @elseif($result->tgl_8 === 'DT')
                                                    Tanggal 8
                                                @elseif($result->tgl_9 === 'DT')
                                                    Tanggal 9
                                                @elseif($result->tgl_10 === 'DT')
                                                    Tanggal 10
                                                @elseif($result->tgl_11 === 'DT')
                                                    Tanggal 11
                                                @elseif($result->tgl_12 === 'DT')
                                                    Tanggal 12
                                                @elseif($result->tgl_13 === 'DT')
                                                    Tanggal 13
                                                @elseif($result->tgl_14 === 'DT')
                                                    Tanggal 14
                                                @elseif($result->tgl_15 === 'DT')
                                                    Tanggal 15
                                                @elseif($result->tgl_16 === 'DT')
                                                    Tanggal 16
                                                @elseif($result->tgl_17 === 'DT')
                                                    Tanggal 17
                                                @elseif($result->tgl_18 === 'DT')
                                                    Tanggal 18
                                                @elseif($result->tgl_19 === 'DT')
                                                    Tanggal 19
                                                @elseif($result->tgl_20 === 'DT')
                                                    Tanggal 20
                                                @endif
                                            </td>
                                            <td>{{ $result->nomor_wa }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                            <button type="button" class="btn btn-success" id="kirim-button_dt_28">Kirim</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('kirim-button_dt_28').addEventListener('click', function() {
                var tableRows = document.querySelectorAll("#example tbody tr");
                var requestData = [];

                tableRows.forEach(function(row) {
                    var name = row.cells[0].innerText;
                    var violationType = row.cells[1].innerText;
                    var date = row.cells[2].innerText;
                    var phoneNumber = row.cells[3].innerText;

                    // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                    if (violationType.trim().toLowerCase() === 'datang terlambat') {
                        requestData.push({
                            name: name,
                            violationType: violationType,
                            date: date,
                            phoneNumber: phoneNumber
                        });
                    }
                });

                requestData.forEach(function(data) {
                    // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                    var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                                + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                                + "- " + data.date + ": " + data.violationType + "\n\n"
                                + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                                + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                    var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                                + "&number=" + encodeURIComponent(data.phoneNumber)
                                + "&message=" + encodeURIComponent(message)
                                + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                                + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4) {
                            if (xhr.status == 200) {
                                alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                            } else {
                                alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                            }
                        }
                    };

                    xhr.send(params);
                });
            });

        </script>
        {{-- END MODAL DT 28 --}}

        {{-- MODAL DTPC 28 --}}
        <div class="modal fade" id="modalDTPC_28" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
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
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>Nama Pegawai</th>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Tanggal</th>
                                            <th>Nomor WhatsApp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dtpc_28 as $result)

                                        <tr>
                                            <td>{{ $result->name }}</td>
                                            <td>
                                                @if($result->tgl_21 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_22 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_23 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_24 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_25 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_26 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_27 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_28 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_1 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_2 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_3 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_4 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_5 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_6 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_7 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_8 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_9 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_10 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_11 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_12 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_13 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_14 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_15 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_16 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_17 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_18 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_19 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @elseif($result->tgl_20 === 'DTPC')
                                                    Tidak Presensi Pagi dan Sore
                                                @endif
                                            </td>
                                            <td>
                                                @if($result->tgl_21 === 'DTPC')
                                                    Tanggal 21
                                                @elseif($result->tgl_22 === 'DTPC')
                                                    Tanggal 22
                                                @elseif($result->tgl_23 === 'DTPC')
                                                    Tanggal 23
                                                @elseif($result->tgl_24 === 'DTPC')
                                                    Tanggal 24
                                                @elseif($result->tgl_25 === 'DTPC')
                                                    Tanggal 25
                                                @elseif($result->tgl_26 === 'DTPC')
                                                    Tanggal 26
                                                @elseif($result->tgl_27 === 'DTPC')
                                                    Tanggal 27
                                                @elseif($result->tgl_28 === 'DTPC')
                                                    Tanggal 28
                                                @elseif($result->tgl_1 === 'DTPC')
                                                    Tanggal 1
                                                @elseif($result->tgl_2 === 'DTPC')
                                                    Tanggal 2
                                                @elseif($result->tgl_3 === 'DTPC')
                                                    Tanggal 3
                                                @elseif($result->tgl_4 === 'DTPC')
                                                    Tanggal 4
                                                @elseif($result->tgl_5 === 'DTPC')
                                                    Tanggal 5
                                                @elseif($result->tgl_6 === 'DTPC')
                                                    Tanggal 6
                                                @elseif($result->tgl_7 === 'DTPC')
                                                    Tanggal 7
                                                @elseif($result->tgl_8 === 'DTPC')
                                                    Tanggal 8
                                                @elseif($result->tgl_9 === 'DTPC')
                                                    Tanggal 9
                                                @elseif($result->tgl_10 === 'DTPC')
                                                    Tanggal 10
                                                @elseif($result->tgl_11 === 'DTPC')
                                                    Tanggal 11
                                                @elseif($result->tgl_12 === 'DTPC')
                                                    Tanggal 12
                                                @elseif($result->tgl_13 === 'DTPC')
                                                    Tanggal 13
                                                @elseif($result->tgl_14 === 'DTPC')
                                                    Tanggal 14
                                                @elseif($result->tgl_15 === 'DTPC')
                                                    Tanggal 15
                                                @elseif($result->tgl_16 === 'DTPC')
                                                    Tanggal 16
                                                @elseif($result->tgl_17 === 'DTPC')
                                                    Tanggal 17
                                                @elseif($result->tgl_18 === 'DTPC')
                                                    Tanggal 18
                                                @elseif($result->tgl_19 === 'DTPC')
                                                    Tanggal 19
                                                @elseif($result->tgl_20 === 'DTPC')
                                                    Tanggal 20
                                                @endif
                                            </td>
                                            <td>{{ $result->nomor_wa }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                            <button type="button" class="btn btn-success" id="kirim-button_dtpc_28">Kirim</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('kirim-button_dtpc_28').addEventListener('click', function() {
                var tableRows = document.querySelectorAll("#example tbody tr");
                var requestData = [];

                tableRows.forEach(function(row) {
                    var name = row.cells[0].innerText;
                    var violationType = row.cells[1].innerText;
                    var date = row.cells[2].innerText;
                    var phoneNumber = row.cells[3].innerText;

                    // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                    if (violationType.trim().toLowerCase() === 'tidak presensi pagi dan sore') {
                        requestData.push({
                            name: name,
                            violationType: violationType,
                            date: date,
                            phoneNumber: phoneNumber
                        });
                    }
                });

                requestData.forEach(function(data) {
                    // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                    var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                                + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                                + "- " + data.date + ": " + data.violationType + "\n\n"
                                + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                                + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                    var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                                + "&number=" + encodeURIComponent(data.phoneNumber)
                                + "&message=" + encodeURIComponent(message)
                                + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                                + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4) {
                            if (xhr.status == 200) {
                                alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                            } else {
                                alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                            }
                        }
                    };
                    xhr.send(params);
                });
            });
        </script>
        {{-- END MODAL DTPC 28 --}}

        {{-- MODAL DTIPC 28 --}}
        <div class="modal fade" id="modalDTIPC_28" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
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
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>Nama Pegawai</th>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Tanggal</th>
                                            <th>Nomor WhatsApp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dtipc_28 as $result)

                                        <tr>
                                            <td>{{ $result->name }}</td>
                                            <td>
                                                @if($result->tgl_21 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_22 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_23 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_24 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_25 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_26 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_27 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_28 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_1 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_2 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_3 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_4 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_5 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_6 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_7 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_8 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_9 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_10 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_11 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_12 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_13 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_14 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_15 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_16 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_17 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_18 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_19 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @elseif($result->tgl_20 === 'DTIPC')
                                                    Tidak Presensi Sore
                                                @endif
                                            </td>
                                            <td>
                                                @if($result->tgl_21 === 'DTIPC')
                                                    Tanggal 21
                                                @elseif($result->tgl_22 === 'DTIPC')
                                                    Tanggal 22
                                                @elseif($result->tgl_23 === 'DTIPC')
                                                    Tanggal 23
                                                @elseif($result->tgl_24 === 'DTIPC')
                                                    Tanggal 24
                                                @elseif($result->tgl_25 === 'DTIPC')
                                                    Tanggal 25
                                                @elseif($result->tgl_26 === 'DTIPC')
                                                    Tanggal 26
                                                @elseif($result->tgl_27 === 'DTIPC')
                                                    Tanggal 27
                                                @elseif($result->tgl_28 === 'DTIPC')
                                                    Tanggal 28
                                                @elseif($result->tgl_1 === 'DTIPC')
                                                    Tanggal 1
                                                @elseif($result->tgl_2 === 'DTIPC')
                                                    Tanggal 2
                                                @elseif($result->tgl_3 === 'DTIPC')
                                                    Tanggal 3
                                                @elseif($result->tgl_4 === 'DTIPC')
                                                    Tanggal 4
                                                @elseif($result->tgl_5 === 'DTIPC')
                                                    Tanggal 5
                                                @elseif($result->tgl_6 === 'DTIPC')
                                                    Tanggal 6
                                                @elseif($result->tgl_7 === 'DTIPC')
                                                    Tanggal 7
                                                @elseif($result->tgl_8 === 'DTIPC')
                                                    Tanggal 8
                                                @elseif($result->tgl_9 === 'DTIPC')
                                                    Tanggal 9
                                                @elseif($result->tgl_10 === 'DTIPC')
                                                    Tanggal 10
                                                @elseif($result->tgl_11 === 'DTIPC')
                                                    Tanggal 11
                                                @elseif($result->tgl_12 === 'DTIPC')
                                                    Tanggal 12
                                                @elseif($result->tgl_13 === 'DTIPC')
                                                    Tanggal 13
                                                @elseif($result->tgl_14 === 'DTIPC')
                                                    Tanggal 14
                                                @elseif($result->tgl_15 === 'DTIPC')
                                                    Tanggal 15
                                                @elseif($result->tgl_16 === 'DTIPC')
                                                    Tanggal 16
                                                @elseif($result->tgl_17 === 'DTIPC')
                                                    Tanggal 17
                                                @elseif($result->tgl_18 === 'DTIPC')
                                                    Tanggal 18
                                                @elseif($result->tgl_19 === 'DTIPC')
                                                    Tanggal 19
                                                @elseif($result->tgl_20 === 'DTIPC')
                                                    Tanggal 20
                                                @endif
                                            </td>
                                            <td>{{ $result->nomor_wa }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                            <button type="button" class="btn btn-success" id="kirim-button_dtipc_28">Kirim</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('kirim-button_dtipc_28').addEventListener('click', function() {
                var tableRows = document.querySelectorAll("#example tbody tr");
                var requestData = [];

                tableRows.forEach(function(row) {
                    var name = row.cells[0].innerText;
                    var violationType = row.cells[1].innerText;
                    var date = row.cells[2].innerText;
                    var phoneNumber = row.cells[3].innerText;

                    // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                    if (violationType.trim().toLowerCase() === 'tidak presensi sore') {
                        requestData.push({
                            name: name,
                            violationType: violationType,
                            date: date,
                            phoneNumber: phoneNumber
                        });
                    }
                });

                requestData.forEach(function(data) {
                    // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                    var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                                + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                                + "- " + data.date + ": " + data.violationType + "\n\n"
                                + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                                + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                    var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                                + "&number=" + encodeURIComponent(data.phoneNumber)
                                + "&message=" + encodeURIComponent(message)
                                + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                                + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4) {
                            if (xhr.status == 200) {
                                alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                            } else {
                                alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                            }
                        }
                    };
                    xhr.send(params);
                });
            });
        </script>
        {{-- END MODAL DTIPC --}}

        {{-- MODAL DTPCI 28 --}}
        <div class="modal fade" id="modalDTPCI_28" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
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
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>Nama Pegawai</th>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Tanggal</th>
                                            <th>Nomor WhatsApp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dtpci_28 as $result)

                                        <tr>
                                            <td>{{ $result->name }}</td>
                                            <td>
                                                @if($result->tgl_21 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_22 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_23 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_24 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_25 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_26 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_27 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_28 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_1 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_2 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_3 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_4 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_5 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_6 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_7 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_8 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_9 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_10 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_11 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_12 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_13 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_14 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_15 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_16 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_17 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_18 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_19 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @elseif($result->tgl_20 === 'DTPCI')
                                                    Tidak Presensi Pagi
                                                @endif
                                            </td>
                                            <td>
                                                @if($result->tgl_21 === 'DTPCI')
                                                    Tanggal 21
                                                @elseif($result->tgl_22 === 'DTPCI')
                                                    Tanggal 22
                                                @elseif($result->tgl_23 === 'DTPCI')
                                                    Tanggal 23
                                                @elseif($result->tgl_24 === 'DTPCI')
                                                    Tanggal 24
                                                @elseif($result->tgl_25 === 'DTPCI')
                                                    Tanggal 25
                                                @elseif($result->tgl_26 === 'DTPCI')
                                                    Tanggal 26
                                                @elseif($result->tgl_27 === 'DTPCI')
                                                    Tanggal 27
                                                @elseif($result->tgl_28 === 'DTPCI')
                                                    Tanggal 28
                                                @elseif($result->tgl_1 === 'DTPCI')
                                                    Tanggal 1
                                                @elseif($result->tgl_2 === 'DTPCI')
                                                    Tanggal 2
                                                @elseif($result->tgl_3 === 'DTPCI')
                                                    Tanggal 3
                                                @elseif($result->tgl_4 === 'DTPCI')
                                                    Tanggal 4
                                                @elseif($result->tgl_5 === 'DTPCI')
                                                    Tanggal 5
                                                @elseif($result->tgl_6 === 'DTPCI')
                                                    Tanggal 6
                                                @elseif($result->tgl_7 === 'DTPCI')
                                                    Tanggal 7
                                                @elseif($result->tgl_8 === 'DTPCI')
                                                    Tanggal 8
                                                @elseif($result->tgl_9 === 'DTPCI')
                                                    Tanggal 9
                                                @elseif($result->tgl_10 === 'DTPCI')
                                                    Tanggal 10
                                                @elseif($result->tgl_11 === 'DTPCI')
                                                    Tanggal 11
                                                @elseif($result->tgl_12 === 'DTPCI')
                                                    Tanggal 12
                                                @elseif($result->tgl_13 === 'DTPCI')
                                                    Tanggal 13
                                                @elseif($result->tgl_14 === 'DTPCI')
                                                    Tanggal 14
                                                @elseif($result->tgl_15 === 'DTPCI')
                                                    Tanggal 15
                                                @elseif($result->tgl_16 === 'DTPCI')
                                                    Tanggal 16
                                                @elseif($result->tgl_17 === 'DTPCI')
                                                    Tanggal 17
                                                @elseif($result->tgl_18 === 'DTPCI')
                                                    Tanggal 18
                                                @elseif($result->tgl_19 === 'DTPCI')
                                                    Tanggal 19
                                                @elseif($result->tgl_20 === 'DTPCI')
                                                    Tanggal 20
                                                @endif
                                            </td>
                                            <td>{{ $result->nomor_wa }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                            <button type="button" class="btn btn-success" id="kirim-button_dtpci_28">Kirim</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('kirim-button_dtpci_28').addEventListener('click', function() {
                var tableRows = document.querySelectorAll("#example tbody tr");
                var requestData = [];

                tableRows.forEach(function(row) {
                    var name = row.cells[0].innerText;
                    var violationType = row.cells[1].innerText;
                    var date = row.cells[2].innerText;
                    var phoneNumber = row.cells[3].innerText;

                    // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                    if (violationType.trim().toLowerCase() === 'tidak presensi pagi') {
                        requestData.push({
                            name: name,
                            violationType: violationType,
                            date: date,
                            phoneNumber: phoneNumber
                        });
                    }
                });

                requestData.forEach(function(data) {
                    // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                    var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                                + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                                + "- " + data.date + ": " + data.violationType + "\n\n"
                                + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                                + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                    var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                                + "&number=" + encodeURIComponent(data.phoneNumber)
                                + "&message=" + encodeURIComponent(message)
                                + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                                + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4) {
                            if (xhr.status == 200) {
                                alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                            } else {
                                alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                            }
                        }
                    };
                    xhr.send(params);
                });
            });
        </script>
        {{-- END MODAL DTPCI 28 --}}


    {{-- ############################################################################# --}}

    <!-- Modal PC 30-->
    <div class="modal fade" id="modalPC_30" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
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
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Tanggal</th>
                                        <th>Nomor WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pulangcepat_30 as $result)

                                    <tr>
                                        <td>{{ $result->name }}</td>
                                        <td>
                                            @if($result->tgl_21 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_22 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_23 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_24 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_25 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_26 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_27 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_28 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_29 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_30 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_1 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_2 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_3 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_4 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_5 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_6 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_7 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_8 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_9 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_10 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_11 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_12 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_13 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_14 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_15 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_16 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_17 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_18 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_19 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_20 === 'PC')
                                                Pulang Cepat
                                            @endif
                                        </td>
                                        <td>
                                            @if($result->tgl_21 === 'PC')
                                                Tanggal 21
                                            @elseif($result->tgl_22 === 'PC')
                                                Tanggal 22
                                            @elseif($result->tgl_23 === 'PC')
                                                Tanggal 23
                                            @elseif($result->tgl_24 === 'PC')
                                                Tanggal 24
                                            @elseif($result->tgl_25 === 'PC')
                                                Tanggal 25
                                            @elseif($result->tgl_26 === 'PC')
                                                Tanggal 26
                                            @elseif($result->tgl_27 === 'PC')
                                                Tanggal 27
                                            @elseif($result->tgl_28 === 'PC')
                                                Tanggal 28
                                            @elseif($result->tgl_29 === 'PC')
                                                Tanggal 29
                                            @elseif($result->tgl_30 === 'PC')
                                                Tanggal 30
                                            @elseif($result->tgl_1 === 'PC')
                                                Tanggal 1
                                            @elseif($result->tgl_2 === 'PC')
                                                Tanggal 2
                                            @elseif($result->tgl_3 === 'PC')
                                                Tanggal 3
                                            @elseif($result->tgl_4 === 'PC')
                                                Tanggal 4
                                            @elseif($result->tgl_5 === 'PC')
                                                Tanggal 5
                                            @elseif($result->tgl_6 === 'PC')
                                                Tanggal 6
                                            @elseif($result->tgl_7 === 'PC')
                                                Tanggal 7
                                            @elseif($result->tgl_8 === 'PC')
                                                Tanggal 8
                                            @elseif($result->tgl_9 === 'PC')
                                                Tanggal 9
                                            @elseif($result->tgl_10 === 'PC')
                                                Tanggal 10
                                            @elseif($result->tgl_11 === 'PC')
                                                Tanggal 11
                                            @elseif($result->tgl_12 === 'PC')
                                                Tanggal 12
                                            @elseif($result->tgl_13 === 'PC')
                                                Tanggal 13
                                            @elseif($result->tgl_14 === 'PC')
                                                Tanggal 14
                                            @elseif($result->tgl_15 === 'PC')
                                                Tanggal 15
                                            @elseif($result->tgl_16 === 'PC')
                                                Tanggal 16
                                            @elseif($result->tgl_17 === 'PC')
                                                Tanggal 17
                                            @elseif($result->tgl_18 === 'PC')
                                                Tanggal 18
                                            @elseif($result->tgl_19 === 'PC')
                                                Tanggal 19
                                            @elseif($result->tgl_20 === 'PC')
                                                Tanggal 20
                                            @endif
                                        </td>
                                        <td>{{ $result->nomor_wa }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-success" id="kirim-button_pc_30">Kirim</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('kirim-button_pc_30').addEventListener('click', function() {
            var tableRows = document.querySelectorAll("#example tbody tr");
            var requestData = [];

            tableRows.forEach(function(row) {
                var name = row.cells[0].innerText;
                var violationType = row.cells[1].innerText;
                var date = row.cells[2].innerText;
                var phoneNumber = row.cells[3].innerText;

                // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                if (violationType.trim().toLowerCase() === 'pulang cepat') {
                    requestData.push({
                        name: name,
                        violationType: violationType,
                        date: date,
                        phoneNumber: phoneNumber
                    });
                }
            });

            requestData.forEach(function(data) {
                // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                            + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                            + "- " + data.date + ": " + data.violationType + "\n\n"
                            + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                            + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                            + "&number=" + encodeURIComponent(data.phoneNumber)
                            + "&message=" + encodeURIComponent(message)
                            + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                            + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                        } else {
                            alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                        }
                    }
                };

                xhr.send(params);
            });
        });
    </script>
    {{-- END MODAL PC 30 --}}


    <!-- Modal Alfa 30-->
    <div class="modal fade" id="modalAlfa_30" tabindex="-1" >
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kirim Peringatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data" id="import-form">
                    @csrf
                    <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                        <div class="form-group">
                            <label class="fw-bold mb-3">Daftar Pegawai beserta Tanggal Pelanggaran</label>
                            {{-- bentuk tabel --}}
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Tanggal</th>
                                        <th>Nomor WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alfa_30 as $result)

                                    <tr>
                                        <td>{{ $result->name }}</td>
                                        <td>
                                            @if($result->tgl_21 === 'A')
                                                Alfa
                                            @elseif($result->tgl_22 === 'A')
                                                Alfa
                                            @elseif($result->tgl_23 === 'A')
                                                Alfa
                                            @elseif($result->tgl_24 === 'A')
                                                Alfa
                                            @elseif($result->tgl_25 === 'A')
                                                Alfa
                                            @elseif($result->tgl_26 === 'A')
                                                Alfa
                                            @elseif($result->tgl_27 === 'A')
                                                Alfa
                                            @elseif($result->tgl_28 === 'A')
                                                Alfa
                                            @elseif($result->tgl_29 === 'A')
                                                Alfa
                                            @elseif($result->tgl_30 === 'A')
                                                Alfa
                                            @elseif($result->tgl_1 === 'A')
                                                Alfa
                                            @elseif($result->tgl_2 === 'A')
                                                Alfa
                                            @elseif($result->tgl_3 === 'A')
                                                Alfa
                                            @elseif($result->tgl_4 === 'A')
                                                Alfa
                                            @elseif($result->tgl_5 === 'A')
                                                Alfa
                                            @elseif($result->tgl_6 === 'A')
                                                Alfa
                                            @elseif($result->tgl_7 === 'A')
                                                Alfa
                                            @elseif($result->tgl_8 === 'A')
                                                Alfa
                                            @elseif($result->tgl_9 === 'A')
                                                Alfa
                                            @elseif($result->tgl_10 === 'A')
                                                Alfa
                                            @elseif($result->tgl_11 === 'A')
                                                Alfa
                                            @elseif($result->tgl_12 === 'A')
                                                Alfa
                                            @elseif($result->tgl_13 === 'A')
                                                Alfa
                                            @elseif($result->tgl_14 === 'A')
                                                Alfa
                                            @elseif($result->tgl_15 === 'A')
                                                Alfa
                                            @elseif($result->tgl_16 === 'A')
                                                Alfa
                                            @elseif($result->tgl_17 === 'A')
                                                Alfa
                                            @elseif($result->tgl_18 === 'A')
                                                Alfa
                                            @elseif($result->tgl_19 === 'A')
                                                Alfa
                                            @elseif($result->tgl_20 === 'A')
                                                Alfa
                                            @endif
                                        </td>
                                        <td>
                                            @if($result->tgl_21 === 'A')
                                                Tanggal 21
                                            @elseif($result->tgl_22 === 'A')
                                                Tanggal 22
                                            @elseif($result->tgl_23 === 'A')
                                                Tanggal 23
                                            @elseif($result->tgl_24 === 'A')
                                                Tanggal 24
                                            @elseif($result->tgl_25 === 'A')
                                                Tanggal 25
                                            @elseif($result->tgl_26 === 'A')
                                                Tanggal 26
                                            @elseif($result->tgl_27 === 'A')
                                                Tanggal 27
                                            @elseif($result->tgl_28 === 'A')
                                                Tanggal 28
                                            @elseif($result->tgl_29 === 'A')
                                                Tanggal 29
                                            @elseif($result->tgl_30 === 'A')
                                                Tanggal 30
                                            @elseif($result->tgl_1 === 'A')
                                                Tanggal 1
                                            @elseif($result->tgl_2 === 'A')
                                                Tanggal 2
                                            @elseif($result->tgl_3 === 'A')
                                                Tanggal 3
                                            @elseif($result->tgl_4 === 'A')
                                                Tanggal 4
                                            @elseif($result->tgl_5 === 'A')
                                                Tanggal 5
                                            @elseif($result->tgl_6 === 'A')
                                                Tanggal 6
                                            @elseif($result->tgl_7 === 'A')
                                                Tanggal 7
                                            @elseif($result->tgl_8 === 'A')
                                                Tanggal 8
                                            @elseif($result->tgl_9 === 'A')
                                                Tanggal 9
                                            @elseif($result->tgl_10 === 'A')
                                                Tanggal 10
                                            @elseif($result->tgl_11 === 'A')
                                                Tanggal 11
                                            @elseif($result->tgl_12 === 'A')
                                                Tanggal 12
                                            @elseif($result->tgl_13 === 'A')
                                                Tanggal 13
                                            @elseif($result->tgl_14 === 'A')
                                                Tanggal 14
                                            @elseif($result->tgl_15 === 'A')
                                                Tanggal 15
                                            @elseif($result->tgl_16 === 'A')
                                                Tanggal 16
                                            @elseif($result->tgl_17 === 'A')
                                                Tanggal 17
                                            @elseif($result->tgl_18 === 'A')
                                                Tanggal 18
                                            @elseif($result->tgl_19 === 'A')
                                                Tanggal 19
                                            @elseif($result->tgl_20 === 'A')
                                                Tanggal 20
                                            @endif
                                        </td>
                                        <td>{{ $result->nomor_wa }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-success" id="kirim-button_alfa_30">Kirim</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('kirim-button_alfa_30').addEventListener('click', function() {
            var tableRows = document.querySelectorAll("#example tbody tr");
            var requestData = [];

            tableRows.forEach(function(row) {
                var name = row.cells[0].innerText;
                var violationType = row.cells[1].innerText;
                var date = row.cells[2].innerText;
                var phoneNumber = row.cells[3].innerText;

                // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                if (violationType.trim().toLowerCase() === 'alfa') {
                    requestData.push({
                        name: name,
                        violationType: violationType,
                        date: date,
                        phoneNumber: phoneNumber
                    });
                }
            });

            requestData.forEach(function(data) {
                // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                            + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                            + "- " + data.date + ": " + data.violationType + "\n\n"
                            + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                            + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                            + "&number=" + encodeURIComponent(data.phoneNumber)
                            + "&message=" + encodeURIComponent(message)
                            + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                            + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                        } else {
                            alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                        }
                    }
                };

                xhr.send(params);
            });
        });

    </script>
    {{-- END MODAL ALFA 30 --}}

    <!-- Modal DT 30-->
    <div class="modal fade" id="modalDT_30" tabindex="-1" >
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kirim Peringatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data" id="import-form">
                    @csrf
                    <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                        <div class="form-group">
                            <label class="fw-bold mb-3">Daftar Pegawai beserta Tanggal Pelanggaran</label>
                            {{-- bentuk tabel --}}
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Tanggal</th>
                                        <th>Nomor WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datangterlambat_30 as $result)

                                    <tr>
                                        <td>{{ $result->name }}</td>
                                        <td>
                                            @if($result->tgl_21 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_22 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_23 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_24 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_25 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_26 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_27 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_28 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_29 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_30 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_1 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_2 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_3 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_4 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_5 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_6 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_7 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_8 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_9 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_10 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_11 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_12 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_13 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_14 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_15 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_16 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_17 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_18 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_19 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_20 === 'DT')
                                                Datang Terlambat
                                            @endif
                                        </td>
                                        <td>
                                            @if($result->tgl_21 === 'DT')
                                                Tanggal 21
                                            @elseif($result->tgl_22 === 'DT')
                                                Tanggal 22
                                            @elseif($result->tgl_23 === 'DT')
                                                Tanggal 23
                                            @elseif($result->tgl_24 === 'DT')
                                                Tanggal 24
                                            @elseif($result->tgl_25 === 'DT')
                                                Tanggal 25
                                            @elseif($result->tgl_26 === 'DT')
                                                Tanggal 26
                                            @elseif($result->tgl_27 === 'DT')
                                                Tanggal 27
                                            @elseif($result->tgl_28 === 'DT')
                                                Tanggal 28
                                            @elseif($result->tgl_29 === 'DT')
                                                Tanggal 29
                                            @elseif($result->tgl_30 === 'DT')
                                                Tanggal 30
                                            @elseif($result->tgl_1 === 'DT')
                                                Tanggal 1
                                            @elseif($result->tgl_2 === 'DT')
                                                Tanggal 2
                                            @elseif($result->tgl_3 === 'DT')
                                                Tanggal 3
                                            @elseif($result->tgl_4 === 'DT')
                                                Tanggal 4
                                            @elseif($result->tgl_5 === 'DT')
                                                Tanggal 5
                                            @elseif($result->tgl_6 === 'DT')
                                                Tanggal 6
                                            @elseif($result->tgl_7 === 'DT')
                                                Tanggal 7
                                            @elseif($result->tgl_8 === 'DT')
                                                Tanggal 8
                                            @elseif($result->tgl_9 === 'DT')
                                                Tanggal 9
                                            @elseif($result->tgl_10 === 'DT')
                                                Tanggal 10
                                            @elseif($result->tgl_11 === 'DT')
                                                Tanggal 11
                                            @elseif($result->tgl_12 === 'DT')
                                                Tanggal 12
                                            @elseif($result->tgl_13 === 'DT')
                                                Tanggal 13
                                            @elseif($result->tgl_14 === 'DT')
                                                Tanggal 14
                                            @elseif($result->tgl_15 === 'DT')
                                                Tanggal 15
                                            @elseif($result->tgl_16 === 'DT')
                                                Tanggal 16
                                            @elseif($result->tgl_17 === 'DT')
                                                Tanggal 17
                                            @elseif($result->tgl_18 === 'DT')
                                                Tanggal 18
                                            @elseif($result->tgl_19 === 'DT')
                                                Tanggal 19
                                            @elseif($result->tgl_20 === 'DT')
                                                Tanggal 20
                                            @endif
                                        </td>
                                        <td>{{ $result->nomor_wa }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-success" id="kirim-button_dt_30">Kirim</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('kirim-button_dt_30').addEventListener('click', function() {
            var tableRows = document.querySelectorAll("#example tbody tr");
            var requestData = [];

            tableRows.forEach(function(row) {
                var name = row.cells[0].innerText;
                var violationType = row.cells[1].innerText;
                var date = row.cells[2].innerText;
                var phoneNumber = row.cells[3].innerText;

                // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                if (violationType.trim().toLowerCase() === 'datang terlambat') {
                    requestData.push({
                        name: name,
                        violationType: violationType,
                        date: date,
                        phoneNumber: phoneNumber
                    });
                }
            });

            requestData.forEach(function(data) {
                // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                            + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                            + "- " + data.date + ": " + data.violationType + "\n\n"
                            + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                            + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                            + "&number=" + encodeURIComponent(data.phoneNumber)
                            + "&message=" + encodeURIComponent(message)
                            + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                            + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                        } else {
                            alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                        }
                    }
                };

                xhr.send(params);
            });
        });

    </script>
    {{-- END MODAL DT 30 --}}

    {{-- MODAL DTPC 30 --}}
    <div class="modal fade" id="modalDTPC_30" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
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
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Tanggal</th>
                                        <th>Nomor WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dtpc_30 as $result)

                                    <tr>
                                        <td>{{ $result->name }}</td>
                                        <td>
                                            @if($result->tgl_21 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_22 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_23 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_24 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_25 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_26 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_27 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_28 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_29 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_30 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_1 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_2 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_3 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_4 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_5 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_6 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_7 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_8 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_9 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_10 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_11 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_12 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_13 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_14 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_15 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_16 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_17 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_18 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_19 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_20 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @endif
                                        </td>
                                        <td>
                                            @if($result->tgl_21 === 'DTPC')
                                                Tanggal 21
                                            @elseif($result->tgl_22 === 'DTPC')
                                                Tanggal 22
                                            @elseif($result->tgl_23 === 'DTPC')
                                                Tanggal 23
                                            @elseif($result->tgl_24 === 'DTPC')
                                                Tanggal 24
                                            @elseif($result->tgl_25 === 'DTPC')
                                                Tanggal 25
                                            @elseif($result->tgl_26 === 'DTPC')
                                                Tanggal 26
                                            @elseif($result->tgl_27 === 'DTPC')
                                                Tanggal 27
                                            @elseif($result->tgl_28 === 'DTPC')
                                                Tanggal 28
                                            @elseif($result->tgl_29 === 'DTPC')
                                                Tanggal 29
                                            @elseif($result->tgl_30 === 'DTPC')
                                                Tanggal 30
                                            @elseif($result->tgl_1 === 'DTPC')
                                                Tanggal 1
                                            @elseif($result->tgl_2 === 'DTPC')
                                                Tanggal 2
                                            @elseif($result->tgl_3 === 'DTPC')
                                                Tanggal 3
                                            @elseif($result->tgl_4 === 'DTPC')
                                                Tanggal 4
                                            @elseif($result->tgl_5 === 'DTPC')
                                                Tanggal 5
                                            @elseif($result->tgl_6 === 'DTPC')
                                                Tanggal 6
                                            @elseif($result->tgl_7 === 'DTPC')
                                                Tanggal 7
                                            @elseif($result->tgl_8 === 'DTPC')
                                                Tanggal 8
                                            @elseif($result->tgl_9 === 'DTPC')
                                                Tanggal 9
                                            @elseif($result->tgl_10 === 'DTPC')
                                                Tanggal 10
                                            @elseif($result->tgl_11 === 'DTPC')
                                                Tanggal 11
                                            @elseif($result->tgl_12 === 'DTPC')
                                                Tanggal 12
                                            @elseif($result->tgl_13 === 'DTPC')
                                                Tanggal 13
                                            @elseif($result->tgl_14 === 'DTPC')
                                                Tanggal 14
                                            @elseif($result->tgl_15 === 'DTPC')
                                                Tanggal 15
                                            @elseif($result->tgl_16 === 'DTPC')
                                                Tanggal 16
                                            @elseif($result->tgl_17 === 'DTPC')
                                                Tanggal 17
                                            @elseif($result->tgl_18 === 'DTPC')
                                                Tanggal 18
                                            @elseif($result->tgl_19 === 'DTPC')
                                                Tanggal 19
                                            @elseif($result->tgl_20 === 'DTPC')
                                                Tanggal 20
                                            @endif
                                        </td>
                                        <td>{{ $result->nomor_wa }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-success" id="kirim-button_dtpc_30">Kirim</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('kirim-button_dtpc_30').addEventListener('click', function() {
            var tableRows = document.querySelectorAll("#example tbody tr");
            var requestData = [];

            tableRows.forEach(function(row) {
                var name = row.cells[0].innerText;
                var violationType = row.cells[1].innerText;
                var date = row.cells[2].innerText;
                var phoneNumber = row.cells[3].innerText;

                // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                if (violationType.trim().toLowerCase() === 'tidak presensi pagi dan sore') {
                    requestData.push({
                        name: name,
                        violationType: violationType,
                        date: date,
                        phoneNumber: phoneNumber
                    });
                }
            });

            requestData.forEach(function(data) {
                // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                            + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                            + "- " + data.date + ": " + data.violationType + "\n\n"
                            + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                            + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                            + "&number=" + encodeURIComponent(data.phoneNumber)
                            + "&message=" + encodeURIComponent(message)
                            + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                            + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                        } else {
                            alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                        }
                    }
                };
                xhr.send(params);
            });
        });
    </script>
    {{-- END MODAL DTPC 30 --}}

    {{-- MODAL DTIPC 30 --}}
    <div class="modal fade" id="modalDTIPC_30" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
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
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Tanggal</th>
                                        <th>Nomor WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dtipc_30 as $result)

                                    <tr>
                                        <td>{{ $result->name }}</td>
                                        <td>
                                            @if($result->tgl_21 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_22 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_23 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_24 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_25 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_26 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_27 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_28 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_29 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_30 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_1 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_2 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_3 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_4 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_5 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_6 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_7 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_8 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_9 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_10 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_11 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_12 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_13 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_14 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_15 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_16 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_17 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_18 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_19 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_20 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @endif
                                        </td>
                                        <td>
                                            @if($result->tgl_21 === 'DTIPC')
                                                Tanggal 21
                                            @elseif($result->tgl_22 === 'DTIPC')
                                                Tanggal 22
                                            @elseif($result->tgl_23 === 'DTIPC')
                                                Tanggal 23
                                            @elseif($result->tgl_24 === 'DTIPC')
                                                Tanggal 24
                                            @elseif($result->tgl_25 === 'DTIPC')
                                                Tanggal 25
                                            @elseif($result->tgl_26 === 'DTIPC')
                                                Tanggal 26
                                            @elseif($result->tgl_27 === 'DTIPC')
                                                Tanggal 27
                                            @elseif($result->tgl_28 === 'DTIPC')
                                                Tanggal 28
                                            @elseif($result->tgl_29 === 'DTIPC')
                                                Tanggal 29
                                            @elseif($result->tgl_30 === 'DTIPC')
                                                Tanggal 30
                                            @elseif($result->tgl_1 === 'DTIPC')
                                                Tanggal 1
                                            @elseif($result->tgl_2 === 'DTIPC')
                                                Tanggal 2
                                            @elseif($result->tgl_3 === 'DTIPC')
                                                Tanggal 3
                                            @elseif($result->tgl_4 === 'DTIPC')
                                                Tanggal 4
                                            @elseif($result->tgl_5 === 'DTIPC')
                                                Tanggal 5
                                            @elseif($result->tgl_6 === 'DTIPC')
                                                Tanggal 6
                                            @elseif($result->tgl_7 === 'DTIPC')
                                                Tanggal 7
                                            @elseif($result->tgl_8 === 'DTIPC')
                                                Tanggal 8
                                            @elseif($result->tgl_9 === 'DTIPC')
                                                Tanggal 9
                                            @elseif($result->tgl_10 === 'DTIPC')
                                                Tanggal 10
                                            @elseif($result->tgl_11 === 'DTIPC')
                                                Tanggal 11
                                            @elseif($result->tgl_12 === 'DTIPC')
                                                Tanggal 12
                                            @elseif($result->tgl_13 === 'DTIPC')
                                                Tanggal 13
                                            @elseif($result->tgl_14 === 'DTIPC')
                                                Tanggal 14
                                            @elseif($result->tgl_15 === 'DTIPC')
                                                Tanggal 15
                                            @elseif($result->tgl_16 === 'DTIPC')
                                                Tanggal 16
                                            @elseif($result->tgl_17 === 'DTIPC')
                                                Tanggal 17
                                            @elseif($result->tgl_18 === 'DTIPC')
                                                Tanggal 18
                                            @elseif($result->tgl_19 === 'DTIPC')
                                                Tanggal 19
                                            @elseif($result->tgl_20 === 'DTIPC')
                                                Tanggal 20
                                            @endif
                                        </td>
                                        <td>{{ $result->nomor_wa }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-success" id="kirim-button_dtipc_30">Kirim</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('kirim-button_dtipc_30').addEventListener('click', function() {
            var tableRows = document.querySelectorAll("#example tbody tr");
            var requestData = [];

            tableRows.forEach(function(row) {
                var name = row.cells[0].innerText;
                var violationType = row.cells[1].innerText;
                var date = row.cells[2].innerText;
                var phoneNumber = row.cells[3].innerText;

                // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                if (violationType.trim().toLowerCase() === 'tidak presensi sore') {
                    requestData.push({
                        name: name,
                        violationType: violationType,
                        date: date,
                        phoneNumber: phoneNumber
                    });
                }
            });

            requestData.forEach(function(data) {
                // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                            + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                            + "- " + data.date + ": " + data.violationType + "\n\n"
                            + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                            + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                            + "&number=" + encodeURIComponent(data.phoneNumber)
                            + "&message=" + encodeURIComponent(message)
                            + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                            + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                        } else {
                            alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                        }
                    }
                };
                xhr.send(params);
            });
        });
    </script>
    {{-- END MODAL DTIPC 30 --}}

    {{-- MODAL DTPCI 30 --}}
    <div class="modal fade" id="modalDTPCI_30" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
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
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Tanggal</th>
                                        <th>Nomor WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dtpci_30 as $result)

                                    <tr>
                                        <td>{{ $result->name }}</td>
                                        <td>
                                            @if($result->tgl_21 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_22 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_23 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_24 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_25 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_26 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_27 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_28 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_29 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_30 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_1 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_2 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_3 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_4 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_5 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_6 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_7 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_8 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_9 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_10 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_11 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_12 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_13 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_14 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_15 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_16 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_17 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_18 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_19 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_20 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @endif
                                        </td>
                                        <td>
                                            @if($result->tgl_21 === 'DTPCI')
                                                Tanggal 21
                                            @elseif($result->tgl_22 === 'DTPCI')
                                                Tanggal 22
                                            @elseif($result->tgl_23 === 'DTPCI')
                                                Tanggal 23
                                            @elseif($result->tgl_24 === 'DTPCI')
                                                Tanggal 24
                                            @elseif($result->tgl_25 === 'DTPCI')
                                                Tanggal 25
                                            @elseif($result->tgl_26 === 'DTPCI')
                                                Tanggal 26
                                            @elseif($result->tgl_27 === 'DTPCI')
                                                Tanggal 27
                                            @elseif($result->tgl_28 === 'DTPCI')
                                                Tanggal 28
                                            @elseif($result->tgl_29 === 'DTPCI')
                                                Tanggal 29
                                            @elseif($result->tgl_30 === 'DTPCI')
                                                Tanggal 30
                                            @elseif($result->tgl_1 === 'DTPCI')
                                                Tanggal 1
                                            @elseif($result->tgl_2 === 'DTPCI')
                                                Tanggal 2
                                            @elseif($result->tgl_3 === 'DTPCI')
                                                Tanggal 3
                                            @elseif($result->tgl_4 === 'DTPCI')
                                                Tanggal 4
                                            @elseif($result->tgl_5 === 'DTPCI')
                                                Tanggal 5
                                            @elseif($result->tgl_6 === 'DTPCI')
                                                Tanggal 6
                                            @elseif($result->tgl_7 === 'DTPCI')
                                                Tanggal 7
                                            @elseif($result->tgl_8 === 'DTPCI')
                                                Tanggal 8
                                            @elseif($result->tgl_9 === 'DTPCI')
                                                Tanggal 9
                                            @elseif($result->tgl_10 === 'DTPCI')
                                                Tanggal 10
                                            @elseif($result->tgl_11 === 'DTPCI')
                                                Tanggal 11
                                            @elseif($result->tgl_12 === 'DTPCI')
                                                Tanggal 12
                                            @elseif($result->tgl_13 === 'DTPCI')
                                                Tanggal 13
                                            @elseif($result->tgl_14 === 'DTPCI')
                                                Tanggal 14
                                            @elseif($result->tgl_15 === 'DTPCI')
                                                Tanggal 15
                                            @elseif($result->tgl_16 === 'DTPCI')
                                                Tanggal 16
                                            @elseif($result->tgl_17 === 'DTPCI')
                                                Tanggal 17
                                            @elseif($result->tgl_18 === 'DTPCI')
                                                Tanggal 18
                                            @elseif($result->tgl_19 === 'DTPCI')
                                                Tanggal 19
                                            @elseif($result->tgl_20 === 'DTPCI')
                                                Tanggal 20
                                            @endif
                                        </td>
                                        <td>{{ $result->nomor_wa }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-success" id="kirim-button_dtpci_30">Kirim</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('kirim-button_dtpci_30').addEventListener('click', function() {
            var tableRows = document.querySelectorAll("#example tbody tr");
            var requestData = [];

            tableRows.forEach(function(row) {
                var name = row.cells[0].innerText;
                var violationType = row.cells[1].innerText;
                var date = row.cells[2].innerText;
                var phoneNumber = row.cells[3].innerText;

                // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                if (violationType.trim().toLowerCase() === 'tidak presensi pagi') {
                    requestData.push({
                        name: name,
                        violationType: violationType,
                        date: date,
                        phoneNumber: phoneNumber
                    });
                }
            });

            requestData.forEach(function(data) {
                // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                            + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                            + "- " + data.date + ": " + data.violationType + "\n\n"
                            + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                            + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                            + "&number=" + encodeURIComponent(data.phoneNumber)
                            + "&message=" + encodeURIComponent(message)
                            + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                            + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                        } else {
                            alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                        }
                    }
                };
                xhr.send(params);
            });
        });
    </script>
    {{-- END MODAL DTPCI 30 --}}

    {{-- ############################################################################# --}}

    <!-- Modal PC 31-->
    <div class="modal fade" id="modalPC" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
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
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Tanggal</th>
                                        <th>Nomor WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pulangcepat_31 as $result)

                                    <tr>
                                        <td>{{ $result->name }}</td>
                                        <td>
                                            @if($result->tgl_21 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_22 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_23 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_24 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_25 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_26 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_27 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_28 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_29 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_30 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_31 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_1 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_2 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_3 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_4 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_5 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_6 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_7 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_8 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_9 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_10 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_11 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_12 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_13 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_14 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_15 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_16 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_17 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_18 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_19 === 'PC')
                                                Pulang Cepat
                                            @elseif($result->tgl_20 === 'PC')
                                                Pulang Cepat
                                            @endif
                                        </td>
                                        <td>
                                            @if($result->tgl_21 === 'PC')
                                                Tanggal 21
                                            @elseif($result->tgl_22 === 'PC')
                                                Tanggal 22
                                            @elseif($result->tgl_23 === 'PC')
                                                Tanggal 23
                                            @elseif($result->tgl_24 === 'PC')
                                                Tanggal 24
                                            @elseif($result->tgl_25 === 'PC')
                                                Tanggal 25
                                            @elseif($result->tgl_26 === 'PC')
                                                Tanggal 26
                                            @elseif($result->tgl_27 === 'PC')
                                                Tanggal 27
                                            @elseif($result->tgl_28 === 'PC')
                                                Tanggal 28
                                            @elseif($result->tgl_29 === 'PC')
                                                Tanggal 29
                                            @elseif($result->tgl_30 === 'PC')
                                                Tanggal 30
                                            @elseif($result->tgl_31 === 'PC')
                                                Tanggal 31
                                            @elseif($result->tgl_1 === 'PC')
                                                Tanggal 1
                                            @elseif($result->tgl_2 === 'PC')
                                                Tanggal 2
                                            @elseif($result->tgl_3 === 'PC')
                                                Tanggal 3
                                            @elseif($result->tgl_4 === 'PC')
                                                Tanggal 4
                                            @elseif($result->tgl_5 === 'PC')
                                                Tanggal 5
                                            @elseif($result->tgl_6 === 'PC')
                                                Tanggal 6
                                            @elseif($result->tgl_7 === 'PC')
                                                Tanggal 7
                                            @elseif($result->tgl_8 === 'PC')
                                                Tanggal 8
                                            @elseif($result->tgl_9 === 'PC')
                                                Tanggal 9
                                            @elseif($result->tgl_10 === 'PC')
                                                Tanggal 10
                                            @elseif($result->tgl_11 === 'PC')
                                                Tanggal 11
                                            @elseif($result->tgl_12 === 'PC')
                                                Tanggal 12
                                            @elseif($result->tgl_13 === 'PC')
                                                Tanggal 13
                                            @elseif($result->tgl_14 === 'PC')
                                                Tanggal 14
                                            @elseif($result->tgl_15 === 'PC')
                                                Tanggal 15
                                            @elseif($result->tgl_16 === 'PC')
                                                Tanggal 16
                                            @elseif($result->tgl_17 === 'PC')
                                                Tanggal 17
                                            @elseif($result->tgl_18 === 'PC')
                                                Tanggal 18
                                            @elseif($result->tgl_19 === 'PC')
                                                Tanggal 19
                                            @elseif($result->tgl_20 === 'PC')
                                                Tanggal 20
                                            @endif
                                        </td>
                                        <td>{{ $result->nomor_wa }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-success" id="kirim-button_pc_31">Kirim</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('kirim-button_pc_31').addEventListener('click', function() {
            var tableRows = document.querySelectorAll("#example tbody tr");
            var requestData = [];

            tableRows.forEach(function(row) {
                var name = row.cells[0].innerText;
                var violationType = row.cells[1].innerText;
                var date = row.cells[2].innerText;
                var phoneNumber = row.cells[3].innerText;

                // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                if (violationType.trim().toLowerCase() === 'pulang cepat') {
                    requestData.push({
                        name: name,
                        violationType: violationType,
                        date: date,
                        phoneNumber: phoneNumber
                    });
                }
            });

            requestData.forEach(function(data) {
                // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                            + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                            + "- " + data.date + ": " + data.violationType + "\n\n"
                            + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                            + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                            + "&number=" + encodeURIComponent(data.phoneNumber)
                            + "&message=" + encodeURIComponent(message)
                            + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                            + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                        } else {
                            alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                        }
                    }
                };

                xhr.send(params);
            });
        });
    </script>
    {{-- END MODAL PC 31 --}}


    <!-- Modal Alfa 31-->
    <div class="modal fade" id="modalAlfa" tabindex="-1" >
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kirim Peringatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data" id="import-form">
                    @csrf
                    <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                        <div class="form-group">
                            <label class="fw-bold mb-3">Daftar Pegawai beserta Tanggal Pelanggaran</label>
                            {{-- bentuk tabel --}}
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Tanggal</th>
                                        <th>Nomor WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alfa_31 as $result)

                                    <tr>
                                        <td>{{ $result->name }}</td>
                                        <td>
                                            @if($result->tgl_21 === 'A')
                                                Alfa
                                            @elseif($result->tgl_22 === 'A')
                                                Alfa
                                            @elseif($result->tgl_23 === 'A')
                                                Alfa
                                            @elseif($result->tgl_24 === 'A')
                                                Alfa
                                            @elseif($result->tgl_25 === 'A')
                                                Alfa
                                            @elseif($result->tgl_26 === 'A')
                                                Alfa
                                            @elseif($result->tgl_27 === 'A')
                                                Alfa
                                            @elseif($result->tgl_28 === 'A')
                                                Alfa
                                            @elseif($result->tgl_29 === 'A')
                                                Alfa
                                            @elseif($result->tgl_30 === 'A')
                                                Alfa
                                            @elseif($result->tgl_31 === 'A')
                                                Alfa
                                            @elseif($result->tgl_1 === 'A')
                                                Alfa
                                            @elseif($result->tgl_2 === 'A')
                                                Alfa
                                            @elseif($result->tgl_3 === 'A')
                                                Alfa
                                            @elseif($result->tgl_4 === 'A')
                                                Alfa
                                            @elseif($result->tgl_5 === 'A')
                                                Alfa
                                            @elseif($result->tgl_6 === 'A')
                                                Alfa
                                            @elseif($result->tgl_7 === 'A')
                                                Alfa
                                            @elseif($result->tgl_8 === 'A')
                                                Alfa
                                            @elseif($result->tgl_9 === 'A')
                                                Alfa
                                            @elseif($result->tgl_10 === 'A')
                                                Alfa
                                            @elseif($result->tgl_11 === 'A')
                                                Alfa
                                            @elseif($result->tgl_12 === 'A')
                                                Alfa
                                            @elseif($result->tgl_13 === 'A')
                                                Alfa
                                            @elseif($result->tgl_14 === 'A')
                                                Alfa
                                            @elseif($result->tgl_15 === 'A')
                                                Alfa
                                            @elseif($result->tgl_16 === 'A')
                                                Alfa
                                            @elseif($result->tgl_17 === 'A')
                                                Alfa
                                            @elseif($result->tgl_18 === 'A')
                                                Alfa
                                            @elseif($result->tgl_19 === 'A')
                                                Alfa
                                            @elseif($result->tgl_20 === 'A')
                                                Alfa
                                            @endif
                                        </td>
                                        <td>
                                            @if($result->tgl_21 === 'A')
                                                Tanggal 21
                                            @elseif($result->tgl_22 === 'A')
                                                Tanggal 22
                                            @elseif($result->tgl_23 === 'A')
                                                Tanggal 23
                                            @elseif($result->tgl_24 === 'A')
                                                Tanggal 24
                                            @elseif($result->tgl_25 === 'A')
                                                Tanggal 25
                                            @elseif($result->tgl_26 === 'A')
                                                Tanggal 26
                                            @elseif($result->tgl_27 === 'A')
                                                Tanggal 27
                                            @elseif($result->tgl_28 === 'A')
                                                Tanggal 28
                                            @elseif($result->tgl_29 === 'A')
                                                Tanggal 29
                                            @elseif($result->tgl_30 === 'A')
                                                Tanggal 30
                                            @elseif($result->tgl_31 === 'A')
                                                Tanggal 31
                                            @elseif($result->tgl_1 === 'A')
                                                Tanggal 1
                                            @elseif($result->tgl_2 === 'A')
                                                Tanggal 2
                                            @elseif($result->tgl_3 === 'A')
                                                Tanggal 3
                                            @elseif($result->tgl_4 === 'A')
                                                Tanggal 4
                                            @elseif($result->tgl_5 === 'A')
                                                Tanggal 5
                                            @elseif($result->tgl_6 === 'A')
                                                Tanggal 6
                                            @elseif($result->tgl_7 === 'A')
                                                Tanggal 7
                                            @elseif($result->tgl_8 === 'A')
                                                Tanggal 8
                                            @elseif($result->tgl_9 === 'A')
                                                Tanggal 9
                                            @elseif($result->tgl_10 === 'A')
                                                Tanggal 10
                                            @elseif($result->tgl_11 === 'A')
                                                Tanggal 11
                                            @elseif($result->tgl_12 === 'A')
                                                Tanggal 12
                                            @elseif($result->tgl_13 === 'A')
                                                Tanggal 13
                                            @elseif($result->tgl_14 === 'A')
                                                Tanggal 14
                                            @elseif($result->tgl_15 === 'A')
                                                Tanggal 15
                                            @elseif($result->tgl_16 === 'A')
                                                Tanggal 16
                                            @elseif($result->tgl_17 === 'A')
                                                Tanggal 17
                                            @elseif($result->tgl_18 === 'A')
                                                Tanggal 18
                                            @elseif($result->tgl_19 === 'A')
                                                Tanggal 19
                                            @elseif($result->tgl_20 === 'A')
                                                Tanggal 20
                                            @endif
                                        </td>
                                        <td>{{ $result->nomor_wa }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-success" id="kirim-button_alfa_31">Kirim</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('kirim-button_alfa_31').addEventListener('click', function() {
            var tableRows = document.querySelectorAll("#example tbody tr");
            var requestData = [];

            tableRows.forEach(function(row) {
                var name = row.cells[0].innerText;
                var violationType = row.cells[1].innerText;
                var date = row.cells[2].innerText;
                var phoneNumber = row.cells[3].innerText;

                // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                if (violationType.trim().toLowerCase() === 'alfa') {
                    requestData.push({
                        name: name,
                        violationType: violationType,
                        date: date,
                        phoneNumber: phoneNumber
                    });
                }
            });

            requestData.forEach(function(data) {
                // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                            + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                            + "- " + data.date + ": " + data.violationType + "\n\n"
                            + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                            + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                            + "&number=" + encodeURIComponent(data.phoneNumber)
                            + "&message=" + encodeURIComponent(message)
                            + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                            + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                        } else {
                            alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                        }
                    }
                };

                xhr.send(params);
            });
        });

    </script>
    {{-- END MODAL ALFA 31 --}}

    <!-- Modal DT 31-->
    <div class="modal fade" id="modalDT" tabindex="-1" >
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kirim Peringatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data" id="import-form">
                    @csrf
                    <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                        <div class="form-group">
                            <label class="fw-bold mb-3">Daftar Pegawai beserta Tanggal Pelanggaran</label>
                            {{-- bentuk tabel --}}
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Tanggal</th>
                                        <th>Nomor WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datangterlambat_31 as $result)

                                    <tr>
                                        <td>{{ $result->name }}</td>
                                        <td>
                                            @if($result->tgl_21 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_22 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_23 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_24 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_25 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_26 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_27 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_28 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_29 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_30 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_31 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_1 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_2 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_3 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_4 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_5 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_6 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_7 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_8 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_9 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_10 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_11 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_12 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_13 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_14 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_15 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_16 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_17 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_18 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_19 === 'DT')
                                                Datang Terlambat
                                            @elseif($result->tgl_20 === 'DT')
                                                Datang Terlambat
                                            @endif
                                        </td>
                                        <td>
                                            @if($result->tgl_21 === 'DT')
                                                Tanggal 21
                                            @elseif($result->tgl_22 === 'DT')
                                                Tanggal 22
                                            @elseif($result->tgl_23 === 'DT')
                                                Tanggal 23
                                            @elseif($result->tgl_24 === 'DT')
                                                Tanggal 24
                                            @elseif($result->tgl_25 === 'DT')
                                                Tanggal 25
                                            @elseif($result->tgl_26 === 'DT')
                                                Tanggal 26
                                            @elseif($result->tgl_27 === 'DT')
                                                Tanggal 27
                                            @elseif($result->tgl_28 === 'DT')
                                                Tanggal 28
                                            @elseif($result->tgl_29 === 'DT')
                                                Tanggal 29
                                            @elseif($result->tgl_30 === 'DT')
                                                Tanggal 30
                                            @elseif($result->tgl_31 === 'DT')
                                                Tanggal 31
                                            @elseif($result->tgl_1 === 'DT')
                                                Tanggal 1
                                            @elseif($result->tgl_2 === 'DT')
                                                Tanggal 2
                                            @elseif($result->tgl_3 === 'DT')
                                                Tanggal 3
                                            @elseif($result->tgl_4 === 'DT')
                                                Tanggal 4
                                            @elseif($result->tgl_5 === 'DT')
                                                Tanggal 5
                                            @elseif($result->tgl_6 === 'DT')
                                                Tanggal 6
                                            @elseif($result->tgl_7 === 'DT')
                                                Tanggal 7
                                            @elseif($result->tgl_8 === 'DT')
                                                Tanggal 8
                                            @elseif($result->tgl_9 === 'DT')
                                                Tanggal 9
                                            @elseif($result->tgl_10 === 'DT')
                                                Tanggal 10
                                            @elseif($result->tgl_11 === 'DT')
                                                Tanggal 11
                                            @elseif($result->tgl_12 === 'DT')
                                                Tanggal 12
                                            @elseif($result->tgl_13 === 'DT')
                                                Tanggal 13
                                            @elseif($result->tgl_14 === 'DT')
                                                Tanggal 14
                                            @elseif($result->tgl_15 === 'DT')
                                                Tanggal 15
                                            @elseif($result->tgl_16 === 'DT')
                                                Tanggal 16
                                            @elseif($result->tgl_17 === 'DT')
                                                Tanggal 17
                                            @elseif($result->tgl_18 === 'DT')
                                                Tanggal 18
                                            @elseif($result->tgl_19 === 'DT')
                                                Tanggal 19
                                            @elseif($result->tgl_20 === 'DT')
                                                Tanggal 20
                                            @endif
                                        </td>
                                        <td>{{ $result->nomor_wa }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-success" id="kirim-button_dt_31">Kirim</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('kirim-button_dt_31').addEventListener('click', function() {
            var tableRows = document.querySelectorAll("#example tbody tr");
            var requestData = [];

            tableRows.forEach(function(row) {
                var name = row.cells[0].innerText;
                var violationType = row.cells[1].innerText;
                var date = row.cells[2].innerText;
                var phoneNumber = row.cells[3].innerText;

                // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                if (violationType.trim().toLowerCase() === 'datang terlambat') {
                    requestData.push({
                        name: name,
                        violationType: violationType,
                        date: date,
                        phoneNumber: phoneNumber
                    });
                }
            });

            requestData.forEach(function(data) {
                // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                            + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                            + "- " + data.date + ": " + data.violationType + "\n\n"
                            + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                            + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                            + "&number=" + encodeURIComponent(data.phoneNumber)
                            + "&message=" + encodeURIComponent(message)
                            + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                            + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                        } else {
                            alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                        }
                    }
                };

                xhr.send(params);
            });
        });

    </script>
    {{-- END MODAL DT 31 --}}

    {{-- MODAL DTPC 31 --}}
    <div class="modal fade" id="modalDTPC" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
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
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Tanggal</th>
                                        <th>Nomor WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dtpc_31 as $result)

                                    <tr>
                                        <td>{{ $result->name }}</td>
                                        <td>
                                            @if($result->tgl_21 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_22 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_23 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_24 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_25 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_26 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_27 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_28 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_29 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_30 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_31 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_1 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_2 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_3 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_4 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_5 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_6 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_7 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_8 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_9 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_10 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_11 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_12 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_13 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_14 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_15 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_16 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_17 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_18 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_19 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @elseif($result->tgl_20 === 'DTPC')
                                                Tidak Presensi Pagi dan Sore
                                            @endif
                                        </td>
                                        <td>
                                            @if($result->tgl_21 === 'DTPC')
                                                Tanggal 21
                                            @elseif($result->tgl_22 === 'DTPC')
                                                Tanggal 22
                                            @elseif($result->tgl_23 === 'DTPC')
                                                Tanggal 23
                                            @elseif($result->tgl_24 === 'DTPC')
                                                Tanggal 24
                                            @elseif($result->tgl_25 === 'DTPC')
                                                Tanggal 25
                                            @elseif($result->tgl_26 === 'DTPC')
                                                Tanggal 26
                                            @elseif($result->tgl_27 === 'DTPC')
                                                Tanggal 27
                                            @elseif($result->tgl_28 === 'DTPC')
                                                Tanggal 28
                                            @elseif($result->tgl_29 === 'DTPC')
                                                Tanggal 29
                                            @elseif($result->tgl_30 === 'DTPC')
                                                Tanggal 30
                                            @elseif($result->tgl_31 === 'DTPC')
                                                Tanggal 31
                                            @elseif($result->tgl_1 === 'DTPC')
                                                Tanggal 1
                                            @elseif($result->tgl_2 === 'DTPC')
                                                Tanggal 2
                                            @elseif($result->tgl_3 === 'DTPC')
                                                Tanggal 3
                                            @elseif($result->tgl_4 === 'DTPC')
                                                Tanggal 4
                                            @elseif($result->tgl_5 === 'DTPC')
                                                Tanggal 5
                                            @elseif($result->tgl_6 === 'DTPC')
                                                Tanggal 6
                                            @elseif($result->tgl_7 === 'DTPC')
                                                Tanggal 7
                                            @elseif($result->tgl_8 === 'DTPC')
                                                Tanggal 8
                                            @elseif($result->tgl_9 === 'DTPC')
                                                Tanggal 9
                                            @elseif($result->tgl_10 === 'DTPC')
                                                Tanggal 10
                                            @elseif($result->tgl_11 === 'DTPC')
                                                Tanggal 11
                                            @elseif($result->tgl_12 === 'DTPC')
                                                Tanggal 12
                                            @elseif($result->tgl_13 === 'DTPC')
                                                Tanggal 13
                                            @elseif($result->tgl_14 === 'DTPC')
                                                Tanggal 14
                                            @elseif($result->tgl_15 === 'DTPC')
                                                Tanggal 15
                                            @elseif($result->tgl_16 === 'DTPC')
                                                Tanggal 16
                                            @elseif($result->tgl_17 === 'DTPC')
                                                Tanggal 17
                                            @elseif($result->tgl_18 === 'DTPC')
                                                Tanggal 18
                                            @elseif($result->tgl_19 === 'DTPC')
                                                Tanggal 19
                                            @elseif($result->tgl_20 === 'DTPC')
                                                Tanggal 20
                                            @endif
                                        </td>
                                        <td>{{ $result->nomor_wa }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-success" id="kirim-button_dtpc_31">Kirim</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('kirim-button_dtpc_31').addEventListener('click', function() {
            var tableRows = document.querySelectorAll("#example tbody tr");
            var requestData = [];

            tableRows.forEach(function(row) {
                var name = row.cells[0].innerText;
                var violationType = row.cells[1].innerText;
                var date = row.cells[2].innerText;
                var phoneNumber = row.cells[3].innerText;

                // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                if (violationType.trim().toLowerCase() === 'tidak presensi pagi dan sore') {
                    requestData.push({
                        name: name,
                        violationType: violationType,
                        date: date,
                        phoneNumber: phoneNumber
                    });
                }
            });

            requestData.forEach(function(data) {
                // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                            + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                            + "- " + data.date + ": " + data.violationType + "\n\n"
                            + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                            + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                            + "&number=" + encodeURIComponent(data.phoneNumber)
                            + "&message=" + encodeURIComponent(message)
                            + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                            + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                        } else {
                            alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                        }
                    }
                };
                xhr.send(params);
            });
        });
    </script>
    {{-- END MODAL DTPC 31 --}}

    {{-- MODAL DTIPC 31 --}}
    <div class="modal fade" id="modalDTIPC" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
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
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Tanggal</th>
                                        <th>Nomor WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dtipc_31 as $result)

                                    <tr>
                                        <td>{{ $result->name }}</td>
                                        <td>
                                            @if($result->tgl_21 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_22 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_23 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_24 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_25 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_26 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_27 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_28 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_29 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_30 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_31 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_1 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_2 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_3 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_4 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_5 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_6 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_7 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_8 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_9 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_10 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_11 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_12 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_13 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_14 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_15 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_16 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_17 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_18 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_19 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @elseif($result->tgl_20 === 'DTIPC')
                                                Tidak Presensi Sore
                                            @endif
                                        </td>
                                        <td>
                                            @if($result->tgl_21 === 'DTIPC')
                                                Tanggal 21
                                            @elseif($result->tgl_22 === 'DTIPC')
                                                Tanggal 22
                                            @elseif($result->tgl_23 === 'DTIPC')
                                                Tanggal 23
                                            @elseif($result->tgl_24 === 'DTIPC')
                                                Tanggal 24
                                            @elseif($result->tgl_25 === 'DTIPC')
                                                Tanggal 25
                                            @elseif($result->tgl_26 === 'DTIPC')
                                                Tanggal 26
                                            @elseif($result->tgl_27 === 'DTIPC')
                                                Tanggal 27
                                            @elseif($result->tgl_28 === 'DTIPC')
                                                Tanggal 28
                                            @elseif($result->tgl_29 === 'DTIPC')
                                                Tanggal 29
                                            @elseif($result->tgl_30 === 'DTIPC')
                                                Tanggal 30
                                            @elseif($result->tgl_31 === 'DTIPC')
                                                Tanggal 31
                                            @elseif($result->tgl_1 === 'DTIPC')
                                                Tanggal 1
                                            @elseif($result->tgl_2 === 'DTIPC')
                                                Tanggal 2
                                            @elseif($result->tgl_3 === 'DTIPC')
                                                Tanggal 3
                                            @elseif($result->tgl_4 === 'DTIPC')
                                                Tanggal 4
                                            @elseif($result->tgl_5 === 'DTIPC')
                                                Tanggal 5
                                            @elseif($result->tgl_6 === 'DTIPC')
                                                Tanggal 6
                                            @elseif($result->tgl_7 === 'DTIPC')
                                                Tanggal 7
                                            @elseif($result->tgl_8 === 'DTIPC')
                                                Tanggal 8
                                            @elseif($result->tgl_9 === 'DTIPC')
                                                Tanggal 9
                                            @elseif($result->tgl_10 === 'DTIPC')
                                                Tanggal 10
                                            @elseif($result->tgl_11 === 'DTIPC')
                                                Tanggal 11
                                            @elseif($result->tgl_12 === 'DTIPC')
                                                Tanggal 12
                                            @elseif($result->tgl_13 === 'DTIPC')
                                                Tanggal 13
                                            @elseif($result->tgl_14 === 'DTIPC')
                                                Tanggal 14
                                            @elseif($result->tgl_15 === 'DTIPC')
                                                Tanggal 15
                                            @elseif($result->tgl_16 === 'DTIPC')
                                                Tanggal 16
                                            @elseif($result->tgl_17 === 'DTIPC')
                                                Tanggal 17
                                            @elseif($result->tgl_18 === 'DTIPC')
                                                Tanggal 18
                                            @elseif($result->tgl_19 === 'DTIPC')
                                                Tanggal 19
                                            @elseif($result->tgl_20 === 'DTIPC')
                                                Tanggal 20
                                            @endif
                                        </td>
                                        <td>{{ $result->nomor_wa }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-success" id="kirim-button_dtipc_31">Kirim</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('kirim-button_dtipc_31').addEventListener('click', function() {
            var tableRows = document.querySelectorAll("#example tbody tr");
            var requestData = [];

            tableRows.forEach(function(row) {
                var name = row.cells[0].innerText;
                var violationType = row.cells[1].innerText;
                var date = row.cells[2].innerText;
                var phoneNumber = row.cells[3].innerText;

                // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                if (violationType.trim().toLowerCase() === 'tidak presensi sore') {
                    requestData.push({
                        name: name,
                        violationType: violationType,
                        date: date,
                        phoneNumber: phoneNumber
                    });
                }
            });

            requestData.forEach(function(data) {
                // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                            + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                            + "- " + data.date + ": " + data.violationType + "\n\n"
                            + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                            + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                            + "&number=" + encodeURIComponent(data.phoneNumber)
                            + "&message=" + encodeURIComponent(message)
                            + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                            + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                        } else {
                            alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                        }
                    }
                };
                xhr.send(params);
            });
        });
    </script>
    {{-- END MODAL DTIPC 31 --}}

    {{-- MODAL DTPCI 31 --}}
    <div class="modal fade" id="modalDTPCI" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
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
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Tanggal</th>
                                        <th>Nomor WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dtpci_31 as $result)

                                    <tr>
                                        <td>{{ $result->name }}</td>
                                        <td>
                                            @if($result->tgl_21 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_22 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_23 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_24 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_25 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_26 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_27 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_28 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_29 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_30 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_31 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_1 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_2 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_3 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_4 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_5 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_6 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_7 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_8 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_9 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_10 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_11 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_12 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_13 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_14 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_15 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_16 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_17 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_18 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_19 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @elseif($result->tgl_20 === 'DTPCI')
                                                Tidak Presensi Pagi
                                            @endif
                                        </td>
                                        <td>
                                            @if($result->tgl_21 === 'DTPCI')
                                                Tanggal 21
                                            @elseif($result->tgl_22 === 'DTPCI')
                                                Tanggal 22
                                            @elseif($result->tgl_23 === 'DTPCI')
                                                Tanggal 23
                                            @elseif($result->tgl_24 === 'DTPCI')
                                                Tanggal 24
                                            @elseif($result->tgl_25 === 'DTPCI')
                                                Tanggal 25
                                            @elseif($result->tgl_26 === 'DTPCI')
                                                Tanggal 26
                                            @elseif($result->tgl_27 === 'DTPCI')
                                                Tanggal 27
                                            @elseif($result->tgl_28 === 'DTPCI')
                                                Tanggal 28
                                            @elseif($result->tgl_29 === 'DTPCI')
                                                Tanggal 29
                                            @elseif($result->tgl_30 === 'DTPCI')
                                                Tanggal 30
                                            @elseif($result->tgl_31 === 'DTPCI')
                                                Tanggal 31
                                            @elseif($result->tgl_1 === 'DTPCI')
                                                Tanggal 1
                                            @elseif($result->tgl_2 === 'DTPCI')
                                                Tanggal 2
                                            @elseif($result->tgl_3 === 'DTPCI')
                                                Tanggal 3
                                            @elseif($result->tgl_4 === 'DTPCI')
                                                Tanggal 4
                                            @elseif($result->tgl_5 === 'DTPCI')
                                                Tanggal 5
                                            @elseif($result->tgl_6 === 'DTPCI')
                                                Tanggal 6
                                            @elseif($result->tgl_7 === 'DTPCI')
                                                Tanggal 7
                                            @elseif($result->tgl_8 === 'DTPCI')
                                                Tanggal 8
                                            @elseif($result->tgl_9 === 'DTPCI')
                                                Tanggal 9
                                            @elseif($result->tgl_10 === 'DTPCI')
                                                Tanggal 10
                                            @elseif($result->tgl_11 === 'DTPCI')
                                                Tanggal 11
                                            @elseif($result->tgl_12 === 'DTPCI')
                                                Tanggal 12
                                            @elseif($result->tgl_13 === 'DTPCI')
                                                Tanggal 13
                                            @elseif($result->tgl_14 === 'DTPCI')
                                                Tanggal 14
                                            @elseif($result->tgl_15 === 'DTPCI')
                                                Tanggal 15
                                            @elseif($result->tgl_16 === 'DTPCI')
                                                Tanggal 16
                                            @elseif($result->tgl_17 === 'DTPCI')
                                                Tanggal 17
                                            @elseif($result->tgl_18 === 'DTPCI')
                                                Tanggal 18
                                            @elseif($result->tgl_19 === 'DTPCI')
                                                Tanggal 19
                                            @elseif($result->tgl_20 === 'DTPCI')
                                                Tanggal 20
                                            @endif
                                        </td>
                                        <td>{{ $result->nomor_wa }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-success" id="kirim-button_dtpci_31">Kirim</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('kirim-button_dtpci_31').addEventListener('click', function() {
            var tableRows = document.querySelectorAll("#example tbody tr");
            var requestData = [];

            tableRows.forEach(function(row) {
                var name = row.cells[0].innerText;
                var violationType = row.cells[1].innerText;
                var date = row.cells[2].innerText;
                var phoneNumber = row.cells[3].innerText;

                // Menambahkan kondisi untuk memeriksa apakah jenis pelanggaran adalah alfa
                if (violationType.trim().toLowerCase() === 'tidak presensi pagi') {
                    requestData.push({
                        name: name,
                        violationType: violationType,
                        date: date,
                        phoneNumber: phoneNumber
                    });
                }
            });

            requestData.forEach(function(data) {
                // Kirim permintaan hanya untuk data pegawai dengan pelanggaran alfa
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "https://app.ruangwa.id/api/send_message", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                var message = "Yth, Bapak/Ibu " + data.name + ",\n\n"
                            + "Sesuai dengan data presensi Aplikasi GDN Integrated, Sdr/i belum mengajukan permohonan izin atas kejadian:\n\n"
                            + "- " + data.date + ": " + data.violationType + "\n\n"
                            + "Mohon untuk segera melakukan pengajuan izin melalui tautan https://map.bpkp.go.id dan di follow up sampai dengan final.\n\n"
                            + "Terima Kasih\n-Tim GDN BPKP Jateng-";

                var params = "token=YE33e3yj9Pg6RXoLLB6J8YxjbFNKhD4DveBjWMVsC4KTx5k1yY"
                            + "&number=" + encodeURIComponent(data.phoneNumber)
                            + "&message=" + encodeURIComponent(message)
                            + "&date=" + encodeURIComponent(new Date().toISOString().split('T')[0])
                            + "&time=" + encodeURIComponent(new Date().toISOString().split('T')[1].split('.')[0].replace(/:/g, '%3A'));

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            alert('Pesan berhasil dikirim kepada ' + data.name + ' dengan nomor WhatsApp ' + data.phoneNumber + '.');
                        } else {
                            alert('Terjadi kesalahan dalam mengirim pesan untuk ' + data.name + '.');
                        }
                    }
                };
                xhr.send(params);
            });
        });
    </script>
    {{-- END MODAL DTPCI 31 --}}




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

</main>
@include('themes.footer');
