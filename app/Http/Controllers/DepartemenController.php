<?php

namespace App\Http\Controllers;

use App\Departemen;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DepartemenController extends Controller
{
    public function index()
    {
        $data = Departemen::all();
        return view('backend.departemen.index', compact('data'));
    }

    public function add()
    {
        return view('backend.departemen.add');
    }

    public function save(Request $req)
    {
        $s = new Departemen;
        $s->nama = $req->nama;
        $s->pimpinan = $req->pimpinan;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/departemen');
    }

    public function edit($id)
    {
        $data = Departemen::find($id);
        return view('backend.departemen.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $s = Departemen::find($id);
        $s->nama = $req->nama;
        $s->pimpinan = $req->pimpinan;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/departemen');
    }

    public function delete($id)
    {
        $delete = Departemen::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
