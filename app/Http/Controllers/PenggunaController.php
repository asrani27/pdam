<?php

namespace App\Http\Controllers;

use App\Pengguna;
use App\Departemen;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = Pengguna::all();
        return view('backend.pengguna.index', compact('data'));
    }

    public function add()
    {
        $departemen = Departemen::get();
        return view('backend.pengguna.add', compact('departemen'));
    }

    public function save(Request $req)
    {
        $s = new Pengguna;
        $s->nama = $req->nama;
        $s->alamat = $req->alamat;
        $s->telp = $req->telp;
        $s->departemen_id = $req->departemen_id;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/pengguna');
    }

    public function edit($id)
    {
        $departemen = Departemen::get();
        $data = Pengguna::find($id);
        return view('backend.pengguna.edit', compact('data', 'departemen'));
    }

    public function update(Request $req, $id)
    {
        $s = Pengguna::find($id);
        $s->nama = $req->nama;
        $s->alamat = $req->alamat;
        $s->telp = $req->telp;
        $s->departemen_id = $req->departemen_id;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/pengguna');
    }

    public function delete($id)
    {
        $delete = Pengguna::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
