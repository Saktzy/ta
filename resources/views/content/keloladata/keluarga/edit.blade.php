<x-app>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Edit Data Kartu Keluarga
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('keluarga', $keluarga->id_kk) }}">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">No KK</label>
                                        <input type="text" name="no_kk" class="form-control"
                                            value="{{ $keluarga->no_kk }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kepala Keluarga</label>
                                        <input type="text" name="kepala" class="form-control"
                                            value="{{ $keluarga->kepala }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Desa</label>
                                        <input type="text" name="desa" class="form-control"
                                            value="{{ $keluarga->desa }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">RT</label>
                                        <input type="text" name="rt" class="form-control"
                                            value="{{ $keluarga->rt }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">RW</label>
                                        <input type="text" name="rw" class="form-control"
                                            value="{{ $keluarga->rw }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kecamatan</label>
                                        <input type="text" name="kec" class="form-control"
                                            value="{{ $keluarga->kec }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kabupaten</label>
                                        <input type="text" name="kab" class="form-control"
                                            value="{{ $keluarga->kab }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Provinsi</label>
                                        <input type="text" name="prov" class="form-control"
                                            value="{{ $keluarga->prov }}">
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
