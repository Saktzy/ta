<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Edit Data Kelahiran
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('kelahiran',$kelahiran->id_kelahiran) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <x-layout.form.edit type="text" name="nama_bayi" ket="Nama Bayi" value="{{ $kelahiran->nama_bayi }}"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <x-layout.form.edit type="date" name="tanggal_lahir" ket="Tanggal Lahir" value="{{$kelahiran->tanggal_lahir}}"/>
                            </div>
                            <div class="col-md-6">
                                <x-layout.form.edit type="text" name="tempat_lahir" ket="Tempat Lahir" value="{{$kelahiran->tempat_lahir}}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <x-layout.form.edit type="text" name="nama_ibu" ket="Nama Ibu" value="{{$kelahiran->nama_ibu}}"/>
                            </div>
                            <div class="col-md-6">
                                <x-layout.form.edit type="text" name="nama_ayah" ket="Nama Ayah" value="{{$kelahiran->nama_ayah}}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <x-layout.form.edit type="text" name="no_nik_ibu" ket="NIK Ibu" value="{{$kelahiran->no_nik_ibu}}"/>
                            </div>
                            <div class="col-md-6">
                                <x-layout.form.edit type="text" name="no_nik_ayah" ket="NIK Ayah" value="{{ $kelahiran->no_nik_ayah }}"/>
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
