<x-app>
    <div class="row">
        <div class="col-md-12 px-5 mt-5">
            <div class="card mt-2">
                <x-button.add url="penduduk/create" ket="Data Penduduk" />
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>JK</th>
                                <th>Desa</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_penduduk as $penduduk)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $penduduk->nik }}</td>
                                    <td>{{ $penduduk->nama }}</td>
                                    <td>{{ $penduduk->jekel }}</td>
                                    <td>{{ $penduduk->desa }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('penduduk', $penduduk->id_pend) }}" class="btn btn-dark"><i
                                                    class="fa fa-info"></i></a>
                                            <x-button.edit url="penduduk" id="{{ $penduduk->id_pend }}" />
                                            <x-button.delete url="penduduk" id="{{ $penduduk->id_pend }}" />
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
