<?php

namespace App\Http\Controllers;
use App\Models\Bayar;
use App\Models\Daftar;
use Illuminate\Http\Request;
use DB;

class BayarController extends Controller
{
    public function index()
    {
        $bayars = DB::table('bayar')
        ->join('daftar', 'daftar.id_daftar', '=', 'bayar.id_bayar')
        ->get();

        $sums = DB::table('bayar')
        -> select(DB::raw("SUM(total) AS total_all_sum"))
        -> get();

        return view ('bayar.index', compact('bayars', 'sums'))-> with('i');

        // $bayars = DB::table('bayar')
        // ->join('bayar', 'bayar.id_bayar', '=', 'bayar.produk')
        // ->join('sopir', 'sopir.id_sopir', '=', 'bayar.sopir')
        // ->get();


    }

    public function create()
    {
        $bayars = Bayar::all();
        $daftars = Daftar::all();

        $q = DB::table('bayar')->select(DB::raw('MAX(RIGHT(kd_bayar,3)) as kode'));
        $cd ="";
        if ($q->count()>0)
        {
            foreach ($q->get() as $k)
            {
                $tmp = ((int)$k->kode)+1;
                $cd  = sprintf("%03s", $tmp);
            }
        }
        else {
            $cd = "001";
        }

        // dd($cd);
        return view('bayar.create', compact('daftars', 'bayars', 'cd' ));


    }

    public function reportBayar()
    {
        $bayars = Bayar::latest()->paginate(20);
        return view ('bayar_daftar.report', compact('bayars'))-> with('i', (request()->input('page', 1)-1) * 20);
    }

    public function bayar_daftar() {
        $bayars = Bayar::all();
        return view('bayar_daftar.index', compact('bayars'));
    }

    public function cari(Request $request)
    {
        $dari = $request->input('dari');
        $sampai = $request->input('sampai');
        $query = "tgl_bayar BETWEEN '" . $dari . "' AND '" . $sampai. "' ";
        $bayars = DB::table('bayar')
        ->join('daftar', 'daftar.id_daftar', '=', 'bayar.id_bayar')
        ->get();

        return view('bayar_daftar.index',compact('bayars'))->with('i');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'kd_bayar' => 'required',
            'nm'       => 'required',
            'tgl_bayar'=> 'required',
            'nominal'  => 'required',
            //'status' => 'required',
        ]);

        Bayar::create([
            'kd_bayar' => $request->kd_bayar,
            'nm'       => $request->nm,
            'tgl_bayar'       => $request->tgl_bayar,
            'nominal'  => $request->nominal,
            'status'   => $request->status
        ]);
        return redirect('bayar_daftar')
                         -> with ('success', 'Data berhasil disimpan');
    }

    public function statusBayar($id_bayar) {
        $data = DB::table('bayar')->where('id_bayar', $id_bayar)->first();

        $status_sekarang = $data->status;

        if ($status_sekarang == 0) {
            $bayars = DB::table('bayar')->where('id_bayar', $id_bayar)->update(['status' =>1]);
        }
        else {
           $bayars = DB::table('bayar')->where('id_bayar', $id_bayar)->update(['status' =>0]);
        }


        return redirect('bayar_daftar')->with('Sukses', 'Status berhasil di ubah');
    }

    public function show($id_bayar)
    {
        $data = DB::table('bayar')->where('id_bayar', $id_bayar)->first();

        $status_sekarang = $data->status;

        if ($status_sekarang == 0) {
            $bayars = DB::table('bayar')->where('id_bayar', $id_bayar)->update(['status' =>0]);
        }
        else {
           $bayars = DB::table('bayar')->where('id_bayar', $id_bayar)->update(['status' =>1]);
        }
        Session::flash('Sukses', 'Status berhasil di ubah');

        return redirect('bayar_daftar', compact('bayars'));
    }

    public function form_bayar() {
        $bayars = Bayar::all();
        return view('bayar_daftar.create', compact('bayars'));
    }

    public function edit(Bayar $bayar)
    {

       // return view('bayar.edit', compact('bayar', 'daftar'));

        $daftar = Daftar::all();

        $q = DB::table('bayar')->select(DB::raw('MAX(RIGHT(kd_bayar,3)) as kode'));
        $cd ="";
        if ($q->count()>0)
        {
            foreach ($q->get() as $k)
            {
                $tmp = ((int)$k->kode)+1;
                $cd  = sprintf("%03s", $tmp);
            }
        }
        else {
            $cd = "001";
        }

        // dd($cd);
        return view('bayar.edit', compact('daftar', 'bayar', 'cd' ));


    }


    public function update(Request $request, Bayar $bayar)
    {
        $request->validate([
            'kd_bayar'      => 'required',
            'nm'          => 'required',
            'tgl_bayar'          => 'required',
            'nominal'       => 'required',
            // 'status'        => 'required',
        ]);

        Bayar::create([
            'kd_bayar'    => $request->kd_bayar,
            'nm'           => $request->nm,
            'tgl_bayar'           => $request->nm,
            'nominal'       => $request->nominal,
            // 'status'       => $request->status
        ]);
        $bayar->update($request->all());
        return redirect()->route('bayar.index')
                         -> with('success', 'Data berhasil diubah');
    }

    public function destroy(bayar $bayar)
    {
        $bayar->delete();
        return redirect('bayar_daftar')
                         -> with ('success', 'Data berhasil dihapus');
    }
}
