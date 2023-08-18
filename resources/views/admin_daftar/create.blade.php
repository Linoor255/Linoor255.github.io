@extends ('admin_daftar.template')
@section ('content')
<div class="content-wrapper">
    <div class="row">

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Calon Peserta Didik</h4>
                  
                  <form action = "{{ route('daftar.store') }}" method = "POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label for="#">Kode Daftar</label>
                      <input name="kd_daftar" type="text" class="form-control" value="{{ $daftar->kd_daftar }}" readonly>
                    </div>
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="nm" placeholder="Masukkan nama lengkap">
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
                      <input type="date" class="form-control" name="tgl_lahir" >
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

                    <div id="surat_baptis" class="form-group"> </div>

                    <div class="form-group">
                      <label>Fotocopy Akte Kelahiran</label>
                      <div class="input-group col-xs-12">
                        <input type="file" class="form-control" name="akte">
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat">
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
                  
                  <form action = "{{ route('daftar.store') }}" method = "POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                      <label>Nama Ayah/Ibu</label>
                      <input type="text" class="form-control" name="nm_ortu" placeholder="Masukkan nomer kamar">
                    </div>
                    <div class="form-group">
                      <label for="pekerjaan_ayah">Pekerjaan Ayah/Ibu </label>
                          <select name="pekerjaan" class="form-control my-1 mr-sm-1 bg-light" id="pekerjaan_ayah" required>
                              <option value="">-- Pilih Pekerjaan Ayah/Ibu --</option>
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
                      <input type="number" class="form-control" name="nohp" >
                    </div>
                    
                    <div class="form-group">
                      <label>Fotocopy KTP</label>
                      <div class="input-group col-xs-12">
                        <input type="file" name="ktp"></input>
                      </div>
                    </div>
                    
                     <button type="submit" class="btn btn-primary mr-2">Daftar</button>
                     <button class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
</div>

    </div>
</div>

<script>
        function changeAgama(value){

            let label = '<label for="surat_baptis">Formulir Baptis<b>*</b></label>';
            let form = '<input type="file" name="surat_baptis" class"form-control my-1 mr-sm-1 bg-light">';
            let baptis = document.getElementById('surat_baptis');
            if(value == "Khatolik") {
                baptis.classList.add('py-2');
                baptis.innerHTML = label;
                baptis.innerHTML += form;
            
                form.classList.add('form-control-file');
            } 
            else{
                baptis.innerHTML = "";
                baptis.classList.remove('py-2');
            }
        }
    </script>
@endsection