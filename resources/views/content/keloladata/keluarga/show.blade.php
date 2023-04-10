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
                                    <b>No.KK</b>
                                </td>
                                <td>:
                                    {{ $keluarga->no_kk }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">
                                    <b>Kepala Keluarga</b>
                                </td>
                                <td>:
                                    {{ $keluarga->kepala }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">
                                    <b>Alamat</b>
                                </td>
                                <td>:
                                    {{ $keluarga->desa }}, RT
                                    {{ $keluarga->rt }}/ RW
                                    {{ $keluarga->rw }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">
                                    <b>Kecamatan</b>
                                </td>
                                <td>:
                                    {{ $keluarga->kec }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">
                                    <b>Kabupaten</b>
                                </td>
                                <td>:
                                    {{ $keluarga->kab }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">
                                    <b>Provinsi</b>
                                </td>
                                <td>:
                                    {{ $keluarga->prov }}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app>
