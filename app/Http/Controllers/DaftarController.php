<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class DaftarController extends Controller
{
    public function index()
    {
        $daftars = Daftar::all();

        return view('daftar.index', compact('daftars'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function perhitungan()
    {
        $daftars = Daftar::all();

        $counts = DB::table('daftar')
            ->select(DB::raw("COUNT(id_daftar) AS total_daftar"))
            ->get();

        $sums = DB::table('daftar')
            ->select(DB::raw("SUM(status) AS total_berhasil"))
            ->get();


        return view('admin_daftar.welcome', compact('daftars', 'counts', 'sums'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function create()
    {
        $daftars = Daftar::all();

        $q = DB::table('daftar')->select(DB::raw('MAX(RIGHT(kd_daftar,3)) as kode'));
        $kd = "";
        if ($q->count() > 0) {
            foreach ($q->get() as $k) {
                $tmp = ((int)$k->kode) + 1;
                $kd  = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "001";
        }
        return view('daftar.create', compact('daftars', 'kd'));
        // return view('admin_daftar.create', compact('daftars', 'kd'));
    }

    public function formAdmin(daftar $daftar)
    {
        $daftars = Daftar::all();

        $q = DB::table('daftar')->select(DB::raw('MAX(RIGHT(kd_daftar,3)) as kode'));
        $kd = "";
        if ($q->count() > 0) {
            foreach ($q->get() as $k) {
                $tmp = ((int)$k->kode) + 1;
                $kd  = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "001";
        }
        return view('daftar.create', compact('daftars', 'kd'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kd_daftar'    => 'required',
            'nm'           => 'required',
            'gender'       => 'required',
            'tgl_lahir'    => 'required',
            // 'surat_baptis' => 'required',
            'akte'         => 'required',
            'kk'         => 'required',
            'alamat'       => 'required',
            'nm_ortu'      => 'required',
            'pekerjaan'    => 'required',
            'nohp'         => 'required',
            'ktp'          => 'required',
            // 'status'       => 'required',

        ]);

        // dd($request->hasfile('surat_baptis'));
        //mengambil data file yg di upload
        // menyimpan data file yang diupload ke variabel $file
        if ($request->hasfile('surat_baptis')) {
            $file = $request->file('surat_baptis');
            $nama_file =  time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'Baptis';
            $file->move($tujuan_upload, $nama_file);
        }

        //$file=$request->file('surat_baptis');
        $file2 = $request->file('akte');
        $file3 = $request->file('ktp');
        $file4 = $request->file('kk');

        $nama_file2 = time() . "_" . $file2->getClientOriginalName();
        $nama_file3 = time() . "_" . $file3->getClientOriginalName();
        $nama_file4 = time() . "_" . $file4->getClientOriginalName();

        // Isi dengan nama folder tempat kemana file diupload
        $tujuan_upload2 = 'Akte';
        $tujuan_upload3 = 'KTP';
        $tujuan_upload4 = 'Kartu Keluarga';

        // $tujuan_upload2 = 'akte';
        $file2->move($tujuan_upload2, $nama_file2);
        // $tujuan_upload3 = 'ktp';
        $file3->move($tujuan_upload3, $nama_file3);

        // $tujuan_upload4 = 'kk';
        $file4->move($tujuan_upload4, $nama_file4);

        Daftar::create([
            'kd_daftar'    => $request->kd_daftar,
            'nm'           => $request->nm,
            'gender'       => $request->gender,
            'tgl_lahir'    => $request->tgl_lahir,
            'agama'        => $request->agama,
            'surat_baptis' => $nama_file ?? "none.jpg",
            'akte'         => $nama_file2,
            'kk'           => $nama_file4,
            'alamat'       => $request->alamat,
            'nm_ortu'      => $request->nm_ortu,
            'pekerjaan'    => $request->pekerjaan,
            'nohp'         => $request->nohp,
            'ktp'          => $nama_file3,
            'status'       => $request->status

        ]);
        return redirect()->route('daftar.index')
            ->with('Success', 'Data berhasil disimpan');
    }

    public function index_admin()
    {
        $daftars = Daftar::all();
        return view('admin_daftar.index', compact('daftars'));

        $url = route('index_admin');
    }

    public function welcome_admin()
    {
        $daftars = Daftar::all();
        return view('admin_daftar.welcome', compact('daftars'));
    }

    public function create_admin(daftar $daftar)
    {
        $daftars = Daftar::all();

        $q = DB::table('daftar')->select(DB::raw('MAX(RIGHT(kd_daftar,3)) as kode'));
        $kd = "";
        if ($q->count() > 0) {
            foreach ($q->get() as $k) {
                $tmp = ((int)$k->kode) + 1;
                $kd  = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "001";
        }
        return view('admin_daftar.create', compact('daftars', 'kd'));
        // return view('admin_daftar.create', compact('daftars'));
    }

    public function reportDaftar()
    {
        $daftars = Daftar::latest()->paginate(20);
        return view('daftar.report', compact('daftars'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function daftar_alur()
    {
        $daftars = Daftar::all();
        return view('daftar.alur', compact('daftars'));

        $url = route('daftar_alur');
    }

    public function daftar_infokegiatan()
    {
        $daftars = Daftar::all();
        return view('daftar.infokegiatan', compact('daftars'));

        $url = route('daftar_infokegiatan');
    }
    public function daftar_index()
    {
        $daftars = Daftar::all();
        return view('daftar.index', compact('daftars'));

        $url = route('daftar_index');
    }

    public function status($id_daftar)
    {
        $data = DB::table('daftar')->where('id_daftar', $id_daftar)->first();

        $status_sekarang = $data->status;

        if ($status_sekarang == 0) {
            $daftars = DB::table('daftar')->where('id_daftar', $id_daftar)->update(['status' => 1]);
        } else {
            $daftars = DB::table('daftar')->where('id_daftar', $id_daftar)->update(['status' => 1]);
        }


        return redirect('admin_daftar')->with('Sukses', 'Status berhasil di ubah');
    }

    public function show($id_daftar)
    {
        $data = DB::table('daftar')->where('id_daftar', $id_daftar)->first();

        $status_sekarang = $data->status;

        if ($status_sekarang == 1) {
            DB::table('daftar')->where('id_daftar', $id_daftar)->update(['status' => 0]);
        } else {
            DB::table('daftar')->where('id_daftar', $id_daftar)->update(['status' => 1]);
        }
        Session::flash('Sukses', 'Status berhasil di ubah');

        return redirect('daftar_index', compact('daftars'));
    }

    public function edit(Daftar $daftar)
    {
        return view('daftar.edit', compact('daftar'));
        // $daftars = Daftar::all();

        // $q = DB::table('daftar')->select(DB::raw('MAX(RIGHT(kd_daftar,3)) as kode'));
        // $kd ="";
        // if ($q->count()>0)
        // {
        //     foreach ($q->get() as $k)
        //     {
        //         $tmp = ((int)$k->kode)+1;
        //         $kd  = sprintf("%03s", $tmp);
        //     }
        // }
        // else {
        //     $kd = "001";
        // }
        // return view('daftar.create', compact('daftars', 'kd'));
    }



    public function update(Request $request, Daftar $daftar)
    {
        // dd($request->all());
        $request->validate([
            'nm'        => 'required',
            'gender'    => 'required',
            'agama'     => 'required',
            'nohp'      => 'required',
            'nm_ortu'   => 'required',
            'alamat'    => 'required',
            'pekerjaan' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $daftar->update($request->all());
        // return redirect()->route('daftar.index') ->with('success', 'Data berhasil diubah');
        return redirect('admin_daftar')->with('success', 'Data berhasil diubah');
    }

    public function destroy(Daftar $daftar)
    {
        File::delete('Baptis/' . $daftar->nama_file);
        File::delete('Akte/' . $daftar->nama_file2);
        File::delete('KTP/' . $daftar->nama_file3);

        $daftar->delete();
        return redirect('admin_daftar')
            ->with('success', 'Data berhasil dihapus');
    }
}
