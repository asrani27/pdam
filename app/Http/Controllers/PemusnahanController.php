<?php

namespace App\Http\Controllers;

use App\Pemusnahan;
use App\Infrastruktur;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PemusnahanController extends Controller
{
    public function index()
    {
        $data = Pemusnahan::all();
        return view('backend.pemusnahan.index', compact('data'));
    }

    public function add()
    {
        $infrastruktur = Infrastruktur::get();
        return view('backend.pemusnahan.add', compact('infrastruktur'));
    }

    public function save(Request $req)
    {
        $s = new Pemusnahan;
        $s->infrastruktur_id = $req->infrastruktur_id;
        $s->tanggal = $req->tanggal;
        $s->nomor = $req->nomor;
        $s->petugas = $req->petugas;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/pemusnahan');
    }

    public function edit($id)
    {
        $infrastruktur = Infrastruktur::get();
        $data = Pemusnahan::find($id);
        return view('backend.pemusnahan.edit', compact('data', 'infrastruktur'));
    }

    public function update(Request $req, $id)
    {
        $s = Pemusnahan::find($id);
        $s->infrastruktur_id = $req->infrastruktur_id;
        $s->tanggal = $req->tanggal;
        $s->nomor = $req->nomor;
        $s->petugas = $req->petugas;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/pemusnahan');
    }

    public function delete($id)
    {
        $delete = Pemusnahan::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
