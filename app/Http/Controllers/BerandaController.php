<?php
namespace App\Http\Controllers;
use App\Models\Daftar;
use App\Models\Bayar;
use Illuminate\Http\Request;
use DB;

class BerandaController extends Controller
{
    public function index()
    {
        $daftars = Daftar:: select(DB::raw("kd_daftar"), 
                  DB::raw("nm"))
                  ->pluck('kd_daftar', 'nm');

                  $labels = $daftars->keys();
                  $data  = $daftars->values();

        // $peminjamans = Peminjaman:: select(DB::raw("COUNT(*) as count"), 
        //           DB::raw("MONTHNAME(tgl_pinjam) as bulan"))
        //           ->whereYear('tgl_pinjam', date('Y'))
        //           ->groupBy(DB::raw("Month(tgl_pinjam)"))
        //           ->pluck('count', 'bulan');

        //           $nama = $peminjamans->keys();
        //           $jumlah = $peminjamans->values();

        // $peminjamans = Peminjaman:: select(DB::raw("COUNT(*) as count"), 
        //           DB::raw("MONTHNAME(tgl_kembali) as bulan"))
        //           ->whereYear('tgl_kembali', date('Y'))
        //           ->groupBy(DB::raw("Month(tgl_kembali)"))
        //           ->pluck('count', 'bulan');

        //           $nm = $peminjamans->keys();
        //           $jmlh = $peminjamans->values();

                  return view('admin_daftar.welcome', compact('labels', 'data'));

        // $peminjamans = Peminjaman:: select(DB::raw("jumlah"), 
        //          DB::raw("tgl_pinjam"))
        //          ->pluck('jumlah', 'tgl_pinjam');
        //
        //          $lbl = $peminjamans->keys();
        //          $dt  = $peminjamans->values();
        //
        //          return view('welcome', compact('lbl', 'dt'));

        
        
    }
}