<?php

namespace App\Http\Controllers;

use App\Pengguna;
use App\Departemen;
use App\Infrastruktur;
use App\Insfrastruktur;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InfrastrukturController extends Controller
{
    public function index()
    {
        $data = Infrastruktur::all();
        return view('backend.infrastruktur.index', compact('data'));
    }

    public function add()
    {
        $departemen = Departemen::get();
        $pengguna = Pengguna::get();
        return view('backend.infrastruktur.add', compact('departemen', 'pengguna'));
    }

    public function save(Request $req)
    {
        if (Infrastruktur::where('nomor_seri', $req->nomor_seri)->first() == null) {
            Infrastruktur::create($req->all());
            Alert::success('Data Berhasil Di Simpan', 'Info Message');
            return redirect('/infrastruktur');
        } else {
            Alert::info('Nomor Seri sudah ada', 'Info Message');
            return back();
        }
    }

    public function edit($id)
    {
        $departemen = Departemen::get();
        $data = Infrastruktur::find($id);
        $pengguna = Pengguna::get();
        return view('backend.infrastruktur.edit', compact('data', 'departemen', 'pengguna'));
    }

    public function update(Request $req, $id)
    {
        Infrastruktur::find($id)->update($req->all());
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/infrastruktur');
    }

    public function delete($id)
    {
        $delete = Infrastruktur::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
