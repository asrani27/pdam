<?php

namespace App\Http\Controllers;

use App\Departemen;
use App\Teknisi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TeknisiController extends Controller
{
    public function index()
    {
        $data = Teknisi::all();
        return view('backend.teknisi.index', compact('data'));
    }

    public function add()
    {
        $departemen = Departemen::get();
        return view('backend.teknisi.add', compact('departemen'));
    }

    public function save(Request $req)
    {
        $s = new Teknisi;
        $s->nama = $req->nama;
        $s->alamat = $req->alamat;
        $s->telp = $req->telp;
        $s->departemen_id = $req->departemen_id;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/teknisi');
    }

    public function edit($id)
    {
        $data = Teknisi::find($id);
        $departemen = Departemen::get();
        return view('backend.teknisi.edit', compact('data', 'departemen'));
    }

    public function update(Request $req, $id)
    {
        $s = Teknisi::find($id);
        $s->nama = $req->nama;
        $s->alamat = $req->alamat;
        $s->telp = $req->telp;
        $s->departemen_id = $req->departemen_id;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/teknisi');
    }

    public function delete($id)
    {
        $delete = Teknisi::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
