<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
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
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                            IMPORT
                        </button>
                        <a href="" class="btn btn-primary btn-md">EXPORT</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table">
                            <thead>
                            <tr>
                                <th scope="col">NAMA LENGKAP</th>
                                <th scope="col">21</th>
                                <th scope="col">22</th>
                                <th scope="col">23</th>
                                <th scope="col">24</th>
                                <th scope="col">25</th>
                                <th scope="col">26</th>
                                <th scope="col">27</th>
                                <th scope="col">28</th>
                                <th scope="col">29</th>
                                <th scope="col">30</th>
                                <th scope="col">31</th>
                                <th scope="col">1</th>
                                <th scope="col">2</th>
                                <th scope="col">3</th>
                                <th scope="col">4</th>
                                <th scope="col">5</th>
                                <th scope="col">6</th>
                                <th scope="col">7</th>
                                <th scope="col">8</th>
                                <th scope="col">9</th>
                                <th scope="col">10</th>
                                <th scope="col">11</th>
                                <th scope="col">12</th>
                                <th scope="col">13</th>
                                <th scope="col">14</th>
                                <th scope="col">15</th>
                                <th scope="col">16</th>
                                <th scope="col">17</th>
                                <th scope="col">18</th>
                                <th scope="col">19</th>
                                <th scope="col">20</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->tgl_21 }}</td>
                                    <td>{{ $user->tgl_22 }}</td>
                                    <td>{{ $user->tgl_23 }}</td>
                                    <td>{{ $user->tgl_24 }}</td>
                                    <td>{{ $user->tgl_25 }}</td>
                                    <td>{{ $user->tgl_26 }}</td>
                                    <td>{{ $user->tgl_27 }}</td>
                                    <td>{{ $user->tgl_28 }}</td>
                                    <td>{{ $user->tgl_29 }}</td>
                                    <td>{{ $user->tgl_30 }}</td>
                                    <td>{{ $user->tgl_31 }}</td>
                                    <td>{{ $user->tgl_1 }}</td>
                                    <td>{{ $user->tgl_2 }}</td>
                                    <td>{{ $user->tgl_3 }}</td>
                                    <td>{{ $user->tgl_4 }}</td>
                                    <td>{{ $user->tgl_5 }}</td>
                                    <td>{{ $user->tgl_6 }}</td>
                                    <td>{{ $user->tgl_7 }}</td>
                                    <td>{{ $user->tgl_8 }}</td>
                                    <td>{{ $user->tgl_9 }}</td>
                                    <td>{{ $user->tgl_10 }}</td>
                                    <td>{{ $user->tgl_11 }}</td>
                                    <td>{{ $user->tgl_12 }}</td>
                                    <td>{{ $user->tgl_13 }}</td>
                                    <td>{{ $user->tgl_14 }}</td>
                                    <td>{{ $user->tgl_15 }}</td>
                                    <td>{{ $user->tgl_16 }}</td>
                                    <td>{{ $user->tgl_17 }}</td>
                                    <td>{{ $user->tgl_18 }}</td>
                                    <td>{{ $user->tgl_19 }}</td>
                                    <td>{{ $user->tgl_20 }}</td>

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
@if(isset($countsByCategory))
    @foreach($countsByCategory as $category => $counts)
        <p>{{ $category }}:</p>
        @foreach(range(21, 31) as $day)
            <p>Jumlah untuk tgl_{{ $day }}: {{ $counts["tgl_{$day}"] }}</p>
        @endforeach
    @endforeach
@else
    <p>Data tidak tersedia.</p>
@endif

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
