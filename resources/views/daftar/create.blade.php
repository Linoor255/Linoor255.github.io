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
        <form action="{{ route('daftar.store') }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="card">
                    <div class="card-header p-2">
                        <h5><i class="nav-icon fas fa-user-graduate my-1 btn-sm-1"></i> Data Diri Calon Peserta Didik Baru</h5>
                    </div>
                    <div class="card-body bg-transparent">
                       <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <label for="#">Kode Daftar</label>
                                    <input name="kd_daftar" type="text" class="form-control my-1 mr-sm-1 bg-light"
                                    value="{{ 'P'.date('Y').$kd }}" readonly>

                                <label for="#">Nama Lengkap <i>(sesuai akta kelahiran)</i> <b>*</b></label>
                                    <input name="nm" type="text" class="form-control my-1 mr-sm-1 bg-light"
                                    placeholder="Masukkan nama lengkap" required>

                                <label for="#">Jenis Kelamin <b>*</b></label>
                                    <select name="gender" class="form-control my-1 mr-sm-1 bg-light" required>
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        @php $genders = ["Laki-Laki", "Perempuan"]; @endphp
                                        @foreach ($genders as $gender)
                                        <option value="{{$gender}}">{{$gender}}</option>
                                        @endforeach
                                    </select>

                                    <label>Tanggal Lahir <i>(sesuai di kartu keluarga/Akta Kelahiran)</i> <b>*</b></label>
                                    <input name="tgl_lahir" type="date" class="form-control my-1 mr-sm-1 bg-light" required>

                                    
                            </div>
                            
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Fotocopy Akte Kelahiran</label>
                                    <input type="file" name ="akte" required>
                                </div>

                                <div class="form-group">
                                    <label>Fotocopy Kartu Keluarga</label>
                                    <input type="file" name ="kk" required>
                                </div>

                                <div class="form-group">
                                        <label>Agama <b>*</b></label>
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
                                
                                     <div id="surat_baptis"> </div>

                                <label>Alamat</label>
                                    <input name="alamat" type="text" class="form-control my-1 mr-sm-1 bg-light" 
                                    placeholder="Masukkan alamat" required>
                            </div>
                       </div>
                    </div>

                </div>   
                <br>

                <!-- Identitas Ayah -->
                <!-- <div class="card">
                    <div class="card-header p-2">
                        <h5><i class="nav-icon fas fa-female"></i> Alamat Calon Pendaftar</h5>
                    </div>
                    <div class="card-body bg-transparent">
                       <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <!-- <div class="form-group">
                                    <label for="#">Provinsi <b>*</b></label>
                                        <select name="#" class="form-control my-1 mr-sm-1 bg-light" id="jenis_kelamin_pesdik"required>
                                            <option value="">-- Pilih Provinsi --</option>
                                                @php 
                                                    $provinces = [ "Jakarta", "Jawa Barat", "Jawa Timur", "I" ];
                                                @endphp
                                            @foreach ($provinces as $provinsi)
                                                <option value="{{$provinsi}}">{{$provinsi}}</option>
                                            @endforeach
                                        </select>
                                </div>             
                                
                            </div>
                       </div>
                    </div>  
                </div> -->

                <br>

                <!-- Identitas Ibu -->
                <div class="card">
                    <div class="card-header p-2">
                        <h5><i class="nav-icon fas fa-male"></i> Identitas Orang Tua</h5>
                    </div>
                    <div class="card-body bg-transparent">
                       <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <label>Nama Lengkap Ayah/Ibu</label>
                                    <input name="nm_ortu" type="text" class="form-control my-1 mr-sm-1 bg-light" 
                                    placeholder="Masukkan nama lengkap ayah/ibu" required>
                            
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
                                    <input name="nohp" type="text" class="form-control my-1 mr-sm-1 bg-light" 
                                    placeholder="Masukkan nomer hp ayah/ibu " required>
                                </div>
                                
                                <div class="form-group">
                                <label>Fotocopy KTP Ayah/Ibu</label>
                                    <input type="file" name ="ktp" required>
                                </div>

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
