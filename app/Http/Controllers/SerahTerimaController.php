<?php

namespace App\Http\Controllers;

use App\SerahTerima;
use App\Infrastruktur;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SerahTerimaController extends Controller
{
    public function index()
    {
        $data = SerahTerima::all();
        return view('backend.serahterima.index', compact('data'));
    }

    public function add()
    {
        $infrastruktur = Infrastruktur::get();
        return view('backend.serahterima.add', compact('infrastruktur'));
    }

    public function save(Request $req)
    {
        $s = new SerahTerima;
        $s->infrastruktur_id = $req->infrastruktur_id;
        $s->tanggal = $req->tanggal;
        $s->nomor = $req->nomor;
        $s->penerima = $req->penerima;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/serahterima');
    }

    public function edit($id)
    {
        $infrastruktur = Infrastruktur::get();
        $data = SerahTerima::find($id);
        return view('backend.serahterima.edit', compact('data', 'infrastruktur'));
    }

    public function update(Request $req, $id)
    {
        $s = SerahTerima::find($id);
        $s->infrastruktur_id = $req->infrastruktur_id;
        $s->tanggal = $req->tanggal;
        $s->nomor = $req->nomor;
        $s->penerima = $req->penerima;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/serahterima');
    }

    public function delete($id)
    {
        $delete = SerahTerima::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
