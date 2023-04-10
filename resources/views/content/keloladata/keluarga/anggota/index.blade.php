<x-app>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Data Anggota Keluarga
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('anggota') }}">
                            @csrf
                            <input type="text" name="id_kk" value="{{ $keluarga->id_kk }}" hidden>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="control-label">No KK</label>
                                    <div class="form-group">
                                        <input name="no_kk" class="form-control" value="{{ $keluarga->no_kk }}"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kepala Keluarga</label>
                                        <input type="kepala" name="kepala" class="form-control"
                                            value="{{ $keluarga->kepala }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Alamat</label>
                                        <input type="text" name="desa" class="form-control"
                                            value="Desa{{ $keluarga->desa }}, RT:{{ $keluarga->rt }}, RW:{{ $keluarga->rw }}"
                                            readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Anggota</label>
                                        <input class="form-control" type="text" list="list_penduduk"
                                            style="width: 100%;" name="id_pend" onkeyup="cekId(this.value)">
                                        <datalist id=list_penduduk>
                                            @foreach ($list_penduduk as $penduduk)
                                                <option value="{{ $penduduk->id_pend }}">
                                                    {{ $penduduk->nik }},{{ $penduduk->nama }}
                                                </option>
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Hubungan</label>
                                        <select class="form-control select2" style="width: 100%;" name="hubungan">
                                            <option value="Kawin">Istri</option>
                                            <option value="Belum Kawin">Anak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <x-button.save />
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Anggota</th>
                                    <th>Hubungan Keluarga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_anggota as $anggota)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $anggota->penduduk->nama }}</td>
                                        <td>{{ $anggota->hubungan }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('anggota', $anggota->id_pend) }}"
                                                    class="btn btn-dark"><i class="fa fa-info"></i></a>
                                                <x-button.edit url="anggota" id="{{ $anggota->id_pend }}" />
                                                <x-button.delete url="anggota" id="{{ $anggota->id_pend }}" />
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
