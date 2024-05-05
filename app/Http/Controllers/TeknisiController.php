<?php

namespace App\Http\Controllers;

use App\Departemen;
use App\Rekanan;
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
        $rekanan = Rekanan::get();
        return view('backend.teknisi.add', compact('rekanan'));
    }

    public function save(Request $req)
    {
        $s = new Teknisi;
        $s->nama = $req->nama;
        $s->alamat = $req->alamat;
        $s->telp = $req->telp;
        $s->rekanan_id = $req->rekanan_id;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/teknisi');
    }

    public function edit($id)
    {
        $data = Teknisi::find($id);
        $rekanan = Rekanan::get();
        return view('backend.teknisi.edit', compact('data', 'rekanan'));
    }

    public function update(Request $req, $id)
    {
        $s = Teknisi::find($id);
        $s->nama = $req->nama;
        $s->alamat = $req->alamat;
        $s->telp = $req->telp;
        $s->rekanan_id = $req->rekanan_id;
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
