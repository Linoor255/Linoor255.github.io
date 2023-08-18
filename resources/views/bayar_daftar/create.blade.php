@extends ('admin_daftar.template')
@section ('content')
<div class="content-wrapper">
    <div class="row">

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Pembayaran Calon Peserta Didik</h4>
                  
                  <form action = "{{ route('daftar.store') }}" method = "POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                      <label>Kode Bayar</label>
                      <input name="kd_bayar" type="text" class="form-control" value="{{ 'P'.date('Y').$cd }}" readonly>
                    </div>
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="nm" placeholder="Masukkan nama lengkap">
                    </div>
                    <div class="form-group">
                      <label>Nominal</label>
                      <input type="text" class="form-control" name="nominal" placeholder="Masukkan kode bayar">
                    </div>
                    <div class="form-group">
                      <label>Bukti Bayar</label>
                      <input type="text" class="form-control" name="bukti_bayar" placeholder="Masukkan nama lengkap">
                    </div>
                    <div class="form-group">
                      <label>Diskon</label>
                      <input type="text" class="form-control" name="diskon" placeholder="Masukkan kode bayar">
                    </div>
                    <div class="form-group">
                      <label>Status</label>
                      <input type="text" class="form-control" name="Status" placeholder="Masukkan nama lengkap">
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Batal</button> 
                  </form>
                </div>
              </div>
</div>



    </div>
</div>
@endsection