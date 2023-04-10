<x-app>
    <div class="row">
        <div class="col-md-12 px-5 mt-5">
            <div class="card mt-2">
                <x-button.add url="kelahiran/create" ket="Data Kelahiran" />
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tgl Lahir</th>
                                <th>Keluarga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_kelahiran as $kelahiran)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kelahiran->nama_bayi }}</td>
                                    <td>{{ $kelahiran->tanggal_lahir }}</td>
                                    <td>{{ $kelahiran->no_nik_ayah }}-{{ $kelahiran->nama_ayah }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-button.edit url="kelahiran" id="{{ $kelahiran->id_kelahiran }}" />
                                            <x-button.delete url="kelahiran" id="{{ $kelahiran->id_kelahiran }}" />
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
