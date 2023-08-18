@extends ('admin_daftar.template')
@section('content')
    <div class="content-wrapper">
        <div class="row">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Calon Peserta Didik</h4>

                        <form action="{{ route('bayar.update', $bayar->id_bayar) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>Kode Bayar</label>
                                <input name="kd_bayar" type="text" class="form-control" value="{{ $bayar->kd_bayar }}"
                                    readonly>
                            </div>

                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input name="nm" type="text" class="form-control" value="{{ $bayar->nm }}"
                                    readonly>
                            </div>

                            <div class="form-group">
                                <label>Nominal</label>
                                <input type="text" class="form-control" name="nominal" value="{{ $bayar->nominal }}">
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Ubah</button>
                            <button class="btn btn-light">Batal</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
