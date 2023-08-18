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
<label><font size="6"><u><center>Laporan Data Pembayaran</center></u></font></label><p>&nbsp;</p>
<table style="border: 1px solid gray;" width="100%" cellpadding="0" cellspacing="0">
<tr>
    <th style="border-right: 1px solid gray">No.</th>
    <th style="border-right: 1px solid gray">Kode Bayar</th>
    <th style="border-right: 1px solid gray">Nama</th>
    <th style="border-right: 1px solid gray">Tanggal Bayar</th>
    <th style="border-right: 1px solid gray">Nominal</th>
    <th style="border-right: 1px solid gray">Status</th>
</tr>

@foreach($bayars as $bayar) 
<tr>
 <td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3x 5px;">{{ ++$i}}</td>
 <td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3x 5px;">{{$bayar->kd_bayar}}</td>
 <td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3x 5px;">{{$bayar->nm}}</td>
 <td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3x 5px;">{{$bayar->tgl_bayar}}</td>
 <td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3x 5px;">Rp. {{ number_format($bayar->nominal) }}</td>
 <td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3x 5px;">
    @if ($bayar->status == 0)                         
        Belum Lunas
    @else 
        Lunas
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