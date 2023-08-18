@extends('layouts.master_content')
@section('judul')
    <section class="client_section layout_padding">
      <div class="container">
        <h1 class="text-center text-warning">
            <b>Formulir Pendaftaran</b>
          </h1>
      </div>
    </section>
@endsection

@section('content')
    <section class="bg-transparent" style="padding: 10px 10px 10px 10px ">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/pesdik/daftar" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="card">
                    <div class="card-header p-2">
                        <h5><i class="nav-icon fas fa-user-graduate my-1 btn-sm-1"></i> Data Diri Calon Pendaftar</h5>
                    </div>
                    <div class="card-body bg-transparent">
                       <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <label for="#">Nama Lengkap <i>(sesuai akta kelahiran)</i> <b>*</b></label>
                                    <input value="{{old('nama_lengkap_pesdik')}}" name="nama_lengkap_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="nama_lengkap_pesdik"
                                    placeholder="Nama Lengkap Peserta Didik" required>
                                <label for="#">Jenis Kelamin <b>*</b></label>
                                    <select name="#" class="form-control my-1 mr-sm-1 bg-light" id="jenis_kelamin_pesdik"required>
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                <label for="nik_pesdik">Nomor Induk Kependudukan / NIK <i>(sesuai di KTP)</i> <b>*</b></label>
                                    <input value="{{old('nik_pesdik')}}" name="nik_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="nik_pesdik"
                                    placeholder="Nomor Induk Kependudukan / NIK" required>
                                
                                    
                                    <div class="form-group">

                                    <label for="#">Agama <b>*</b></label>
                                        <select name="agama" class="form-control my-1 mr-sm-1 bg-light" id="agama" onchange="changeAgama(this.value)" required>
    
                                            <option value="">-- Pilih Agama --</option>
                                        @php 
                                        $agama = [
                                            "Khatolik", "Islam", "Buddha", "Kristen"
                                            ];
                                        @endphp
                                        @foreach ($agama as $r)
                                        <option value="{{$r}}">{{$r}}</option>
    
                                        @endforeach

                                        </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="tempat_lahir_pesdik">Tempat Lahir <i>(sesuai di Akta Kelahiran)</i> <b>*</b></label>
                                    <input value="{{old('tempat_lahir_pesdik')}}" name="tempat_lahir_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="tempat_lahir_pesdik"
                                    placeholder="Tempat Lahir" required>
                                <label for="tanggal_lahir_pesdik">Tanggal Lahir <i>(sesuai di Ijazah/Akta Kelahiran)</i> <b>*</b></label>
                                    <input value="{{old('tanggal_lahir_pesdik')}}" name="tanggal_lahir_pesdik" type="date" class="form-control my-1 mr-sm-1 bg-light"
                                        id="tanggal_lahir_pesdik" required>
                                
                                <label for="no_hp_pesdik">Nomor HP Yang Aktif <b>*</b></label>
                                    <input value="{{old('no_hp_pesdik')}}" name="no_hp_pesdik" type="number" class="form-control my-1 mr-sm-1 bg-light" id="no_hp_pesdik"
                                    placeholder="Nomor HP Yang Aktif" required>
                                     <div id="form-baptis">

                                </div>
                            </div>
                       </div>
                    </div>

                </div>   
                <br>

                <!-- Identitas Ayah -->
                <div class="card">

                    <div class="card-header p-2">
                        <h5><i class="nav-icon fas fa-female"></i> Alamat Calon Pendaftar</h5>
                    </div>
                    <div class="card-body bg-transparent">
                       <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">

                                    <label for="#">Provinsi <b>*</b></label>
                                        <select name="#" class="form-control my-1 mr-sm-1 bg-light" id="jenis_kelamin_pesdik"required>
    
                                            <option value="">-- Pilih Provinsi --</option>
                                        @php 
                                        $provinces = [
                                            "Jakarta", "Jawa Barat", "Jawa Timur", "I"
                                            ];
                                        @endphp
                                        @foreach ($provinces as $provinsi)
                                        <option value="{{$provinsi}}">{{$provinsi}}</option>
    
                                        @endforeach
                                        </select>
                                        
                                </div>
                                


                                <label for="kabupaten_pesdik">Kabupaten/Kota <i>(sesuai alamat di Kartu Keluarga)</i> <b>*</b></label>
                                    <input value="{{old('kabupaten_pesdik')}}" name="prov" type="text" class="form-control my-1 mr-sm-1 bg-light" id="kabupaten_pesdik"
                                    placeholder="Kabupaten/Kota" required>
                                <label for="kecamatan_pesdik">Kecamatan <i>(sesuai alamat di Kartu Keluarga)</i> <b>*</b></label>
                                    <input value="{{old('kecamatan_pesdik')}}" name="kecamatan_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="kecamatan_pesdik"
                                    placeholder="Kecamatan" required>

                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="desa_pesdik">Desa/Kelurahan <i>(sesuai alamat di Kartu Keluarga)</i> <b>*</b></label>
                                    <input value="{{old('desa_pesdik')}}" name="desa_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="desa_pesdik"
                                    placeholder="Desa/Kelurahan" required>
                                <label for="alamat_pesdik">Alamat <i>(Tidak perlu lagi menulis provisi, kota, kecamatan & kelurahan)</i> <b>*</b></label>
                                    <input value="{{old('alamat_pesdik')}}" name="alamat_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="alamat_pesdik"
                                    placeholder="jalan, RT/RW, dusun" required>
                                <label for="alamat_pesdik">Kode Pos<b>*</b></label>
                                    <input value="{{old('alamat_pesdik')}}" name="alamat_pesdik" type="number" class="form-control my-1 mr-sm-1 bg-light" id="alamat_pesdik"
                                    placeholder="Masukkan kode pos" required>

                               
                            </div>
                            
                       </div>
                    </div>

                    
                </div>   
                <br>

                <!-- Identitas Ibu -->
                <div class="card">
                    <div class="card-header p-2">
                        <h5><i class="nav-icon fas fa-male"></i> Identitas Ayah</h5>
                    </div>
                    <div class="card-body bg-transparent">
                       <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <label for="nama_ayah">Nama Lengkap Ayah <i>(sesuai Akta Kelahiran Peserta Didik)</i> <b>*</b></label>
                                    <input value="{{old('nama_ayah')}}" name="nama_ayah" type="text" class="form-control my-1 mr-sm-1 bg-light" id="nama_ayah"
                                    placeholder="Nama Lengkap Ayah" required>
                                <label for="nik_ayah">Nomor Induk Kependudukan Ayah <i>(sesuai Kartu Keluarga)</i> <b>*</b></label>
                                    <input value="{{old('nik_ayah')}}" name="nik_ayah" type="text" class="form-control my-1 mr-sm-1 bg-light" id="nik_ayah"
                                    placeholder="Nomor Induk Kependudukan Ayah" required>
                                <label for="tahun_lahir_ayah">Tahun Lahir Ayah <i>(sesuai KTP Ayah)</i><b>*</b></label>
                                    <select name="tahun_lahir_ayah" class="form-control my-1 mr-sm-1 bg-light" id="tahun_lahir_ayah"required>
                                        <option value="">-- Pilih Tahun Lahir Ayah --</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                    </select>
                                <label for="pendidikan_ayah">Pendidikan Terakhir Ayah <b>*</b></label>
                                    <select name="pendidikan_ayah" class="form-control my-1 mr-sm-1 bg-light" id="pendidikan_ayah" required>
                                        <option value="">-- Pilih Pendidikan Ayah --</option>
                                        <option value="Tidak Tamat SD/Sederajat">Tidak Tamat SD/Sederajat</option>
                                        <option value="SD/Sederajat">SD/Sederajat</option>
                                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="pekerjaan_ayah">Pekerjaan Ayah <b>*</b></label>
                                    <select name="pekerjaan_ayah" class="form-control my-1 mr-sm-1 bg-light" id="pekerjaan_ayah" required>
                                        <option value="">-- Pilih Pekerjaan Ayah --</option>
                                        <option value="Petani/Pekebun">Petani/Pekebun</option>
                                        <option value="Nelayan">Nelayan</option>
                                        <option value="Pedagang">Pedagang</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                        <option value="Sopir">Sopir</option>
                                        <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                        <option value="Guru">Guru</option>
                                        <option value="Lainnya....">Lainnya....</option>
                                    </select>
                                <label for="penghasilan_ayah">Penghasilan Ayah Perbulan <b>*</b></label>
                                    <select name="penghasilan_ayah" class="form-control my-1 mr-sm-1 bg-light" id="penghasilan_ayah" required>
                                        <option value="">-- Pilih Data --</option>
                                        <option value="Tidak berpenghasilan">Tidak berpenghasilan</option>
                                        <option value="Kurang dari Rp.500.000,-">Kurang dari Rp.500.000,-</option>
                                        <option value="Rp.500.000,- s/d Rp.999.000,-">Rp.500.000,- s/d Rp.999.000,-</option>
                                        <option value="Rp.1.000.000,- s/d Rp.1.999.000,-">Rp.1.000.000,- s/d Rp.1.999.000,-</option>
                                        <option value="Rp.2.000.000,- s/d Rp.2.999.000,-">Rp.2.000.000,- s/d Rp.2.999.000,-</option>
                                        <option value="Lebih dari Rp.3.000.000,-">Lebih dari Rp.3.000.000,-</option>
                                    </select>
                                <label for="keterangan_ayah">Keterangan Ayah <b>*</b></label>
                                    <select name="keterangan_ayah" class="form-control my-1 mr-sm-1 bg-light" id="keterangan_ayah" required>
                                        <option value="">-- Pilih Data --</option>
                                        <option value="Masih Hidup">Masih Hidup</option>
                                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                                    </select>
                            </div>
                       </div>
                    </div>
                    <div class="card-footer p-2">
                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> DAFTAR</button>
                        <a class="btn btn-danger btn-sm" href="/" role="button"><i class="fas fa-undo"></i> BATAL</a>
                    </div>
                </div>
        </form>
    </section>

    <script>
        function changeAgama(value){

            let label = '<label for="form-baptis">Formulir Baptis<b>*</b></label>';
            let form = '<input type="file" name="form_baptis" class"form-control my-1 mr-sm-1 bg-light">';
            let baptis = document.getElementById('form-baptis');
            if(value == "Khatolik"){
                baptis.classList.add('py-2');
                baptis.innerHTML = label;
                baptis.innerHTML += form;

                form.classList.add('form-control-file');
            }else{
                baptis.innerHTML = "";
                baptis.classList.remove('py-2');
            }
        }
    </script>
@endsection
