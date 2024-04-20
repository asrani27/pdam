<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Infrastruktur;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JadwalController extends Controller
{
    public function index()
    {
        $data = Jadwal::all();
        return view('backend.jadwal.index', compact('data'));
    }

    public function add()
    {
        $infrastruktur = Infrastruktur::get();
        return view('backend.jadwal.add', compact('infrastruktur'));
    }

    public function save(Request $req)
    {
        $s = new Jadwal;
        $s->infrastruktur_id = $req->infrastruktur_id;
        $s->tanggal = $req->tanggal;
        $s->status = $req->status;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/jadwal');
    }

    public function edit($id)
    {
        $infrastruktur = Infrastruktur::get();
        $data = Jadwal::find($id);
        return view('backend.jadwal.edit', compact('data', 'infrastruktur'));
    }

    public function update(Request $req, $id)
    {
        $s = Jadwal::find($id);
        $s->infrastruktur_id = $req->infrastruktur_id;
        $s->tanggal = $req->tanggal;
        $s->status = $req->status;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/jadwal');
    }

    public function delete($id)
    {
        $delete = Jadwal::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
