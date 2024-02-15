@include('themes.head');
@include('themes.header');
@include('themes.sidemenu');

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Pegawai</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pegawai</li>
            <li class="breadcrumb-item active" aria-current="page">Edit Pegawai</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Pegawai</h4>
                        </div>
                        <div class="card-body">
                            @foreach($pegawai as $p)
                                <form action="/data_pegawai/update-pegawai" method="post">
                                @csrf
                                    <div class="form-group">
                                        <label for="nip">NIP</label>
                                        <input type="text" class="form-control" id="nip" name="nip" value="{{ $p->nip }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_pegawai">Nama Pegawai</label>
                                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{ $p->nama_pegawai }}" required>
                                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $p->id }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="golongan">Golongan</label>
                                        <input type="text" class="form-control" id="golongan" name="golongan" value="{{ $p->golongan }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $p->jabatan }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_wa">Nomor WhatsApp</label>
                                        <input type="text" class="form-control" id="nomor_wa" name="nomor_wa" value="{{ $p->nomor_wa }}" required>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->

@include('themes.footer');
