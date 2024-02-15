<div class="card">
    <div class="card-header">
        <h1 class="card-title text-center">Informasi Pelanggaran</h1>
        <p class="text-center">Badan Pengawasan Keuangan dan Pembangunan Jawa Tengah</p>
    </div>
    <div class="card-body">
        <div class="button-action" style="margin-bottom: 20px">
            {{-- DELETE --}}
            <!-- resources/views/users/index.blade.php atau halaman lainnya -->
            <form action="{{ route('pelanggaran.deleteAll') }}" method="post">
                @csrf
                @method('delete')
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                        IMPORT
                    </button>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus semua data user?')">Delete</button>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis</th>
                        <th>Total Pelanggaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach($pelanggarans as $p) --}}
                    @forelse ($pelanggaran as $user)
                        <tr>
                            <td>1</td>
                            <td>PC (Pulang Cepat)</td>
                            <td>
                                @if($user->total_PC_count_all > 0)
                                    {{ $user->total_PC_count_all }}
                                @else
                                    Tidak Ada Pelanggaran
                                @endif
                            </td>
                            <td>
                                <a href="/pelanggaran/pc-pelanggaran" class="btn btn-info btn-sm @if($user->total_PC_count_all <= 0) disabled @endif">Detail</a>
                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($user->total_PC_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Alfa</td>
                            <td>
                                @if($user->total_A_count_all > 0)
                                    {{ $user->total_A_count_all }}
                                @else
                                    Tidak Ada Pelanggaran
                                @endif
                            </td>
                            <td>
                                <a href="/pelanggaran/alfa-pelanggaran" class="btn btn-info btn-sm @if($user->total_A_count_all <= 0) disabled @endif">Detail</a>
                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($user->total_A_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>DT (Datang Terlambat)</td>
                            <td>
                                @if($user->total_DT_count_all > 0)
                                    {{ $user->total_DT_count_all }}
                                @else
                                    Tidak Ada Pelanggaran
                                @endif
                            </td>
                            <td>
                                <a href="/pelanggaran/dt-pelanggaran" class="btn btn-info btn-sm @if($user->total_DT_count_all <= 0) disabled @endif">Detail</a>
                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($user->total_DT_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>DTPC (Datang Terlambat Pulang Cepat)</td>
                            <td>
                                @if($user->total_DTPC_count_all > 0)
                                    {{ $user->total_DTPC_count_all }}
                                @else
                                    Tidak Ada Pelanggaran
                                @endif
                            </td>
                            <td>
                                <a href="/pelanggaran/dtpc-pelanggaran" class="btn btn-info btn-sm @if($user->total_DTPC_count_all <= 0) disabled @endif">Detail</a>
                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($user->total_DTPC_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>DTIPC (Datang Terlambat Ijin Pulang Cepat)</td>
                            <td>
                                @if($user->total_DTIPC_count_all > 0)
                                    {{ $user->total_DTIPC_count_all }}
                                @else
                                    Tidak Ada Pelanggaran
                                @endif
                            </td>
                            <td>
                                <a href="/pelanggaran/dtipc-pelanggaran" class="btn btn-info btn-sm @if($user->total_DTIPC_count_all <= 0) disabled @endif">Detail</a>
                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($user->total_DTIPC_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>DTPCI (Datang Terlambat Pulang Cepat Ijin)</td>
                            <td>
                                @if($user->total_DTPCI_count_all > 0)
                                    {{ $user->total_DTPCI_count_all }}
                                @else
                                    Tidak Ada Pelanggaran
                                @endif
                            </td>
                            <td>
                                <a href="/pelanggaran/dtpci-pelanggaran" class="btn btn-info btn-sm @if($user->total_DTPCI_count_all <= 0) disabled @endif">Detail</a>
                                {{-- kirim peringatan --}}
                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($user->total_DTPCI_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Tidak Ada Pelanggaran</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


////// INFO PELANGGARAN INDEX

<div class="card">
    <div class="card-header">
        <h1 class="card-title text-center">Informasi Pelanggaran</h1>
        <p class="text-center">Badan Pengawasan Keuangan dan Pembangunan Jawa Tengah</p>
    </div>
    <div class="card-body">
        <div class="button-action" style="margin-bottom: 20px">
            {{-- DELETE --}}
            <!-- resources/views/users/index.blade.php atau halaman lainnya -->
            <form action="{{ route('pelanggaran.deleteAll') }}" method="post">
                @csrf
                @method('delete')
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                        IMPORT
                    </button>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus semua data user?')">Delete</button>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis</th>
                        <th>30 Hari</th>
                        <th>31 Hari</th>
                        <th>28 Hari</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pelanggaran_31 as $user)
                        @if($pelanggaran_28 && $pelanggaran_30)
                            <tr>
                                <td>1</td>
                                <td>PC (Pulang Cepat)</td>
                                <td>
                                    @if($user->total_PC_count_all_28 > 0)
                                        {{ $user->total_PC_count_all_28 }}
                                    @else
                                        Tidak Ada Pelanggaran
                                    @endif
                                </td>
                                <td>
                                    @if($user->total_PC_count_all_30 > 0)
                                        {{ $user->total_PC_count_all_30 }}
                                    @else
                                        Tidak Ada Pelanggaran
                                    @endif
                                </td>
                                <td>
                                    @if($user->total_PC_count_all > 0)
                                        {{ $user->total_PC_count_all }}
                                    @else
                                        Tidak Ada Pelanggaran
                                    @endif
                                </td>
                                <td>
                                    <a href="/pelanggaran/pc-pelanggaran" class="btn btn-info btn-sm @if($user->total_PC_count_all <= 0) disabled @endif">Detail</a>
                                    <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($user->total_PC_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                                </td>
                            </tr>
                        @endif

                        <tr>
                            <td>2</td>
                            <td>Alfa</td>
                            <td>
                                @if($user->total_A_count_all > 0)
                                    {{ $user->total_A_count_all }}
                                @else
                                    Tidak Ada Pelanggaran
                                @endif
                            </td>
                            <td>
                                <a href="/pelanggaran/alfa-pelanggaran" class="btn btn-info btn-sm @if($user->total_A_count_all <= 0) disabled @endif">Detail</a>
                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($user->total_A_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>DT (Datang Terlambat)</td>
                            <td>
                                @if($user->total_DT_count_all > 0)
                                    {{ $user->total_DT_count_all }}
                                @else
                                    Tidak Ada Pelanggaran
                                @endif
                            </td>
                            <td>
                                <a href="/pelanggaran/dt-pelanggaran" class="btn btn-info btn-sm @if($user->total_DT_count_all <= 0) disabled @endif">Detail</a>
                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($user->total_DT_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>DTPC (Datang Terlambat Pulang Cepat)</td>
                            <td>
                                @if($user->total_DTPC_count_all > 0)
                                    {{ $user->total_DTPC_count_all }}
                                @else
                                    Tidak Ada Pelanggaran
                                @endif
                            </td>
                            <td>
                                <a href="/pelanggaran/dtpc-pelanggaran" class="btn btn-info btn-sm @if($user->total_DTPC_count_all <= 0) disabled @endif">Detail</a>
                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($user->total_DTPC_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>DTIPC (Datang Terlambat Ijin Pulang Cepat)</td>
                            <td>
                                @if($user->total_DTIPC_count_all > 0)
                                    {{ $user->total_DTIPC_count_all }}
                                @else
                                    Tidak Ada Pelanggaran
                                @endif
                            </td>
                            <td>
                                <a href="/pelanggaran/dtipc-pelanggaran" class="btn btn-info btn-sm @if($user->total_DTIPC_count_all <= 0) disabled @endif">Detail</a>
                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($user->total_DTIPC_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>DTPCI (Datang Terlambat Pulang Cepat Ijin)</td>
                            <td>
                                @if($user->total_DTPCI_count_all > 0)
                                    {{ $user->total_DTPCI_count_all }}
                                @else
                                    Tidak Ada Pelanggaran
                                @endif
                            </td>
                            <td>
                                <a href="/pelanggaran/dtpci-pelanggaran" class="btn btn-info btn-sm @if($user->total_DTPCI_count_all <= 0) disabled @endif">Detail</a>
                                {{-- kirim peringatan --}}
                                <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($user->total_DTPCI_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Tidak Ada Pelanggaran</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
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






        <div class="card">
                        <div class="card-header">
                            <h1 class="card-title text-center">Informasi Pelanggaran</h1>
                            <p class="text-center">Badan Pengawasan Keuangan dan Pembangunan Jawa Tengah</p>
                        </div>
                        <div class="card-body">
                            <div class="button-action" style="margin-bottom: 20px">
                                {{-- DELETE --}}
                                <!-- resources/views/users/index.blade.php atau halaman lainnya -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                                    IMPORT
                                </button>
                                <form action="{{ route('pelanggaran.deleteAll') }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus semua data user?')">Delete</button>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis</th>
                                            <th>28 Hari</th>
                                            <th>30 Hari</th>
                                            <th>31 Hari</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $all_pelanggaran = collect();
                                            $all_pelanggaran = $all_pelanggaran->concat($pelanggaran_31);
                                            $all_pelanggaran = $all_pelanggaran->concat($pelanggaran_30);
                                            $all_pelanggaran = $all_pelanggaran->concat($pelanggaran_28);
                                        @endphp
                                            @foreach($all_pelanggaran as $pelanggaran)
                                            {{-- {{ dd($all_pelanggaran->toArray()) }} --}}

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
                                                        @if($pelanggaran->total_PC_count_all_30 > 0)
                                                            {{ $pelanggaran->total_PC_count_all_30 }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($pelanggaran->total_PC_count_all > 0)
                                                            {{ $pelanggaran->total_PC_count_all }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="/pelanggaran/pc-pelanggaran" class="btn btn-info btn-sm @if($pelanggaran->total_PC_count_all <= 0) disabled @endif">Detail</a>
                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_PC_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>2</td>
                                                    <td>Alfa</td>
                                                    <td>
                                                        @if($pelanggaran->total_A_count_all_28 > 0)
                                                            {{ $pelanggaran->total_A_count_all_28 }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($pelanggaran->total_A_count_all_30 > 0)
                                                            {{ $pelanggaran->total_A_count_all_30 }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($pelanggaran->total_A_count_all > 0)
                                                            {{ $pelanggaran->total_A_count_all }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="/pelanggaran/alfa-pelanggaran" class="btn btn-info btn-sm @if($pelanggaran->total_A_count_all <= 0) disabled @endif">Detail</a>
                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_A_count_all <= 0) disabled @endif">Kirim Peringatan</a>
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
                                                        @if($pelanggaran->total_DT_count_all_30 > 0)
                                                            {{ $pelanggaran->total_DT_count_all_30 }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($pelanggaran->total_DT_count_all > 0)
                                                            {{ $pelanggaran->total_DT_count_all }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="/pelanggaran/dt-pelanggaran" class="btn btn-info btn-sm @if($pelanggaran->total_DT_count_all <= 0) disabled @endif">Detail</a>
                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DT_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>DTPC (Datang Terlambat Pulang Cepat)</td>
                                                    <td>
                                                        @if($pelanggaran->total_DTPC_count_all_28 > 0)
                                                            {{ $pelanggaran->total_DTPC_count_all_28 }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($pelanggaran->total_DTPC_count_all_30 > 0)
                                                            {{ $pelanggaran->total_DTPC_count_all_30 }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($pelanggaran->total_DTPC_count_all > 0)
                                                            {{ $pelanggaran->total_DTPC_count_all }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="/pelanggaran/dtpc-pelanggaran" class="btn btn-info btn-sm @if($pelanggaran->total_DTPC_count_all <= 0) disabled @endif">Detail</a>
                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DTPC_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>DTIPC (Datang Terlambat Ijin Pulang Cepat)</td>
                                                    <td>
                                                        @if($pelanggaran->total_DTIPC_count_all_28 > 0)
                                                            {{ $pelanggaran->total_DTIPC_count_all_28 }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($pelanggaran->total_DTIPC_count_all_30 > 0)
                                                            {{ $pelanggaran->total_DTIPC_count_all_30 }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($pelanggaran->total_DTIPC_count_all > 0)
                                                            {{ $pelanggaran->total_DTIPC_count_all }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="/pelanggaran/dtipc-pelanggaran" class="btn btn-info btn-sm @if($pelanggaran->total_DTIPC_count_all <= 0) disabled @endif">Detail</a>
                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DTIPC_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>DTPCI (Datang Terlambat Pulang Cepat Ijin)</td>
                                                    <td>
                                                        @if($pelanggaran->total_DTPCI_count_all_28 > 0)
                                                            {{ $pelanggaran->total_DTPCI_count_all_28 }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($pelanggaran->total_DTPCI_count_all_30 > 0)
                                                            {{ $pelanggaran->total_DTPCI_count_all_30 }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($pelanggaran->total_DTPCI_count_all > 0)
                                                            {{ $pelanggaran->total_DTPCI_count_all }}
                                                        @else
                                                            Tidak Ada Pelanggaran
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="/pelanggaran/dtpci-pelanggaran" class="btn btn-info btn-sm @if($pelanggaran->total_DTPCI_count_all <= 0) disabled @endif">Detail</a>
                                                        {{-- kirim peringatan --}}
                                                        <a href="/pelanggaran/kirim-peringatan" class="btn btn-warning btn-sm @if($pelanggaran->total_DTPCI_count_all <= 0) disabled @endif">Kirim Peringatan</a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
