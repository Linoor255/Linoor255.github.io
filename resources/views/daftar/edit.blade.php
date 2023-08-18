@extends ('admin_daftar.template')
@section ('content')
<div class="content-wrapper">
    <div class="row">

<div class="col-12 grid-margin stretch-card">
              <!-- Notifikasi menggunakan flash session data -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif
                
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Calon Peserta Didik</h4>
                    @if ($errors->any())
                    <div class="alert alert-error">
                      @foreach($errors->all() as $r)
                        {{ $r }}
                        @endforeach
                    </div>
                    @endif
                  
                  <form action = "{{ route('daftar.update', $daftar->id_daftar) }}" method = "POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                      <label>Kode Daftar</label>
                      <input name="kd_daftar" type="text" class="form-control"
                        value="{{ $daftar->kd_daftar }}" readonly>
                    </div> 

                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="nm" value="{{ $daftar->nm }}">
                    </div>
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <input type="text" class="form-control" name="gender" value="{{ $daftar->gender }}" readonly>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tgl_lahir" value="{{ $daftar->tgl_lahir }}" readonly>
                    </div>
                    <div class="form-group">
                      <label>Agama</label>
                      <input type="text" class="form-control" name="agama" value="{{ $daftar->agama }}" readonly>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" name="alamat" value="{{ $daftar->alamat }}">
                    </div>

                    <!-- <div class="form-group">
                      <label>Gambar</label>
                      <div class="input-group col-xs-12">
                        <input type="file" name="foto"></input>
                      </div>
                    </div> -->
                    
                    <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button> -->
                    <!-- <button class="btn btn-light">Cancel</button> -->
                  <!-- </form> -->
                </div>
              </div>
</div>

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Identitas Orang Tua</h4>
                  
                  <!-- <form action = "{{ route('daftar.update', $daftar->id_daftar) }}" method = "POST">
                    @csrf
                    @method('PUT') -->

                    <div class="form-group">
                      <label>Nama Ayah/Ibu</label>
                      <input type="text" class="form-control" name="nm_ortu" value="{{ $daftar->nm_ortu }}">
                    </div>
                    <div class="form-group">
                      <label for="pekerjaan_ayah">Pekerjaan Ayah/Ibu </label>
                      <input type="text" class="form-control" name="pekerjaan" value="{{ $daftar->pekerjaan }}" readonly>
                    </div>
                    <div class="form-group">
                      <label>Nomer HP Ayah/Ibu</label>
                      <input type="number" class="form-control" name="nohp" value="{{ $daftar->nohp }}">
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