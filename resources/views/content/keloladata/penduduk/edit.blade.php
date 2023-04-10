<x-app>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Tambah Data Penduduk
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('penduduk', $penduduk->id_pend) }}">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">NIK</label>
                                        <input type="text" name="nik" class="form-control"
                                            value="{{ $penduduk->nik }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama</label>
                                        <input type="text" name="nama" class="form-control"
                                            value="{{ $penduduk->nama }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tempat Lahir</label>
                                        <input type="text" name="tempat_lh" class="form-control"
                                            value="{{ $penduduk->tempat_lh }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lh" class="form-control"
                                            value="{{ $penduduk->tgl_lh }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control select2" style="width: 100%;" name="jekel"
                                            value="{{ $penduduk->jekel }}">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Desa</label>
                                        <input type="text" name="desa" class="form-control"
                                            value="{{ $penduduk->desa }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">RT</label>
                                        <input type="text" name="rt" class="form-control"
                                            value="{{ $penduduk->rt }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">RW</label>
                                        <input type="text" name="rw" class="form-control"
                                            value="{{ $penduduk->rw }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Agama</label>
                                        <input type="text" name="agama" class="form-control"
                                            value="{{ $penduduk->agama }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control select2" style="width: 100%;" name="status"
                                            value="{{ $penduduk->status }}">
                                            <option value="Kawin">Kawin</option>
                                            <option value="Belum Kawin">Belum Kawin</option>
                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                            <option value="Cerai Mati">Cerai Mati</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Pekerjaan</label>
                                        <input type="text" name="pekerjaan" class="form-control"
                                            value="{{ $penduduk->pekerjaan }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <x-button.save />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-app>
