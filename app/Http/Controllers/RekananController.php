<?php

namespace App\Http\Controllers;

use App\Rekanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RekananController extends Controller
{
    public function index()
    {
        $data = Rekanan::all();
        return view('backend.rekanan.index', compact('data'));
    }

    public function add()
    {
        return view('backend.rekanan.add');
    }

    public function save(Request $req)
    {
        $s = new Rekanan;
        $s->nama = $req->nama;
        $s->alamat = $req->alamat;
        $s->telp = $req->telp;
        $s->pimpinan = $req->pimpinan;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/rekanan');
    }

    public function edit($id)
    {
        $data = Rekanan::find($id);
        return view('backend.rekanan.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $s = Rekanan::find($id);
        $s->nama = $req->nama;
        $s->alamat = $req->alamat;
        $s->telp = $req->telp;
        $s->pimpinan = $req->pimpinan;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/rekanan');
    }

    public function delete($id)
    {
        $delete = Rekanan::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
