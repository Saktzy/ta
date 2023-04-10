<x-app>
    <div class="row">
        <div class="col-md-12 px-5 mt-5">
            <div class="card mt-2">
                <x-button.add url="keluarga/create" ket="Data Kartu Keluarga" />
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No KK</th>
                                <th>Kepala Keluarga</th>
                                <th>Alamat</th>
                                <th>Anggota KK</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_keluarga as $keluarga)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $keluarga->no_kk }}</td>
                                    <td>{{ $keluarga->kepala }}</td>
                                    <td>{{ $keluarga->desa }},RT:{{ $keluarga->rt }}/RW:{{ $keluarga->rw }}
                                    </td>
                                    <td>
                                        <a href="{{ url("keluarga/anggota/$keluarga->id_kk") }}" class="btn btn-dark"><i
                                                class="fa fa-users"></i></a>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('keluarga', $keluarga->id_kk) }}" class="btn btn-dark"><i
                                                    class="fa fa-info"></i></a>
                                            <x-button.edit url="keluarga" id="{{ $keluarga->id_kk }}" />
                                            <x-button.delete url="keluarga" id="{{ $keluarga->id_kk }}" />
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
</x-app>
