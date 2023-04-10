<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Detail Data Penduduk
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td style="width: 150px">
                                    <b>NIK</b>
                                </td>
                                <td>:
                                    {{ $penduduk->nik }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">
                                    <b>Nama</b>
                                </td>
                                <td>:
                                    {{ $penduduk->nama }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">
                                    <b>TTL</b>
                                </td>
                                <td>:
                                    {{ $penduduk->tempat_lh }}
                                    /
                                    {{ $penduduk->tgl_lh }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">
                                    <b>Jenis Kelamin</b>
                                </td>
                                <td>:
                                    {{ $penduduk->jekel }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">
                                    <b>Alamat</b>
                                </td>
                                <td>:
                                    {{ $penduduk->desa }}, RT
                                    {{ $penduduk->rt }}/ RW
                                    {{ $penduduk->rw }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">
                                    <b>Agama</b>
                                </td>
                                <td>:
                                    {{ $penduduk->agama }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">
                                    <b>Status Kawin</b>
                                </td>
                                <td>:
                                    {{ $penduduk->status }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">
                                    <b>Pekerjaan</b>
                                </td>
                                <td>:
                                    {{ $penduduk->pekerjaan }}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app>
