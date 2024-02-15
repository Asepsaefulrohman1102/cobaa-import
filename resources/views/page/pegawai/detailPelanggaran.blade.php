@include('themes.head');
@include('themes.header');
@include('themes.sidemenu');

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Detail Pelanggaran</h1>
      <nav>
        <ol class="breadcrumb
        ">
          <li class="breadcrumb
            -item"><a href="/">Home</a></li>
            <li class="breadcrumb
            -item">Pegawai</li>
            <li class="breadcrumb
            -item active" aria-current="page">Detail Pelanggaran</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title
                            ">Detail Pelanggaran</h4>
                        </div>
                        <div class="card-body">
                            {{-- Detail Nama User --}}
                            <div class="form-group">
                                <label for="nama_pegawai">Nama Pegawai</label>
                                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="" required disabled>
                            </div>

                            {{-- {{ $pegawai->nama_pegawai }} --}}

                            {{-- Detail Nomor WhatsApp --}}
                            <div class="form-group">
                                <label for="nomor_wa">Nomor WhatsApp</label>
                                <input type="text" class="form-control" id="nomor_wa" name="nomor_wa" value="" required disabled>
                            </div>

                            {{-- {{ $pegawai->nomor_wa }} --}}

                            <div class="table-responsive mt-3">
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Pelanggaran</th>
                                            <th>Pelanggaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tanggal 21</td>
                                            <td>pc</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 22</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 23</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 24</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 25</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 26</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 27</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 28</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 29</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 30</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 31</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 1</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 2</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 3</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 4</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 5</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 6</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 7</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 8</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 9</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 10</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 11</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 12</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 13</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 14</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 15</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 16</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 17</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 18</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 19</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal 20</td>
                                        </tr>
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
