@extends ('admin_daftar.template')
@section ('content')
<div class="content-wrapper">
    <div class="row">

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Calon Peserta Didik</h4>
                  
                  <form action = "{{ route('daftar.update', $daftar->id_daftar) }}" method = "POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                      <label for="#">Kode Daftar</label>
                                    <input name="kd_daftar" type="text" class="form-control my-1 mr-sm-1 bg-light"
                                    value="{{ $daftar->kd_daftar }}" readonly>
                    </div>
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="nm" value="{{ $daftar->nm }}">
                    </div>
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select name="gender" class="form-control my-1 mr-sm-1 bg-light" required>
                              <option value="">-- Pilih Jenis Kelamin --</option>
                                  @php $genders = ["Laki-Laki", "Perempuan"]; @endphp
                                  @foreach ($genders as $gender)
                              <option value="{{$gender}}">{{$gender}}</option>
                                  @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tgl_lahir" value="{{ $daftar->tgl_lahir }}">
                    </div>
                    <div class="form-group">
                      <label>Agama</label>
                      <select name="agama" class="form-control my-1 mr-sm-1 bg-light" id="agama" onchange="changeAgama(this.value)" required>
                            <option value="">-- Pilih Agama --</option>
                                   @php 
                                    $agama = [ "Khatolik", "Islam", "Buddha", "Kristen"];
                                    @endphp
                          @foreach ($agama as $r)
                            <option value="{{$r}}">{{$r}}</option>
                          @endforeach
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
                  </form>
                </div>
              </div>
</div>

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Identitas Orang Tua</h4>
                  
                  <form action = "{{ route('daftar.update', $daftar->id_daftar) }}" method = "POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                      <label>Nama Ayah/Ibu</label>
                      <input type="text" class="form-control" name="nm_ortu" value="{{ $daftar->nm_ortu }}">
                    </div>
                    <div class="form-group">
                      <label for="pekerjaan_ayah">Pekerjaan Ayah/Ibu </label>
                          <select name="pekerjaan" class="form-control my-1 mr-sm-1 bg-light" id="pekerjaan_ayah" required>
                              <option value="{{$daftar->pekerjaan}}">-- Pilih Pekerjaan Ayah/Ibu --</option>
                                  @php 
                                    $pekerjaans = [ "Petani", "Nelayan", "Pedagang", "Wiraswasta", "Karyawan Swasta", "Supir",
                                    "Pegawai Negeri Sipil", "Guru" ];
                                  @endphp
                                  @foreach ($pekerjaans as $pekerjaan)
                              <option value="{{$pekerjaan}}">{{$pekerjaan}}</option>
                                  @endforeach
                          </select>
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