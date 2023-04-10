<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Tambah Data Kelahiran
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('kelahiran') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <x-layout.form.input type="text" name="nama_bayi" ket="Nama Bayi"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <x-layout.form.input type="date" name="tanggal_lahir" ket="Tanggal Lahir"/>
                            </div>
                            <div class="col-md-6">
                                <x-layout.form.input type="text" name="tempat_lahir" ket="Tempat Lahir"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <x-layout.form.input type="text" name="nama_ibu" ket="Nama Ibu"/>
                            </div>
                            <div class="col-md-6">
                                <x-layout.form.input type="text" name="nama_ayah" ket="Nama Ayah"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <x-layout.form.input type="text" name="no_nik_ibu" ket="NIK Ibu"/>
                            </div>
                            <div class="col-md-6">
                                <x-layout.form.input type="text" name="no_nik_ayah" ket="NIK Ayah"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <x-button.save/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>
