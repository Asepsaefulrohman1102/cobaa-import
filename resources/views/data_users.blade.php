<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Data Users</title>
</head>
<body>

<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-12">
            @if($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @elseif($message =  Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    DATA USERS
                </div>


                <div class="card-body">
                    <div class="button-action" style="margin-bottom: 20px">

                        {{-- DELETE --}}
                        <!-- resources/views/users/index.blade.php atau halaman lainnya -->

                        <form action="{{ route('users.deleteAll') }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                                IMPORT
                            </button>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus semua data user?')">Delete All Users</button>
                            <a href="/users/pc-count" class="btn btn-info">Info Pelanggaran</a>
                        </form>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-bordered" id="table">
                            <thead>
                            <tr>
                                <th scope="col">NAMA LENGKAP</th>
                                <th scope="col">Total PC</th>
                                <th scope="col">Total DTI</th>
                                <th scope="col">Total A</th>
                                <th scope="col">Total DT</th>
                                <th scope="col">Total PCI</th>
                                <th scope="col">Total DTPC</th>
                                <th scope="col">Total DTIPC</th>
                                <th scope="col">Total DTPCI</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->total_PC_count ?: '-' }}</td>
                                    <td>{{ $user->total_DTI_count ?: '-' }}</td>
                                    <td>{{ $user->total_A_count ?: '-' }}</td>
                                    <td>{{ $user->total_DT_count ?: '-' }}</td>
                                    <td>{{ $user->total_PCI_count ?: '-' }}</td>
                                    <td>{{ $user->total_DTPC_count ?: '-' }}</td>
                                    <td>{{ $user->total_DTIPC_count ?: '-' }}</td>
                                    <td>{{ $user->total_DTPCI_count ?: '-' }}</td>
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

<!-- your_view.blade.php -->

{{-- @if(isset($users) && count($users) > 0)
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Total PC Count</th>
                <th>Total DT Count</th>
                <th>Total A Count</th>
                <th>Total DTPCI Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $row)
                <tr>
                    <td>{{ $row->name }}</td>

                    @php
                        $totalPC = $row->PC_count_tgl_21 + $row->PC_count_tgl_22 + $row->PC_count_tgl_31;
                        $totalDT = $row->DT_count_tgl_21 + $row->DT_count_tgl_22 + $row->DT_count_tgl_31;
                        $totalA = $row->A_count_tgl_21 + $row->A_count_tgl_22 + $row->A_count_tgl_31;
                        $totalDTPCI = $row->DTPCI_count_tgl_21 + $row->DTPCI_count_tgl_22 + $row->DTPCI_count_tgl_31;
                    @endphp

                    <td>{{ $totalPC > 0 ? $totalPC : '-' }}</td>
                    <td>{{ $totalDT > 0 ? $totalDT : '-' }}</td>
                    <td>{{ $totalA > 0 ? $totalA : '-' }}</td>
                    <td>{{ $totalDTPCI > 0 ? $totalDTPCI : '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No results found.</p>
@endif

 --}}

<!-- modal -->
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">IMPORT DATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>PILIH FILE</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                    <button type="submit" class="btn btn-success">IMPORT</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table').DataTable();
    } );
</script>
</body>
</html>
