<?php

namespace App\Http\Controllers;

use App\Hasil;
use App\Jadwal;
use App\Teknisi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HasilController extends Controller
{
    public function index()
    {
        $data = Hasil::all();
        return view('backend.hasil.index', compact('data'));
    }

    public function add()
    {
        $jadwal = Jadwal::where('status', '!=', 'selesai')->get();
        $teknisi = Teknisi::get();
        return view('backend.hasil.add', compact('jadwal', 'teknisi'));
    }

    public function save(Request $req)
    {
        Hasil::create($req->all());
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/hasil');
    }

    public function edit($id)
    {
        $teknisi = Teknisi::get();
        $jadwal = Jadwal::where('status', '!=', 'selesai')->get();
        $data = Hasil::find($id);
        return view('backend.hasil.edit', compact('data', 'teknisi', 'jadwal'));
    }

    public function update(Request $req, $id)
    {
        Hasil::find($id)->update($req->all());
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/hasil');
    }

    public function delete($id)
    {
        $delete = Hasil::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
