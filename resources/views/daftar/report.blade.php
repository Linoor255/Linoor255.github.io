<body onload="javascript:window.print()" style="margin:0 auto; width:1000px">
<div style="margin-left:20px"></div>
<div style="margin: auto; top: 20%; left: 20%; display: block; position:
absolute; opacity: 0.05; font-size: 200pt; filter: alpha(opacity=20);">
<label><img src="{{ asset ('Assets/template/images/logo5.png') }}" alt=""></label>
</div>

<p>&nbsp;</p>
<img src=" {{ asset ('Assets/template/images/logo5.png') }}" style="width: 10%; float: left;">
<table width = "90%" cellpadding="0" cellspacing="0">
    <tr>
        <td><div align="center"><font size ="8"><b>YAYASAN SANTO DOMINIKUS</b></font></div></td>
    </tr>
    <tr>
        <td><div align="center"><font size="5">Jl. Ciremai Raya No 04, Kecapi, Harjamukti, Cirebon, Jawa Barat</font></div></td>
    </tr>
</table><br><hr>
<label><font size="6"><u><center>Laporan Data Pendaftar</center></u></font></label><p>&nbsp;</p>
<table style="border: 1px solid gray;" width="100%" cellpadding="0" cellspacing="0">
<tr>
    <th style="border-right: 1px solid gray">No.</th>
    <th style="border-right: 1px solid gray">Kode Daftar</th>
    <th style="border-right: 1px solid gray">Nama</th>
    <th style="border-right: 1px solid gray">Jenis Kelamin</th>
    <th style="border-right: 1px solid gray">Alamat</th>
    <th style="border-right: 1px solid gray">Agama</th>
    <th>Status</th>
</tr>

@foreach($daftars as $daftar) 
<tr>
 <td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3x 5px;">{{ ++$i}}</td>
 <td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3x 5px;">{{$daftar->kd_daftar}}</td>
 <td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3x 5px;">{{$daftar->nm}}</td>
 <td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3x 5px;">{{$daftar->gender}}</td>
 <td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3x 5px;">{{$daftar->alamat}}</td>
 <td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3x 5px;">{{$daftar->agama}}</td>
 <td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3x 5px;">
                                @if ($daftar->status == 0) 
                                
                                    Pending
                                
                                @else 
                                <a class="btn btn-success" href="{{ url('status/'.$daftar->id_daftar) }}">
                                    Diterima
                                </a>
                                @endif
                            
                           </td>
</tr> 
@endforeach
</table>
<p>&nbsp;</p>
<table align="right" cellpadding="0" cellspacing="0">
    <tr><td><center>Cirebon, <?php echo date("d F Y")?></center></td></tr>
    <tr><td><center>Ketua Yayasan Santo Dominikus</center>
       <p align="center"><img src="{{ asset ('Assets/assets/img/ttd2.png') }}" style="30%"></p>
       <center><u>Syamsudin, M.Pd.</u></center> 
       </td></tr>
</table>
</body>