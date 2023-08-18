@extends ('admin_daftar.template')
@section ('content')
<div class="content-wrapper">
    <div class="row">

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Pembayaran Calon Peserta Didik</h4>
                  
                  <form action = "{{ route('bayar.store') }}" method = "POST">
                    @csrf
                    
                    <div class="form-group">
                      <label>Kode Bayar</label>
                      <input name="kd_bayar" type="text" class="form-control" value="{{ 'B'.date('Y').$cd }}" readonly>
                    </div>
                    <div class="form-group">
                      <strong>Nama Calon Siswa : </strong>
                          <select name="nm" class="form-control" onchange="changeValue(this.value)">
                            <?php $jsArray = "var prdName = new Array();\n"; ?>
                          <option value="">Pilih Nama Calon Siswa</option>
                          @foreach ($daftars as $daftar)
                          <option value="<?= $daftar['nm']; ?>">{{$daftar->nm}}</option>
                            <?php $jsArray .= "prdName['" . $daftar['nm'] . "'] = {
                                              nm : '" . addslashes($daftar['nm']) ."',};\n"; ?>
                          @endforeach
                          </select>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Bayar</label>
                      <input name="tgl_bayar" type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Nominal</label>
                      <input type="text" class="form-control" name="nominal" placeholder="Masukkan nominal">
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button class="btn btn-light">Batal</button> 
                  </form>
                </div>
              </div>
</div>



    </div>
</div>
@endsection

<script type="text/javascript">
    <?php echo $jsArray; ?>
    function changeValue(x) {
      document.getElementById('nm').value = prdName[x].nm;
    }
</script>